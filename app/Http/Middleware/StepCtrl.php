<?php

namespace App\Http\Middleware;

use App\Http\Controllers\MemberController;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class StepCtrl
{
    /**
     * Handle an incoming request.
     *
     * @param \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response) $next
     */
    public function handle(Request $request, Closure $next, $step = 0): Response
    {
        $step = (int)$step;
        if (!auth()->check()) {
            return redirect()->route('login');
        }
        $member = auth()->user()->getMember()->first();
        if (!$member) {
            return redirect()->route('step0get');
        }
        $allowStep = (int)$member->level_step;
        if ($allowStep >= $step || $request->method() == 'POST') {
            return $next($request);
        }

        return redirect()->route('step' . $allowStep . 'get');
    }
}
