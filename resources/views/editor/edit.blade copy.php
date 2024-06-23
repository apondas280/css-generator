@extends('layouts.default')
@section('content')
@php
$colors = App\Models\ColorSet::get();
$mode = request()->query('mode') ?? 'main';
@endphp
<form action="{{ route('color.set.store') }}" method="post">@csrf
    <input type="text" class="form-control" name="mode">
    <textarea name="palette" class="form-control"></textarea>

    {{-- <div class="row">
                        @foreach ($colors as $color)
                            <div class="col-6 col-sm-3 col-md-3">
                                <div class="mb-3">
                                    <label for="{{ $color->variable }}"
    class="form-label">{{ $color->variable }}</label>
    <input type="color" name="{{ $color->variable }}" id="{{ $color->variable }}" class="form-control" />
    </div>
    </div>
    @endforeach
    </div> --}}
    <input type="submit" class="btn btn-primary">
</form>
@endsection
