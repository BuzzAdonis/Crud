<!--Formulario de Crecion de Empleados-->
@extends('layouts.app')

@section('content')
<div class="container">
<form action="{{url('/employee')}}" method="post" enctype="multipart/form">
    @csrf
    @include('employee.form',['modo'=>'Crear'])
</form>
</div>
@endsection
