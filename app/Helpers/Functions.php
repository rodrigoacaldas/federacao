<?php

namespace App\Helpers;

use App\Models\Event;
use App\Models\Goal;
use App\Models\IncomingPayment;
use Carbon\Carbon;

class Functions
{
    public static function date2sql($date){

        $newDate = implode("-", array_reverse(explode("/", $date)));

        return $newDate;
    }

    public static function datetime2sql($date){
        // converte data com formato dd/mm/yyyy hh:mm para o formato yyyy-mm-dd hh:mm
        return Carbon::createFromFormat('d/m/Y H:i', $date)->format('Y-m-d H:i');
    }

    public static function getDateComplete($date, $month = 1){
        // pega a data completa do dia $date para o mes atual + month
        $now = new Carbon();

        $newData = Carbon::createFromDate($now->year, $now->addMonth($month)->month, $date);

        return $newData;
    }

    public static function getEmailText($emailText, $budget){

        $variables = array('%NOME%', '%DATA%', '%HORA%');

        $originals   = array($budget->client->name, date('d/m/Y', strtotime($budget->date_time)), date('H:i', strtotime($budget->date_time)));

        return str_replace($variables, $originals, $emailText);
    }

    public static function ajustMoneyField($value){

        $newValue = str_replace('r$ ', '', $value);
        $newValue = str_replace('.', '', $newValue);
        $newValue = str_replace(',', '.', $newValue);

        return $newValue;
    }

}
