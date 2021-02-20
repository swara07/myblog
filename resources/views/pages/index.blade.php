<!DOCTYPE html>
<html>
<head>
    <title> Read It </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/home.css')}}" type="text/css">
        
</head>

<body>
    <div class="jumbotron" >
        <div class="container">
        <h1 class="display-4" >Welcome to ReadIt!</h1>
        <p class="lead">Let's blogging.</p>
        <hr class="my-4">
        <p class="lead" >
            <a class="btn btn-primary btn-lg" href="{{ route('login') }}"  >Login</a>&nbsp&nbsp;
            <a class="btn btn-primary btn-lg" href="{{ route('register') }}" role="button">Register</a>
          </p>
        
    </div>
    </div>
    
    



</body>
</html>