@extends('templates.index')

@section('title')
    Recent Books
@stop

@section('content')
    @include('books._index', [
        'books' => \App\Models\Book::orderBy('created_at', 'DESC')->get()
    ])
@stop
