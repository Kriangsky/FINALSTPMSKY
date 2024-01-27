<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $table = 'tb_teams';
    protected $primaryKey = 'team_id';

    protected $fillable = [
        'leader_id',
        'name',
    ];

    public function leaderDetail()
    {
        return $this->belongsTo(LeaderDetail::class, 'leader_id');
    }
}
