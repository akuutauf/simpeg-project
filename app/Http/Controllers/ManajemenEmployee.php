<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\EmployeeType;
use Illuminate\Http\Request;

class ManajemenEmployee extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'employee' => Employee::all()
        ];
        return view('admin.employee.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'action' => route('admin.store.employee')
        ];
        $employee_type = EmployeeType::distinct()->get();

        return view('admin.employee.create', $data, compact('employee_type'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Employee::create($request->all());
        return redirect()->route('admin.employee');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = [
            'employee'  => Employee::find($id),
            'action' => route('admin.update.employee', $id)
        ];
        $employee_type = EmployeeType::distinct()->get();

        return view('admin.employee.form', $data, compact('employee_type'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        Employee::where('id', $request->id)->update($request->only(['employee_type_id', 'nip', 'nidn', 'name', 'gender', 'phone', 'email', 'birthplace', 'birthdate', 'religion', 'address', 'city', 'district', 'province', 'nationality', 'postal_code', 'back_degree', 'front_degree']));
        return redirect()->route('admin.employee');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Employee::where('id', $id)->delete();
        return redirect()->route('admin.employee');
    }
}
