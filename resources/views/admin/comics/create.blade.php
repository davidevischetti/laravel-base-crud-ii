@extends('../admin/templates.base')

@section('content')
    <form action="{{route('comics.store')}}" method="post">
        @csrf
        <div class="mb-3">
            <label for="title">title</label>
            <input type="text" name="title" id="title">
        </div>
        <div class="mb-3">
            <label for="series">series</label>
            <input type="text" name="series" id="series">
        </div>
        <div class="mb-3">
            <label for="type">type</label>
            <input type="text" name="type" id="type">
        </div>
        <div class="mb-3">
            <label for="price">price</label>
            <input type="text" name="price" id="price">
        </div>
        <div class="mb-3">
            <label for="description">description</label>
            <input type="text" name="description" id="description">
        </div>
        <div class="mb-3">
            <label for="thumb">thumb</label>
            <input type="text" name="thumb" id="thumb">
        </div>
        <div class="mb-3">
            <label for="sale_date">sale_date</label>
            <input type="text" name="sale_date" id="sale_date">
        </div>
        <button type="submit">Add</button>
    </form>
@endsection
