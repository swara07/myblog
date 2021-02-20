@extends('layouts.app')

@section('content')
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<div class="container">
  <div class="jumbotron" >
    <h1  style="color: rebeccapurple">Show post </h1>
    <br><br>

<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">{{$a->title}}</h5>
        <h6 class="card-subtitle mb-2 text-muted">{{$a->body}}</h6>
        <p class="card-text">Wriiten on {{$a->created_at}}</p>
        <a href="/posts/{{$a->id}}/edit" class="card-link">Edit post</a>
       
        
      </div>
    </div>
    <br>
    <a href="\posts" class="btn btn-primary btn-lg">Go back</a>
</div>
</div>




<hr>

</html>
    
@endsection
