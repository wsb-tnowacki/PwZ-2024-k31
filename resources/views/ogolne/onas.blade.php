@extends('layout.szablon')
@section('tytul')
    O nas
@endsection
@section('podtytul')
    Strona o nas
@endsection
@section('tresc')
    <div>Treść strony o nas <br> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Culpa natus ullam aspernatur aperiam, eligendi, distinctio dignissimos enim aliquam voluptatibus eveniet modi commodi amet quo. Minus pariatur exercitationem nesciunt voluptate maiores?</div>
    <ol>
        @foreach ($zadania as $zadanie)
            <li>{{ $zadanie }}</li>
        @endforeach
    </ol>

@endsection