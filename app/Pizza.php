<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    protected $filiable = ['imagePath', 'title', 'description', 'price'];
}
