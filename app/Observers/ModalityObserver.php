<?php

namespace App\Observers;

use App\Modality\ModalityModality;
use Illuminate\Database\Eloquent\Model;

class ModalityObserver
{
    public function creating(Model $model){
        $modality = app(ManagerModality::class)->getModalityIdentify();

        $model->setAttribute('modality_id', $modality);

    }
}
