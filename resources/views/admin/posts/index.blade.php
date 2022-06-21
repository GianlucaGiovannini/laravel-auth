@extends('layouts.admin')

@section('content')
<div class="container">

    <table class="table table-striped table-inverse table-responsive">
        <thead class="thead-inverse">
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Slug</th>
                <th>Cover Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($posts as $post)
            <tr>
                <td scope="row">{{$post->id}}</td>
                <td>{{$post->title}}</td>
                <td>{{$post->slug}}</td>
                <td><img width="150" src="{{$post->cover_image}}" alt="{{$post->title}}"></td>
                <td>View - Edit - Delete</td>

            </tr>
            @empty
            <tr>
                <td scope="row"> Nessun Post da mostrare!</td>
            </tr>
            @endforelse

        </tbody>
    </table>


</div>
@endsection