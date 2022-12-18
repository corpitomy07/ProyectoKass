


<form action=" {{ url('/vendedor/'.$vendedor->id ) }} " method="POST">
    @csrf

    {{ method_field('PATCH') }}
    @include('vendedor.form')
   
</form>


