@extends('layout2')

@section('content')



    <div class="banner_bottom_w3ls_info">
      <h3 class="agile_heading">pedido</h3>
      <p>Aca prodremos agragar, eliminar, consultar y borr pedido</p>
     
    </div>
  </div>

<div class="agile_services">
		<div class="col-md-3 agile_services_img_wthree">
		</div>


<div class="col-md-7 agile_inner_grids ">

<h3 class="agile_heading two"><font color="green">EDITAR PEDIDO</h3>

	<div class="w3ls-markets-grid_top">

				<div class="col-md-10 w3ls-markets-grid">
				
					<div class="agileits-icon-grid">
					
<!-- Content -->
				
								<div class="inner">
									
								</div>
				
						
    <!-- Main -->
  <div class="wrapper">

							
								

<a href="{{ route('pedidoAdmin.index')}}" class="btn btn-success button small btn-block btn-lg pull-rigth" pull-rigth><i class="fa fa-reply fa-2x" aria-hidden="true"></i>&nbsp;  Listado</a>


	


@include('pedido.fragment.error')


{!! Form::model($ped,['route'=> ['pedido.update', $ped->id] , 'method' => 'PUT'])  !!}

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

    <!-- Footer -->
       
    <!-- /Footer -->

    <!-- Copyright -->
      
      @stop





