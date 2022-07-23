@extends('../admin/templates.base')

@section('content')
    <form action="{{route('comics.store')}}" method="post">
        @csrf
        <div class="mb-3">
            <label class="form-label" for="title">title</label>
            <input class="form-control" type="text" name="title" id="title">
            @error('title')
                <div class="alert alert-danger" role="alert">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label" for="series">series</label>
            <input class="form-control" type="text" name="series" id="series">
        </div>
        <div class="mb-3">
            <label class="form-label" for="type">type</label>
            <input class="form-control" type="text" name="type" id="type">
        </div>
        <div class="mb-3">
            <label class="form-label" for="price">price</label>
            <input class="form-control" type="text" name="price" id="price">
            @error('price')
            <div class="alert alert-danger" role="alert">
                {{$message}}
            </div>
        @enderror
        </div>
        <div class="mb-3">
            <label class="form-label" for="description">description</label>
            <input class="form-control" type="text" name="description" id="description">
            @error('description')
            <div class="alert alert-danger" role="alert">
                {{$message}}
            </div>
        @enderror
        </div>
        <div class="mb-3">
            <label class="form-label" for="thumb">thumb</label>
            <input class="form-control" type="text" name="thumb" id="thumb">
        </div>
        <div class="mb-3">
            <label class="form-label" for="sale_date">sale_date</label>
            <input class="form-control" type="text" name="sale_date" id="sale_date">
        </div>
        <button type="submit">Add</button>
    </form>
@endsection
