<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Employee;
use App\Exports\EmployeeExport;
use App\Exports\EmployeeImport;
use Excel;
class EmployeeController extends Controller
{
    public function addEmployee(){
        $employees=[
            ['name'=>'Ahmed','email'=>'ahmed@gmail.com','phone'=>'01124717700','salary'=>'2000','department'=>'Accounting'],
            ['name'=>'Mohammed','email'=>'mohammed@gmail.com','phone'=>'01124711700','salary'=>'2000','department'=>'Marketting'],
            ['name'=>'Ali','email'=>'ali@gmail.com','phone'=>'01020202052','salary'=>'2000','department'=>'Quality'],
            ['name'=>'Mostafa','email'=>'mostafa@gmail.com','phone'=>'0212415415','salary'=>'2000','department'=>'Accounting'],
            ['name'=>'Abdo','email'=>'abdo@gmail.com','phone'=>'0124548541541 ','salary'=>'2000','department'=>'Marketting'],
            ['name'=>'Hassan','email'=>'hassan@gmail.com','phone'=>'01124545121','salary'=>'2000','department'=>'Quality']
        ];
        Employee::insert($employees);
        return'Record Are Inserted';
    }
    public function exportExcel(){
        return Excel::download(new EmployeeExport,'EmployeeLiset.xlsx');
    }
    public function exportCsv(){
        return Excel::download(new EmployeeExport,'EmployeeLiset.csv');
    }
    public function importForm(){
        return view('importform');
    }
    public function import(Request $request){
        Excel::import(new EmployeeImport,$request->file);
        return 'Recoerd Are Import Date Succss';
    }
}
