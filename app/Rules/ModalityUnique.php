<?php

namespace App\Rules;

use App\Modality\ManagerModality;
use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Facades\DB;

class ModalityUnique implements Rule
{
    private $table;
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct($table, $columnValue = null, $column = 'id')
    {
        $this->table = $table;
        $this->columnValue = $columnValue;
        $this->column = $column;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $modality = app(ManagerModality::class)->getModalityIdentify();

        $result = DB::table($this->table)
            ->where($attribute, $value)
            ->where('modality_id', $modality)
            ->first();

        if ($result && $result->{$this->column} == $this->columnValue)
            return true;

        return is_null($result);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'O valor para esse campo já está em uso';
    }
}
