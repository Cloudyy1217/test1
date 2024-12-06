<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class HomeController extends Controller
{
    public function home() {
        return view('home');
    }

    public function members() {
        $fullmembers = User::all();

        //dd ($fullmembers); hiển thị toàn bộ mảng
        return view('member', ["thanhvien" => $fullmembers]);
    }

    public function deleteMember($id) {
        User::destroy($id);

        return redirect('/thanh-vien');
    }
}
