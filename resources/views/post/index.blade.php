@extends('layouts.master')
@section('content')
    <div class="panel-body">
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                </tr>
                </thead>
                <tbody>
                @foreach($posts as $post)
                    <tr>
                        <td>{{$post->title}}</td>
                        <td><a href="{{route('posts.show',$post->id)}}">Details</a></td>
                    </tr>
                @endforeach
                </tbody>


            </table>
        </div>
    </div>
@endsection