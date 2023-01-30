<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mony extends Model
{
    protected $filleable = ['monysetusd', 'monyseteruo', 'monysetlira', 'monygetusd', 'monygeteruo', 'monygetlira', 'fees'];
}
