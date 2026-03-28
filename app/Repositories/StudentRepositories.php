<?php

namespace App\Repositories;

use App\Models\Student;

class StudentRepository
{
    public function getStudents()
    {
        return Student::all();
    }

    public function createStudent($data)
    {
        return Student::create($data);
    }

    public function deleteStudent($id)
    {
        $student = Student::findOrfail($id);

        return $student->delete();
    }

    public function updateStudent($id, array $data)
    {
        $student = Student::findOrFail($id);
        $student->update($data);

        return $student->fresh();
    }


}