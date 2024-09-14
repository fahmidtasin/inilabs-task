<?php

namespace App\Http\Controllers;

use App\Entities\Employee;

class EmployeeController extends Controller
{
    public function manageEmployee()
    {
        try {

            $employee = new Employee("Fahmid", 5000.00);


            $name = $employee->getName();
            $salary = $employee->getSalary();


            $employee->increaseSalary(5000.00);


            $updatedSalary = $employee->getSalary();


            return response()->json([
                'Employee Name' => $name,
                'Initial Salary' => $salary,
                'Updated Salary' => $updatedSalary
            ],200, [], JSON_PRETTY_PRINT);

        } catch (\Exception $e) {
            return response()->json([
                'error' => $e->getMessage()
            ], 400);
        }
    }
}
