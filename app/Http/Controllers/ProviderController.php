<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProviderController extends Controller
{
    public function getAllProviders()
    {
        $join = DB::table('users')
            ->join('providers', 'users.provider_id', 'providers.id')
            /*->where('users.id', $x)*/
            ->select('users.id', 'users.name', 'users.email', 'providers.latitude', 'providers.longitude')
            ->get();

        return $join;

    }
}
