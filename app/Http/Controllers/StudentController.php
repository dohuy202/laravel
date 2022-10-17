<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\UpdateStudentRequest;

class StudentController extends Controller
{
    public function get_all_student(){
        $students = Student::all();
        return view('student_manager', ['students' => $students]);
    }
    public function get_student_by_id($id){
        // Tìm đến đối tượng muốn update
        $student = Student::findOrFail($id);

        // điều hướng đến view edit student và truyền sang dữ liệu về student muốn sửa đổi
        return view('student_edit', compact('student'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreStudentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStudentRequest $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(UpdateStudentRequest $request, $id)
    {
        // Tìm đến đối tượng muốn update
        $student = Student::findOrFail($id);
        $student->update([
            'id' => $request->id,
            'fullname' => $request->fullname,
            'birthday' => $request->birthday,
            'address' => $request->address
        ]);
        return redirect()->route('student_manager')
                        ->with('success','User updated successfully');
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateStudentRequest  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStudentRequest $request, Student $student)
    {
        // $student->update([
        //     'id' => $request->id,
        //     'fullname' => $request->fullname,
        //     'birthday' => $request->birthday,
        //     'address' => $request->address
        // ]);
        
        // return redirect('student/' . $student->id . '/edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
    }
}
