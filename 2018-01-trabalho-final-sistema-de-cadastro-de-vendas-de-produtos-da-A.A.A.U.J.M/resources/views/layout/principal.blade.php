<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sistema de Cadastro de Vendas de Produtos da A.A.A.U.J.M</title>
  <meta name="keywords" content="Store, web sistems">
  <meta name="description" content="Registro de vendas">
      
  <meta name="robots" content="index, follow">
  <meta name="author" content="Rafael Junior">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
   
 
  
 
  <!--<link rel="stylesheet" href="{{ asset('css2/bootstrap.css') }}">-->
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">


  <link href='https://fonts.googleapis.com/css?family=Lato:400,300,700' rel='stylesheet' type='text/css'>
  <script language = "javascript"src="js/funcoes.js"></script>
  <link rel="icon" href="img/logo-vendas.png">
	
 
  </head>
  <body>

<header class="cabecalho container">

    @if ( Session::has('mensagem') )
      <p class="alert alert-info">{{ Session::get('mensagem') }}</p>
    @endif    
    <!-- Flash: mensagem //-->

     <!-- Usuario autenticado //-->
    @if ( Auth::check() )
      <nav class="navbar navbar-light bg-secondary">
        <span class="text-white">Usuário: {{ Auth::user()->name }}
          @if ( Auth:: user()->type==1 )
            Administrador do Sistema
          @else
            Usuário
          @endif  
        </span>
      </nav>
    @endif
   
   <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <!--<li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                            <!--<li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>-->
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a style="float: right;" class="linkcomobutton" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>

     <a href="#"><h1 class="logo"> Designer </h1></a>

          <div id= "cabecalho-design">
               <h5>Athletic<span> Store</span> </h>
          </div>

          <button class="btn-menu background-gradient"><i class="fa fa-bars fa-lg"></i></button>
          
          <nav class="menu">
            <a class="btn-close"><i class="fa fa-times"></i></a>
              <ul>
                   <li><a href="{{ route('comerciante.index') }}">Vendedores</a></li>
                   <li><a href="{{ route('produto.index') }}">Produtos</a></li>
                   <li><a href="{{ route('associado.index') }}">Associados</a></li>
                   <li> <a href="{{ route('venda.index') }}">Vendas</a></li>
              </ul>
          </nav>  
          
</header> 

    <!-- CONTEUDO //-->
        <div class="banner container">

            <div class="title">
                <h2> LOUCOMOTIVA</br></br>
                DE TODAS AS LOUCURAS A MAIS SÃ!!</h2>

            </div>
           
        </div>


@yield('conteudo')


 
 <footer class="rodape container background-gradient">

          <div class="social-icons">
            <a href="http://www.facebook.com" target="_blank"><i class="fa fa-facebook"></i></a>
            <a href="http://twitter.com" target="_blank"><i class="fa fa-twitter"></i></a>
          </div>
          <p class="copyright">
                      Empreendedorismo 2018/1 @Devlopment.
        </footer>       
        
        <!-- jquery --> 
        <script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script>
        $(".btn-menu").click(function(){
          $(".menu").show();
        });
        $(".btn-close").click(function(){
          $(".menu").hide();
        });

        
        </script>

  </body>
</html>