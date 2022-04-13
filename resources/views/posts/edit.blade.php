@extends('layouts.app')

@section('content')
<div class="container">
    

    <div class="row justify-content-center mt-4">
    
        <div class="col-md-8">

        @if(session('message'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('message') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>    
            </div>
        @endif()
        
            <div class="card">
                <div class="card-header">
                <a class="float-end btn btn-success" href="{{ url('posts') }}">Back</a>
                <h3>EDIT POST</h3>
                </div>
                <div class="card-body">
                    <form action="{{ url('posts/'.$post->id ) }}" method="POST">

                        @csrf
                        @method('PUT')
                        
                        <div class="form-group mb-3">
                            <label for="title">Title</label>
                        <input type="text" name="title" class="form-control" value="{{ $post->title }}">
                        </div>
                        <div class="form-group mb-3">
                            <label for="description">Description</label>
                            <textarea name="description" class="form-control" rows="3" >{!! $post->description !!}</textarea>
                        </div>
                        <div class="form-group mb-3">
                            <label for="title" >Status</label>
                        <input type="checkbox" name="status" {!! $post->status == 1 ? 'Checked' : '' !!} > 0=Show / 1=Hidden
                        </div>
                        <div class="form-group mb-3">
                            <input type="submit" class="btn btn-primary" value="Update">
                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>    
@endsection




