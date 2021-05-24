<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use Carbon\Carbon;
use DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Validator;
use App\Models\UserModel;



class AdminController extends Controller
{

    
    public function index()
    {
        return view('admin.home');
    }
    public function Dashboard(){
        return view('admin.home');
    }

    public function Login()
    {
        return view('admin.login');
    }

    public function AdminLogin(Request $request)
    {
        session()->flush();
        // dd($request->all());
        // dd(session('adminData'));
        // TODO: check if user is not already logged //done
        if (session('adminData')){
            return redirect('admin/dashboard');
        }

        $request->validate([
            'email'    => 'required|email',
            'password' => 'required'
        ]);

        $userName = $request->get('email');
        $password = $request->get('password');
        $user     = UserModel::where('email', '=', $request->input('email'))->first();
        // dd($user); exit;
        // dd('password', $password ,'user data' ,$user->password);
        if ($user){
            if (Hash::check($password, $user->password)){
                // return true;

                $password = Hash::check('password', $request->get('password'));
                // dd('hashed password',$password);
                ///$password = md5($request->get('password'));
                // dd($password);

                $userFound = UserModel::where([
                    ['email', '=', $userName],
                    //            ['password', '=', $password],
                    ['status', '=', 2],
                ])->first();
                // dd($userFound);

                if ($userFound){
                    $adminData = array(
                        'id'         => $userFound["id"],
                        'email'      => $userFound["email"],
                        'first_name' => $userFound["first_name"],
                        'last_name'  => $userFound["last_name"],
                        'phone' => $userFound['phone']
                    );
                    Session::put('adminData', $adminData);

                    return redirect('admin/dashboard');
                }else{
                    return back()->with('error', 'You are not an active User');
                }
            } else {
                $request->flashExcept('password');

                return back()->with('error', 'Wrong Login Details');
            }
        } else {
            $request->flashExcept('password');

            return back()->with('error', 'Wrong Login Details');
        }
    }

    public function listUserView(){
        $ListUsers = DB::table('tbl_users')->get();
        return view('admin.listuser')->with('userslist', $ListUsers);
    }

    public function ListUsers(Request $request){

        $ListUsers = UserModel::all();
        return view('admin.listuser')->with('userslist', $ListUsers);

    }

    public function create()
    {
       return view('admin.addUser');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   

        // dd('dgkdmdfk');exit();
        $request->validate([
            'first_name' => 'required',
            'last_name'  => 'required',
            'email'      => 'required|email|unique:tbl_users',
            'phone' => 'required',
            'password'   => 'required|confirmed',
        ]);

        $register = new UserModel;
        // $plan = new Plan;
        $user_type='offline';
        $user_id = 'Falcon-'.substr(number_format(time() * rand(),0,'',''),0,6);
        $parent_id = 'Falcon-'.substr(number_format(time() * rand(),0,'',''),0,5);

        
        $register->first_name = $request->first_name;
        $register->last_name = $request->last_name;
        $register->user_id = $user_id;
        $register->user_type= $user_type;
        $register->parent_id = $parent_id;
        $register->email = $request->email;
        $register->phone = $request->phone;
        // $register->referral_id = $request->referral_id;
        // $register->level_2 = $request->level_2;
        // $register->level_3 = $request->level_3;
        // $register->level_4 = $request->level_4;
        // $register->level_5 = $request->level_5;
        // $register->sponser_url = $fullurl;
        $register->status  = 1;
        $register->password = Hash::make($request->password);
        $register->save();

        $userData = array(
            'id'         => $register["id"],
            'email'      => $register["email"],
            'first_name' => $register["first_name"],
            'last_name'  => $register["last_name"]
        );
        Session::put('', $userData);
            // dd('sdksdms');

        $request->flashExcept('password');
        // dd($userData);exit;
        if ($this->sendResetEmail($request->email, $request->token)){
            // dd("HAJATORIAN "); EXIT;
            return redirect('admin/user')->with('message',  trans('User register successfuly! A reset link has been sent to your email address.'));
        } else {
            return redirect()->back()->withErrors(['error' => trans('A Network Error occurred. Please try again.')]);
        }
        
    }

    public function edit($id)
    {
        $user = UserModel::where('id', $id)->first();
//        dd($user);exit();
        return view('admin.user.editUser')->with('userData', $user);
        
    }


    public function update(Request $request)
    {
       dd($request);exit();
        $request->validate([
            'first_name' => 'required',
            'last_name'  => 'required',
            'email'      => 'required|email|unique:tbl_users',
            'phone' => 'required',
            'password'   => 'required|confirmed',
        ]);

        $form_data = array(
            'first_name'      => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone' => $request->phone
            );
        //dd($form_data);


        AddClasses::where('id', $request->id)->update($form_data);
        $request->flash();
        return view('admin.user.listuser');
    }

    public function destroy($id)
    {   

        $data = UserModel::where('id', $id)->first();
        if($data != null) {
            $data->delete();
            return redirect('admin/user')->with(['message'=> 'Successfully deleted!!']);
        }
        return redirect('admin/user')->with(['message'=> 'Wrong ID!!']);
    }

    public function logout(){
        session()->flush();
        // TODO: make sure that userData variable in session has been deleted
        return Redirect('admin/login');
    }

    public function showAdminProfile(){
        
        return view('admin.user.userprofile');
    }

    public function ForgotPasswordView()
    {
       return view('admin.user.forgot_password');
    }

    public function validatePasswordRequest(Request $request)
    {
        $request->validate([
            'email'      => 'required|email',
        ]);

        $user = DB::table('tbl_users')->where('email', '=', $request->email)
            ->first();
        //Check if the user exists
        if ( ! $user){
            return redirect()->back()->withErrors(['email' => trans('Admin does not exist')]);
        }

        //Create Password Reset Token
        DB::table('password_resets')->insert([
            'email'      => $request->email,
            'token'      => Str::random(60),
            'created_at' => Carbon::now()
        ]);
        //Get the token just created above
        $tokenData = DB::table('password_resets')
            ->where('email', $request->email)->first();
        //dd($tokenData);

        if ($this->sendResetEmail($request->email, $tokenData->token)){
            //echo "HAJATORIAN "; EXIT;
            return redirect()->back()->with('message', trans('A reset link has been sent to your email address.'));
        } else {
            return redirect()->back()->withErrors(['error' => trans('A Network Error occurred. Please try again.')]);
        }
    }

    
    private function sendResetEmail($email, $token)
    {
    //Retrieve the user from the database
    $user = DB::table('tbl_users')->where('email', $email)->select('first_name', 'last_name', 'email')->first();
        // dd($user);exit;
    //Generate, the password reset link. The token generated is embedded in the link
    $link = url('user/reset-password-view/'. $token . '?email=' . urlencode($user->email));

        $email = new \SendGrid\Mail\Mail();
        $email->setFrom("rafisweet5@gmail.com", "User Falcon");
        $email->setSubject("Reset Admin password request");
        $email->addTo($user->email, $user->first_name);
        $email->addContent(
            "text/html", "<p>Please click this link to reset your password.</p><br><a href='$link'>$link</a>"
        );
        $sendgrid = new \SendGrid('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');

        try {
        // dd('fdffdfdfdf');exit;
        //Here send the link with CURL with an external email API 
        $response = $sendgrid->send($email);
//         dd($response);exit();
        return $response;
        } catch (Exception $e) {
        return false;
    }
    }

}