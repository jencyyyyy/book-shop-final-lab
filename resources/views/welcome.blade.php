@extends('layout')

@section('page-content')
    <br>
    <br>
    <p class="text-center text-danger">
        <i class="bi bi-book" style="font-size: 6rem;"></i>
    </p>
    <h1 class="text-center text-success">Laravel Book Store</h1>
    <div class="text-center">
        <a href="{{route('books.home')}}" type="button" class="btn btn-success" >View all Books</a>
        <a href="{{route('books.create')}}" type="button" class="btn btn-info" >Insert a Book</a>
      </div>
      </div>
    
@endsection
