<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="description" content="One Page">
        <meta name="author" content="Danilo Gonçalves dos Santos">
        <title>One Page</title>

        <!--Fonts-->
        <link href="https://fonts.googleapis.com/css?family=Arimo" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>

        <!--cdn Bootstrap CSS file-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <!--cdn Bootstrap JS files-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    
        <!--CSS files-->
        <link rel="stylesheet" href="{{ asset('css/style-cover.min.css') }}">

        <!--JS files-->
        <script src="{{asset('js/scroll.min.js')}}"></script>

        <!-- Add icon library -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <style>
        .cover-container{background:url('{{asset('img/bg/home-bg-3.jpg')}}')no-repeat;-webkit-background-size:cover;-moz-background-size:cover;-o-background-size:cover;background-size:cover}
    </style>
    <body id="home" data-spy="scroll" data-target="#menu" data-offset="0" style="font-family: 'Open Sans', sans-serif;">
        <div class="cover-container d-flex w-100 h-100 flex-column pt-5">
            <nav id="header" class="navbar navbar-expand-lg navbar-dark  fixed-top">
                <a class="navbar-brand masthead-brand scroll" href="#home">
                    <img class="img-fluid" src="{{asset('img/logo/logo.png')}}" alt="Sua Logo">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div style="font-weight: bold;" id="menu" class="nav nav-masthead">
                        <a class="scroll nav-item nav-link" href="#home">Home <span class="sr-only">(current)</span></a>
                        <a class="scroll nav-item nav-link" href="#servicos">Serviços</a>
                        <a class="scroll nav-item nav-link" href="#sobre">Sobre</a>
                        <a class="scroll nav-item nav-link" href="#contato">Contato</a>
                    </div>
                </div>
            </nav>

            <main style="margin-top: 15%;margin-bottom: 7%;padding-left: 0;" role="main" class="cover text-center">
                <div style="float: left;margin-left: 9%;" class="text-white principal">
                    <h1 class="mb-0" style="font-size: 60px;">Site de Advocacia</h1>
                    <p style="font-size: 30px;">Advogado</p>
                    
                    <p id="frase" style="font-family: 'Arimo', sans-serif;font-size: 20px;">
                        
                    </p>
                    
                    <a id="button" class="mb-1 scroll" href="#contato">
                        ENTRAR EM CONTATO
                    </a>
                </div>
            </main>

            <div class="text-center">
                <a class="scroll" href="#servicos">
                    <i id="down" style="font-size: 50px;border: 1px solid;border-radius: 10%;padding: 2px 8px" class="fa fa-angle-down"></i>
                </a>
            </div>
        
            <div class="container-fluid mt-5 bg-info" id="servicos" style="margin-bottom: 40%;padding-top: 110px">
                <div class="container">
                    <h1>Serviços</h1>
                </div>
            </div>
            <div class="container-fluid mt-5 bg-success" id="sobre" style="margin-bottom: 40%;padding-top: 110px">
                <div class="container">
                    <h1>Sobre</h1>
                </div>
            </div>
            <div class="container-fluid mt-5 bg-danger" id="contato" style="margin-bottom: 40%;padding-top: 110px">
                <div class="container">
                    <h1>Contato</h1>
                </div>
            </div>
        </div>

        <!--JS files-->
        <script src="{{asset('js/popper.js')}}"></script>
        <script src="{{asset('js/bootstrap.js')}}"></script>

        <!--Script de Animação-->
        <script>
            $('body').scrollspy({ target: '#menu' });
        </script>
        <script src="{{asset('js/header-animation.min.js')}}"></script>
        <script src="{{asset('js/writer.js')}}"></script>
    </body>
</html>