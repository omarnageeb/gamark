<?php

namespace App\Http\Controllers\gamarkAdminController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class crudController extends Controller
{
    public function offersForm () {
        return view('gamarkAdmin.offers');
    }

}
