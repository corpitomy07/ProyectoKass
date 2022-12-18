@extends('api')
@section('content')



@if(Session::has('mensaje'))
{{Session::get('mensaje')}}

@endif



<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Correo</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($vendedors as $vendedor)
        <tr>
            <td> {{ $vendedor->id }} </td>
             <td> {{ $vendedor->Nombres }} </td>
             <td> {{ $vendedor->Apellidos }} </td>
             <td> {{ $vendedor->correo }} </td>
             <td>
                <a href="{{ url('/vendedor/'.$vendedor->id.'/edit') }}">
                    Editar 


                </a>
                | 
                <form action=" {{ url('/vendedor/'.$vendedor->id ) }} " method="post">
                @csrf
                {{ method_field('DELETE') }}
                <input type="submit"  onclick="return confirm ('¿Quieres borrar?') "  value="Borrar">
                </form>
                
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
