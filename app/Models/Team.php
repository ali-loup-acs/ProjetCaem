<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;
use Carbon\Carbon;

class team extends Model
{
    use CrudTrait;


    protected $table = 'teams';

    protected $fillable = ['name','firstname','instrument','type','status'];

      @return array
     

}