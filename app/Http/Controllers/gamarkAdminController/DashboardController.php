<?php

namespace App\Http\Controllers\gamarkAdminController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function indexAdmin () {
        return view('gamarkAdmin.dashboard');
    }


}
