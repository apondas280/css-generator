@php
    $columns = Schema::getColumnListing('color_sets');
    $palettes = array_diff($columns, ['id', 'variable', 'created_at', 'updated_at']);
@endphp

<form action="{{ route('color.set.store') }}" method="post" class="mb-2">
    @csrf
    <div class="row g-2">
        <div class="col-md-9">
            <input type="text" class="form-control" name="palette" placeholder="Add new palette">
        </div>
        <div class="col-md-3">
            <input type="submit" class="btn btn-primary w-100" value="+">
        </div>
    </div>
</form>
<a href="{{ route('color.set.edit') }}" class="btn btn-primary text-capitalize w-100 d-block mb-2">Update variable</a>
@foreach ($palettes as $palette)
    <a href="{{ route('color.set.index', ['mode' => $palette]) }}"
        class="btn btn-primary text-capitalize w-100 d-block mb-2">{{ str_replace('-', ' ', $palette) }}</a>
@endforeach
