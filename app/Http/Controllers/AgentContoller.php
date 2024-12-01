<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AgentContoller extends Controller
{
    public function AgentDashboard(){
        return view('agent.agent_dashboard');
    }
}
