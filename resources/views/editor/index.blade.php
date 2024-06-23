@extends('layouts.default')

@section('content')
    @php
        $colors = App\Models\ColorSet::get();
        $mode = request()->query('mode') ?? 'main';
    @endphp
    <form action="{{ route('color.set.update') }}" method="post">@csrf
        <input type="hidden" name="mode" value="{{ $mode }}">
        <div class="row">
            @foreach ($colors as $color)
                <div class="col-6 col-sm-3 col-md-3">
                    <div class="mb-3">
                        <label for="{{ $color->variable }}" class="form-label">{{ $color->variable }}</label>
                        <input type="color" name="{{ $color->variable }}" id="{{ $color->variable }}" class="form-control"
                            value="{{ $color->$mode }}" />
                    </div>
                </div>
            @endforeach
        </div>
        <input type="submit" value="Update" class="btn btn-primary">
        <a href="{{ route('generate') }}" class="btn btn-primary">Genrate Css</a>
    </form>
@endsection
