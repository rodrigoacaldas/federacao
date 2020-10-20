<?php

namespace App\Http\Middleware;

use App\Modality\ManagerModality;
use Closure;

class ModalityFilesystems
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(auth()->check())
            $this->setFilesystemsRoot();

        return $next($request);
    }

    public function setFilesystemsRoot()
    {
        $uuid = app(ManagerModality::class)->getModalityUuid();
        config()->set('filesystems.disks.modality.root', config('filesystems.disks.modality.root')."/".$uuid);
    }
}
