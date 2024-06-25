@extends('editor.layout')
@section('content')
    @php
        $colors = App\Models\ColorSet::get();
        $mode = request()->query('mode') ?? 'main';
    @endphp
    <form action="{{ route('palette.update') }}" class="mb-5" method="post">@csrf
        <input type="hidden" name="mode" value="{{ $mode }}">
        <div class="row">
            @foreach ($colors as $color)
                <div class="col-6 col-sm-4">
                    <div class="row g-1">
                        <div class="col-md-10 mb-3">
                            <input type="text" class="form-control" name="variable[]" value="{{ $color->variable }}">
                            <input type="color" name="{{ $color->variable }}" id="{{ $color->variable }}"
                                class="form-control" value="{{ $color->$mode }}" />
                        </div>

                        <div class="col-md-2">
                            <a href="#" class="btn btn-primary"><i class="fi fi-rr-trash"></i></a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <input type="submit" value="Update" class="btn btn-primary">
    </form>
@endsection
