<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Student extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'tempat_lahir', 'tanggal_lahir', 'asalSekolah', 'status'];

    public function User(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
