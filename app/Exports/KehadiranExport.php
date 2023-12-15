<?php
namespace App\Exports;

use App\Models\Kehadiran;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Concerns\FromCollection;

class KehadiranExport implements FromCollection
{
    public function collection()
    {
        return Kehadiran::all();
    }
}