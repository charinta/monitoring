<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class PO extends Model
{
    use HasFactory;
    // Disable timestamps
    public $timestamps = false;
    protected $primaryKey = 'id';

    // membaca data pada tabel
    protected $table = 'tbl_PO';

    // menentukan variabel yang diisi
    protected $fillable = [
        'PO_No',
        'Doc_Date',
        'PR_Deliver',
        'PO1_Date',
        'PO1_PIC',
        'PO1_Aging',
        'PO2_Date',
        'PO2_PIC',
        'PO2_Aging',
        'PO_Status',
    ];

    // agar date_created bisa terisi, bukan pake created_at
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($po) {
            $po->date_created = Carbon::now('Asia/Jakarta');
        });

        static::updating(function ($po) {
            $po->date_modify = Carbon::now('Asia/Jakarta');
        });
    }
}