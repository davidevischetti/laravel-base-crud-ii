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
            <td>{{$comic->series}}/td>
            <td>{{$comic->type}}</td>
            <td>{{$comic->price}}$</td>
        </tr>
        </tbody>
    </table>

@endsection
