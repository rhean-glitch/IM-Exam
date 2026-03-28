<?php

namespace App\Service;

use App\Repositories\StudentRepository;

class StudentService
{
    public function __construct(private StudentRepository $studentRepository){}

    public function get()
    {
        return $this->studentRepository->getStudents();
    }

    public function create(array $data)
    {
        return $this->studentRepository->createStudent($data);
    }

    public function update($id, array $data)
    {
        return $this->studentRepository->updateStudent($id, $data);
    }

    public function delete($id)
    {
        return $this->studentRepository->deleteStudent($id);
    }
}