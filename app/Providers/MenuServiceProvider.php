<?php
    /**
     * Created by PhpStorm.
     * User: Emara/Muhammad Emara
     * Date: 2019-12-10
     * Time: 14:46
     * Class MenuServiceProvider
     * * @package App\Providers
     * */
    
    namespace App\Providers;
    
    use Illuminate\Support\ServiceProvider;
    
    class MenuServiceProvider extends ServiceProvider
    {
        /**
         * Register services.
         *
         * @return void
         */
        public function register()
        {
            //
        }
    
        /**
         * Bootstrap services.
         *
         * @return void
         */
        public function boot()
        {
            // get all data from menu.json file
            $verticalMenuJson = file_get_contents(base_path('resources/json/verticalMenu.json'));
            $verticalMenuData = json_decode($verticalMenuJson);
            $horizontalMenuJson = file_get_contents(base_path('resources/json/horizontalMenu.json'));
            $horizontalMenuData = json_decode($horizontalMenuJson);
        
            // Share all menuData to all the views
            \View::share('menuData',[$verticalMenuData, $horizontalMenuData]);
        }
        
    }
