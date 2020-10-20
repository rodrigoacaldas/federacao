<?php

namespace App\Scopes;

use App\Modality\ManagerModality;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;

class ModalityScope implements Scope
{
    public function apply(Builder $builder, Model $model)
    {
        $modality = app(ManagerModality::class)->getModalityIdentify();

        $builder->where($model->getTable().'.'.'modality_id', $modality );
    }
}
