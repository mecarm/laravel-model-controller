@extends('layout.index')

@section('page-title', 'Welcome')

@section('main-content')
    <h1>MovieFix</h1>
    <div style="display: flex; flex-wrap: wrap; justify-content:center;">
    @foreach ($all_movie as $elem)
            <div style="background-color: antiquewhite; width: calc((100% / 5) - 20px); margin: 10px; padding: 20px; border-radius: 20px;">
                <h2>{{$elem['title']}}</h2>
                <h5>Titolo originale: {{$elem['original_title']}}</h5>
                <span>Voto: {{$elem['vote']}}</span>
            </div>
    @endforeach
    </div>
@endsection
