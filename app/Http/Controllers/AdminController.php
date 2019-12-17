<?php
    
    /**
     * Created by PhpStorm.
     * User: Emara/Muhammad Emara
     * Date: 2019-12-10
     * Time: 15:04
     * Class AdminController
     * * @package App\Http\Controllers
     * */
    
    namespace App\Http\Controllers;
    
    use App\User;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Auth;
    use Illuminate\Support\Facades\DB;
    use Illuminate\Support\Facades\Hash;
    use Illuminate\Support\Facades\Session;
    
    class AdminController extends Controller
    {
        public function __construct()
        {
            //parent::__construct();
            
            /* if (Session::has('adminSession'))
             {
                 $pageConfigs = [];
                 //we should use the last page we visit
             
                 return view('/pages/dashboard-ecommerce', [
                     'pageConfigs' => $pageConfigs
                 ]);
             
             }else{
                 return  redirect('/admin');//
             }*/
        }
        
        /**
         * Login user and create token
         *
         * @param  [string] email
         * @param  [string] password
         * @param  [boolean] remember_me
         *
         * @return [string] access_token
         * @return [string] token_type
         * @return [string] expires_at
         */
        public function login(Request $request)
        {
            //return view('admin.admin_login');
            
            if ($request->isMethod('post')) {
                $data = $request->input();
                if (Auth::attempt(['email' => $data['email'], 'password' => $data['password'], 'admin' => '1'])) {
                    /****** Ech logged in user should have his own Token
                     * later we will add it again
                     *
                     *
                     *
                     * $user= auth()->user();
                     * $tokenResult = $user->createToken('Personal Access Token');
                     * $token = $tokenResult->accessToken;
                     */
                    //  Session::put('adminSession', $data['email']);//1st approach to protect your session based pages
                    
                    return redirect('/admin/dashboard');
                } else {
                    return back()->withInput()->with('flash_massage_error', 'Invalid Username or Password!');
                    //  return redirect('/admin')->with('flash_massage_error', 'Invalid Username or Password!');
                    
                }
            }
            
            $pageConfigs = [
                'bodyClass' => "bg-full-screen-image",
                'blankPage' => true
            ];
            
            /* return view('/pages/auth-login', [
                'pageConfigs' => $pageConfigs
            ]);*/
            return view('admin.admin_login', [
                'pageConfigs' => $pageConfigs
            ]);
        }
        
        
        public function changepassword(Request $request)
        {
            if ($request->isMethod('post')) {
                $data = $request->all();
                $curr_pass = $data['currpass'];
                $newpass = $data['password'];
                if ($this->chkPassword($curr_pass)) {
                    $updated_flag = $this->UpdatePassword($newpass);
                    //  var_dump($updated_flag);die;
                    if ($updated_flag === true) {
                        return back()->with('flash_massage_success', 'New Password Updated !');
                    } else {
                        return back()->withInput()->with('flash_massage_error', $updated_flag);
                    }
                    
                } else {
                    
                    return back()->withInput()->with('flash_massage_error', 'Invalid Current  Password!');
                    
                    
                }
                
            }
            
            $breadcrumbs = [
                ['link' => "dashboard-ecommerce", 'name' => "Home"], ['link' => "dashboard-ecommerce", 'name' => "Admin"], ['name' => "Change Password"]
            ];
            return view('admin.admin_changepassword', [
                'breadcrumbs' => $breadcrumbs
            ]);
            
            
        }
        
        //creat New form from DB .. should not published
        public function creatForm(Request $request)
        {
            $data = $request->input('tablename');
            $formobj['formhtml'] = '';
            if ($request->isMethod('post')) {
                
                
                $table_name =$data ;
                
                $result = DB::select('DESCRIBE ' . $table_name);
                // var_dump(sizeof($result));die;
                
                
                if (sizeof($result) > 0) {
                    // output data of each row
                    
                    $formobj['formhtml'] = '<section class="input-validatio">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">'.strtoupper($table_name).' Table</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form-horizontal" novalidate>
                                <div class="row">
                                    <div class="col-md-12">';
                    $i = 0;
                    $row = $result;
                    while ($i < sizeof($result)) {
                        if ($row[$i]->Field != "id") {
                            ///   echo $row[$i]->Field;
                            // var_dump($row[$i]->Field);die;
                            //   $formobj['formhtml'] .= "<label for='" . $row[$i]->Field . "'>" . $row[$i]->Field . "</label> <input type='text' name='" . $row[$i]->Field . "' >";
                            
                            $formobj['formhtml'] .= '<div class="form-group">
                                            <label>'.strtoupper($row[$i]->Field).'</label>
                                            <div class="controls">
                                                <input type="text" name="' . $row[$i]->Field . '" class="form-control"
                                                       data-validation-required-message="This field is required"
                                                       placeholder="' . $row[$i]->Field . '">
                                            </div>
                                        </div>';
                        }
                        $i++;
                    }
                    
                    $formobj['formhtml'] .= '
                                    </div>
                                 
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>';
                }
            }
            
            $formobj['formhrc'] = $formobj['formhtml'];
            
            
            $tasks = ['formhtml' => $formobj['formhtml'], 'formhrc' => $formobj['formhrc']];
            
            return view('testpages.admin_buildform', [
                'tasks' => $tasks
            ]);
            
        }
        
        
        public function dashboard()
        {
            /*  $pageConfigs = [
                       'bodyClass' => "bg-full-screen-image",
                       'blankPage' => true
                   ];*/
            
            /* we just used it as 1st approach to protect pages based on session
            
             *  if (Session::has('adminSession'))
             {
                 $pageConfigs = [];
         
                 return view('/pages/dashboard-ecommerce', [
                     'pageConfigs' => $pageConfigs
                 ]);
                 
             }else{
                 return  redirect('/admin')->with('flash_massage_error', 'You Must Log In To Access!');
             }*/
            
            $pageConfigs = [];
            
            return view('pages.dashboard-ecommerce', [
                'pageConfigs' => $pageConfigs
            ]);
        }
        
        // Register
        public function register()
        {
            
            $pageConfigs = [
                'bodyClass' => "bg-full-screen-image",
                'blankPage' => true
            ];
            
            return view('pages.auth-register', [
                'pageConfigs' => $pageConfigs
            ]);
        }
        
        
        /**
         * Logout user (Revoke the token)
         *
         * @return [string] message
         */
        public function logout(Request $request)
        {
            // $request->user()->token()->revoke();
            
            // auth()->user()->token()->revoke(); //later add it
            //Session::flush();
            
            /* return response()->json([
                 'message' => 'Successfully logged out'
             ]);*/
            //  return redirect('/admin')->with('flash_massage_success', 'Logged-out Successfully!');
            
            
            /***********this is better version of logout **************/
            // $this->guard()->logout();
            Auth::guard()->logout();
            
            $request->session()->invalidate();
            Session::flush();
            
            //return $this->loggedOut($request) ?: redirect('/admin')->with('flash_massage_success', 'Logged-out Successfully!');
            return redirect('/admin')->with('flash_massage_success', 'Logged-out Successfully!');
            
            
        }
        
        public function chkPassword($curr_password)
        {
            // $check_pass = User::where(['admin' =>'1'])->first();
            $check_pass = User::where(['email' => Auth::user()->email])->first();
            if (Hash::check($curr_password, $check_pass->password)) {
                
                return true;
            } else {
                return false;
            }
            
            
        }
        
        private function UpdatePassword($newpass)
        {
            $encpassword = bcrypt($newpass);
            //  var_dump($encpassword);
            try {
                
                $userupdate = User::where(['email' => Auth::user()->email])->update(['password' => $encpassword]);
                //   var_dump($userupdate);die;
                return true;
            } catch (\Exception $ex) {
                return $ex->getMessage();
            }
            
            
        }
    }
