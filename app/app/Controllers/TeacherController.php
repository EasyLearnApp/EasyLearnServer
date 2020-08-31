<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     * @param void
     * 
     * @return \CodeIgniter\Http\Response
     */
    public function index(): \CodeIgniter\Http\Response
    {
        $query = (\Config\Database::connect())->table('teachers')->get()->getResult();

        return $this->response->setContentType('application/json')->setJSON($query);
    }

    /**
     * Display the specified resource.
     * 
     * @param void
     * 
     * @return \CodeIgniter\Http\Response
     */
    public function show(int $id): \CodeIgniter\Http\Response
    {
        $query = (\Config\Database::connect())->table('teachers')->where('id', $id)->get()->getResult();

        return $this->response->setContentType('application/json')->setJSON($query[0]);
    }
}
