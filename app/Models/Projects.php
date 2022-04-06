<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    use HasFactory;

    // Protected $fillable = ['title', 'url', 'description'];
    Protected $guarded = [];

    public function getRouteKeyName() {

        return 'url';
    }
}
