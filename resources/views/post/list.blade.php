@extends('layout.szablon')
@section('tytul', 'Lista postów')
@section('podtytul', 'Lista postów')
@section('tresc')
<a href="{{route('post.create')}}"><button class="btn btn-primary form-btn mt-3" type="submit">Dodaj posta</button></a>
    <table class="table table-striped">
        <thead>
            <th scope="col">Lp</th>
            <th scope="col">Tytuł</th>
            <th scope="col">Autor</th>
            <th scope="col">Data utworzenia</th>
            <th scope="col">Akcja</th>
        </thead>
        <tbody>
            @isset($posty)
                @if($posty->count())
                @php($lp=1)
                @php($lp=$posty->firstItem())
                @foreach ($posty as $post)
                <tr>                    
                    <td>{{$lp++}}</td>
                    <td><a href="{{route('post.show', $post->id)}}">{{$post->tytul}}</a></td>
                    <td>{{$post->autor}}</td>
                    <td>{{date('j F Y',strtotime($post->created_at))}}</td>
                    <td class="d-flex">
                        <a href="{{route('post.edit', $post->id)}}"><button class="btn btn-success form-btn m-1">E</button></a>
                        <form action="{{route('post.destroy',$post->id)}}" method="post" onsubmit="return confirmDelete()">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger form-btn m-1" type="submit">X</button>
                        </form>
                    </td>
                </tr>
                @endforeach
                @else
                    <td colspan="5">Nie ma żadnych postów</td>
                @endif
            @else
                <td colspan="5">Nie ma żadnych postów</td>
            @endisset
        </tbody>
    </table>
    @isset($posty)
        {{$posty->links()}}
    @endisset
    <script>
        function confirmDelete()
        {
            return confirm('Czy na pewno usunąć ten post? ')
        }
    </script>
@endsection
