<!--Formulario de Edicion-->
@extends('layouts.app')

@section('content')
<div class="container">
<form action="{{url('/employee/'.$empleado->EmployeeId)}}" method="post" enctype="multipart/form">
    @csrf
    {{ method_field('PATCH') }}
    @include('employee.form',['modo'=>'Editar'])
</form>
</div>
@endsection
