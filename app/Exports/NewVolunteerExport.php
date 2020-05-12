<?php

namespace App\Exports;

use App\NewVolunteerInfo;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class NewVolunteerExport implements FromView
{
    public function __construct(NewVolunteerInfo $volunteerInfo)
    {
        $this->volunteerInfo = $volunteerInfo;
    }

    public function view(): View
    {
        return view('exports.new_volunteer', [
            'new_volunteer' => $this->volunteerInfo
        ]);
    }
}
