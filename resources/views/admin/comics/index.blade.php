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
            @foreach ($comics as $comic)
            <tr>
                <th scope="row"><a href="{{route('comics.show', ['comic' => $comic['id']])}}">{{$comic->title}}</a></th>
                <td>{{$comic->series}}</td>
                <td>{{$comic->type}}</td>
                <td>{{$comic->price}}$</td>
            </tr>
            @endforeach
        </tbody>
    </table>

@endsection


