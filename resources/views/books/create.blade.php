@extends('layout')

@section('page-content')
    <legend>Create Book</legend>
    <form method="POST" action="{{route('books.store')}}">
        @csrf
        <div class="form-group">
            <label for="title" class="col-sm-2 control-label">Title</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" value="{{old('title')}}" id="title" name="title"
                       placeholder="Title">
                <div>{{$errors->first('title')}}</div>
               </div>
        </div>

        <div class="form-group">
            <label for="author" class="col-sm-2 control-label">Author</label>
            <div class="col-sm-10">
                <input type="text" class="form-control  " value="{{old('author')}}" id="author" name="author"
                       placeholder="author">
                       <div>{{$errors->first('author')}}</div>
                    </div>
        </div>

        <div class="form-group">
            <label for="isbn" class="col-sm-2 control-label">ISBN</label>
            <div class="col-sm-10">
                <input type="number" class="form-control  " value="{{old('isbn')}}" id="isbn" name="isbn"
                       placeholder="isbn">
                       <div>{{$errors->first('isbn')}}</div>
     
                    </div>
        </div> 

        <div class="form-group">
            <label for="stock" class="col-sm-2 control-label">Stock</label>
            <div class="col-sm-10">
                <input type="number" class="form-control  " value="{{old('stock')}}" id="stock" name="stock"
                       placeholder="stock">
                       <div>{{$errors->first('stock')}}</div>
            </div>
        </div>

        
        <div class="form-group">
            <label for="price" class="col-sm-2 control-label">Price</label>
            <div class="col-sm-10">
                <input type="number" class="form-control  " value="{{old('price')}}" id="price" name="price"
                       placeholder="price">
                       <div>{{$errors->first('price')}}</div>
                    </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>

@endsection



