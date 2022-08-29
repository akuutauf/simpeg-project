<?php

namespace App\Http\Controllers\API\Employee;
use App\Models\Employee;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    //
    public function getData(Request $request)
    {
        try {
            $data = Employee::with(['employeeType'])->get();
            return isset($request->datatable) && $request->datatable == 'true' ? DataTables::of($data)->make(true) : response()->json([
                'status' => true,
                'data' => $data
            ]);
        } catch (Exception $e) {
            return response()->json([
                'message' => $e->getMessage(),
                'trace' => $e->getTrace()
            ], 500);
        }
    }
}
