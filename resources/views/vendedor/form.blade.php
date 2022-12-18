

@extends('api')

@section('content')


<form action="{{ url('/vendedor')}}" method="post">
@csrf

<div class="mb-3">
    <label for="Nombres" class="form-label">Nombres</label>
    <input type="text" class="form-control" value={{$vendedor->Nombres}} id="Nombres" name="Nombres">
   
  </div>
  <div class="mb-3">
    <label for="Apellidos" class="form-label">Apellidos</label>
    <input type="text" class="form-control" value={{$vendedor->Apellidos}} id="Apellidos" name="Apellidos">
   
  </div>
  <div class="mb-3">
    <label for="correo" class="form-label">Correo</label>
    <input type="text" class="form-control" value={{$vendedor->correo}} id="correo" name="correo">
   
  </div>

<button type="sutmit" class="btn btn-primary" value="Enviar">Enviar</button>

</form>





@endsection

