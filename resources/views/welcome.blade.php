<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="{{asset('jquery.mask.js')}}"></script>
<script src="{{asset('mascaras.js')}}"></script>

<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
        <title>MCJ Elétrica</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style type="text/css">

                .dropdown-submenu .dropdown-menu {
                top: 0;
                left: 100%;
                margin-top: 1px;
                border-top-color: #000000;
                border-bottom-color: #000000;
                background-color: #0000000;
                }

                .dropdown-header{
                  font-size: 12px;
                }
            html, body {
                background-color: #fff;
                color: black;
                font-family: 'Arial', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #000000;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .navbar-default{
              border-top-color: #000000;
              border-bottom-color: #000000;
              background-color: #0000000;
            }

           
        </style>
    </head>
    <body>
        <nav class="navbar navbar-inverse bg-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">

      <a class="navbar-brand" href="/">MCJ Elétrica</a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Orçamentos<span class="caret"></span></a>
          <ul class="dropdown-menu">
              <li class="dropdown-toggle"><a class="test" tabindex="-1" href="#">Orçamentos</a> </li>
            </li>
          </ul>
    <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Compras<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li class="dropdown-toggle"><a class="test" tabindex="-1" href="#">Cotações</a>
              <li class="dropdown-toggle"><a class="test" tabindex="-1" href="{{route('fornecedores')}}">Cadastro de Fornecedor</a> </li>
              <li class="dropdown-toggle"><a class="test" tabindex="-1" href="{{route('obras')}}">Cadastro de Obra</a>
              <li class="dropdown-toggle"><a class="test" tabindex="-1" href="#">Pedidos</a>
            </li>
          </ul>
      <li class="dropdown">
          <a href="#" class="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Usuários</a>

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
          <!-- /Alertas Bootstrap -->
        <div class="container">
                   @if(Session::has('success'))
            <div class="alert alert-success fade in" role="alert">
                   {{session('success')}}
            </div>
                   @endif 

                   @if(Session::has('error'))
             <div class="alert alert-danger fade in" role="alert">
                {{session('error')}}
            </div>
                @endif


<script type="text/javascript">
  //Fade Out Alertas
            $(document).ready(function () {
             
            window.setTimeout(function() {
                $(".alert").fadeTo(1000, 0).slideUp(200, function(){
                    $(this).remove(); 
                });
            }, 1500);
             
            });

</script>

@yield('content')

    </body>
</html>
