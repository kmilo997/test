@extends('layout2')

@section('content')
    <!-- Main -->


    <div class="banner_bottom_w3ls_info">
      <h3 class="agile_heading">Clientes</h3>
      <p>Aca prodremos agragar, eliminar, consultar y borr Clientes</p>
     
    </div>
  </div>

<div class="agile_services">	
		<div class="col-md-3 agile_services_img_wthree">
		</div>


<div class="col-md-7 agile_inner_grids ">

<h3 class="agile_heading two"><font color="green">NUEVO Clientes</h3>

	<div class="w3ls-markets-grid_top">

				<div class="col-md-10 w3ls-markets-grid">
				
					<div class="agileits-icon-grid">
					


					<div class="inner">		
							</div>
						<!-- Content -->




<div class="wrapper">
							
							
								

<a href="{{ route('cliente.index')}}" class="btn btn-success button small btn-block btn-lg pull-rigth" pull-rigth><i class="fa fa-reply fa-2x" aria-hidden="true"></i>&nbsp;  Listado</a>



								
							

						
				
									
									




@include('cliente.fragment.error')


{!! Form::open(['route'=> 'cliente.store']) !!}

@include('cliente.fragment.form')

{!! Form::close() !!}






</div>




</div>
</div>

</div>

</div>
<div class="clearfix"> </div>
</div>
</div>

<!-- /Main -->

    <!-- Footer -->
       
    <!-- /Footer -->

    <!-- Copyright -->
    @endsection
       





