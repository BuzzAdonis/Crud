<h1>{{ $modo }} Employee</h1>

@if (count($errors)>0)

<div class="alert alert-danger" role="alert">
            <ul>
    @foreach ( $errors->all() as $error )
<li>   {{ $error }}   </li>
    @endforeach
            </ul>
</div>

@endif

<!-- Fomulario que tiene datos en comun entre edit y create-->
<div class="form-group">
<label for="EmployeeName">Nombres</label>
<input type="text" name="EmployeeName" class="form-control" value="{{isset($empleado->EmployeeName)?$empleado->EmployeeName:old('EmployeeName')}}"id="EmployeeName"/>
</div>

<div class="form-group">
<label for="EmployeeLastname">Apellidos</label>
<input type="text" name="EmployeeLastname" class="form-control" value="{{isset($empleado->EmployeeLastname )?$empleado->EmployeeLastname:old('EmployeeLastname')}}" id="EmployeeLastname"/>
</div>

<div class="form-group">
    <label for="EmployeeLastname">Departamentos</label>
    <select class="form-control" name="DepartmenId" id="DepartmenId">
        <option value=""></option>

        @foreach ($deparments as $deparment)
            <option value="{{$deparment->DepartmenId}}"
                    {{ isset($empleado->DepartmenId ) ? $empleado->DepartmenId:0== $deparment->DepartmenId ? 'selected': '' }}>
                    {{ $deparment->DepartmentName}}</option>
        @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="EmployeeLastname">Estudios</label>
        <select class="form-control" name="StudyId" id="StudyId">
            <option value=""></option>

            @foreach ($studys as $study)
                <option value="{{$study->StudyId}}"
                        {{ isset($empleado->StudyId ) ? $empleado->StudyId:0== $study->StudyId ? 'selected': '' }}>
                        {{ $study->StudyName}}</option>
            @endforeach
            </select>
        </div>

<div class="form-group">
   <label for="EmployeeLastname">Sexo</label>
    <select class="form-control" name="Sexo" id="Sexo">
        <option value="1"  {{ isset($empleado->Sexo ) ? $empleado->Sexo:''== $study->Sexo ? 'selected': '' }}>Masculino</option>
        <option value="0" {{ isset($empleado->Sexo ) ? $empleado->Sexo:''== $study->Sexo ? 'selected': '' }}>Femenino </option>
        </select>
</div>

<div class="form-group">
    <label for="Idnumber">Cédula</label>
    <input type="text" name="Idnumber" class="form-control" value="{{isset($empleado->Idnumber)?$empleado->Idnumber:old('Idnumber')}}"  id="Idnumber"/>
    </div>

    <div class="form-group">
        <label for="Address">Dirección</label>
        <input type="text" name="Address" class="form-control" value="{{isset($empleado->Address)?$empleado->Address:old('Address')}}"  id="Address"/>
        </div>

        <div class="form-group">
            <label for="HomePhone">Teléfono local</label>
            <input type="text" name="HomePhone" class="form-control" value="{{isset($empleado->HomePhone)?$empleado->HomePhone:old('HomePhone')}}"  id="HomePhone"/>
            </div>

            <div class="form-group">
                <label for="MobilePhone">Teléfono móvil</label>
                <input type="text" name="MobilePhone" class="form-control" value="{{isset($empleado->MobilePhone)?$empleado->MobilePhone:old('MobilePhone')}}"  id="MobilePhone"/>
                </div>

                <div class="form-group">
                    <label for="BaseSalary">Salario base</label>
                    <input type="number" name="BaseSalary" class="form-control" value="{{isset($empleado->BaseSalary)?$empleado->BaseSalary:old('BaseSalary')}}"  id="BaseSalary"/>
                    </div>

                    <div class="form-group">
                        <label for="Disconunt">Descuentos</label>
                        <input type="number" name="Disconunt" class="form-control" value="{{isset($empleado->Disconunt)?$empleado->Disconunt:old('Disconunt')}}"  id="Disconunt"/>
                        </div>

                        <div class="form-group">
                            <label for="NetSalary">Salario neto</label>
                            <input type="number" name="NetSalary" class="form-control" value="{{isset($empleado->NetSalary)?$empleado->NetSalary:old('NetSalary')}}"  id="NetSalary"/>
                            </div>

<input type="submit" class="btn btn-success"value="{{ $modo }} Datos"/>
<a href="{{url('empleado')}}" class="btn btn-primary"> Regresar </a>
