@extends('../admin/templates.base')

@section('content')
    <table class="table">
        <thead>
        <tr>
            <th scope="col">title</th>
            <th scope="col">series</th>
            <th scope="col">type</th>
            <th scope="col">price</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">{{$comic->title}}</th>
            <td>{{$comic->series}}</td>
            <td>{{$comic->type}}</td>
            <td>{{$comic->price}}$</td>
        </tr>
        </tbody>
    </table>

    <div id="buttons">
        <button class="btn btn-success"><a href="{{route('comics.edit', ['comic' => $comic])}}">Edit</a></button>
        <button class="btn btn-danger js-delete"><a>Delete</a></button>

        {{-- <form action="{{route('comics.destroy', ['comic'=> $comic])}}" method="post">
            @csrf
            @method('delete')
            <button class="btn btn-danger js-delete"><a>Delete</a></button>
        </form> --}}

    </div>

    <section class="overlay d-none">

            <form class="popup" action="{{route('comics.destroy', ['comic'=> $comic])}}" method="post">
            @csrf
            @method('delete')
            <h4>Vuoi eliminare questo elemento?</h4>
            <button type="submit" class="btn btn-success js-yes">SI</button>
            <button type="button" class="btn btn-danger js-no">NO</button>
            </form>

    </section>

@endsection
