
@extends('layouts.app')

@section('content')
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>
<body>
    <div class="container">
        <div class="jumbotron" >
<h3>Create Post</h3>
<br><br>
<form method="POST" action="\posts" >
    @csrf
<label>Title</label>
<input type ="text" name="title"  placeholder="Enter the title">
<br><br>
<label>body</label>
<input type ="textarea" name="body"  placeholder="Enter the body">
<button >Submit</button>
</form>
@endsection
    </div>
</div>
</body>

