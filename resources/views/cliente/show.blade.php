@extends('layout2')

@section('content')


    <div class="banner_bottom_w3ls_info">
      <h3 class="agile_heading">Clientes</h3>
      <p>Aca prodremos agragar, eliminar, consultar y borr Clientes</p>
     
    </div>
  </div>

<div class="agile_services">
		<div class="col-md-3 agile_services_img_wthree">
		</div>


<div class="col-md-9 agile_inner_grids ">

<h3 class="agile_heading two"><font color="green">Mostrar Clientes</h3>

	<div class="w3ls-markets-grid_top">

				<div class="col-md-7 w3ls-markets-grid">
				
					<div class="agileits-icon-grid">
					<div class="clearfix"> </div>


					<div class="inner">		
							</div>

						<!-- Content -->
		
							<div class="wrapper">
								<div class="inner">

									
										
										<div class="table-wrapper">
											    <table>
											 	<thead>
													<tr>
													<th><h2><font color="green">NIT </font></h2></th>
														<th><h2><font color="green">Nombre </font></h2></th>
														<th><h2><font color="green">Ciudad</font></h2></th>
														<th><h2><font color="green"> Direccion</font></h2></th>
														<th><h2><font color="green"> Telefono</font> </h2></th>
															<th><h2><font color="green"> Email</font> </h2></th>
</tr>
<a href="{{ route('cliente.index')}}" class="btn btn-success button small btn-block btn-lg pull-rigth" pull-rigth><i class="fa fa-reply fa-2x " aria-hidden="true"></i>&nbsp;  Listado</a>

								
							
									<div class="table-wrapper">
<a href="{{ route('cliente.edit', $cli->id)}}" class="btn btn-warning pull-rigth button small btn-block"><i class="fa fa-pencil fa-2x" aria-hidden="true"></i>&nbsp; Editar</a>
														
													
												</thead>
												
												<tbody>


												<tr><div text-align="center">
	<h3><td><h4>{{ $cli->id}}</h4></td></h3>
	<h3><td><h4>{{ $cli->nombre}}</h4></td></h3>
	</div>
	<div text-align="center">
	<h3><td><h4>{{ $cli->ciudad}}</h4></td></h3>
	<h3><td><h4>{{ $cli->direccion}}</h4></td></h3>
	<h3><td><h4>{{ $cli->telefono}}</h4></td></h3>
	<h3><td><h4>{{ $cli->email}}</h4></td></h3>

	</td>
	</tr>
	</table>
	</tbody>
	{!! $cli->body !!}
	</div>
						</div>
						</div>
						</div>
						<div class="clearfix"> </div>
												</tbody>
												
											</table>
										</div>
											</table>
										</div>
									</section>
</div>
								<div class="clearfix"> </div>
							</div>
</div>
</div></div></div></div>




@stop


        
    <!-- /Main -->

    <!-- Footer -->
       
    <!-- /Footer -->

    <!-- Copyright -->




