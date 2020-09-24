<?php

namespace App\Exports;

use App\Vote;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;

class HimsisfoExport implements FromCollection, WithMapping, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Vote::with(['kandidat','user'])->where('jenis_kandidat','himsisfo')->get();
    }

    public function map($items): array
    {
        return [
            
            $items->user->nim,
            $items->user->name,
            $items->kandidat->nama
        ];
    }

    public function headings(): array
    {
        return [
            'Nim',
            'Nama Pemilih',
            'Vote'
        ];
    }
}
