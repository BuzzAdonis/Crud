<!--Mostrar la lista de empleados-->
@extends('layouts.app')

@section('content')
<div class="container">
        @if (Session::has('mensaje'))
        <div class="alert alert-success alert-dismissible" role="alert">
        {{ Session::get('mensaje') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif


<a href="{{url('employee/create')}}" class="btn btn-success" > Registrate </a>
<br/>
<br/>
<table class="table table-dark">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Departamentos</th>
            <th>Estudios</th>
            <th>Sexo</th>
            <th>Cédula</th>
            <th>Dirección</th>
            <th>Teléfono local</th>
            <th>Teléfono móvil</th>
            <th>Salario base</th>
            <th>Descuentos</th>
            <th>Salario neto</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($employee as $empleado)
        <tr>
            <td>{{$empleado->EmployeeId}}</td>
            <td>{{$empleado->EmployeeName}}</td>
            <td>{{$empleado->EmployeeLastname}}</td>
            <td>{{$empleado->DepartmenId}}</td>
            <td>{{$empleado->StudyId}}</td>
            <td>{{$empleado->Sexo}}</td>
            <td>{{$empleado->Idnumber}}</td>
            <td>{{$empleado->Address}}</td>
            <td>{{$empleado->HomePhone}}</td>
            <td>{{$empleado->MobilePhone}}</td>
            <td>{{$empleado->BaseSalary}}</td>
            <td>{{$empleado->Disconunt}}</td>
            <td>{{$empleado->NetSalary}}</td>
            <td>
                <a href="{{url('/employee/'.$empleado->EmployeeId.'/edit')}}" class="btn btn-primary">Editar</a>
                |
                <form action="{{url('/employee/'.$empleado->EmployeeId)}}" class="d-inline" method="post">
                    @csrf
              {{ method_field('DELETE') }}
                <input type="submit"  class="btn btn-danger"onclick="return confirm('seguro que desas borrarlo?')" value="Borrar">
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>

</table>

</div>
@endsection
