@extends('admin.index')

@section('content')
@foreach ($posts as $post)
{{ $post -> name }}





@endforeach

@endsection