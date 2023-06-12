@extends('layouts.landing')

@section('style')
    <style>
        /* .main-banner {
            display: flex;
            align-items: center;
            flex-direction: column;
            justify-content: center;
        } */

        .main-banner::after {
            z-index: -1;
        }

        @media (min-width: 992px) {
            .img-fluid-carrion{
             width: 74%!important;
            }
        }
            
        @media (max-width: 767.98px){
            .main-banner {
                background-image: url(./images/Mobilefondo.jpg) !important;
        }  
        }
        .text-gracias{
            color: #1D428A;

        }
        .main-banner {
                background-image: url(./images/bg-main-baner.jpg);
        }
        .img-fluid-carrion{
             width: 100%;
        }
    </style>
@endsection

@section('head')
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-217778845-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-217778845-1');
</script>
   
@endsection

@section('content')

    <!-- Main Start-->

        <section class="main-banner">
            <div class="container">
                <div class="row ">
                    <div class="col-12 col-sm-6 col-lg-5">
                        <div class="">
                            <img src="{{asset('images/logo-dell.png')}}" alt="logo" class="img-logos01">
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row pt-4">
                    <div class="col-12 col-md-6 col-lg-8 col-xl-6  movil-bannerprinci">
                
                      <div class="mt-3 ocultar-escritorio">
                    <img src="{{asset('images\logookcomputerferia.png')}}" alt="okcumputer" class="img-fluid logookcompu">
                </div>
                <div class="mt-3 ocultar-escritorio">
                    <img src="{{asset('images\movilsecion.png')}}" alt="okcumputer" class="img-fluid logookcompu">
                </div>
                        {{-- <div class="mt-3 seccion-horario">

                            <img style="float:left; margin:10px;width: 4%; margin-left: 0px;"
                                src="{{asset('images/fechas.png')}}" alt="" class="imgmovil">
                            <span class="textoimagen">
                                <p class="tituloimagen">Fecha : <span class="textosubfecha">27 de Enero</span> </p>
                            </span>
        
        
                        </div>
                        <div class="seccion-horario">
        
                            <img style="float:left; margin:10px;width: 4%; margin-left: 0px;" src="{{asset('images/hora.png')}}"
                                alt="" class="imgmovil">
                            <span class="textoimagen">
                                <p class="tituloimagen">Hora : <span class="textosubfecha">4 p.m</span> </p>
                            </span>
        
        
                        </div>
                        <div class="botonfechas text-white mt-2 mb-2">
                            <h6 class="font-weight-bold mb-0 pb-0 font-famili-bold ">Ingreso libre</h6>
                            <span></span>
                        </div> --}}
        
                      
                    </div>
                    <div class="col-12 col-md-5 col-lg-6">
                        <div class=" my-4 ">
                            <img src="{{asset('images\boton.png')}}" alt="okcumputer" class="img-fluid logookcompu">
                            {{-- <h1 class="text-gracias mb-2 text-dark font-famili-bold">
                                Gracias por registrarte
                            </h1>
                            <h2 class="text-gracias text-dark font-famili">
                                Te enviamos un correo con el acceso al evento.
                            </h2>
                            <p class="text-dark font-famili">*Recuerda revisar en la bandeja de otros o no deseados.</p> --}}
                            {{-- <p class="text-gracias text-white pt-2">
                                Recuerda que este registro es válido para ingresar a más de una ponencia. </br>Sólo deberás conectarte el día de cada ponencia con tu correo.
                            </p> --}}
                        </div>
                    </div>
                </div>
            </div>

            {{-- <div class="container">
                <div class="row">
                    <div class="col-12 text-center pb-5">
                        <a class="btn btn-warning rounded-pill px-5" href="{{url('/')}}">
                            Ir a inicio
                        </a>
                       
                    </div>
                </div>
            </div> --}}
        </section>

    <!-- Main End-->
@endsection