<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailUser extends Model
{
    use HasFactory;

    protected $connection = 'cksql';
    
    protected $table = 'detail_user';

    protected $fillable = [
        'user_id',
        'type_user_id',
        'created_at',
        'updated_at',
    ];

    // one to mnany
    public function type_user()
    {
        return $this->belongsTo(TypeUser::class, 'type_user_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
