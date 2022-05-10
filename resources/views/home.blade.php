@extends('layouts.app')

<style>
    .error-page-wrap {
    width: 400px;
    height: 400px;
    border-radius: 50%;
    background: #94399E;
    position: relative;
    transform: translate(-50%, -50%);
    left: 50%;
    top: 50%;
    text-align: Center;
    display: flex;
    flex-direction: column;
    justify-content: center;
  }
  .error-page-wrap h1 {
    font-size: 100px;
    margin: 0;
    color: #fff;
  }
  .error-page-wrap h2 {
    margin: 0;
    color: #fff;
    margin: 20px 0;
  }
  .error-page-wrap a {
    color: #fff;
    display: block;
  }
  
    </style>
    
@section('content')

<div class="container">
    <header class="bg-dark py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white">
                <img src="/imagenes/sigla.png" alt="..." />
            </div>
        </div>
    </header>
    @include('custom.message')
    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
               @if(!$perfils->isEmpty())
                @foreach($perfils as $perfil)
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="{{asset('storage/'. $perfil->imagen)}}" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">{{$perfil->nombre}} {{$perfil->apellido}}</h5>
                                <!-- Product reviews-->
                                <div class="d-flex justify-content-center small text-warning mb-2">
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                </div>
                                <!-- Product price-->
                                <h6 class="fw-bolder">{{$perfil->profesion}}</h6>
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="{{route('test',$perfil->id)}}">Ver perfil</a></div>
                        </div>
                    </div>
                </div>
                @endforeach
                @else
                <div class="col mb-5">
                    <div class="error-page-wrap">
                        <h1>No hay registro</h1>
                        <h2>oops! page not found</h2>
                        <a href="#" title="Back to site" class="error-back">back</a>
                    </div>
                </div>    
                @endif
            </div>
        </div>
    </section>
</div>
@endsection
