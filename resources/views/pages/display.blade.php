@extends('layouts.app')

@section('content')
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>
<div class="container">
    <div class="jumbotron" >
<h3>List of Posts</h3><br>

@if (count($post)>0)
    @foreach ($post as $item)
    <div >
        <h4><a href="/posts/{{$item->id}} ">{{$item->title}}</a></h4>
        <small>written on {{$item->created_at}}</small>
    </div>
    @endforeach      
@else 
 <p>no post found</p>
 @endif


<br>
<br>
<a href="/posts/create" class="btn btn-primary btn-lg">Create</a>
</div>
</div>
 @endsection 