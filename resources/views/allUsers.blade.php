<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>ALL USERS</h1>
    <h2>This page is for admins only.</h2>

    @foreach ($users as $user)
        <div>ID: {{ $user->id }}</div>
        <div>Name: {{ $user->name }}</div>
        <div>Email: {{ $user->email }}</div>
        <div>Role: {{ $user->role }}</div>
        <div>Created At: {{ $user->created_at }}</div>
        <br>
    @endforeach
</body>
</html>