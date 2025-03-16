<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>This page is for admins only.</h1>

    @foreach ($users as $user)
        <div>ID: {{ $user->id }}</div>
        <div>Name: {{ $user->name }}</div>
        <div>Email: {{ $user->email }}</div>
        <div>Created At: {{ $user->timestamps }}</div>
        <br>
    @endforeach
</body>
</html>