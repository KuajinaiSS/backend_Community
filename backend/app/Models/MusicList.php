<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Music;

class MusicList extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function musics()
    {
        return $this->hasMany(Music::class);
    }

}
