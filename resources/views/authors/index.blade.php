@extends('templates.index')

@section('title')
    Recent Authors
@stop

@section('content')
@include('authors._index', [
    'authors' => \App\Models\Author::orderBy('created_at', 'DESC')->get(),
])
@stop