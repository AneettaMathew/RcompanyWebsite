<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestQuotes extends Model
{
    protected $table = 'request_quotes';
    protected $fillable =[
        'name',
        'companyname',
        'jobtitle',
        'email',
        'phone',
        'url',
        'interested',
        'message'];
}