<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Socialite;
use Auth;
use Exception;

class IvaoController extends Controller
{
    public function redirect()
    {
        if(!session()->has('url.intended'))
        {
            session(['url.intended' => url()->previous()]);
        }
        return Socialite::driver('ivao')->redirect();
    }

    public function callback()
    {
        try {

            $response = Socialite::driver('ivao')->user();
            if (!$response) {
                return redirect()->away(config('app.url'));
            }

            $user = Socialite::driver('ivao')->user()->getRaw();



            $finduser = User::where('id', intval($user["vid"]))->first();

            if ($finduser) {
                Auth::login($finduser);
                $userToUpdate = Auth::user();
                $userToUpdate->name = $user["firstname"] . " " . $user["lastname"];
                $userToUpdate->rating = intval($user["rating"]);
                $userToUpdate->ratingatc = intval($user["ratingatc"]);
                $userToUpdate->ratingpilot = intval($user["ratingpilot"]);
                $userToUpdate->division = $user["division"];
                $userToUpdate->country = $user["country"];
                $userToUpdate->staff = implode(",", $user["staff"]);
                $userToUpdate->va_staff_ids = implode(",", $user["va_staff_ids"]);
                $userToUpdate->va_member_ids = implode(",", $user["va_member_ids"]);
                $userToUpdate->save();

                return redirect(session('url.intended'));
            } else {
                $newUser = User::create([
                    'id' => intval($user["vid"]),
                    'name' => $user["firstname"] . " " . $user["lastname"],
                    'email' => $user["vid"],
                    'rating' => intval($user["rating"]),
                    'ratingatc' => intval($user["ratingatc"]),
                    'ratingpilot' => intval($user["ratingpilot"]),
                    'division' => $user["division"],
                    'country' => $user["country"],
                    'staff' => implode(",", $user["staff"]),
                    'va_staff_ids' => implode(",", $user["va_staff_ids"]),
                    'va_member_ids' => implode(",", $user["va_member_ids"]),
                    'password' => bcrypt('colombia')
                ]);

                Auth::login($newUser);

                return redirect(session('url.intended'));
            }
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}
