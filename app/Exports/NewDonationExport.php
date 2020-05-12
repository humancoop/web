<?php

namespace App\Exports;

use App\NewDonationInfo;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class NewDonationExport implements FromView
{
    public function __construct(NewDonationInfo $donationInfo)
    {
        $this->donationInfo = $donationInfo;
    }

    public function view(): View
    {
        return view('exports.new_donation', [
            'new_donation' => $this->donationInfo
        ]);
    }
}
