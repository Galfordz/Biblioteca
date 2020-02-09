<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = "menu";
    protected $fillable = ['nombre', 'url', 'icono']; // Campos que se podrán cargar de forma masiva
    protected $guarded = ['id']; // campos que laravel garantizara no ser modificado
    public $timestamp = false;
}

