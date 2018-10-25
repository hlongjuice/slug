@extends('layouts.master')
@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Create Post</h3>
        </div>
        <div class="panel-body">
            <form action="{{route('posts.store')}}" method="post" class="form-horizontal" role="form">
                <div class="form-group">
                    <legend>Form Title</legend>
                </div>
                <div class="form-group">
                    <label for="post_title" class="col-sm-2 control-label">Post Title</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="post_title" placeholder="post_title">
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