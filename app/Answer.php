<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Emadadly\LaravelUuid\Uuids;

class Answer extends Model
{
    use Uuids;
    public $incrementing = false;
    protected $keyType = 'string';
    protected $primaryKey = 'id';
    protected $table = 'answers';
    protected $fillable = [
        'question_id',
        'answer_text',
        'is_correct',
    ];
}
