<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplyJob extends Model
{
    protected $table = 'apply_jobs';
    protected $fillable =[
        'name',
        'email',
        'phone',
        'location',
        'currentsalary',
        'expectedsalary',
        'noticeperiod',
        'url',
        'image'];
}
