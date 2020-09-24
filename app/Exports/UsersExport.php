<?php

namespace App\Exports;

use App\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;

class UsersExport implements FromCollection, WithMapping, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return User::all();
    }

    public function map($items): array
    {
        return [
            
            $items->nim,
            $items->name,
            $items->email,
            $items->jurusan
        ];
    }

    public function headings(): array
    {
        return [
            'Nim',
            'Nama',
            'Email',
            'Jurusan'
        ];
    }
}
