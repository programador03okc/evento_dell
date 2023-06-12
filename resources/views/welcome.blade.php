@extends('layouts.landing')

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
{{--  main-banner start --}}
<header class="main-banner" id="main-banner">
    {{--  menu star --}}
    <nav class="navbar navbar-expand-md navbar-dark" id="menuscroll">
        <div class="container menu" data-aos="zoom-out" data-aos-duration="1500">
            <a class="navbar-brand logocarrionminedu" href="#">
                <img src="{{asset('images/logo-dell.png')}}" alt="logo" class="img-logos01">
            </a>
          
            {{-- <a class="navbar-brand menu53" href="#">
                <img src="{{asset('images\logo-blanco-53.png')}}" alt="carrion" class="img-logocarrion d-xl-none
            d-md-none logitos">
            </a> --}}
            {{-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerLanding"
                aria-controls="navbarTogglerLanding" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button> --}}

            {{-- <div class="collapse navbar-collapse" id="navbarTogglerLanding">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link text-white" href="#sobrecongreso">Sobre el Evento<span
                                class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#programa">Programa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#speakers">Conferencistas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#auspiciadores">Auspiciadores</a>
                    </li>


                </ul>
            </div> --}}

        </div>
    </nav>
    {{-- <div style="width: 92%;" class="ocultar-mobie">
        <div class="row justify-content-end">
            <div class="col-12 col-md-4 col-lg-4 col-xl-4">
                <div class="img-nota">
                    <img src="{{asset('images\notalanding.png')}}" alt="okcumputer" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
    --}}
    {{--  menu end --}}
    <div class="container" id="formualrioregistro">
       
        <div class="row justify-content-center content-main-banner">
            <div class="col-12 col-md-6 col-lg-8 col-xl-8  movil-bannerprinci">

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

                </div>  --}}

                {{-- <div class="botonfechas text-white mt-2 mb-2">
                    <h6 class="font-weight-bold mb-0 pb-0 font-famili-bold ">Ingreso libre</h6>
                    <span></span>
                </div> --}}
             {{-- <h1 class="tituloinscribete ocultar-mobie" id="botoninscribete">

                <a href="#formualrioregistro" class="texto-sub-inscri">
                    Regístrate aquí
                </a>

            </h1>

            <div class="col-12 ocultar-escritorio seccion-escribete">
                <a href="#formualrioregistro" class="seccion-escribetemobie">
                    Regístrate aquí
                </a>
            </div> --}}



            </div>

            <div class="col-12 col-md-5 col-lg-4 align-self-center">

                <div class="row justify-content-center ocultar-mobie" >
                    <div class="col-12">
                        <div class="img-nota" style="text-align: center;">
                            <img src="{{asset('images\notalanding.png')}}" alt="okcumputer" class="img-fluid">
                        </div>
                    </div>
                </div>

                <div class="ocultar-escritorio">
                    <div class="row justify-content-end">
                        <div class="col-12 col-md-4 col-lg-4 col-xl-4">
                            <div class="img-nota" style="text-align: center;">
                                <img src="{{asset('images\notalanding.png')}}" alt="okcumputer" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-banner mdc-elevation--z2">
                    

                    <h5 class="text-center font-weight-bold font-famili-bold tituloformualrio">Regístrate aquí</h5>


                    @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif
                    @if (session('failed'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('failed') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif
                    @if (session('warning'))
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        {{ session('warning') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif

                    <form method="POST" name="fomr1" action="{{ route('store') }}/" id="frmCliente">
                        @csrf

                        <div class="form-row">
                            <div class="form-group col-12 mt-2">
                                <input type="text" class="form-control @error('nombres') is-invalid @enderror"
                                    name="nombres" id="nombres" value="{{ old('nombres') }}" placeholder="Nombres*">
                                <span class="invalid-feedback" id="nombresError" role="alert"></span>
                                @error('nombres')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group col-12">
                                <input type="text" class="form-control @error('apellidos') is-invalid @enderror"
                                    name="apellidos" id="apellidos" value="{{ old('apellidos') }}"
                                    placeholder="Apellidos*">
                                <span class="invalid-feedback" id="apellidosError" role="alert"></span>
                                @error('apellidos')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>


                      {{-- <div class="form-group col-12">
                                <input type="text" class="form-control @error('especialidad') is-invalid @enderror" name="especialidad" id="especialidad"
                                    value="{{ old('especialidad') }}" placeholder="Especialidad*">
                        <span class="invalid-feedback" id="especialidadError" role="alert"></span>
                        @error('especialidad')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                </div>  --}}
                {{--
                            <div class="form-group col-12">
                                <input type="text" class="form-control @error('pais') is-invalid @enderror" name="pais" id="pais"
                                    value="{{ old('pais') }}" placeholder="Pais*">
                <span class="invalid-feedback" id="paisError" role="alert"></span>
                @error('pais')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div> --}}
            <div class="form-group col-12">
                <input type="text" class="form-control @error('telefono') is-invalid @enderror" name="telefono"
                    id="telefono" value="{{ old('telefono') }}" placeholder="Celular*">
                @error('telefono')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>


            <div class="form-group col-12">
                <input type="text" class="form-control @error('dni') is-invalid @enderror" name="dni" id="dni"
                    value="{{ old('dni') }}" placeholder="DNI*" maxlength="9">
            @error('dni')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

            <div class="form-group col-12">
                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email"
                    value="{{ old('email') }}" placeholder="E-Mail*" />
                <span class="invalid-feedback" id="emailError" role="alert"></span>
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="form-group col-12">
                <input type="text" class="form-control @error('tipoparticipante') is-invalid @enderror"
                    name="tipoparticipante" id="tipoparticipante" value="{{ old('tipoparticipante') }}"
                    placeholder="Empresa*">
                <span class="invalid-feedback" id="tipoparticipanteError" role="alert"></span>
                @error('tipoparticipante')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            {{-- <div class="form-group col-12">
                <select class="form-control @error('tipoparticipante') is-invalid @enderror" name="tipoparticipante"
                    value="{{ old('tipoparticipante') }}">
                    <option value="">Seleccione*</option>
                    @foreach ($tipoparticipante as $tipoparticipante)
                    @if ($tipoparticipante == old('tipoparticipante'))
                    <option value="{{$tipoparticipante}}" selected>{{$tipoparticipante}}</option>
                    @else
                    <option value="{{$tipoparticipante}}">{{$tipoparticipante}}</option>
                    @endif
                    @endforeach
                </select>
                @error('tipoparticipante')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div> --}}

            <div class="form-group col-12">
                <div class="custom-control custom-checkbox @error('terminos') is-invalid @enderror">
                    <input type="checkbox" class="custom-control-input" name="terminos" id="terminos" checked>
                    <label class="custom-control-label terms-conditions" for="terminos">
                        <span class="text-dark">Ud. acepta haber leído y aceptado </span>
                        <a href="#" class="text-primary" data-toggle="modal" data-target="#modalpoliticas"
                            style="text-decoration: revert;">
                            la Política de Privacidad.
                        </a>
                    </label>
                </div>
                @error('terminos')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            
            <div class="sorteotxt">
                <a href="#" class="text-primary" data-toggle="modal" data-target="#modalcongreso">
                  
                   <i class="fas fa-info"> <span class="textinformativo">Ver Información del sorteo</span></i>
                </a>
            </div>

          
        </div>

        <div class="form-group col-12">
            <input name="utm_source" id="utm_source" class="d-none"></input>
            <input name="utm_medium" id="utm_medium" class="d-none"></input>
            <input name="utm_campaign" id="utm_campaign" class="d-none"></input>
            <input name="utm_term" id="utm_term" class="d-none"></input>
            <input name="utm_content" id="utm_content" class="d-none"></input>
            <input name="procedencia" id="procedencia" class="d-none"></input>
        </div>

        <button type="submit" class="btn btn-enviar btn-block font-famili">
            Enviar
        </button>

        </form>
    </div>
    </div>
    </div>

    {{-- <div class="container-arrow-down">
            <div class="arrow-down">
                <a class="icon-arrow-down animate__animated animate__fadeInDown animate__infinite animate__slower" href="#feria">
                    <img src="{{asset('images/icon-arrow-down.svg')}}" alt="v" width="68" height="68">
    </a>
    </div>
    </div> --}}

    </div>

</header>




<a class="back-top" href="#main-banner"><i class="fas fa-arrow-circle-up"></i></a>


{{-- section pie end--}}
<section class="loading" id="loading">
    <div class="spinner-border text-primary" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</section>

<!-- Modal conferencistas jose manuel -->
<div class="modal fade" id="modaljorgealfaro" tabindex="-1" role="dialog"
    aria-labelledby="modaljorgealfaroTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="text-end">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-header text-white">

                <img style="" src="{{asset('images\JorgeAlfaro.png')}}" alt="conferencia">
                <h5 class="modal-title font-famili-bold" id="modalpoliticasTitle">Jorge Alfaro</h5>

            </div>

            <div class="modal-body pl-0 pr-0">
                <div class="container-fluid small text-justify" style="line-height: 1.3;">
                    <div class="row">
                        <div class="col-12">
                            <p class="font-famili">Corporativo Comercial,
                                Ingeniero de Sistemas e información, Especialista en redes
                                Experiencia en proyectos de 4 años y mas de 15 años en redes y comunicaciones
                                </p>
                                <p class="font-famili pt-1">Desempeñándose como consultor de negocios durante los 2 últimos años en la Empresa OK COMPUTER colaborando de la mano con las diferentes Áreas de las entidades publicas y privadas a elaborar sus términos de referencia que calcen con sus necesidades, con participación en importantes proyectos como la TICs del Gobierno regional de moquegua y municipalidad distrital de ilabaya resultando como beneficiarios instituciones educativas de las regiones de Ilo, Moquegua y Mariscal Nieto así como en otros proyectos similares.
                                </p>

                            {{-- <ul>

                                <li>● Doctor en Medicina y Cirugía - Universidad del País Vasco / EHU - España.</li>

                                <li class="pt-3">● Especialista en Anatomía Patológica - Universidad del País Vasco /
                                    EHU - España.</li>

                                <li class="pt-3"> ● Médico Especialista en Estomatología - Universidad del País Vasco /
                                    EHU - España.</li>

                                <li class="pt-3"> ● Catedrático de la Universidad de Estomatología - Universidad del
                                    País Vasco / EHU - España.</li>

                                <li class="pt-3">● Director del Máster de Patología Oral - Universidad del País Vasco /
                                    EHU - España.</li>

                                <li class="pt-3"> ● Coordinador del Diploma en Medicina Bucal de la Academia
                                    Iberoamericana de Medicina y Patología Bucal.</li>

                            </ul> --}}

                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>




<!-- ************************************************ -->


<!-- Modal congreso -->
<div class="modal fade" id="modalcongreso" tabindex="-1" role="dialog" aria-labelledby="modalcongresoTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header text-white">
                <h5 class="modal-title font-famili-bold" id="modalpoliticasTitle">Sobre el Sorteo</h5>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body pl-0 pr-0">
                <div class="container-fluid small text-justify" style="line-height: 1.3;">
                    <div class="row">
                        <div class="col-12 textmodalfuente">
                            <p>FECHA DE SORTEO 16 DE ABRIL DEL 2022, los ganadores serán publicados en nuestra página web y en las redes sociales.</br> </p>
                            <p style="text-align: center; margin: 10px;">

                                <a href="https://okcomputer.com.pe/" target="_blank"><i class="fas fa-globe"></i></a> <a href="https://www.facebook.com/OKComputerPeru " target="_blank"><i class="fab fa-facebook-square"></i></a> <a href="https://www.instagram.com/okcomputerperu/" target="_blank"><i class="fab fa-instagram"></i></a>
                             
                            </p> 
                            <p class="pt-2">
                                la entrega del premio será a partir del 25 de abril. El premio será enviado al domicilio del ganador. El ganador deberá proporcionar una copia de su DNI y enviar el acta de conformidad 
                                firmada para proceder con la entrega del premio. El ganador acepta que podremos tomarle una foto para usarla luego en nuestras redes, mostrando que el concurso fue verídico y se realizó 
                                la entrega del premio. Se le comunicará al ganador a través de un correo electrónico. Luego de enviar el correo, el ganador tendrá 07 días para responder y realizar las coordinaciones de 
                                la entrega del premio. En el caso que el ganador no se comunique con nosotros o asista a recoger su premio,
                                 procederemos a realizar otro sorteo luego de 15 días de haber anunciado al ganador.
                            </p>
                           
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>


<!-- Modal congreso-->
{{-- main-hashtag start --}}
{{-- <section class="main-hashtag mb-3 d-none">
    <div class="container-list">
        <ul class="list-hashtag">
            <li>
                #LicenciadoPorMINEDU
            </li>
            <li>
                #LicenciadoPorMINEDU
            </li>
            <li>
                #LicenciadoPorMINEDU
            </li>
            <li>
                #LicenciadoPorMINEDU
            </li>
            <li>
                #LicenciadoPorMINEDU
            </li>
            <li>
                #LicenciadoPorMINEDU
            </li>
            <li>
                #LicenciadoPorMINEDU
            </li>
            <li>
                #LicenciadoPorMINEDU
            </li>
            <li>
                #LicenciadoPorMINEDU
            </li>
            <li>
                #LicenciadoPorMINEDU
            </li>
        </ul>
    </div>
</section> --}}
{{-- main-hashtag end --}}

<!-- Modal politicasdeprivacidad -->
<div class="modal fade" id="modalpoliticas" tabindex="-1" role="dialog" aria-labelledby="modalpoliticasTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header text-white">
                <p><img src="{{asset('images/logo-dell.png')}}" alt="ilae" class="img-logocarrion"></p>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-header text-white">
                <h5 class="modal-title" id="modalpoliticasTitle">POLÍTICA DE TRATAMIENTO DE DATOS PERSONALES</h5>
            </div>
            <div class="modal-body">
                <div class="container-fluid small text-justify" style="line-height: 1.3;">
                    <div class="row">
                        <div class="col-12 textmodalfuente">
                            <p>
                                En la <strong>OK COMPUTER</strong>, nos encontramos comprometidos con el
                                respeto a tu privacidad y a la Ley de Protección de Datos Personales (“Ley 29733”).
                                Toda información que nos brindes a través de esta web o mediante formularios,
                                considerada datos personales de acuerdo a la Ley 29733, será debidamente tratada y
                                conservada bajo nuestra responsabilidad en bancos de datos Postulantes admisión y
                                Alumnos de su titularidad tanto en el Perú,
                                como en el exterior, pudiendo ser también custodiada en sistemas informáticos ubicados
                                en la nube.
                            </p>
                            <p>
                                El tratamiento y uso de tus datos personales por la <strong>OK COMPUTER</strong>,
                                será realizado de conformidad con las condiciones y fines del presente aviso, en la
                                medida que has brindado tu consentimiento,
                                aceptación de términos mediante un clic u otro medio similar.Si se requieren usar tus
                                datos personales con fines diferentes a los señalados en el
                                presente aviso, te contactaremos a fin de solicitar tu consentimiento.
                            </p>
                            <p>
                                Usaremos tus datos personales para identificarte, localizarte, comunicarte, contactarte,
                                enviarte información, dar cumplimiento a obligaciones que hemos contraído contigo,
                                para elaborar bases de datos que serán utilizadas para ofrecerte productos, servicios
                                y/o información de la <strong>OK COMPUTER</strong> que pudieran ser de tu
                                interés. La comunicación contigo se podrá realizar mediante: Telefonía fija,
                                telefonía celular, mensajería de texto, mensajes de WhatsApp, correo electrónico o
                                cualquier otro mecanismo de comunicación que nos hayas brindado.
                            </p>
                            <p>
                                El uso de los datos personales tendrá relación directa con el tipo de interacción que
                                tengas con la <strong>OK COMPUTER.</strong>
                            </p>
                            <p>Podemos recabar tus datos personales de distintas formas: cuando nos los proporcionas
                                directamente, cuando visitas nuestra web o utilizas nuestros servicios en línea y cuando
                                obtenemos información a través de otras fuentes permitidas por la Ley 29733.Recabamos
                                tus datos personales de forma directa cuando tú nos los proporcionas. Los datos que
                                obtenemos por este medio pueden ser, entre otros:
                            </p>
                            <ul class="list-group list-group-flush mb-3">
                                <li class="list-group-item border-0 pl-0"><i
                                        class="fas fa-check-square text-primary mr-2 fa-lg"></i>Nombre</li>
                                <li class="list-group-item border-0 pl-0"><i
                                        class="fas fa-check-square text-primary mr-2 fa-lg"></i>Dirección de domicilio
                                </li>
                                <li class="list-group-item border-0 pl-0"><i
                                        class="fas fa-check-square text-primary mr-2 fa-lg"></i>Número de Celular</li>
                                <li class="list-group-item border-0 pl-0"><i
                                        class="fas fa-check-square text-primary mr-2 fa-lg"></i>Edad</li>
                                <li class="list-group-item border-0 pl-0"><i
                                        class="fas fa-check-square text-primary mr-2 fa-lg"></i>Correo electrónico</li>
                                <li class="list-group-item border-0 pl-0"><i
                                        class="fas fa-check-square text-primary mr-2 fa-lg"></i>Educación</li>
                                <li class="list-group-item border-0 pl-0"><i
                                        class="fas fa-check-square text-primary mr-2 fa-lg"></i>DNI</li>
                            </ul>

                            <p>
                                Los datos personales que la <strong>OK COMPUTER</strong> recolecta de los
                                Usuarios a través de esta página web son adecuados, pertinentes y no excesivos en
                                relación con las finalidades para las cuales los datos son recopilados.
                            </p>
                            <p>
                                Los Usuarios asumen la responsabilidad sobre la veracidad, exactitud y vigencia de los
                                datos personales que nos proporcionan, la <strong>OK COMPUTER</strong> no
                                asume la responsabilidad de cualquier daño o perjuicio que pudiera producirse como
                                resultado del incumplimiento de tal deber.
                            </p>
                            <p>
                                La <strong>OK COMPUTER</strong> cancela los datos personales de sus
                                bancos de datos cuando los mismos dejen de ser necesarios para las finalidades para las
                                cuales fueron recopilados, cuando venza el plazo para su tratamiento o cuando el Usuario
                                revoque su consentimiento para el tratamiento de sus datos personales.
                            </p>
                            <p>
                                La <strong>OK COMPUTER</strong> procede al bloqueo de los datos
                                personales, previamente a su cancelación, para que únicamente sean conservados durante
                                el tiempo en que pueda exigirse algún tipo de responsabilidad a la <strong>OK COMPUTER</strong> derivada de la relación mantenida con los Usuarios o
                                exista norma que prohíba su eliminación por un plazo determinado.
                            </p>
                            <p>

                                La <strong>OK COMPUTER</strong> contará con las medidas de seguridad
                                adecuadas para proteger el uso de tus datos personales por
                                parte de terceros no autorizados. En caso de requerimiento de alguna autoridad, tus
                                datos personales podrán ponerse a disposición de éstas,
                                dentro del estricto cumplimiento a la Ley 29733.
                            </p>

                            <p>

                                El tratamiento de tus datos personales, que has puesto a disposición de la
                                <strong>OK COMPUTER</strong> bajo cualquier forma o circunstancia, podrá
                                ser efectuado de conformidad con los presentes términos y condiciones, por lo que desde
                                este momento se entiende que autorizas expresamente a la
                                <strong>OK COMPUTER</strong> para tal efecto, hasta en tanto no
                                manifiestes tu oposición mediante alguno de los medios que indica la Ley 29733.
                            </p>
                            <p>
                                La protección de los datos personales de los menores es extremadamente importante. Por
                                lo que la presente política ha sido redactada para que los menores de edad, entre 14 y
                                18 años,
                                puedan entenderla. La <strong>OK COMPUTER</strong> no recolecta datos
                                personales relativos a menores de edad (0 -13 años) a través de su página web. En el
                                caso que la
                                <strong>OK COMPUTER</strong> tenga conocimiento que los datos personales
                                suministrados pertenecen a un menor de edad (0 -13 años) se adoptarán las medidas
                                oportunas para eliminar los datos personales tan pronto como sea posible.
                            </p>
                            <p>
                                La <strong>OK COMPUTER</strong> no es responsable por el registro de
                                datos personales de un menor, si al momento del recojo de datos, éste consignó una fecha
                                de
                                nacimiento o edad incorrecta, que impida advertir que es menor de edad.Tienes derecho a
                                acceder a los datos personales que tenemos registrados y a los detalles del tratamiento
                                de los mismos,
                                así como a rectificarlos en caso de ser inexactos o incompletos; cancelarlos cuando
                                consideres que no se requieren para alguna de las finalidades señaladas en el presente
                                Aviso, estén siendo utilizados para finalidades no consentidas o haya finalizado la
                                relación contractual o de servicio, o bien, oponerte al tratamiento de los mismos para
                                fines específicos. Para hacerlo, deberás dirigir tu solicitud a la dirección Av.
                                República de Chile N°432- Jesús Maria.
                                La respuesta a su solicitud se realizará dentro del plazo establecido por Ley.A
                                continuación, el detalle de cada tipo de solicitud:
                            </p>



                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 py-2">
                            <h5><strong>TIPO DE SOLICITUD</strong></h5>
                        </div>
                        <div class="col-12 my-2">
                            <div class="card border-primary">
                                <div class="card-body">
                                    <h6 class="text-primary"><strong>INFORMACIÓN</strong></h6>
                                    <p><strong>PLAZO MAXIMO DE RESPUESTA (*)</strong></p>
                                    <p>10 días.</p>
                                    <h6><strong>DETALLE</strong></h6>
                                    <p>Disponibilidad para ser informado sobre la finalidad del registro de sus datos
                                        personales en nuestros sistemas.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 my-2">
                            <div class="card border-primary">
                                <div class="card-body">
                                    <h6 class="text-primary"><strong>ACCESO</strong></h6>
                                    <p><strong>PLAZO MAXIMO DE RESPUESTA (*)</strong></p>
                                    <p>10 días.</p>
                                    <h6><strong>DETALLE</strong></h6>
                                    <p>Disponibilidad para obtener la información de sus datos personales registrados en
                                        nuestros sistemas.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 my-2">
                            <div class="card border-primary">
                                <div class="card-body">
                                    <h6 class="text-primary"><strong>CANCELACIÓN</strong></h6>
                                    <p><strong>PLAZO MAXIMO DE RESPUESTA (*)</strong></p>
                                    <p>10 días.</p>
                                    <h6><strong>DETALLE</strong></h6>
                                    <p>Supresión o cancelación de sus datos personales de un banco de datos personales
                                        cuando éstos hayan dejado de ser necesarios o pertinentes para la finalidad para
                                        la cual hayan sido recopilados; hubiere vencido el plazo establecido para su
                                        tratamiento; se ha revocado su consentimiento para el tratamiento y en los demás
                                        casos en los que no están siendo tratados conforme a la Ley y al reglamento.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 my-2">
                            <div class="card border-primary">
                                <div class="card-body">
                                    <h6 class="text-primary"><strong>OPOSICIÓN</strong></h6>
                                    <p><strong>PLAZO MAXIMO DE RESPUESTA (*)</strong></p>
                                    <p>10 días.</p>
                                    <h6><strong>DETALLE</strong></h6>
                                    <p>Toda persona tiene la posibilidad de oponerse, por un motivo legítimo y fundado,
                                        referido a una situación personal concreta, a figurar en un banco de datos o al
                                        tratamiento de sus datos personales, siempre que por una ley no se disponga lo
                                        contrario.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 my-2">
                            <div class="card border-primary">
                                <div class="card-body">
                                    <h6 class="text-primary"><strong>REVOCATORIA</strong></h6>
                                    <p><strong>PLAZO MAXIMO DE RESPUESTA (*)</strong></p>
                                    <p>10 días.</p>
                                    <h6><strong>DETALLE</strong></h6>
                                    <p>Toda persona podrá negar o revocar su consentimiento al tratamiento de sus datos
                                        personales para finalidades adicionales a aquellas que dan lugar a su
                                        tratamiento autorizado, sin que ello afecte la relación que da lugar al
                                        consentimiento que sí ha otorgado o no ha revocado.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-12">
                            <i>(*) Plazo establecido por Ley. Los días son contados desde el día siguiente a la
                                presentación de la solicitud vía correo o de forma presencial.</i>

                        </div>
                        <div class="col-12 pt-3">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Aceptar</button>
                        </div>
                    </div>


                </div>

            </div>
        </div>
    </div>
</div>


@endsection

@section('script')
 {{-- <script>
    @if(count($errors) > 0)
    $('#modalregistarse').modal('show');
    @endif

    @if(session('failed'))
    $('#modalregistarse').modal('show');
    @endif

    @if(session('warning'))
    $('#modalregistarse').modal('show');
    @endif

</script>  --}}

@endsection
