@extends('szablon')
@section('tytul')
    O nas
@endsection
@section('podtytul')
    Strona o nas
@endsection
@section('tresc')
    <div>Treść strony o nas <br> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Culpa natus ullam aspernatur aperiam, eligendi, distinctio dignissimos enim aliquam voluptatibus eveniet modi commodi amet quo. Minus pariatur exercitationem nesciunt voluptate maiores?</div>
    <ol>
        <?php foreach ($zadania ?? '' as $zadanie) : ?>
        <li><?= $zadanie ?></li>
        <?php endforeach; ?>
    </ol>
@endsection