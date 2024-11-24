@extends('layout.szablon')
@section('tytul', 'Szczegóły posta')
@section('podtytul', 'Szczegóły posta')
@section('tresc')
@isset($post)
        <div class="for-group">
            <label for="tytul">Tytuł</label>
            <input type="text" class="form-control" name="tytul" id="tytul" value="{{$post->tytul}}" disabled>    
        </div>
        <div class="for-group">
            <label for="autor">Autor</label>
            <input type="text" class="form-control" name="autor" id="autor" value="{{$post->autor}}" disabled>    
        </div>
        <div class="for-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" id="email" value="{{$post->email}}" disabled>    
        </div>
        <div>
            Data utworzenia: {{$post->created_at}}
        </div>
        <div>
            Data modyfikacji: {{$post->updated_at}}
        </div>
        <div class="for-group">
            <label for="tresc">Treść</label>
            <textarea class="form-control" name="tresc" id="tresc" cols="4" disabled>{{$post->tresc}}</textarea>    
        </div>
        <a href="{{route('post.index')}}"><button class="btn btn-primary form-btn mt-3" type="submit">Powrót do listy</button></a> 
@endisset
@endsection