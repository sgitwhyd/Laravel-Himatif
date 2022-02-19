<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserData extends Model
{
    use HasFactory;

    public $table = 'users_data';

    protected $guarded = ['id'];

    public function user()
    {
        return$this->hasOne(User::class);
    }
}
