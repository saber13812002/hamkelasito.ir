<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class StepCtrl
{

    /**
     * Authorize access to a specific step.
     *
     * @param \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response) $next
     */

    public function handle(Request $request, Closure $next, $step = 0): Response
    {
        $step = (int)$step;
        $auth = auth();
        if (!$auth->check()) {
            return redirect()->route('login');
        }

        $member = $auth->user()->getMember()->first() ?? null;

        if (!$member) {
            return redirect()->route('step0get');
        }

        $allowStep = (int)$member->level_step;

        if ($allowStep >= $step || $request->method() == 'POST') {
            return $next($request);
        }

        return redirect()->route("step{$allowStep}get");
    }
}
