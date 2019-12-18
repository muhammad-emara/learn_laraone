<?php
    /**
     * Created by PhpStorm.
     * User: Emara/Muhammad Emara
     * Date: 2019-12-17
     * Time: 10:04
     * Class CategoryController
     * * @package App\Http\Controllers
     * */
    
    namespace App\Http\Controllers;
    
    use App\Category;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Redirect;
    
    class CategoryController extends Controller
    {
        public function create()
        {
            return view('admin.categories.add_category');
        }
    
    
    
        public function addCategory(Request $request)
        {
            if ($request->isMethod('post'))
            {
                $data = $request->all();
    
                $request->validate([
                    'name' => 'required',
                    'description' => 'required',
                    'url' => 'required',
                    'parent_id' => 'required',
                    'status' => 'required',
                   
                ]);
    
    
                $category = new Category();
                $category->name = $data['name'];
                $category->parent_id = $data['parent_id'];
                $category->description =$data['description'];
                $category->url = $data['url'];
                $category->status =$data['status'];
    
                $category->save();
    
                return Redirect::to('/admin/add-category')
                    ->with('success', 'Grate! Category  created successfully.');
                
              /*  $category = new Category;
                $category->name=$data['name'];
                $category->parent_id=$data['parent_id'];
                $category->description=$data['description'];
                $category->url=$data['url'];
                $category->status=$data['status'];
                $category->save();*/
                
            //   var_dump($category);die;
               
              //  print_r($data);die;
            }
            return view('admin.categories.add_category');
        }
    }
