<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Department;
use App\Models\Study;
use Illuminate\support\Facades\Storage;
class EmployeeController extends Controller
{
    public function index()
    {
        /*Mandame estos datos de la Base de datos y coloca solo 5*/
        $datos['employee'] = Employee::paginate(10);
       /* Pasa me los y sacalos por la vista index */
        return view('employee.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    /* Esto muestra el acceso a la ruta create*/
    $deparments=Department::get();
    $studys=Study::get();
        return view('employee.create')->with(compact('deparments','studys'));
        }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     /*Variable          dame todo lo que entre al almacen
      $datosdelempleado=request()->all();
       */
      /*esto son los mensaje de errores  */
      $campos=[
              'EmployeeName'=>'required|string|max:100',
              'EmployeeLastname'=>'required|string|max:100',
              'DepartmenId'=>'required',
              'StudyId'=>'required',
              'Sexo'=>'required',
              'Idnumber'=>'required',
              'Address'=>'required',
              'HomePhone'=>'required',
              'MobilePhone'=>'required',
              'BaseSalary'=>'required',
              'Disconunt'=>'required',
              'NetSalary'=>'required'

      ];

      $this->validate($request, $campos);

      /* ignora el Token */
      $datosdelempleado = request()->except('_token');
      /* si Foto contiene un archivo */
       /*inserta los datos que viene de la vista create */
       Employee::insert($datosdelempleado);
      /*sacalo por un .Json */
      //return response()->json($datosdelempleado);
      //Dame la salida por un mensaje y redirijeme a empleado
      return redirect('employee')->with('mensaje', 'sea registrado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $empleado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        /* usamos el id para desplegar informacion conserniente a ese id*/
        $empleado=Employee::findOrFail($id);
        $deparments=Department::get();
        $studys=Study::get();
        /*va a edit con el id  compact le manda uan variable con los datos de la Base de dato */
        return view('employee.edit', compact('empleado','deparments','studys'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $campos=[
            'EmployeeName'=>'required|string|max:100',
            'EmployeeLastname'=>'required|string|max:100',
            'DepartmenId'=>'required',
            'StudyId'=>'required',
            'Sexo'=>'required',
            'Idnumber'=>'required',
            'Address'=>'required',
            'HomePhone'=>'required',
            'MobilePhone'=>'required',
            'BaseSalary'=>'required',
            'Disconunt'=>'required',
            'NetSalary'=>'required'

    ];

    $this->validate($request, $campos);



      /* ignora el Token y el metodo */
      $datosdelempleado = request()->except('_token','_method');
      /*actualiza la tabla empleados donde tenga el mismo id que llego */
      Employee::where('EmployeeId','=',$id)->update($datosdelempleado);
      /* usamos el id para desplegar informacion conserniente a ese id*/
      $employee=Employee::findOrFail($id);
     /*va a edit con el id  compact le manda uan variable con los datos de la Base de dato */
     //return view('empleado.edit', compact('empleado'));
     return redirect('employee')->with('mensaje','ha sido modificado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    /* usamos el id para desplegar informacion conserniente a ese id*/
    $employee=Employee::findOrFail($id);
    /* si Borrar la Foto Borras los datos */
     /*Pasame el id empleado borrar ese campo */
     Employee::destroy($id);


    /* redirecioname a empleado y mensaje */
    return redirect('employee')->with('mensaje','ha sido eliminado con exito');
    }
}
