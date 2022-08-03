<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TenantController extends Controller
{
    public function  changeTenant($tenantID)
    {
        if(auth()->user()->tenants()->findOrFail($tenantID));//check

        auth()->user()->update(['current_tenant_id' =>$tenantID]);//change

       // return redirect()->route('');
    }
}
