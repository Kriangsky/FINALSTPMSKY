<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeaderDetail extends Model
{
    use HasFactory;

    protected $table = 'tb_leader_details';
    protected $primaryKey = 'leader_id';

    protected $fillable = [
        'user_id',
        'name',
        'email',
        'whatsapp',
        'line',
        'github',
        'birth_date',
        'birth_place',
        'is_binusian',
        'cv',
        'flazz_card',
        'id_card',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
