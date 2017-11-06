@extends('layout2')
@section('content')


    <div class="banner_bottom_w3ls_info">
      <h3 class="agile_heading">pedidos</h3>
      <p>Aca prodremos agragar, eliminar, consultar y borr pedido</p>
     
    </div>
  </div>

<div class="agile_services">
		<div class="col-md-3 agile_services_img_wthree">
		</div>


<div class="col-md-9 agile_inner_grids ">

<h3 class="agile_heading two"><font color="green">Mostrar pedido</h3>

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
													<th><h2><font color="green">ID </font></h2></th>
														<th><h2><font color="green">&nbsp;Cliente </font></h2></th>
														<th><h2><font color="green">&nbsp;Producto</font></h2></th>
															<th><h2><font color="green">&nbsp;unidades</font></h2></th>
																<th><h2><font color="green">&nbsp;fecha</font></h2></th>
																<th><h2><font color="green">&nbsp;Total</font></h2></th>
																<th><h2><font color="green">&nbsp;Tipo</font></h2></th>
														
</tr>
<a href="{{ route('pedidoAdmin.index')}}" class="btn btn-success button small btn-block btn-lg pull-rigth" pull-rigth><i class="fa fa-reply fa-2x " aria-hidden="true"></i>&nbsp;  Listado</a>

								
							
									<div class="table-wrapper">
<a href="{{ route('pedidoAdmin.edit', $ped->id)}}" class="btn btn-warning pull-rigth button small btn-block"><i class="fa fa-pencil fa-2x" aria-hidden="true"></i>&nbsp; Despachar</a>
														
													
												</thead>
												
												<tbody>


												<tr><div text-align="center">
	<h3><td><h4>{{ $ped->id}}</h4></td></h3>
	<h3><td><h4>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;{{ $ped->cliente}}</h4></td></h3>
	</div>
	<div text-align="center">
	<h3><td><h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $ped->producto}}</h4></td></h3>

	<h3><td><h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $ped->unidades}}</h4></td></h3>

	<h3><td><h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $ped->fecha}}</h4></td></h3>

	<h3><td><h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $ped->total}}</h4></td></h3>

	<h3><td><h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
@if ($ped->tipo === 0)
    Pendiente
@elseif ($ped->tipo === 1)
    Completado
@elseif ($ped->tipo === 2)
    Cancelado
@endif


	
	
	
	</h4></td></h3>


	</td>
	</tr>
	</table>
	</tbody>
	{!! $ped->body !!}
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




