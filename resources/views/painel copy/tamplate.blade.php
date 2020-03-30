<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <!-- Twitter meta-->
    <meta property="twitter:card" content="">
    <meta property="twitter:site" content="">
    <meta property="twitter:creator" content="">
    <!-- Open Graph Meta-->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Sistema de Gestão de serviços">
    <meta property="og:title" content="Sistema de Gestão de serviços">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <meta property="og:description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <title>@yield('title')-Sistema Gestão de Serviços</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body class="app sidebar-mini">
    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="/">Home</a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
      <!-- Navbar Right Menu-->
      <ul class="app-nav">
        <li class="app-search">
          <input class="app-search__input" type="search" placeholder="Pesquisar">
          <button class="app-search__button"><i class="fa fa-search"></i></button>
        </li>
        <!-- Menu Notificação-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Show notifications"><i class="fa fa-bell-o fa-lg"></i></a>
          <ul class="app-notification dropdown-menu dropdown-menu-right">
            <li class="app-notification__title">You have 4 new notifications.</li>
            <div class="app-notification__content">
              <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-envelope fa-stack-1x fa-inverse"></i></span></span>
                  <div>
                    <p class="app-notification__message">Lisa sent you a mail</p>
                    <p class="app-notification__meta">2 min ago</p>
                  </div></a></li>
              <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-danger"></i><i class="fa fa-hdd-o fa-stack-1x fa-inverse"></i></span></span>
                  <div>
                    <p class="app-notification__message">Mail server not working</p>
                    <p class="app-notification__meta">5 min ago</p>
                  </div></a></li>
              <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-success"></i><i class="fa fa-money fa-stack-1x fa-inverse"></i></span></span>
                  <div>
                    <p class="app-notification__message">Transaction complete</p>
                    <p class="app-notification__meta">2 days ago</p>
                  </div></a></li>
              <div class="app-notification__content">
                <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-envelope fa-stack-1x fa-inverse"></i></span></span>
                    <div>
                      <p class="app-notification__message">Lisa sent you a mail</p>
                      <p class="app-notification__meta">2 min ago</p>
                    </div></a></li>
                <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-danger"></i><i class="fa fa-hdd-o fa-stack-1x fa-inverse"></i></span></span>
                    <div>
                      <p class="app-notification__message">Mail server not working</p>
                      <p class="app-notification__meta">5 min ago</p>
                    </div></a></li>
                <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-success"></i><i class="fa fa-money fa-stack-1x fa-inverse"></i></span></span>
                    <div>
                      <p class="app-notification__message">Transaction complete</p>
                      <p class="app-notification__meta">2 days ago</p>
                    </div></a></li>
              </div>
            </div>
            <li class="app-notification__footer"><a href="#">See all notifications.</a></li>
          </ul>
        </li>
        <!-- Menu do utilizador-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
          <ul class="dropdown-menu settings-menu dropdown-menu-right">
           
            <li><a class="dropdown-item" href="page-user.html"><i class="fa fa-user fa-lg"></i> Perfil</a></li>
            <li><a class="dropdown-item" href="{{route('logout')}}"><i class="fa fa-sign-out fa-lg"></i> Sair</a></li>
          </ul>
        </li>
      </ul>
    </header>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <!-- <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="" alt="User Image'''app-menu__icon fa fa-pie-chart">-->
        <div>
          <p class="app-sidebar__user-name">  </p>
         
        </div>
      </div>
      <ul class="app-menu">
        <li>
        <a class="app-menu__item" href="/">
        <i class="fa fa-home fa-lg"></i>
          <span class="app-menu__label "> <br> Pagina inicial</span>
        </a>
        </li>
        <li class="treeview">
        <a class="app-menu__item" href="#" data-toggle="treeview">
          <i class="app-menu__icon fa fa-laptop"></i>
          <span class="app-menu__label">Cadastros</span>
          <i class="treeview-indicator fa fa-angle-right"></i></a>
      <ul class="treeview-menu">
            <li><a class="treeview-item" href="{{route('Utilizador-add')}}"><i class="icon fa fa-circle-o"></i>Utilizador</a></li>

              <li><a class="treeview-item" href="{{route('Cliente-add')}}"><i class="icon fa fa-circle-o"></i>Clientes</a></li>
            
            <!--<li><a class="treeview-item" href="#" target="_blank" rel="noopener"><i class="icon fa fa-circle-o"></i> Clientes</a></li> -->
            
         
             <li><a class="treeview-item" href="{{route('Servico-add')}}"><i class="icon fa fa-circle-o"></i> Serviços</a></li>
          </ul>
           </li>
           <li><a class="app-menu__item" href="#">
           <i class="app-menu__icon fa fa-dashboard"></i>
           <span class="app-menu__label">Agendamentos</span>
           </a>
           </li>
           <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview">
           <i class="app-menu__icon fa fa-edit"></i>
           <span class="app-menu__label">Serviços Express</span>
        <i class="treeview-indicator fa fa-angle-right"></i>
        </a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="#"><i class="icon fa fa-circle-o"></i> Novo</a></li>
            <li><a class="treeview-item" href="#"><i class="icon fa fa-circle-o"></i> Consultar</a></li>
            <li><a class="treeview-item" href="#"><i class="icon fa fa-circle-o"></i> Status</a></li>
            
          </ul>
        </li>
        <li class="treeview">
        <a class="app-menu__item" href="#" data-toggle="treeview">
        <i class="app-menu__icon fa fa-th-list"></i>
        <span class="app-menu__label">Orçamentos</span>
        <i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="#"><i class="icon fa fa-circle-o"></i> Basic Tables</a></li>
            <li><a class="treeview-item" href="#"><i class="icon fa fa-circle-o"></i> Data Tables</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a class="app-menu__item" href="#" data-toggle="treeview">
           <i class="app-menu__icon fa fa-file-text"></i>
           <span class="app-menu__label">Relatorios</span>
           <i class="treeview-indicator fa fa-angle-right"></i>
           </a>
          <ul class="treeview-menu">
            <li><a class="treeview-item active" href="#"><i class="icon fa fa-circle-o"></i> Serviços</a></li>
            <li><a class="treeview-item" href="#"><i class="icon fa fa-circle-o"></i> Clientes</a></li>
            <li><a class="treeview-item" href="#"><i class="icon fa fa-circle-o"></i> Orçamentos</a></li>
            <li><a class="treeview-item" href="#"><i class="icon fa fa-circle-o"></i> User Page</a></li>
          
           
          </ul>
        </li>
        <li>
        <a class="app-menu__item" href="docs.html">
        <i class="app-menu__icon fa fa-file-code-o"></i>
        <span class="app-menu__label">Comprovativos</span>
        </a>
        </li>
      </ul>
    </aside>
    <main class="app-content">
    @yield('content')<!--  vai ser substituido pelo conteudo do index-->
    </main>
    <!-- Essential javascripts for application to work-->
    <script src="{{url('/')}}/js/jquery-3.3.1.min.js"></script>
    <script src="{{url('/')}}/js/popper.min.js"></script>
    <script src="{{url('/')}}/js/bootstrap.min.js"></script>
    <script src="{{url('/')}}/js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="{{url('/')}}/js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
    <!-- Google analytics script-->
    <script type="text/javascript">
      if(document.location.hostname == 'pratikborsadiya.in') {
      	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      	ga('create', 'UA-72504830-1', 'auto');
      	ga('send', 'pageview');
      }
    </script>
  </body>
</html>