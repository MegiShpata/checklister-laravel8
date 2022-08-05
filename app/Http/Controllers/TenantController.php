<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TenantController extends Controller
{
    public function  changeTenant($tenantID)
    {

        $tenant = auth()->user()->tenants()->findOrFail($tenantID);//check

        auth()->user()->update(['current_tenant_id' =>$tenantID]);//change

       return redirect()->route('dashboard');
    }
}
