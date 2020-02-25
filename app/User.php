<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //protected private public 
    // eloquent
    // querybuilder
    protected $table="users";
    protected $primaryKey="id";
    protected $fillable=['name','lastname','email'];
}
