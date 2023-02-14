<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class App extends Model
{
    use HasFactory;

    public static function DateTime($DayFormat, $MonthFormat, $YearFormat, $date){
        $months = [
            'January'    =>    'Ocak',
            'February'    =>    'Şubat',
            'March'        =>    'Mart',
            'April'        =>    'Nisan',
            'May'        =>    'Mayıs',
            'June'        =>    'Haziran',
            'July'        =>    'Temmuz',
            'August'    =>    'Ağustos',
            'September'    =>    'Eylül',
            'October'    =>    'Ekim',
            'November'    =>    'Kasım',
            'December'    =>    'Aralık',
            'Monday'    =>    'Pazartesi',
            'Tuesday'    =>    'Salı',
            'Wednesday'    =>    'Çarşamba',
            'Thursday'    =>    'Perşembe',
            'Friday'    =>    'Cuma',
            'Saturday'    =>    'Cumartesi',
            'Sunday'    =>    'Pazar',
        ];

        $day = date($DayFormat, strtotime($date));
        $month = date($MonthFormat, strtotime($date));
        $year = date($YearFormat, strtotime($date));
        return $day . $months[$month] . $year ;
    }
}
