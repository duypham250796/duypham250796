<?php

namespace App\Admin\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
class Editor extends Model
{
    use Notifiable;
    protected $table = 'editor';
    
    protected $fillable = [
        'title', 'description',
    ];
}
