<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClassController extends Controller
{
    public function hello () {
        echo "ClassController - hello Action - hoc-laravel";
    }
    public function reactjs () {
        echo "ClassController - reactjs Action - hoc-reactjs";
    }
}
