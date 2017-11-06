<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
@role('cliente')
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>La palmera</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

    </head>

    <body>

        <!-- Top content -->
        <div class="top-content">
          
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1><strong>La Palmera</strong> </h1>
                            <div class="description">
                              
                            </div>
                        </div>
                   <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                          <div class="form-top">
                            <div class="form-top-left">
                              <h3>No esta autorizado</h3>
                              
                                </div>
                           
                            <div class="form-top-right">
                              <i class="fa fa-lock"></i>
                            

                            </div>
                            </div>


                            
                              
                          
                           
                           



                        </div>

                    </div>
                   
                    </div>
                </div>
            </div>
            
        </div>


        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

   </div>
   </body>
   </html>
@endrole

@role('admin')
<!-- 
* Copyright 2016 Carlos Eduardo Alfaro Orellana
-->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Material Dark</title>
    
     <!-- Normalize CSS -->
    <link rel="stylesheet" href="{{asset('../css/normalize.css')}}">
    
     <!-- Materialize CSS -->
    <link rel="stylesheet" href="{{asset('../css/materialize.min.css')}}">
    
     <!-- Material Design Iconic Font CSS -->
    <link rel="stylesheet" href="{{asset('../css/material-design-iconic-font.min.css')}}">
    
    <!-- Malihu jQuery custom content scroller CSS -->
    <link rel="stylesheet" href="{{asset('../css/jquery.mCustomScrollbar.css')}}">
    
    <!-- Sweet Alert CSS -->
    <link rel="stylesheet" href="{{asset('../css/sweetalert.css')}}">
    
    <!-- MaterialDark CSS -->
    <link rel="stylesheet" href="{{asset('../css/style.css')}}">
</head>
<body>
    <!-- Nav Lateral -->
    <section class="NavLateral full-width">
        <div class="NavLateral-FontMenu full-width ShowHideMenu"></div>
        <div class="NavLateral-content full-width">
            <header class="NavLateral-title full-width center-align">
                Material Dark <i class="zmdi zmdi-close NavLateral-title-btn ShowHideMenu"></i>
            </header>
            <figure class="full-width NavLateral-logo">
                <img src="../assets/img/logo.png" alt="material-logo" class="responsive-img center-box">
                <figcaption class="center-align">Material Dark Admin Template</figcaption>
            </figure> 
            <div class="NavLateral-Nav">
                <ul class="full-width">
                    <li>
                        <a href="home.html" class="waves-effect waves-light"><i class="zmdi zmdi-desktop-mac zmdi-hc-fw"></i> Dashboard</a>
                    </li>    
                    <li class="NavLateralDivider"></li>
                     <li>
                        <a href="home.html" class="waves-effect waves-light"><i class="zmdi zmdi-desktop-mac zmdi-hc-fw"></i> Dashboard</a>
                    </li>    
                    <li class="NavLateralDivider"></li>
                     <li>
                        <a href="home.html" class="waves-effect waves-light"><i class="zmdi zmdi-desktop-mac zmdi-hc-fw"></i> Dashboard</a>
                    </li>    
                    <li class="NavLateralDivider"></li>
                     <li>
                        <a href="home.html" class="waves-effect waves-light"><i class="zmdi zmdi-desktop-mac zmdi-hc-fw"></i> Dashboard</a>
                    </li>    
                    <li class="NavLateralDivider"></li>
                </ul>
            </div>  
        </div>  
    </section>

    <!-- Page content -->
    <section class="ContentPage full-width">
        <!-- Nav Info -->
        <div class="ContentPage-Nav full-width">
            <ul class="full-width">
                <li class="btn-MobileMenu ShowHideMenu"><a href="#" class="tooltipped waves-effect waves-light" data-position="bottom" data-delay="50" data-tooltip="Menu"><i class="zmdi zmdi-more-vert"></i></a></li>
                <li><figure><img src="assets/img/user.png" alt="UserImage"></figure></li>
                <li style="padding:0 5px;">User Name</li>
                <li><a href="#" class="tooltipped waves-effect waves-light btn-ExitSystem" data-position="bottom" data-delay="50" data-tooltip="Logout"><i class="zmdi zmdi-power"></i></a></li>
              
                <li>
                   
                </li>
            </ul>   
        </div>

        <!-- Notifications area -->
        
        
       
        <!--ResponsiveTable-->
        @yield('')
       

    
    <!-- Sweet Alert JS -->
    <script src="{{asset('js/sweetalert.min.js')}}"></script>
    
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-2.2.0.min.js"><\/script>')</script>
    
    <!-- Materialize JS -->
    <script src="{{asset('js/materialize.min.js')}}"></script>
    
    <!-- Malihu jQuery custom content scroller JS -->
    <script src="{{asset('js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    
    <!-- MaterialDark JS -->
    <script src="{{asset('js/main.js')}}"></script>
</body>
</html>
@endrole
