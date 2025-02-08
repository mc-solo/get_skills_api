<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Upload extends Model
{
    /** @use HasFactory<\Database\Factories\UploadFactory> */
    use HasFactory;

    protected $table = 'uploads';
    protected $fillable = [
        'course_id',
        'title',
        'content',
        'video_url',
        'attachement',
    ];

    public function course() {
        return $this->belongsTo(Course::class);
    }
}
