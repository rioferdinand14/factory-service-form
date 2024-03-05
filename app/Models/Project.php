<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'input_date',
        'nama_project',
        'requestor',
        'category_project',
        'description_project',
        'status',
        'pic_project',
        'eta_project'
    ];


}
