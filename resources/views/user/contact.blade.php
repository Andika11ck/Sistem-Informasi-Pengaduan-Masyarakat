@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card shadow mb-4 p-4" >
            <strong>
                <h1>Kontak</h1>

                <p>
                    <i class="fa fa-envelope"></i>
                    Hubungi kami melalui email:
                
                    <a href="mailto:pemkabkonoha@gmail.com"  class="contact-link">pemkabkonoha@gmail.com</a>
                
                </p>
                <p>
                    <i class="fa fa-phone"></i>
                    Atau melalui telepon:
               
                    <a href="tel:08123456789" class="contact-link">08123456789</a>
                
                </p>
                <p>
                    <i class="fa fa-map-marker"></i>
                    Alamat: Jl. Kenangan No. 1, Konoha
                </p>

                <h2>Ikuti Kami di Media Sosial</h2>
                <div class="social-links">
                    <a href="https://www.facebook.com" target="_blank" class="social-link mr-3">
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

    
@endsection
