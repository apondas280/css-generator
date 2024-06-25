<?php

namespace App\Http\Controllers;

use App\Models\ColorSet;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

class ColorSetController extends Controller
{
    public function index()
    {
        $variables = ColorSet::get();
        $codes     = [];
        foreach ($variables as $variable) {
            $codes[] = $variable->variable . ':' . $variable->main . ';';
        }
        $page_data['codes'] = $codes;
        return view('editor.index', $page_data);
    }

    public function edit()
    {
        return view('editor.edit');
    }

    public function store(Request $request)
    {
        $column = Str::slug($request->palette);
        DB::statement("ALTER TABLE color_sets ADD COLUMN $column VARCHAR(255)");
        DB::statement("UPDATE color_sets SET $column = main");
        return redirect()->route('palette');
    }

    public function variable_update(Request $request)
    {
        $cleanPalette = preg_replace('/\s+/', '', $request->variables);
        $variables    = explode(';', $cleanPalette);
        array_pop($variables);

        foreach ($variables as $variable) {
            $code         = explode(':', $variable);
            $old_variable = ColorSet::where('variable', $code[0])->exists();

            if (! $old_variable) {
                ColorSet::insert(['variable' => $code[0], 'main' => $code[1]]);
            } else {
                ColorSet::where('variable', $code[0])->update(['main' => $code[1]]);
            }
        }
        return redirect()->route('palette');
    }
    public function update(Request $request)
    {
        $colors = $request->all();
        unset($colors['_token'], $colors['mode']);
        foreach ($colors as $key => $color) {
            ColorSet::where('variable', $key)->update([$request->mode => $color]);
        }
        self::generate($request->mode);
        return redirect()->back();
    }

    public static function generate($palette)
    {
        $variables = ColorSet::get();
        $codes     = ".{$palette}:root{\n";
        foreach ($variables as $variable) {
            $codes .= "{$variable->variable}:{$variable->$palette};\n";
        }
        $codes .= '}';

        $css_dir = public_path('assets/css/variables');
        if (! File::isDirectory($css_dir)) {
            File::makeDirectory($css_dir, 0777, true);
        }
        $css_file = "$css_dir/$palette.css";
        File::put($css_file, $codes);

        $blade_file = resource_path('views/layouts/generated_css.blade.php');
        if (! File::exists($blade_file)) {
            File::put($blade_file, '');
        }
        $cssLink = "<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/css/variables/$palette.css') }}\">\n";
        if (File::exists($blade_file) && ! strpos(File::get($blade_file), $cssLink)) {
            File::append($blade_file, $cssLink);
        }
    }
}
