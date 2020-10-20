<?php

namespace App\Modality;

use App\Models\Modality;

class ManagerModality
{
    public function getModalityIdentify()
    {
        return auth()->user()->modality->id;
    }

    public function getModalityUuid()
    {
        return auth()->user()->modality->uuid;
    }
}
