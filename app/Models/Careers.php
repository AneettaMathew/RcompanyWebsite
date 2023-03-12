<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Careers extends Model
{
    protected $table = 'careers';
    protected $fillable =[
        'job_position',
        'posted_date',
        'job_description',
        'requirements'];
}
