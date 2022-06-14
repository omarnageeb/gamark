<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class creatOffers extends Model
{

    protected $table = "createdOffer";
    protected $Fillable = ['name, price, details, created_at, updated_at' ];
    protected $hidden = ['created_at, updated_at'];
 }
