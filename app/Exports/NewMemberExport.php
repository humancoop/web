<?php

namespace App\Exports;

use App\NewMemberInfo;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class NewMemberExport implements FromView
{
    protected $newMemberId;

    public function __construct(int $newMemberId)
    {
        $this->newMemberId = $newMemberId;
    }

    public function view(): View
    {
        return view('exports.new_member', [
            'new_member' => NewMemberInfo::find($this->newMemberId)
        ]);
    }
}
