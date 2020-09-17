<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Juan Manuel</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{asset('/css/aos.css')}}" rel="stylesheet">
    <link href="{{asset('/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('/css/main.css')}}" rel="stylesheet">
</head>
<body id="top">
<header>
    <div class="profile-page sidebar-collapse">
        <nav class="navbar navbar-expand-lg fixed-top navbar-transparent bg-danger" color-on-scroll="400">
            <div class="container">
                <div class="navbar-translate"><a class="navbar-brand" href="#" rel="tooltip">GamingComerce</a>
                    <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-bar bar1"></span><span class="navbar-toggler-bar bar2"></span><span class="navbar-toggler-bar bar3"></span></button>
                </div>
                <div class="collapse navbar-collapse justify-content-end" id="navigation">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link smooth-scroll" href="{{url('/')}}">Inicio</a></li>
                        <li class="nav-item"><a class="nav-link smooth-scroll" href="#about">Sobre</a></li>
                        <li class="nav-item"><a class="nav-link smooth-scroll" href="#skill">Habilidades</a></li>
                        <li class="nav-item"><a class="nav-link smooth-scroll" href="#experience">Experiencia</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>
<div class="page-content">
    <div>
        <div class="profile-page">
            <div class="wrapper">
                <div class="page-header page-header-small" filter-color="blue">
                    <div class="page-header-image" data-parallax="true" style="background-image: url({{asset('/images/juan/back.jpg')}});"></div>
                    <div class="container">
                        <div class="content-center">
                            <div class="cc-profile-image"><a href="#"><img src="{{asset('/images/juan/logo.jpeg')}}" alt="Image"/></a></div>
                            <div class="h2 title">Juan Manuel Amador Perez</div>
                            <p class="category text-white">Web Developer, UX Designer, FullStack Developer, Network Manager, Linux Servers</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section" id="about">
            <div class="container">
                <div class="card" data-aos="fade-up" data-aos-offset="10">
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <div class="card-body">
                                <div class="h4 mt-0 title">Sobre</div>
                                <p>Soy estudiante del tec de monterrey, en la carrera de ISC, me gusta mucho salir a pasear con mis dos perritos, leer novelas militares historicas, sci fi y de aventura fantastica. Escucho mucho metal y power metal, estoy esperando a que termine la cuarentena para poder asistir al concierto de rammstein en México lml</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="card-body">
                                <div class="h4 mt-0 title">Información Basica</div>
                                <div class="row">
                                    <div class="col-sm-4"><strong class="text-uppercase">Matricula:</strong></div>
                                    <div class="col-sm-8">A01701248</div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-sm-4"><strong class="text-uppercase">Email:</strong></div>
                                    <div class="col-sm-8">A01701248@itesm.mx</div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-sm-4"><strong class="text-uppercase">Idiomas:</strong></div>
                                    <div class="col-sm-8">Español, Ingles</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section" id="skill">
            <div class="container">
                <div class="h4 text-center mb-4 title">Habilidades Profesionales</div>
                <div class="card" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="progress-container progress-danger"><span class="progress-badge">HTML</span>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-danger" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div><span class="progress-value">100%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="progress-container progress-danger"><span class="progress-badge">CSS</span>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-danger" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 98%;"></div><span class="progress-value">98%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="progress-container progress-danger"><span class="progress-badge">Angular</span>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-danger" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 50%;"></div><span class="progress-value">50%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="progress-container progress-danger"><span class="progress-badge">MySql</span>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-danger" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 88%;"></div><span class="progress-value">88%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="progress-container progress-danger"><span class="progress-badge">BootStrap</span>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-danger" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 75%;"></div><span class="progress-value">75%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="progress-container progress-danger"><span class="progress-badge">MVC Design Pattern</span>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-danger" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 90%;"></div><span class="progress-value">90%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section" id="experience">
            <div class="container cc-experience">
                <div class="h4 text-center mb-4 title">Experiencia</div>
                <div class="card">
                    <div class="row">
                        <div class="col-md-3 bg-danger" data-aos="fade-right" data-aos-offset="50" data-aos-duration="500">
                            <div class="card-body cc-experience-header">
                                <p>Enero 2020 - Agosto 2020</p>
                                <div class="h5">CBTIs 118</div>
                            </div>
                        </div>
                        <div class="col-md-9" data-aos="fade-left" data-aos-offset="50" data-aos-duration="500">
                            <div class="card-body">
                                <div class="h5">Desarrollador FullStack</div>
                                <p>Sistema web para administrar el ingreso de nuevos alumnos al plantel, registrar su información y administrar la aplicación de su examen de ingreso.El sistema gestionó 3 mil exámenes de alumnos, su resultado y envío de resultados. El front-end se desarrolló usando Angular, para la comunicación entre elservidor y el front-end se usó una api a partir de node jsy Express, la Base de Datos relacional se creó con MySQL.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer">
        <div class="h4 title text-center">Juan Manuel Amador Perez FLores</div>
        <div class="text-center text-muted">
            <p>&copy; Creative CV. All rights reserved.<br>Design - <a class="credit" href="https://templateflip.com" target="_blank">TemplateFlip</a></p>
        </div>
    </footer>
    <script src="{{asset('/js/intro/jquery-3.1.1.min.js')}}"></script>
    <script src="{{asset('/js/popper.min.js')}}"></script>
    <script src="{{asset('/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('/js/now-ui-kit.js?v=1.1.0')}}"></script>
    <script src="{{asset('/js/aos.js')}}"></script>
    <script src="{{asset('/js/main.js')}}"></script>
</body>
</html>
