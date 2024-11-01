@extends('layout')

@section('page-content')
    <legend>Book {{$book->id}}</legend>
    <table  class="table table-bordered">

            <tr>
                <th>ID</th>
                <td>{{$book->id}}</td>
            </tr>

            <tr>
                <th>Title</th>
                <td>{{$book->title}}</td>
            </tr>

            <tr>
                <th>Author</th>
                <td>{{$book->author}}</td>
            </tr>

            <tr>
                <th>ISBN</th>
                <td>{{$book->isbn}}</td>
            </tr>

            <tr>
                <th>Stock</th>
                <td>{{$book->stock}}</td>
            </tr>

            <tr>
                <th>Price</th>
                <td>{{$book->price}}</td>
            </tr>

    </table>

    <div class="text-center">
        <a href="{{route('books.home')}}" type="button" class="btn btn-success" >Go back</a>
      </div>

@endsection



