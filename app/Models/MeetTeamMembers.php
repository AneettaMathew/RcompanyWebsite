<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MeetTeamMembers extends Model
{
    protected $table = 'meet_team_members';
    protected $fillable =[
        'profile_name',
        'profile_role',
        'profile_image'];
}
