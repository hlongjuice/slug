@extends('layouts.master')
@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Edit</h3>
        </div>
        <div class="panel-body">
            <form action="{{route('posts.update')}}" method="post" class="form-horizontal" role="form">
                @csrf
                <div class="form-group">
                    <legend>Form Title</legend>
                </div>

                <div class="form-group">
                    <label for="title" class="col-sm-2 control-label">Title</label>
                    <div class="col-sm-10">
                        <input type="text" value="{{$post->title}}" class="form-control" name="title" id="title" placeholder="Title">
                    </div>
                </div>


                <div class="form-group">
                    <div class="col-sm-10 col-sm-offset-2">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection