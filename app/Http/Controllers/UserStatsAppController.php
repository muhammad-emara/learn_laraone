<?php
    /**
     * Created by PhpStorm.
     * User: Emara/Muhammad Emara
     * Date: 2019-12-10
     * Time: 15:24
     * Class UserStatsAppController
     * * @package App\Http\Controllers
     * */
    
    namespace App\Http\Controllers;
    
    use Illuminate\Http\Request;
    
    class UserStatsAppController extends Controller
    {
        // User Settings App
        public function user_stats()
        {
            $breadcrumbs = [
                ['link' => "dashboard-analytics", 'name' => "Home"], ['link' => "dashboard-analytics", 'name' => "Pages"], ['name' => "User Settings"]
            ];
            
            return view('/pages/app-user-stats', [
                'breadcrumbs' => $breadcrumbs
            ]);
        }
    }
