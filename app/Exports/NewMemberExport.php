<?php

namespace App\Exports;

use App\NewMemberInfo;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class NewMemberExport implements FromView
{
    protected $newMemberId;

    public function __construct(/*Member $member*/ object $data)
    {
        #$this->member = $member;
        $this->data = $data;
    }

    public function view(): View
    {
        return view('exports.new_member', [
            #'new_member' => $this->member
            'new_member' => $this->data
        ]);
    }
}
