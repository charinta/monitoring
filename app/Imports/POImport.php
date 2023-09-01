<?php

namespace App\Imports;

use App\Models\PO;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

class POImport implements ToModel, WithStartRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */

    private $currentRow = 0;
    public function startRow(): int
    {
        return 6; // Dimulai dari baris ke-6
    }

    public function model(array $row)
    {

        $this->currentRow++;

        if ($this->currentRow === 1) {
            $poNo = $row[0]; // Ambil PO_No dari baris pertama (baris 1) dan kolom pertama (kolom A)
            return new PO([
                'PO_No' => $poNo,
            ]);
        } elseif ($this->currentRow >= 6) {
            // Ambil data lain dari baris mulai dari baris ke-6
            $docDate = $row[0]; // Kolom pertama (B)
            $prDeliver = $row[1]; // Kolom kedua (C)
            $po1Date = $row[2];
            $po1PIC = $row[3];
            $po1Aging = $row[4];
            $po2Date = $row[5];
            $po2PIC = $row[6];
            $po2Aging = $row[7];
            // Lakukan sesuatu dengan data yang telah diambil, misalnya masukkan ke database
            // ...

            return null;
        }

        return null;
    }
}