<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class profile extends Model
{
    protected $fillable = ['firstname','lastname','company','designation','location','university','sector','skill','email','mobile'];
}
