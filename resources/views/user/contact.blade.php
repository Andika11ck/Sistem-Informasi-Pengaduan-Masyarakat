@extends('layouts.app')  

@section('content')  
<div class="container">  
    <div class="card shadow mb-4 p-4">  
        <strong>  
            <h1>Kontak</h1>  
            <p>  
                <i class="fa fa-envelope"></i>   
                Hubungi kami melalui email:   
                <a href="mailto:pemkabkonoha@gmail.com">pemkabkonoha@gmail.com</a>  
            </p>  
            <p>  
                <i class="fa fa-phone"></i>   
                Atau melalui telepon:   
                <a href="tel:08123456789">08123456789</a>  
            </p>  
            <p>  
                <i class="fa fa-map-marker"></i>   
                Alamat: Jl. Kenangan No. 1, Konoha  
            </p>  

            <h2>Ikuti Kami di Media Sosial</h2>  
            <div class="social-links">  
                <a href="https://www.facebook.com" target="_blank" class="social-link mr-3" >  
                    <i class="fab fa-facebook-f icon-size"></i>  
                </a>  
                <a href="https://www.twitter.com" target="_blank" class="social-link mr-3">  
                    <i class="fab fa-twitter icon-size"></i>  
                </a>  
                <a href="https://www.instagram.com" target="_blank" class="social-link">  
                    <i class="fab fa-instagram icon-size"></i>  
                </a>  
            </div>  
        </strong>  
    </div>  
</div>  

<style>  
    .social-links {  
        display: flex; /* Mengatur untuk menggunakan Flexbox */  
        gap: 15px; /* Jarak antara tautan */  
    }  
    
    .social-link {  
        color: black; /* Mengubah warna tautan menjadi hitam */  
        text-decoration: none; /* Menghilangkan garis bawah */  
    }  
    
    .icon-size {  
        font-size: 24px; /* Mengatur ukuran ikon */  
    }  

    /* .social-link .fa-facebook-f:hover {  
        color: #007bff; 
    }   */
    .social-link .fab .fa-instagram:hover{  
        color: #d70eac; /* Mengubah warna saat hover */  
    }
    
</style>  
@endsection