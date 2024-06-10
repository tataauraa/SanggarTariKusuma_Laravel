<?php

namespace App\Http\Controllers;

use App\Models\Penari;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function dashboard(){
        $penari = Penari::count();
        return view('dashboard', compact('penari'));
    }
}
