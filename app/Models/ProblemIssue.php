<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class ProblemIssue extends Model
{
    use HasFactory;

    // Disable timestamps
    public $timestamps = false;
    protected $primaryKey = 'id';

    // membaca data pada tabel
    protected $table = 'tbl_problem_issue';

    // menentukan variabel yang diisi
    protected $fillable = [
        'Nama_problem',
    ];

    // agar date_created bisa terisi, bukan pake created_at
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($problem) {
            $problem->date_created = Carbon::now('Asia/Jakarta');
        });

        static::updating(function ($problem) {
            $problem->date_modify = Carbon::now('Asia/Jakarta');
        });
    }
}