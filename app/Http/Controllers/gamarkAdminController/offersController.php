<?php

namespace App\Http\Controllers\gamarkAdminController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class offersController extends Controller
{
    public function offersForm () {
        return view('gamarkAdmin.Createoffers');
    }

    public function store(request $request) {
        return $request;
    }

}
