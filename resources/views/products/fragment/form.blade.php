<div class="form-group">

{!! Form::label('id','codigo')!!}
{!! Form::number('id',null,['class'=> 'form-control'])!!}
</div>

<div class="form-group">

{!! Form::label('nombre','Nombre del producto')!!}
{!! Form::text('nombre',null,['class'=> 'form-control'])!!}
</div>

<div class="form-group">

{!! Form::label('minimo','Cantidad')!!}
{!! Form::number('minimo',null,['class'=> 'form-control'])!!}
</div>

<div class="form-group">

{!! Form::label('fecha_vencimiento','Fecha de vencimiento')!!}
{!! Form::date('fecha_vencimiento',null,['class	'=> 'form-control'])!!}
</div>


<div class="form-group">

{!! Form::label('precio_venta','Precio venta')!!}
{!! Form::number('precio_venta',null,['class	'=> 'form-control'])!!}
</div>

<div class="form-group">

{!! Form::submit('Guardar',['class '=> ' btn-large waves-effect bg-block waves-light bg-success zmdi zmdi-download center'])!!}
</div>	