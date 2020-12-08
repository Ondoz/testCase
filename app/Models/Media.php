<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;

class Media extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'type',
        'model_id',
        'model_type'
    ];

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($query) {
            $query->uuid = Uuid::uuid4();
        });
    }

    public function mediaable()
    {
        return $this->morphTo();
    }
}
