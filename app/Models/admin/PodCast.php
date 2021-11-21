<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PodCast extends Model
{
    use HasFactory;
    protected  $table = 'pod_casts';
    protected  $fillable = [
        'podcastName',
        'podcastUrl',
        'podcastOrder',
        'cource_id',
    ];
}
