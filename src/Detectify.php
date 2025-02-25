<?php

namespace MarJose123\Detectify;


use Illuminate\Http\Request;
use Jenssegers\Agent\Agent;
use MarJose123\Detectify\Models\VisitorBan;
use MarJose123\Detectify\Models\VisitorLogs;

class Detectify
{
    /**
     * @param string $ip_address Supply the IP address in array or string format
     * @return bool
     */
    public function isBanned(string $ip_address): bool
    {
        return VisitorBan::where('ip_address', $ip_address)->exists();
    }

    /**
     * @param Request $data
     * @return void
     */
    public function logVisitor(Request $data): void
    {
        VisitorLogs::create([
           'ip_address' => $data->ip(),
            'authenticated_request' => auth()->check(),
            'os' => $this->createAgent($data)->platform(),
            'visited_path_page' => $data->fullUrl(),
            'user_agent' => $data->userAgent(),
            'user_id' => auth()->check() ? auth()->id() : null,
        ]);
    }


    public function createAgent(Request $data): \Illuminate\Support\HigherOrderTapProxy|Agent
    {
        return tap(new Agent(), fn (Agent $agent) => $agent->setUserAgent($data->userAgent()));
    }



}
