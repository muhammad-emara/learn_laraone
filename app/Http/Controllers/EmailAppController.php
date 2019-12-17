<?php
    /**
     * Created by PhpStorm.
     * User: Emara/Muhammad Emara
     * Date: 2019-12-10
     * Time: 15:16
     * Class EmailAppController
     * * @package App\Http\Controllers
     * */
    
    namespace App\Http\Controllers;
    
    
    use Illuminate\Http\Request;
    
    class EmailAppController extends Controller
    {
        // Email App
        public function emailApp()
        {
            $pageConfigs = [
                'pageHeader' => false,
                'contentLayout' => "content-left-sidebar",
                'bodyClass' => 'email-application',
            ];
            
            return view('/pages/app-email', [
                'pageConfigs' => $pageConfigs
            ]);
        }
    }

