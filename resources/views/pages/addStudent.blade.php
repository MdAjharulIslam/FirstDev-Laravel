<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>add student form</title>
</head>
<body>
    
    <form action="{{route('addNewStudent')}}" method="POST">
    @csrf
    <label for="name">enter your name</label>
    <input type="text" name='name'>

    <br> <br>
    <label for="email">Enter your email</label>
    <input type="email" name='email'>
    <button type="submit">submit form</button>
</form>
</body>
</html>