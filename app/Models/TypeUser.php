<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeUser extends Model
{
    use HasFactory;
    protected $connection = 'cksql';
    protected $table = 'type_user';
 
    protected $fillable = [
        'name',
        'created_at',
        'updated_at',
    ];

    // one to many
    public function detail_user()
    {
        return $this->hasMany(DetailUser::class, 'type_user_id');
    }
}
