@extends('../admin/templates.base')

@section('content')
    <form action="{{route('comics.update',['comic' => $comic])}}" method="post">
        @method('put')
        @csrf
        <div class="mb-3">
            <label class="form-label" for="title">title</label>
            <input class="form-control" type="text" name="title" id="title" value="{{$comic->title}}">
        </div>
        <div class="mb-3">
            <label class="form-label" for="series">series</label>
            <input class="form-control" type="text" name="series" id="series" value="{{$comic->series}}">
        </div>
        <div class="mb-3">
            <label class="form-label" for="type">type</label>
            <input class="form-control" type="text" name="type" id="type" value="{{$comic->type}}">
        </div>
        <div class="mb-3">
            <label class="form-label" for="price">price</label>
            <input class="form-control" type="text" name="price" id="price" value="{{$comic->price}}">
        </div>
        <div class="mb-3">
            <label class="form-label" for="description">description</label>
            <input class="form-control" type="text" name="description" id="description" value="{{$comic->description}}">
        </div>
        <div class="mb-3">
            <label class="form-label" for="thumb">thumb</label>
            <input class="form-control" type="text" name="thumb" id="thumb" value="{{$comic->thumb}}">
        </div>
        <div class="mb-3">
            <label class="form-label" for="sale_date">sale_date</label>
            <input class="form-control" type="text" name="sale_date" id="sale_date" value="{{$comic->sale_date}}">
        </div>
        <button class="btn btn-primary" type="submit">Confirm</button>
    </form>
@endsection
