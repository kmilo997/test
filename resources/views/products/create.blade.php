
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Material Dark</title>
    
     <!-- Normalize CSS -->
    <link rel="stylesheet" href="../css/normalize.css">
    
     <!-- Materialize CSS -->
    <link rel="stylesheet" href="../css/materialize.min.css">
    
     <!-- Material Design Iconic Font CSS -->
    <link rel="stylesheet" href="../css/material-design-iconic-font.min.css">
    
    <!-- Malihu jQuery custom content scroller CSS -->
    <link rel="stylesheet" href="../css/jquery.mCustomScrollbar.css">
    
    <!-- Sweet Alert CSS -->
    <link rel="stylesheet" href="../css/sweetalert.css">
    
    <!-- MaterialDark CSS -->
    <link rel="stylesheet" href="../css/style.css">
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
                    <li>
                        <a href="home.html" class="waves-effect waves-light"><i class="zmdi zmdi-desktop-mac zmdi-hc-fw"></i> Dashboard</a>
                    </li> <li>
                        <a href="home.html" class="waves-effect waves-light"><i class="zmdi zmdi-desktop-mac zmdi-hc-fw"></i> Dashboard</a>
                    </li> 
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
                <li><figure><img src="../assets/img/user.png" alt="UserImage"></figure></li>
                <li style="padding:0 5px;">{{Auth::user()->name}}</li>
                <li><a href="{{ route('logout') }}" class="tooltipped waves-effect waves-light btn-ExitSystem"  data-position="bottom" data-delay="50" data-tooltip="Logout"><i class="zmdi zmdi-power"></i></a></li>
                
               
                
                       
                    </a>
                </li>
            </ul>   
        </div>

 <h2 class="center-align">Añadir producto</h2>

							 <div class="container">
							 
								


<a href="{{ route('products.index')}}" class="bg-block waves-effect waves-light btn-large bg-success "><i class="zmdi zmdi-long-arrow-return center"></i>&nbsp;&nbsp;&nbsp;Listado</a>
<br>
							
							

						
				
									
									




@include('products.fragment.error')


{!! Form::open(['route'=> 'products.store']) !!}

@include('products.fragment.form')

{!! Form::close() !!}




</div>




</div>
</div>


</div>
</div>

 <script src="js/sweetalert.min.js"></script>
    
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-2.2.0.min.js"><\/script>')</script>
    
    <!-- Materialize JS -->
    <script src="js/materialize.min.js"></script>
    
    <!-- Malihu jQuery custom content scroller JS -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    
    <!-- MaterialDark JS -->
    <script src="js/main.js"></script>
</body>
</html>
<!-- /Main -->

    <!-- Footer -->
       
    <!-- /Footer -->

    <!-- Copyright -->
  
       





