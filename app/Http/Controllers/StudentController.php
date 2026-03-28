<?php

namespace App\Http\Controllers;

use App\Service\StudentService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StudentController extends Controller
{
   public function __construct(private StudentService $student){}

   public function show()
   {
      return $this->student->get();
   }

   public function create(Request $request)
   {
      $data = $request->only([
         'first_name',
         'last_name',
         'middle_name',
         'email',
         'phone_number',
         'date_of_birth',
         'gender',
         'course',
         'year_level',
         'address'
      ]);

      return $this->student->create($data);
   }

   public function delete($id)
   {
      return $this->student->delete($id);
   }

   public function update(Request $request, $id)
   {
      $data = $request->only([
         'first_name',
         'last_name',
         'middle_name',
         'email',
         'phone_number',
         'date_of_birth',
         'gender',
         'course',
         'year_level',
         'address'
      ]);

      return $this->student->update($id, $data);
   }

}