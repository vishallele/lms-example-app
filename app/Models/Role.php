<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    public function Users() {
        $this->belongsToMany(User::class);
    }

    public function Permissions() {
        return $this->belongsToMany(Permission::class);
    }
}
