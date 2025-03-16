<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <style>
          body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            gap: 50px;
            text-align: center;
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
    <h1>LOG IN</h1>

    <form action="{{ route('login') }}" method="POST">
        @method('POST')
        @csrf

        <div>
            <label for="email">Email: </label>
            <input type="email" name="email" id="email" required value="{{ old('email') }}" placeholder="Your email goes here.">
        </div>

        <div>
            <label for="password">Password: </label>
            <input type="password" name="password" id="password" required value="{{ old('password') }}" placeholder="Your password goes here.">
        </div>

        <div>
            <button type="submit">Log In</button>
        </div>
    </form>

    <p>Don't have an account?</p>
    <a href="{{ route('showRegisterForm') }}">Register Here</a>
</body>
</html>