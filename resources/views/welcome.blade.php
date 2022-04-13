@extends('layouts.app')

@section('content')
<div class="container">
    
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center">
                <h3>THIS IS THE POST APP FOR UPLOADING YOUR POST</h3>
                </div>
                <div class="card-body text-center py-5">
                    <h4>This is the home page for the post application</h4>
                    Click <a href="{{url('posts')}}">here </a> to view the available Posts
                </div>
            </div>
            
        </div>
    </div>
</div>    
@endsection
