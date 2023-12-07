<?php

namespace App\Services;

use App\Models\Member;

class MemberService
{
    public static function updateLevelStep(Member $member, int $step): void
    {
        $member->update([
            'level_step' => $step
        ]);
        $member->save();
    }
}
