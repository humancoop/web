<?php

namespace App\Exports;

use App\NewMemberInfo;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class NewMemberExport implements FromView
{
    public function __construct(NewMemberInfo $memberInfo)
    {
        $this->memberInfo = $memberInfo;
    }

    public function view(): View
    {
        return view('exports.new_member', [
            'new_member' => $this->memberInfo
        ]);
    }
}
