<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    protected $table = 'smtp_settings';
protected $guarded = [];

    public function getLogoAttribute($value)
    {
    // Assuming your hashed images are stored in the 'public/storage/images' directory
    return $value ? asset('/storage/' . $value): '/psave_logo.png';
    }
}
