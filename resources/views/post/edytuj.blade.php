@extends('layout.szablon')
@section('tytul', 'Dodawanie posta')
@section('podtytul', 'Dodaj post')
@section('tresc')
@isset($post)
@if($errors->any())
    <div class="alert alert-danger m-1">Uzupełnij brakujące pola</div>
@endif
<form action="{{route('post.update', $post->id)}}" method="post">
    @csrf
    @method('PUT')
    <div class="for-group">
        <label for="tytul">Tytuł</label>
        <input type="text" class="form-control" name="tytul" id="tytul" placeholder="Podaj tytuł postu" value="@if(old('tytul') !== null){{old('tytul')}}@else{{$post->tytul}}@endif">
        @error('tytul')
                <p style="color: red" >{{$message}}</p>
            @enderror    
    </div>
    <div class="for-group">
        <label for="tresc">Treść</label>
        <textarea class="form-control" name="tresc" id="tresc" cols="4" >@if(old('tresc') !== null){{old('tresc')}}@else{{$post->tresc}}@endif</textarea>  
        @error('tresc')
                <p style="color: red" >{{$message}}</p>
            @enderror  
    </div>
    <button class="btn btn-success form-btn mt-3" type="submit">Zmień post</button>
</form>    
@endisset
<a href="{{route('post.index')}}"><button class="btn btn-primary form-btn mt-1" type="submit">Powrót do listy</button></a>
@endsection