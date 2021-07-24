<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cource extends Model
{
    use HasFactory;
    protected  $table = 'cources';
    protected  $fillable = [
        'cource_title',
        'cource_category',
        'cource_description',
        'cource_short_description',
        'thumbline',
        'preview',
        'instructure',
        'video',
        'user_id',
        'quizze_id',
        ];

}
