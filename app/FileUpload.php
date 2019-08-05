<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FileUpload extends Model
{
    protected $table = 'file_uplodads'; 

    protected $fillable = ['filename'];  
}
