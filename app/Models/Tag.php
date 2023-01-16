<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    
    protected $table = 'tags'; //Явное указание таблицы в модели
    protected $guarded = false; //Разрешение на добавление в Таблице
}
