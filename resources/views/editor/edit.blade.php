@extends('layouts.default')
@section('content')
    <form action="{{ route('variable.update') }}" method="post">@csrf
        <textarea name="variables" class="form-control mb-3" rows="8">
@foreach ($codes as $code)
{{ preg_replace('/\s+/', '', $code) }}
@endforeach
</textarea>
        <input type="submit" class="btn btn-primary">
    </form>
@endsection
