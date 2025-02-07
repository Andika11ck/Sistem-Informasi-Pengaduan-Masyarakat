{{-- <!DOCTYPE html>  
<html lang="en">  

<head>  
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>Login Admin</title>  
    <link href="{{ asset('/assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">  
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">  

    <!-- Custom styles for this template-->  
    <link href="{{ asset('/assets/css/sb-admin-2.min.css') }}" rel="stylesheet">  
    <link href="{{ asset('/assets/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">  
    <style>  
        /* Menambahkan CSS untuk responsivitas */  
        .bg-login-image {  
            background-image: url('{{ asset('assets/img/sipuma.jpg') }}');  
            background-size: cover;  
            background-position: center;  
        }  

        @media (max-width: 768px) {  
            .bg-login-image {  
                display: none;  
            }  
            .card {  
                margin-top: 20px;  
            }  
        }  
    </style>  
</head>  

<body class="bg-gradient-primary">  

    <div class="container">  

        <div class="row justify-content-center">  

            <div class="col-xl-10 col-lg-12 col-md-9">  

                <div class="card o-hidden border-0 shadow-lg my-5">  
                    <div class="card-body p-0">  
                        <div class="container mt-2">  
                            <div class="row">  
                                <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>  
                                <div class="col-lg-6">  
                                    <div class="p-5">  
                                        <form class="bg-white p-4" method="POST" action="/admin/login">  
                                            @csrf  
                                            <div class="form-group">  
                                                <label for="email">Email</label>  
                                                <input type="email" name="email" id="email" class="form-control form-control-user" required autocomplete="additional-name">  
                                            </div>  
                                            <div class="form-group">  
                                                <label for="password">Password</label>  
                                                <input type="password" name="password" class="form-control" required>  
                                            </div>  
                                            <div class="form-group">  
                                                <div class="custom-control custom-checkbox small">  
                                                    <input type="checkbox" class="custom-control-input" id="customCheck">  
                                                    <label class="custom-control-label" for="customCheck">Remember Me</label>  
                                                </div>  
                                            </div>  
                                            <button type="submit" class="btn btn-primary mt-3">Login</button>  
                                        </form>  
                                    </div>  
                                </div>  
                            </div>  
                        </div>  
                    </div>  
                </div>  

            </div>  

        </div>  

    </div>  

    <script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>  
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>  
    <script src="{{ asset('assets/vendor/jquery-easing/jquery.easing.min.js') }}"></script>  
    <script src="{{ asset('assets/js/sb-admin-2.min.js') }}"></script>  
</body>  

</html> --}}
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
            background: linear-gradient(135deg, #004e92, #000428); /* Warna biru */  
            display: flex;  
            justify-content: center;  
            align-items: center;  
            height: 100vh;  
            margin: 0; /* Menghilangkan margin default */  
        }  
    
        /* Card dengan efek glassmorphism */  
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
    
        /* Judul login */  
        .login-title {  
            font-size: 24px;  
            font-weight: bold;  
            color: white;  
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2);  
        }  
    
        /* Input field */  
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
    
        /* Tombol login dengan efek hover */  
        .btn-login {  
            background: #007bff; /* Warna tombol biru */  
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
            background: #0056b3; /* Warna saat hover */  
            transform: scale(1.05);  
        }  
    
        /* Link register */  
      
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
    <form action="/admin/login" method="POST">
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
   
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>