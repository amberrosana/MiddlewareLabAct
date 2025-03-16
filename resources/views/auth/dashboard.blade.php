<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            gap: 50px;
        }

        header {
            font-size: xx-large;
            font-weight: bolder;
        }

        form {
            background-color: lightblue;
            border-radius: 8px;
            padding: 30px;
            width: 100%;
            max-width: 400px;
            box-shadow: inset;
            margin: auto;
        }

        div {
            margin-bottom: 20px;
            text-align: center;
        }
    </style>
</head>
<body>
    <header>
        <h1>Hello {{ Auth::user()->name }}! Welcome to your dashboard.</h1>
    </header>

    <div>
        <p>Name: {{ Auth::user()->name }}</p>
        <p>Email: {{ Auth::user()->email }}</p>
    </div>

        <form action="{{ route('logout') }}" method="POST">
            @method('POST')
            @csrf
            <button type="submit">Logout</button>
        </form>
    </div>
</body>
</html>