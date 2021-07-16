<?php
  
namespace App\Http\Controllers\Auth;
   
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
   
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */
  
    use AuthenticatesUsers;
  
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/test0000000000000000000000000000000000000';
   
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
   
    public function login(Request $request)
    {   

        //return ("hello logged in controller");
        $input = $request->all();
   
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);
   
        if(auth()->attempt(array('email' => $input['email'], 'password' => $input['password'])))
        {
            if (auth()->user()->is_admin == 1) {
                // return redirect()->route('admin.home');
              //  return redirect('admin/home');
              return ("hello admin in controller");
            //   return response()->json([
            //     'message' => 'you are a Admin!',
              
            // ]);
                  
    
            }else{
               // return redirect()->route('home');

               return ("hello admin in controller");
            //    return response()->json([
            //     'message' => 'you are a user!',
              
            // ]);
            //           //    return response('Hello World', 200)
            }
        }else{

            // return back()->with('success','Email and password are wrong');
            // return redirect()->route('login')
            // ->with('error','Email address and Password are wrong');
            return ("hello invalid creds ");
            // return response()->json([
            //     'message' => 'you are a Invalid user',
              
            // ]);

        }
             
     }
}