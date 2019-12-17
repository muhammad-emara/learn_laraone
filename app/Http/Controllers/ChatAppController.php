<?php
    /**
     * Created by PhpStorm.
     * User: Emara/Muhammad Emara
     * Date: 2019-12-10
     * Time: 15:08
     * Class ChatAppController
     * * @package App\Http\Controllers
     * */
    
    namespace App\Http\Controllers;
    
    
    use Illuminate\Http\Request;
    
    class ChatAppController extends Controller
    {
        // Chat App
        public function chatApp()
        {
            $pageConfigs = [
                'pageHeader' => false,
                'contentLayout' => "content-left-sidebar",
                'bodyClass' => 'chat-application',
            ];
            
            return view('/pages/app-chat', [
                'pageConfigs' => $pageConfigs
            ]);
        }
    }
