<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hvh extends Model
{
	protected $table = "hvh";
    protected $attributes  = ['np_user'=>'0','jml_rim'=>0,'tgl_verif'=>0,'lembur'=>0,'keterangan'=>0];
    protected $fillable = ['np_user','np_nama','jml_rim','tgl_verif','lembur','keterangan'];
    public $primarykey = 'id';
    use HasFactory;
}
