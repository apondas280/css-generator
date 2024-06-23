<?php

namespace App\Http\Controllers;

use App\Models\ColorSet;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

class ColorSetController extends Controller
{
    public function index()
    {
        return view('editor.index');
    }

    public function edit()
    {
        $variables = ColorSet::get();
        $codes     = [];
        foreach ($variables as $variable) {
            $codes[] = $variable->variable . ':' . $variable->main . ';';
        }
        $page_data['codes'] = $codes;
        return view('editor.edit', $page_data);
    }

    public function store(Request $request)
    {
        $column = Str::slug($request->palette);
        if (! Schema::hasColumn('color_sets', $column)) {
            Schema::table('color_sets', function (Blueprint $table) use ($column) {
                $table->string($column)->nullable();
            });
        }
        return redirect()->route('color.set.index');
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

        return redirect()->route('color.set.index');
    }
    public function update(Request $request)
    {
        $colors = $request->all();
        unset($colors['_token'], $colors['mode']);
        foreach ($colors as $key => $color) {
            ColorSet::where('variable', $key)->update([$request->mode => $color]);
        }
        return redirect()->back();
    }

    public function generate()
    {
        $variables = ColorSet::get();
        $codes     = [];
        foreach ($variables as $variable) {
            $codes[] = $variable->variable . ':' . $variable->main . ';';
        }

        $filename = 'palette-' . time() . '.css';
        $path     = storage_path('app/public/' . $filename);

        File::put($path, implode('', $codes));
        return Response::download($path, $filename)->deleteFileAfterSend(true);
    }
}
