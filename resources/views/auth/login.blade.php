<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login User</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <style>
      
        body {
            background: linear-gradient(135deg, #1f4037, #99f2c8);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
    
       
        .login-card {
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(10px);
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }
   
        .login-title {
            font-size: 24px;
            font-weight: bold;
            color: white;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2);
        }
    
      
        .form-control {
            background: rgba(255, 255, 255, 0.3);
            border: none;
            border-radius: 10px;
            padding: 12px;
            color: white;
            font-size: 16px;
        }
    
        .form-control::placeholder {
            color: rgba(255, 255, 255, 0.8);
        }
    
       
        .btn-login {
            background: #00a86b;
            border: none;
            color: white;
            font-size: 18px;
            font-weight: bold;
            border-radius: 10px;
            padding: 12px;
            width: 100%;
            transition: all 0.3s ease-in-out;
        }
    
        .btn-login:hover {
            background: #007a53;
            transform: scale(1.05);
        }
    
       
        .register-link {
            color: white;
            text-decoration: none;
        }
    
        .register-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    


<div class="login-card">
    <h2 class="login-title">Login ke SIPUMA</h2>

    <!-- Flash Messages -->
    @if(session('success'))
        <div class="alert alert-success text-dark">{{ session('success') }}</div>
    @endif
    @if(session('error'))
        <div class="alert alert-danger text-dark">{{ session('error') }}</div>
    @endif
    @if ($errors->any())
        <div class="alert alert-danger text-dark">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Login Form -->
    <form action="{{ route('login.post') }}" method="POST">
        @csrf
        <div class="mb-3">
            <input type="email" name="email" class="form-control" placeholder="Masukkan Email" required>
        </div>
        <div class="mb-3">
            <input type="password" name="password" class="form-control" placeholder="Masukkan Password" required>
        </div>
        <button type="submit" class="btn btn-login">Masuk</button>
    </form>

    <!-- Register Link -->
    <p class="mt-3">
        Belum punya akun? <a href="{{ route('register') }}" class="register-link">Daftar di sini</a>
    </p>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>