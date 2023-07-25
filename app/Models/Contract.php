<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    public $fillable = ['id','descriere','data_intoc','cnp_cui','nume','prenume','durata_luni','suma'];
    use HasFactory;
}
