<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTER</title>
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
        Register
    </header>
    <form action="{{ route('register') }}" method="POST">
        @method('POST')
        @csrf
        @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" id="name" required value="{{ old('name') }}" placeholder="Enter your name">
        </div>
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" required value="{{ old('email') }}" placeholder="Enter your email">
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" name="password" id="password" required placeholder="Enter your password">
        </div>
        <div>
            <label for="password_confirmation">Confirm Password</label>
            <input type="password" name="password_confirmation" id="password_confirmation" required placeholder="Confirm your password">
        </div>
        <div>
            <button type="submit">Register</button>
        </div>
        <p>
            Already have an account?
            <a href="{{ route('showLoginForm') }}">Login here</a>
        </p>
    </form>
</body>
</html>