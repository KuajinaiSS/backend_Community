<?php

namespace App\Models;

use App\Models\MusicList;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Music extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'file_path',
        'music_list_id'
    ];

    public function musicList()
    {
        return $this->belongsTo(MusicList::class);
    }

}


