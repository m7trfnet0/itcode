<?php

namespace App\Exports;

use App\AppmodelsEmployee;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use App\models\Employee;

class EmployeeExport implements FromCollection,WithHeadings
{
    public function headings():array{
        return [
    
            'Name',
            'Email',
            'Phone',
            'Salary',
            'Department'
        ];
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return collect(Employee::getEmployee());
    }
}
