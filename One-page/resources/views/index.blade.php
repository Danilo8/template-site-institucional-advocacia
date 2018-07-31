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
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
        <!--CSS files-->
        <link rel="stylesheet" href="{{ asset('css/style-cover.min.css') }}">

        <!--JS files-->
        <script src="{{asset('js/scroll.min.js')}}"></script>
    </head>
    <style>
        .cover-container{background:url('{{asset('img/bg/home-bg-2.jpg')}}') no-repeat;-webkit-background-size:cover;-moz-background-size:cover;-o-background-size:cover;background-size:cover}
    </style>
    <body id="home" data-spy="scroll" data-target="#menu" data-offset="0" style="font-family: 'Open Sans', sans-serif;">
        <div class="cover-container d-flex w-100 h-90 p-3 flex-column mt-5">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
                <a class="navbar-brand masthead-brand" href="{{url('/')}}">
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

           
        </div>

        <!--Script de Animação-->
        <script>
            $('body').scrollspy({ target: '#menu' });
            $(function () {
                $('[data-toggle="tooltip"]').tooltip()
            })
        </script>
    </body>
</html>