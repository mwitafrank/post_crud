@extends('layouts.app')

@section('content')
<div class="container">
    

    <div class="row justify-content-center mt-4">
    
        <div class="col-md-12">
        @if(session('message'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('message') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>    
            </div>
        @endif()
        
           
            <div class="card">
                <div class="card-header">
                <a class="float-end btn btn-primary" href="{{ url('posts/create') }}">Add Post</a>
                <h3>ALL THE POST CURRENTLY AVAILABLE</h3>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Status</th>
                                <th colspan="2">Operation</th>
                            </tr>
                            @foreach($post as $pos)
                                <tr>
                                    <td>{{ $pos->id }}</td>
                                    <td>{{ $pos->title}}</td>
                                    <td>{{ $pos->description}}</td>
                                    <td>
                                        @if($pos->id ==1)
                                            Hidden
                                        @else
                                            Visible
                                        @endif
                                    </td>
                                    <td><a class="btn btn-success" href="{{ url('posts/'.$pos->id.'/edit') }}">Edit</a></td>
                                    <td>
                                        <form action="{{ url('posts/'.$pos->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>

                                        </form>
                                        </a>
                                    </td>   
                                </tr>
                            @endforeach
                        </thead>
                    </table>
                </div>
            </div>
            
        </div>
    </div>
</div>    
@endsection




