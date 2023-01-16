<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories'; //Явное указание таблицы в модели
    protected $guarded = false; //Разрешение на добавление в Таблице
}
