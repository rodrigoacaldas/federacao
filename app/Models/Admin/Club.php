<?php

namespace App\Models\Admin;

use App\Modality\ModalityTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Club extends Model
{
    use ModalityTrait;
    use SoftDeletes;

    /**
     * Opcional, informar a coluna deleted_at como um Mutator de data
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    protected $fillable = ['user_id', 'name', 'image'];

    public function modality()
    {
        return $this->belongsTo(Modality::class);
    }

}
