@extends('layout.index')

@section('page-title', 'Welcome')

@section('main-content')
    <h1>MovieFix</h1>
    @foreach ($all_movie as $elem)
        <div>{{$elem['title']}}</div>
    @endforeach
@endsection
