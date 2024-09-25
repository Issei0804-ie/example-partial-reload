<?php

namespace App\Http\Controllers;

use Carbon\CarbonImmutable;
use Illuminate\Http\Request;
use Illuminate\Support\Sleep;

class PartialReload extends Controller
{
    public function __invoke(Request $request)
    {
        $number = $request->input('num', 0);

        return inertia('PartialReload', [
            'slowProcessResult' => fn() => $this->verrrrrrrrrySlowProcessing(),
            'num' => fn() => $number + 1,
        ]);
    }

    private function verrrrrrrrrySlowProcessing(): string
    {
        Sleep::sleep(4);
        return CarbonImmutable::now()->toISOString();
    }
}
