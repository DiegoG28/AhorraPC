@extends('layouts.plantilla-'.$plantilla)

@section('title','Busqueda')
@section('styles')
<link rel="stylesheet" href="{{asset('css/search.css')}}">
    
@endsection

@section('logo')
    <div class="logo">
        <a href="{{route('home')}}">
            <img src="{{asset('img/logo.png')}}" alt="">
        </a>
    </div>
@endsection


@section('content')
    <main>
        <div class="tab-container">
            <button>CyberPuerta</button>
            <button>DDTech</button>
            <button>MercadoLibre</button>
        </div>

        <div class="products-container pcmig">
            {{---------AQUÍ EMPIEZA LA ESTRUCTURA DEL CONTENEDOR DE CADA PRODUCTO----------}}
            {{-- Empieza PcMig --}}
            @foreach ($PcMig as $item)
            
            <div class="card">
                <div class="img-card">
                    <img src="{{$item->imagenLink}}">
                </div>

                <div class="card-details">
                    <div class="card-info">
                        <a href="#"><h3 class="product-name">{{$item->nombre}}</h3></a>
    
                        <p class="product-price">{{$item->precio}}</p>
                    </div>
    
                    <div class="card-icons">
                        <a href="{{$item->LinkCompra}}"><i class="fas fa-shopping-cart"></i></a>
                        <a href="#"><i class="fas fa-heart"></i></a>
                    </div>
                </div>
            </div>
            @endforeach
            {{-- Termina PcMig --}}
            {{---------AQUÍ TERMINA----------}}

            <div class="card">
                <div class="img-card">
                    <img src="{{asset('img/ram.jpg')}}" alt="">
                </div>

                <div class="card-details">
                    <div class="card-info">
                        <a href="#"><h3 class="product-name">Kit Memoria RAM Patriot Viper Steel RGB DDR4, 3600MHz, 32GB (2 x 16GB), Non-ECC, CL20, XMP</h3></a>
    
                        <p class="product-price">$3,269.00</p>
                    </div>
    
                    <div class="card-icons">
                        <a href="#"><i class="fas fa-shopping-cart"></i></a>
                        <a href="#"><i class="fas fa-heart"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="products-container cyberpuerta">
            {{---------AQUÍ EMPIEZA LA ESTRUCTURA DEL CONTENEDOR DE CADA PRODUCTO----------}}
            {{-- Empieza CyberPuerta --}}
            @foreach ($cyberpuerta as $item)
            
            <div class="card">
                <div class="img-card">
                    <img src="{{$item->imagenLink}}">
                </div>

                <div class="card-details">
                    <div class="card-info">
                        <a href="#"><h3 class="product-name">{{$item->nombre}}</h3></a>
    
                        <p class="product-price">{{$item->precio}}</p>
                    </div>
    
                    <div class="card-icons">
                        <a href="{{$item->LinkCompra}}"><i class="fas fa-shopping-cart"></i></a>
                        <a href="#"><i class="fas fa-heart"></i></a>
                    </div>
                </div>
            </div>
            @endforeach
            {{-- Termina CyberPuerta --}}
            {{---------AQUÍ TERMINA----------}}
        </div>
        
        <div class="products-container ddtech">
            {{---------AQUÍ EMPIEZA LA ESTRUCTURA DEL CONTENEDOR DE CADA PRODUCTO----------}}
            {{-- Empieza DDTech --}}
            @foreach ($ddtech as $item)
            
            <div class="card">
                <div class="img-card">
                    <img src="{{$item->imagenLink}}">
                </div>

                <div class="card-details">
                    <div class="card-info">
                        <a href="#"><h3 class="product-name">{{$item->nombre}}</h3></a>
    
                        <p class="product-price">{{$item->precio}}</p>
                    </div>
    
                    <div class="card-icons">
                        <a href="{{$item->LinkCompra}}"><i class="fas fa-shopping-cart"></i></a>
                        <a href="#"><i class="fas fa-heart"></i></a>
                    </div>
                </div>
            </div>
            @endforeach
            {{-- Termina DDTech --}}
            {{---------AQUÍ TERMINA----------}}
        </div>   

        <div class="products-container pcel">
            {{---------AQUÍ EMPIEZA LA ESTRUCTURA DEL CONTENEDOR DE CADA PRODUCTO----------}}
            {{-- Empieza PCEL --}}
            @foreach ($pcCel as $item)
            
            <div class="card">
                <div class="img-card">
                    <img src="{{$item->imagenLink}}">
                </div>

                <div class="card-details">
                    <div class="card-info">
                        <a href="#"><h3 class="product-name">{{$item->nombre}}</h3></a>
    
                        <p class="product-price">{{$item->precio}}</p>
                    </div>
    
                    <div class="card-icons">
                        <a href="{{$item->LinkCompra}}"><i class="fas fa-shopping-cart"></i></a>
                        <a href="#"><i class="fas fa-heart"></i></a>
                    </div>
                </div>
            </div>
            @endforeach
            {{-- Termina PCEL --}}
            {{---------AQUÍ TERMINA----------}}
        </div>   

        <div class="products-container mercadolibre">
            {{---------AQUÍ EMPIEZA LA ESTRUCTURA DEL CONTENEDOR DE CADA PRODUCTO----------}}
            {{-- Empieza MercadoLibre --}}
            @foreach ($mercadolibre as $item)
            
            <div class="card">
                <div class="img-card">
                    <img src="{{$item->imagenLink}}">
                </div>

                <div class="card-details">
                    <div class="card-info">
                        <a href="#"><h3 class="product-name">{{$item->nombre}}</h3></a>
    
                        <p class="product-price">{{$item->precio}}</p>
                    </div>
    
                    <div class="card-icons">
                        <a href="{{$item->LinkCompra}}"><i class="fas fa-shopping-cart"></i></a>
                        <a href="#"><i class="fas fa-heart"></i></a>
                    </div>
                </div>
            </div>
            @endforeach
            {{-- Termina MercadoLibre --}}
            {{---------AQUÍ TERMINA----------}}
        </div>   

        <ul class="pagination">
            <li><a href="#" class="prev">< Atrás</a></li>
            <li class="page-number active"><a href="#">1</a></li>
            <li class="page-number"><a href="#">2</a></li>
            <li class="page-number"><a href="#">3</a></li>
            <li class="page-number"><a href="#">4</a></li>
            <li class="page-number"><a href="#">5</a></li>
            <li class="page-number"><a href="#">6</a></li>
            <li><a href="#" class="next">Siguiente ></a></li>
        </ul>
    </main>
@endsection