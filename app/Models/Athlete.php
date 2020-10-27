<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Athlete extends Model
{
    use SoftDeletes;

    /**
     * Opcional, informar a coluna deleted_at como um Mutator de data
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    protected $fillable = ['user_id', 'name','birthday','club_id','nationality','place_of_birth','rg_number','rg_orgao_expedidor','email','address','neighborhood','cep',
        'phone1','phone2','school','grade','turn','mother_name','mother_phone','mother_rg','father_name','father_phone','father_rg','shoes','rollerblades',
        'shin_guard','knee_pad','gloves','stick','bag','athlete_image','document_image','address_image','school_image'];

    public function club()
    {
        return $this->belongsTo(Club::class);
    }
}
