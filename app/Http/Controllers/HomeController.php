<?php

namespace App\Http\Controllers;

use App\Models\RegrindingAuto;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB as FacadesDB;

class HomeController extends Controller
{
    //untuk redirect ke dashboard 
    public function home()
    {
        return redirect('login');
    }

    public function dashboard()
    {
        return view('dashboard');
    }
}
