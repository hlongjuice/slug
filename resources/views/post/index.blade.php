@extends('layouts.master')
@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="row">
                <div class="col-xs-6">
                    <a class="btn btn-default" href="{{route('posts.create')}}">Create</a>
                </div>
            </div>
        </div>
    </div>
    <div class="panel-body">
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Slug</th>
                    <th>Edit</th>
                </tr>
                </thead>
                <tbody>
                @foreach($posts as $post)
                    <tr>
                        <td></td>
                        <td>{{$post->title}}</td>
                        <td>{{$post->slug}}</td>
                        <td><a href="{{route('posts.show',$post->slug)}}">Details</a></td>
                        <td><a href="{{route('posts.edit',$post->slug)}}">Edit</a></td>

                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection