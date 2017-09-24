<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\User;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Nexmo\Laravel\Facade\Nexmo;

class UserController extends Controller
{
    public function getUsers()
    {
        $reserves= ['send'];
        return View('welcome',compact('reserves'));
    }

    public function sendSms()
    {
        $today = Carbon::now();
        $dt = Carbon::parse($today);
        $day = $dt->day;
        $month = $dt->month;
        $users = User::all();
        $reserves[] = [];
        foreach ($users as $user) {
            $du = Carbon::parse($user->birthday);
            $userD = $du->day;
            $userM = $du->month;

            if ($day == $userD && $month == $userM) {
                $reserves[] = $user->name;
                switch ($user->lang) {
                    case 'a':
                        $txt = $user->name . '   كل عام و انت بخير ';
                        Nexmo::message()->send([
                            'to' => $user->mobile,
                            'from' => 'زين كاش',
                            'text' => $txt
                        ]);
                        break;
                    case 'e':
                        $txt = $user->name . '  happy birthday ';
                        Nexmo::message()->send([
                            'to' => $user->mobile,
                            'from' => 'Zain cash',
                            'text' => $txt
                        ]);
                        break;
                    case 'k':
                        $txt = $user->name . '  جه زنت بيروز بيت ';
                        Nexmo::message()->send([
                            'to' => $user->mobile,
                            'from' => 'Zain cash',
                            'text' => $txt
                        ]);
                        break;
                }
            }
        }
        return $reserves;
        return View('welcome');
    }
}
