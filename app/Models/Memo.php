<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Memo extends Model
{
    use HasFactory;
    protected $fillable =[ 'title', 'photo_path', 'pattern', 'pattern_path', 'fabric', 'fabric_path', 'memo'];
    public function user()
    {
      return $this->belongsTo(User::class);
    }
    public function liked()
    {
        return $this->belongsToMany(User::class)->withTimestamps();
    }
}
