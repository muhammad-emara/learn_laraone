<?php
    /**
     * Created by PhpStorm.
     * User: Emara/Muhammad Emara
     * Date: 2019-12-10
     * Time: 15:19
     * Class IconsController
     * * @package App\Http\Controllers
     * */
    
    namespace App\Http\Controllers;
    
    
    use Illuminate\Http\Request;
    
    class IconsController extends Controller
    {
        // Icons Feather
        public function icons_feather()
        {
            $breadcrumbs = [
                ['link' => "dashboard-analytics", 'name' => "Home"], ['link' => "dashboard-analytics", 'name' => "Icons"], ['name' => "Feather Icons"]
            ];
            return view('/pages/icons-feather', [
                'breadcrumbs' => $breadcrumbs
            ]);
        }
        
        // Icons Font Awesome
        public function icons_font_awesome()
        {
            $breadcrumbs = [
                ['link' => "dashboard-analytics", 'name' => "Home"], ['link' => "dashboard-analytics", 'name' => "Icons"], ['name' => "Font Awesome"]
            ];
            return view('/pages/icons-font-awesome', [
                'breadcrumbs' => $breadcrumbs
            ]);
        }
    }
