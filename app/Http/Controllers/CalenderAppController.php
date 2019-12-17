<?php
    /**
     * Created by PhpStorm.
     * User: Emara/Muhammad Emara
     * Date: 2019-12-10
     * Time: 15:06
     * Class CalenderAppController
     * * @package App\Http\Controllers
     * */
    
    namespace App\Http\Controllers;
    
    
    use Illuminate\Http\Request;
    
    class CalenderAppController extends Controller
    {
        // Calender App
        public function calenderApp()
        {
            $pageConfigs = [
                'pageHeader' => false
            ];
            
            return view('/pages/app-calender', [
                'pageConfigs' => $pageConfigs
            ]);
        }
    }
