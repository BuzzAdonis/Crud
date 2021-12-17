<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $table = "employee";
    protected $primaryKey = 'EmployeeId';
    public $timestamps = false;
    protected $fillable = [
        "EmployeeName",
        "EmployeeLastname",
        "DepartmenId",
        "StudyId",
        "Sexo",
        "Idnumber",
        "Address",
        "HomePhone",
        "MobilePhone",
        "BaseSalary",
        "Disconunt",
        "NetSalary"
    ];


}
