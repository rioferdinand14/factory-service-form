<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'input_date',
        'eta_project',
        'nama_project',
        'detail',
        'requestor',
        'category_project',
        'status',
        'pic_project',
        'description_project',
        'photos_img'
        
    ];


}
