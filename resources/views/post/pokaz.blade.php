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
            <input type="text" class="form-control" name="autor" id="autor" value="{{$post->user->name}}" disabled>    
        </div>
        <div class="for-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" id="email" value="{{$post->user->email}}" disabled>    
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
        <div class="d-flex">
            <a href="{{route('post.edit', $post->id)}}"><button class="btn btn-success form-btn m-1">Edytuj post</button></a>
            <form action="{{route('post.destroy',$post->id)}}" method="post" onsubmit="return confirmDelete()">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger form-btn m-1" type="submit">Usuń post</button>
            </form>
        </div>
        <a href="{{route('post.index')}}"><button class="btn btn-primary form-btn m-1" type="submit">Powrót do listy</button></a> 

        <script>
            function confirmDelete()
            {
                return confirm('Czy na pewno usunąć ten post? ')
            }
        </script>
@endisset
@endsection