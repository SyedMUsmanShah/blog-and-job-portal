<?php

namespace App\Exports;

use Modules\Application\Models\Application;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ApplicationExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return collect(Application::getAllApplications());
    }
    public function headings():array{
        return [
            'Id',
            'First Name',
            'Last Name',
            'Email',
            'Ph number',
            'Message',
            'Applied For',
        ];
    }
}
