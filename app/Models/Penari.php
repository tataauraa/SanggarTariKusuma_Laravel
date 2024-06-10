<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penari extends Model
{
    use HasFactory;
    protected $table = 'penaris';
    protected $primaryKey = 'ID_Penari';
    public $incrementing = true;
    protected $fillable = ['Nama', 'Umur', 'Alamat'];
    public $timestamps = false;

}
