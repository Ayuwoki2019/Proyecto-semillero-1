@extends('layouts.app')
<style>
    @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600&display=swap');

:root{
    --yellow:#f9ca24;
}

*{
    font-family: 'Nunito', sans-serif;
    margin:0; padding:0;
    box-sizing: border-box;
    text-decoration: none;
    outline: none; border:none;
    text-transform: capitalize;
    transition: all .2s linear;
}

*::selection{
    background:var(--yellow);
    color:#333;
}

html{
    font-size: 62.5%;
    overflow-x: hidden;
}

html::-webkit-scrollbar{
    width:1.4rem;
}

html::-webkit-scrollbar-track{
    background:#222;
}

html::-webkit-scrollbar-thumb{
    background:var(--yellow);
}

body{
    background-color: black;
    overflow-x: hidden;
    padding-left: 35rem;
}

section{
    min-height: 100vh;
    padding:1rem;
}

.botones{
    padding:.7rem 3rem;
    background:#333;
    color:#fff;
    cursor: pointer;
    margin-top: 1rem;
    font-size: 2rem;
    border-radius: 5rem;
}

.botones i{
    padding:0 .5rem;
    font-size: 1.8rem;
}

.botones:hover{
    background:var(--yellow);
}

.heading{
    text-align: center;
    margin:0 6rem;
    font-size: 4rem;
    padding:1rem;
    border-bottom: .1rem solid #fff4;
    color:#fff;
}

.heading span{
    color:var(--yellow);
}

header{
    position: fixed;
    top:0; left:0;
    z-index: 1000;
    height:100%;
    width:35rem;
    background:#1a1a1a;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-flow: column;
    text-align: center;
}

header .user img{
    height:17rem;
    width:17rem;
    border-radius: 50%;
    object-fit: cover;
    margin-bottom: 1rem;
    border:.7rem solid var(--yellow);
}

header .user .name{
    font-size: 3.5rem;
    color:#fff;
}

header .user .post{
    font-size: 2rem;
    color:#eee;
}

header .navbar{
    width:100%;
}

header .navbar ul{
    list-style: none;
    padding:1rem rem;
}


header .navbar ul li a{
    display: block;
    padding:1rem;
    margin:1.5rem 0;
    background:#333;
    color:#fff;
    font-size: 2rem;
    border-radius: 5rem;
}

header .navbar ul li a:hover{
    background:var(--yellow);
}

#menu{
    position: fixed;
    top:2rem; right:2rem;
    background:#333;
    color:#fff;
    cursor: pointer;
    font-size: 2.5rem;
    padding:1rem 1.5rem;
    z-index: 1000;
    display: none;
}

.home{
    display: flex;
    justify-content: center;
    flex-flow: column;
    padding:0 15rem;
}

.home h3{
    font-size: 2.5rem;
    color:#fff;
}

.home h1{
    font-size:5rem;
    color:#fff;
}

.home h1 span{
    color:var(--yellow);
}

.home p{
    font-size:2rem;
    color:#eee;
    padding: 1rem 0;
}

.about .row{
    display: flex;
    align-items: center;
    justify-content: center;
    flex-wrap: wrap;
    padding:1rem 0;
}

.about .row .info{
    flex:1 1 48rem;
    padding:2rem 1rem;
    padding-left: 6rem;
}

.about .row .info h3{
    font-size: 2rem;
    color:var(--yellow);
    padding:1rem 0;
    font-weight: normal;
}

.about .row .info h3 span{
    color:#eee;
    padding:0 .5rem;
}

.about .row .counter{
    flex:1 1 48rem;
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
}

.about .row .counter .box{
    width:20rem;
    background:#222;
    text-align: center;
    padding: 2rem;
    margin:2rem;
}

.about .row .counter .box span{
    font-size: 4rem;
    color:var(--yellow);
}

.about .row .counter .box h3{
    font-size: 2rem;
    color:#fff;
}

.education .box-container{
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
    padding:1rem 0;
    padding-left: 3rem;
}

.education .box-container .box{
    width:27rem;
    margin:4rem 1rem;
    padding-left: 4rem;
    border-left: .2rem solid #fff;
    position: relative;
}

.education .box-container .box span{
    font-size: 1.3rem;
    background:#222;
    color:#fff;
    border-radius: 5rem;
    padding:.5rem 2.5rem;
}

.education .box-container .box h3{
    font-size: 2rem;
    color:#fff;
    padding-top: 1.5rem;
}

.education .box-container .box p{
    font-size: 1.4rem;
    color:#eee;
    padding: 1rem 0;
}

.education .box-container .box i{
    position: absolute;
    top:-1.5rem; left:-2.5rem;
    height:5rem;
    width: 5rem;
    border-radius: 50%;
    line-height: 5rem;
    text-align: center;
    font-size: 2rem;
    color:#fff;
    background:var(--yellow);
}

.portfolio .box-container{
    display: flex;
    align-items: center;
    justify-content: center;
    flex-wrap: wrap;
    padding:2rem 0;
}

.portfolio .box-container .box{
    height: 20rem;
    width:26rem;
    border-radius: 1rem;
    margin:2rem;
    overflow: hidden;
    cursor: pointer;
}

.portfolio .box-container .box img{
    height:100%;
    width:100%;
    object-fit: cover;
}

.portfolio .box-container .box:hover img{
    transform: scale(1.2);
}

.contact .row{
    display: flex;
    align-items: center;
    justify-content: center;
    flex-wrap: wrap;
}

.contact .row .content{
    flex:1 1 30rem;
    padding:4rem;
    padding-bottom: 0;
}

.contact .row form{
    flex:1 1 45rem;
    padding:2rem;
    margin:2rem;
    margin-bottom: 4rem;
}

.contact .row form .box{
    padding:1.5rem;
    margin:1rem 0;
    background:#3333;
    color:#fff;
    text-transform: none;
    font-size: 1.7rem;
    width:100%;
}

.contact .row form .box::placeholder{
    text-transform: capitalize;
}

.contact .row form .message{
    height: 15rem;
    resize: none;
}

.contact .row .content .title{
    text-transform: uppercase;
    color:#fff;
    font-size: 3rem;
    padding-bottom: 2rem;
}

.contact .row .content .info h3{
    display: flex;
    align-items: center;
    font-size: 2rem;
    color:#eee;
    padding:1rem 0;
    font-weight: normal;
}

.contact .row .content .info h3 i{
    padding-right: 1rem;
    color:var(--yellow);
}

.top{
    position: fixed;
    bottom:7.5rem; right: 2rem;
    z-index: 100;
    display: none;
}


/* media queries  */

@media (max-width:1200px){

    html{
        font-size: 55%;
    }

    .home{
        padding:1rem 4rem;
    }

}

@media (max-width:991px){

   header{
       left:-120%;
   }

   #menu{
       display: block;
   }

   header.toggle{
    left:0%;
   }

   body{
       padding:0;
   }

}

@media (max-width:768px){

    html{
        font-size: 50%;
    }
 
 }

@media (max-width:400px){

    header{
        width: 100vw;
    }

    .heading{
        margin:0 3rem;
    }

    .about .row .counter .box{
        width: 100%;
    }
 
    .education .box-container .box{
        width:100%;
    }

    .portfolio .box-container .box{
        width:100%;
    }

    .contact .row form{
        margin:3rem 0;
    }

 }
</style>
@section('content')

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>responsive personal portfolio website design tutorail</title>

<!-- font awesome cdn link  -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

<!-- custom css file link  -->
<link rel="stylesheet" href="css/style.css">

<header>
<div class="user" style="margin-top: 20%;">
    <img src="{{asset('storage/'. $perfil->imagen)}}" alt="">
    <h3 class="name">{{$perfil->nombre}} {{$perfil->apellido}}</h3>
    <p class="post">{{$perfil->profesion}}</p>
</div>

<nav class="navbar">
    <ul>
        <li><a but href="#home">Inicio</a></li>
        <li><a href="#about">Acerca de Mi</a></li>
        <li><a href="#education">educación</a></li>
        <li><a href="{{route('home')}}">Regresar</a></li>
    </ul>
</nav>
</header>
@include('custom.message')
<div id="menu" class="fas fa-bars"></div>
<div style="background-color: black;">

    <section class="home" id="home">
    
        <h3>Hola !</h3>
        <h1>Yo soy <span>{{$perfil->nombre}} {{$perfil->apellido}}</span></h1>
        <p>{{$perfil->descripcion}}
                    </p>
        <a href="#about"><button class="botones">Acerca De Mi <i class="fas fa-user"></i></button></a>
    
    </section>
    
    <!-- home section ends -->
    
    <!-- about section starts  -->
    
    <section class="about" id="about">
    
    <h1 class="heading"> <span>Acerca de</span> Mi </h1>
    
    <div class="row">
    
        <div class="info">
            <h3> <span> Nombre : </span>{{$perfil->nombre}} {{$perfil->apellido}}</h3>
            <h3> <span> Edad : </span>{{$perfil->edad}}</h3>
            <h3> <span> Profesión : </span>{{$perfil->profesion}}</h3>
            <h3> <span> Cargo : </span>{{$perfil->cargo}}</h3>
            <h3> <span> Idiomas : </span> @foreach($perfil->language as $lenguaje){{$lenguaje->name_language}}, @endforeach </h3>
            <a href="#"><button class="botones"> download CV <i class="fas fa-download"></i> </button></a>
        </div>
    
        <div class="counter">
    
            <div class="box">
                <span>{{$perfil->añosemillero}}+</span>
                <h3>Años en el semillero</h3>
                
            </div>
    
            <div class="box">
                <span>{{$perfil->ponencias}}+</span>
                <h3>Cantidad de ponencias realizadas</h3>
            </div>
    
            <div class="box">
                <span>{{$perfil->proyectos}}+</span>
                <h3>Participación en proyectos</h3>
            </div>
    
            <div class="box">
                <span>{{$perfil->semestre}}+</span>
                <h3>Semestre actual</h3>
            </div>
            <a href="#about"><button class="botones">Editar <i class="fas fa-user"></i></button></a>
        </div>
    
    </div>
    
    </section>
    
    <!-- about section ends -->
    
    <!-- education section starts  -->
    
    <section class="education" id="education">
    
    <h1 class="heading"> mi <span>educación</span> </h1>
    
    <div class="box-container">
    
        @foreach($perfil->education as $educacion)
        <div class="box">
            <i class="fas fa-graduation-cap"></i>
            <span>{{$educacion->year}}</span>
            <h3>{{$educacion->category}}
            {{$educacion->title}}</h3>
            <p>{{$educacion->description}}</p>
            <a href="#about"><button class="botones">Editar <i class="fas fa-user"></i></button></a>
        </div>
        
        @endforeach
        <a href="#about"><button class="botones">Agregar <i class="fas fa-user"></i></button></a>
    </div>
    
    </section>
    
    <!-- education section ends -->
    
    <a href="#home" class="top">
        <img src="images/scroll-top-img.png" alt="">
    </a>
</div>
    
@endsection

@section('scripts')

<script>
$(document).ready(function(){

    $('#menu').click(function(){
      $(this).toggleClass('fa-times');
      $('header').toggleClass('toggle');
    });
  
    $(window).on('scroll load',function(){
  
      $('#menu').removeClass('fa-times');
      $('header').removeClass('toggle');
  
      if($(window).scrollTop() > 0){
        $('.top').show();
      }else{
        $('.top').hide();
      }
  
    });
  
    // smooth scrolling 
  
    // $('a[href*="#"]').on('click',function(e){
  
    //   e.preventDefault();
  
    //   $('html, body').animate({
  
    //     scrollTop : $($(this).attr('href')).offset().top,
  
    //   },
    //     500, 
    //     'linear'
    //   );
  
    // });
  
  });

</script>
   
@endsection