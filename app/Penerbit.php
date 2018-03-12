<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Penerbit extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $table = "penerbit";
    protected $primaryKey = "id_penerbit";

    protected $fillable = ['nama_penerbit','id_penerbit'];
}
