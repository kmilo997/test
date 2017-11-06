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
                La palmera <i class="zmdi zmdi-close NavLateral-title-btn ShowHideMenu"></i>
            </header>
            <figure class="full-width NavLateral-logo">
                <img src="../assets/img/logo.png" alt="material-logo" class="responsive-img center-box">
                <figcaption class="center-align">Lacteos la palmera</figcaption>
            </figure> 
            <div class="NavLateral-Nav">
                <ul class="full-width">
                    <li>
                        <a href="home.html" class="waves-effect waves-light"><i class="zmdi zmdi-desktop-mac zmdi-hc-fw"></i> Productos</a>
                    </li>    
                    <li class="NavLateralDivider"></li>
                     <li>
                        <a href="home.html" class="waves-effect waves-light"><i class="zmdi zmdi-desktop-mac zmdi-hc-fw"></i> Pedidos</a>
                    </li>    
                    <li class="NavLateralDivider"></li>
                     <li>
                        <a href="home.html" class="waves-effect waves-light"><i class="zmdi zmdi-desktop-mac zmdi-hc-fw"></i> Proveedores</a>
                    </li>    
                    <li class="NavLateralDivider"></li>
                     <li>
                        <a href="home.html" class="waves-effect waves-light"><i class="zmdi zmdi-desktop-mac zmdi-hc-fw"></i>	 Clientes</a>
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
                <li style="padding:0 5px;">{{Auth::user()->name}}</li>


                        @guest     
                        @else
                <li>

                <a href="{{ route('logout') }}"  onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" class="tooltipped waves-effect waves-light btn-ExitSystem" data-position="bottom" data-delay="50" data-tooltip="Logout"><i class="zmdi zmdi-power"></i></a>
                 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>

                </li>
                   @endguest
              
                <li>
                   
                </li>
            </ul>   
        </div>

        <!-- Notifications area -->
        
        
       
        <!--ResponsiveTable-->
        

 <div class="container" style="margin-bottom: 128px;">
            <div class="row">
                <h2 class="center-align">Productos</h2>
                <div class="col s12">
                    <table class="responsive-table">
                        <thead>
                            <tr>
                                <th data-field="id">Codigo</th>
                                <th data-field="name">&nbsp; Nombre Producto</th>
                       


														<a href="{{ route('products.create')}}" class="bg-block waves-effect waves-light btn-large bg-success "><i class="zmdi zmdi-plus-circle center"></i>&nbsp;&nbsp;&nbsp;Nuevo</a>



														
													</tr>
												</thead>
												
													
													<tbody>
@foreach($products as $product)
<tr><div text-align="center">
	<h3><td><h4>{{ $product->id}}</h4></td></h3>
	</div>
	<div text-align="center">
	<h3><td><h4>&nbsp;&nbsp;{{ $product->nombre}}</h4></td></h3>
</div>
	<td></font>
   
	<a href="{{ route('products.show',$product->id)}}" class="waves-effect waves-light btn-large bg-info"><i class="zmdi zmdi zmdi-eye left" aria-hidden="true"></i>&nbsp; Ver</a>

	
    </td>


	<td>
	<a href="{{ route('products.edit',$product->id)}}" class="waves-effect waves-light btn-large bg-editar"><i class="zmdi zmdi-edit left" aria-hidden="true"></i>&nbsp; Editar</a>
    
	
    
	</td>

	<td>
		<form action="{{ route('products.destroy',$product->id)}}" method="post">
		{{csrf_field()}}
		<input type="hidden" name="_method" value="DELETE">

<button class="waves-effect waves-light btn-large bg-danger"><i class="zmdi zmdi-delete left" aria-hidden="true"></i>&nbsp; Borrar</button>

		
	
		</form>
</td>

</tr>
@endforeach
</tbody>
</table>
{!! $products->render() !!}	
	</div>
						</div>

						</div>
						</div>
						<div class="fixed-action-btn horizontal" style="bottom: 45px; right: 24px;">
                        <a href="{{ url('/exportarProductos')}}" class="btn-floating btn-large green">
                            <i class="large zmdi zmdi-download"></i>Exportar</a>
                           
                            
						
												</tbody>
												
											</table>
								

       

    
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





