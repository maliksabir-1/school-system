<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS to center the form -->
    <style>
        body, html {
            height: 100%;
        }

        .center-wrapper {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #f8f9fa;
        }

        .register-form {
            width: 100%;
            max-width: 400px;
            padding: 20px;
            background: white;
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }
        a {
            text-decoration: none;
        }
    </style>
</head>
<body>

<div class="center-wrapper">
    <form method="POST" action="{{ route('loginpost') }}" class="register-form">
        @csrf
        <h4 class="mb-4 text-center">Login</h4>

        @if($errors->has('error'))
            <div class="alert alert-danger">
                {{ $errors->first('error') }}
            </div>
        @endif

         @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <!-- Email -->
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                   name="email" value="{{ old('email') }}" required>
            @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Password -->
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control @error('password') is-invalid @enderror"
                   id="password" name="password" required>
            @error('password')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
            <div class="text-end mt-2"><a href="">Forget Password?</a></div>
        </div>
        <!-- Submit -->
        <button type="submit" class="btn btn-primary w-100">Login</button>
        <p class="text-center mt-3">Don't have an account? <a href="{{ route('register') }}">Register here</a></p>
    </form>
</div>

</body>
</html>