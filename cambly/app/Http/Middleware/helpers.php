<?php

use App\Models\Users;
use App\Models\Events;
use Illuminate\Support\Facades\DB;

function getStatus($status = '')
{
    $statuss = [1 => 'Active', 2 => 'In-active', 3 => 'Deleted'];
    return empty($status) ? $statuss : $statuss[$status];
}

function pr($arr = [])
{
    echo "<pre>";
    print_r($arr);
    echo "</pre>";
}

function di($arr = [])
{
    echo "<pre>";
    print_r($arr);
    die;
}

// function userStatusCount($status = '')
// {
//     if (!empty($status) && $status > 0) {
//         return Users::where('status', $status)->count();
//     } else if ($status == '-1') {
//         return Users::get()->where('status', '<>', 3);
//     } else {
//         return Users::get()->count();
//     }
// }


function getNotifications()
{
    return  DB::table('notification')->where('status', 1)
        ->get()->toArray();
}
