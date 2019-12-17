<?php
    /**
     * Created by PhpStorm.
     * User: Emara/Muhammad Emara
     * Date: 2019-12-10
     * Time: 15:23
     * Class TableController
     * * @package App\Http\Controllers
     * */
    
    namespace App\Http\Controllers;
    
    
    use Illuminate\Http\Request;
    
    class TableController extends Controller
    {
        // Bootstrap Table
        public function table()
        {
            $breadcrumbs = [
                ['link' => "dashboard-analytics", 'name' => "Home"], ['name' => "Table"]
            ];
            return view('/pages/table', [
                'breadcrumbs' => $breadcrumbs
            ]);
        }
        
        // Datatable
        public function datatable()
        {
            $breadcrumbs = [
                ['link' => "dashboard-analytics", 'name' => "Home"], ['name' => "Datatable"]
            ];
            return view('/pages/table-datatable', [
                'breadcrumbs' => $breadcrumbs
            ]);
        }
        
        // ag-Grid Table
        public function ag_grid()
        {
            $breadcrumbs = [
                ['link' => "dashboard-analytics", 'name' => "Home"], ['name' => "agGrid Table"]
            ];
            return view('/pages/table-ag-grid', [
                'breadcrumbs' => $breadcrumbs
            ]);
        }
    }
