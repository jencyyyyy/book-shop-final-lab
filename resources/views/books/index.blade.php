@extends('layout')

@section('page-content')
    <legend>All Books</legend>

    <div class="text-center">
        <a href="{{route('books.create')}}" type="button" class="btn btn-info mb-3" >Insert a Book</a>
      </div>
    <table  class="table table-bordered border-primary">
        <thead >
            <th>ID</th>
            <th>Title</th>
            <th>Options</th>
        </thead>

        @foreach ($allbooks as $b)
        <tr>
        <td>{{$b->id}}</td>
        <td>{{$b->title}}</td>
        <td>
            <div class="text-center">
            <a class='btn btn-primary' href="{{route('books.show',$b->id)}}" >Details</a>

            <form method="post" action="{{ route('books.destroy', $b->id) }}" onsubmit="return confirm('delete this book?')" class="m-0">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger mt-2">Delete</button>
            </form> 
        </div>           
        </td>
        </tr>    
        @endforeach
    </table>

    {{$allbooks->links() }}
@endsection



