@extends('layout2')

@section('content')
    <!-- Main -->


    <div class="banner_bottom_w3ls_info">
      <h3 class="agile_heading">Pedido</h3>
      <p>Aca prodremos agragar, eliminar, consultar y borr Pedido</p>
     
    </div>
  </div>

<div class="agile_services">	
		<div class="col-md-3 agile_services_img_wthree">
		</div>


<div class="col-md-7 agile_inner_grids ">

<h3 class="agile_heading two"><font color="green">NUEVO PEDIDO</h3>

	<div class="w3ls-markets-grid_top">

				<div class="col-md-10 w3ls-markets-grid">
				
					<div class="agileits-icon-grid">
					


					<div class="inner">		
							</div>
						<!-- Content -->




<div class="wrapper">
							
							
								

<a href="{{ route('pedidoAdmin.index')}}" class="btn btn-success button small btn-block btn-lg pull-rigth" pull-rigth><i class="fa fa-reply fa-2x" aria-hidden="true"></i>&nbsp;  Listado</a>



								
							

						
				
									
									




@include('pedido.fragment.error')


{!! Form::open(['route'=> 'pedido.store']) !!}

@include('pedido.fragment.form')

{!! Form::close() !!}






</div>




</div>
</div>

</div>

</div>
<div class="clearfix"> </div>
</div>
</div>


<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript">

$( "#producto" ).change(function() {
calcular();
});

$( "#unidades" ).blur(function() {
calcular();
});

function calcular(){
var producto = $("#producto option:selected").html().split(" -:- ");
var nombre = producto[0];
var precio = producto[1];
var maximo = producto[2];
 var unidades = $("#unidades").val();
 if(unidades == ""){
alert("digite las unidades de "+nombre);
 //}else if(unidades > maximo || unidades < 1){
   }else if(unidades < 1){
   alert("digite minimo 1  y maximo "+maximo+" unidades de "+nombre);
 }else{
$("#total").val(precio*unidades);
}
}
</script>

<!-- /Main -->

    <!-- Footer -->
       
    <!-- /Footer -->

    <!-- Copyright -->
    @endsection
       





