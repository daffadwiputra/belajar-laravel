<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Buku extends Model
{
    // public $timestamps = false;

    // soft deletes
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $table = "buku";
    protected $primaryKey = "id_buku";

    protected $fillable = ['judul', 'id_penerbit'];

    public function penerbit(){
        return $this->belongsTo('App\Penerbit', 'id_penerbit', 'id_penerbit');
    }
}
