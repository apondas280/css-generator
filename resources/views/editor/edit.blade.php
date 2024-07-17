@extends('editor.layout')
@section('content')
    @php
        $colors = App\Models\ColorSet::get();
        $mode = request()->query('mode') ?? 'main';
    @endphp

    <style>
        .pallete-color {
            width: 100%;
            height: 100%;
        }
    </style>

    <form action="{{ route('palette.update') }}" class="mb-5" method="post">@csrf
        <input type="hidden" name="mode" value="{{ $mode }}">
        <div class="row row-cols-md-2 row-cols-lg-3">
            @foreach ($colors as $color)
                <div class="col border p-3">
                    <div class="row g-1">
                        <div class="col-md-12">
                            <input type="hidden" class="form-control mb-3" name="variable[]"
                                value="{{ $color->variable }}">
                            <p>{{ $color->variable }}</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-8">
                            <input type="text" name="{{ $color->variable }}" id="{{ $color->variable }}"
                                class="form-control" value="{{ $color->$mode }}" />
                        </div>
                        <div class="col-md-4">
                            <div class="pallete-color" style="background: {{ $color->$mode }}"></div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <input type="submit" value="Update" class="btn btn-primary">
    </form>
@endsection

<script src=https://code.jquery.com/jquery-3.5.1.min.js></script>
<script>
    $(document).ready(function() {
        $('input').on('keyup', function() {
            let $this = $(this);
            let value = $this.val();
            updateColor($this, value);
        });

        function updateColor($elem, val) {
            $elem.closest('.row').find('.pallete-color').css('background', val);
        }
    });
</script>
