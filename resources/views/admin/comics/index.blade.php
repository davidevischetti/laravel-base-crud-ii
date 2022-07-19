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
                <th scope="row">{{$comic->title}}</th>
                <td>{{$comic->series}}</td>
                <td>{{$comic->type}}</td>
                <td>{{$comic->price}}</td>
            </tr>
            @endforeach
        <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td colspan="2">Larry the Bird</td>
            <td>@twitter</td>
        </tr>
        </tbody>
    </table>
    {{-- <ul>
        @foreach ($comics as $comic)
            <li><a href="{{route('comics', [$comic => $comic['id']])}}">{{$comic->title}}</a></li>
        @endforeach
    </ul> --}}
@endsection


