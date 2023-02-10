<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Support\Facades\Auth;

class UserPermissionPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public static function Policy($PermissionName)
    {
        foreach (Auth::user()->roles as $key){
            foreach ($key->permissions as $per){
                return $per->perName == $PermissionName;
            }
        }
    }
}
