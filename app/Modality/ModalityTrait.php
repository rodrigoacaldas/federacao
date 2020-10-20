<?php

namespace App\Modality;

use App\Observers\ModalityObserver;
use App\Scopes\ModalityScope;

trait ModalityTrait
{
    public static function boot()
    {
        parent::boot();

        static::addGlobalScope(new ModalityScope);
        static::observe(new ModalityObserver());
    }

}
