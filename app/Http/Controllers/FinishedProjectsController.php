<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FinishedProjectsController extends Controller
{
    public function index(){

        return view('admin.finished_project');
    }
}
