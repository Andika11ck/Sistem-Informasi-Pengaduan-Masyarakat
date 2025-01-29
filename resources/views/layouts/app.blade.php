<!DOCTYPE html>  
<html lang="id">  

<head>  
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>Pengaduan Masyarakat</title>  
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>  
        .body {  
            background-color: #46d2ac; /* Warna background */  
        }
         .navbar {  
            background-color: #0f0837; /* Warna background aqua */  
        }
        

        .nav-link {  
            color: #46d2ac; /* Warna teks default */  
        }  
        .navbar-brand{
            color: #46d2ac;
        }
        .navbar-brand:hover{
            color: #46d2ac;
        }
        .nav-link:hover {  
            /* background-color: teal; Warna saat hover   */
            color: teal; /* Warna teks saat hover */  
            border-radius: 5px;
            
            /* Agar sudut menu terlihat melengkung */  
        }  
        .navbar-toggler {  
            background-color: #46d2ac; /* Warna garis putih */  
        }
        
        .navbar-toggler-icon {  
            background-color: #46d2ac; /* Warna garis putih */  
        }
        
    </style>  
</head>  

<body class="body">  
    <nav class="navbar navbar-expand-lg navbar-light  sticky-top"> <!-- Tambahkan sticky-top -->  
        <div class="container-fluid">  
            <a class="navbar-brand " href="/">Pengaduan Masyarakat</a>  
            <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">  
                <span class="navbar-toggler-icon "></span>  
            </button>  
            <div class="collapse navbar-collapse" id="navbarNav">  
                <ul class="navbar-nav ms-auto">  
                    <li class="nav-item"><a class="nav-link" href="/">Beranda</a></li>  
                    <li class="nav-item"><a class="nav-link" href="/user/report/create">Lapor</a></li>  
                    <li class="nav-item"><a class="nav-link" href="/user/reports">Lihat Pengaduan</a></li>  
                    <li class="nav-item"><a class="nav-link" href="/user/help">Bantuan</a></li>  
                    <li class="nav-item"><a class="nav-link" href="/user/contact">Kontak</a></li>  
                </ul>  
            </div>  
        </div>  
    </nav>  
    
    <div class="container py-4">  
        @yield('content')  
        <!-- Tambahkan konten ini untuk menguji scroll -->  
       
    </div>  
   

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>  
    
</body>  

</html>