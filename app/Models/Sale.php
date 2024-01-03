<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;

    protected $table = 'sales';

    protected $fillable = [
        'price',
        'users_id',
        'tours_id',
        'created_at	',
        'updated_at	'
    ];

    public function users()
    {
        return $this->belongsTo(User::class, 'users_id','id');
    }
    public function tours()
    {
        return $this->belongsTo(Tour::class, 'tours_id','id');
    }
}
