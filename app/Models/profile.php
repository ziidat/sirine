<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class profile extends Model
{
	protected $table = "profile";
    protected $fillable = ['foto','nama','email','contact','tgl_lahir','alamat','np_user','unit','sub_bagian'];
    use HasFactory;
}
