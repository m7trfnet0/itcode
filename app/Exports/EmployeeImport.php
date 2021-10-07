<?php

namespace App\Exports;

use App\models\Employee;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;


class EmployeeImport implements ToModel,WithHeadingRow
{

    /**
     * 
    * @return \Illuminate\Support\Collection
    */
 
    public function model(array $row)
    {
       return new Employee([
        'name'=>$row['name'],     
        'email'=>$row['email'],
        'phone'=>$row['phone'],
        'salary'=>$row['salary'],
        'department'=>$row['department'],
        ]);
    }
}
