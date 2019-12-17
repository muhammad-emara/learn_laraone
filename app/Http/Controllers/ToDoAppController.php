<?php
    /**
     * Created by PhpStorm.
     * User: Emara/Muhammad Emara
     * Date: 2019-12-10
     * Time: 15:24
     * Class ToDoAppController
     * * @package App\Http\Controllers
     * */
    
    namespace App\Http\Controllers;
    
    
    use Illuminate\Http\Request;
    
    class ToDoAppController extends Controller
    {
        // ToDo App
        public function todoApp()
        {
            $pageConfigs = [
                'pageHeader' => false,
                'contentLayout' => "content-left-sidebar",
                'bodyClass' => 'todo-application',
            ];
            
            return view('/pages/app-todo', [
                'pageConfigs' => $pageConfigs
            ]);
        }
    }
