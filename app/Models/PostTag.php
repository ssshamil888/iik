<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostTag extends Model
{
    use HasFactory;

    
    protected $table = 'post_tags'; //Явное указание таблицы в модели
    protected $guarded = false; //Разрешение на добавление в Таблице 
}
