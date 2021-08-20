<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrashType extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'with_article', 'color', 'text_color'];
}
