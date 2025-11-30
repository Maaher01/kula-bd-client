<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GeneralQuery extends Model
{
    use HasFactory;

    protected $table = 'generalqueries';
    protected $fillable = [
        '_name',
        '_email',
        '_phone',
        '_subject',
        '_message',
    ];
}
