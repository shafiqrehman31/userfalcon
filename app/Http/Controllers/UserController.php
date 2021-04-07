<?php

namespace App\Http\Controllers;

use App\Models\RoleModel;
use App\Models\UserModel;
use Carbon\Carbon;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Validator;




use App\Models\User;
use App\Models\Plan;
//use Illuminate\Support\Facades\Input;
use File;
use Redirect;
//use Illuminate\Support\Facades\Mail;

//use PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;

class UserController extends Controller
{
    public function ShowUserListPage()
    {
        // TODO: if current user is super admin show all users else show only current user
        $users = UserModel::all();

        return view('user.index', compact('users'));
    }

    public function ShowUserProfile(){

        //dd(session('userData')['id']);
        $user = User::where('id', session('userData')['id'])->first();
        //dd($user);
        return view('accountdetails', compact('user'));
    }

    public function UpdateProfileImage(Request $request){
        //dd(session()->all());
        $request->validate([
            'user_image' => 'required|mimes:jpeg,jpg,png'
        ]);

        $image = $request->file('user_image');
        $fullname = session('userData')['first_name'];

        if(isset($image)){
            $currentDate = Carbon::now()->toDateString();
            $imagename =$fullname.'-'.$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('upload/profile'), $imagename);
        }

        $user_image  = [
            'user_image' => $imagename
        ];


        User::where('id', session('userData')['id'])->update($user_image);

        return redirect('accountdetails')->with('message', 'User Image Updated Successfully!');

    }
    public function UpdatePasswordProfile(Request $request){
        //dd($request->all());
        $request->validate([
            'old_password' => 'required',
            'password' => 'required|required|confirmed|min:6',
            'password_confirmation' => 'required|min:6',

        ]);

        $password = $request->old_password;
        $user = User::where('id', session('userData')['id'])->first();

        if (Hash::check($password, $user->password)){

            $password_array  = [
                'password' => Hash::make($request->password)
            ];
            User::where('id', session('userData')['id'])->update($password_array);
            return redirect('accountdetails')->with('message', 'Password Updated Successfully!');
        }else{
            return redirect('accountdetails')->with('warning', 'Old password does not match!');
        }
        return redirect()->back();
    }

    public function ShowEditUserPage(Request $request)
    {
        // TODO: check if current user is super admin or current user id equal to $request->user_id
        //dd($request->id);
        $roles = RoleModel::all();
        $user  = User::findOrFail($request->id);

        return view('user.edit', compact('user', 'roles'));
    }

    public function UpdateUserPage(Request $request)
    {
        //dd($request->all());
        // TODO: check if current user is super admin or current user id equal to $request->user_id
        $request->validate([
            'first_name' => 'required',
            'last_name'  => 'required',
            'email'      => 'required|email',
            'role_id'    => 'required'
        ]);

        $update = [
            'first_name' => $request->first_name,
            'last_name'  => $request->last_name,
            'email'      => $request->email,
            'role_id'    => $request->role_id
        ];

        /*if(supper admin)
        {
            $update['role_id'] = $request->role_id;
        }*/

        User::where('id', $request->id)->update($update);

        return redirect('user')->with('message', 'User is updated successfully');
    }

    public function UpdateUserPassword(Request $request)
    {
        // TODO: check if user is logged in
        // TODO: check if old password is correct
        //TODO: check if password matched
        // TODO: update password for current logged in user
    }

    public function DeleteUser(Request $request)
    {
        // TODO: if current user is super admin
        //  TODO take user id from request
        $RoleModel = UserModel::findOrFail($request->id);
        $RoleModel->delete();

        return redirect('user')->with('message', 'User is successfully deleted');
    }

    public function LoginUser(Request $request)
    {

        //dd($request->all());
        // TODO: check if user is not already logged //done
        if (session('userData')){
            return redirect('user/dashboard');
        }

        $request->validate([
            'email'    => 'required|email',
            'password' => 'required'
        ]);

        $userName = $request->get('email');
        $password = $request->get('password');
        $user     = UserModel::where('email', '=', $request->input('email'))->first();
       // echo "<pre>"; print_r($user); exit;
        if ($user){
            if (Hash::check($password, $user->password)){
                //return true;

                //$password = Hash::check('password', $request->get('password'));
                //dd($password);
                ///$password = md5($request->get('password'));
                //dd($password);

                $userFound = UserModel::where([
                    ['email', '=', $userName],
                    //            ['password', '=', $password],
                    ['status', '=', 1],
                ])->first();
                //dd($userFound);

                if ($userFound){
                    $userData = array(
                        'id'         => $userFound["id"],
                        'email'      => $userFound["email"],
                        'first_name' => $userFound["first_name"],
                        'last_name'  => $userFound["last_name"]
                    );
                    Session::put('userData', $userData);

                    return redirect('user/dashboard');
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

    public function LogoutUser()
    {
        session()->flush();

        // TODO: make sure that userData variable in session has been deleted
        return Redirect('user/login');
    }

    public function ShowUserRegistrationPage()
    {
        //TODO: if user is logged then go to dashboard page //done
        if (session('userData')){
            return redirect('user/dashboard');
        }

        // $roles = RoleModel::all();
        return view('register');
    }

    public function UserResgisteration(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name'  => 'required',
            'email'      => 'required|email|unique:tbl_users',
            'phone' => 'required',
            'password'   => 'required|confirmed'
        ]);

        //$register = new UserModel;

        $register = new UserModel;
        $plan = new Plan;
        $user_id = 'Falcon-'.substr(number_format(time() * rand(),0,'',''),0,6);
        $parent_id = 'Falcon-'.substr(number_format(time() * rand(),0,'',''),0,5);

        if($request->plan && $request->invest_rang && $request->plan_invest && $request->referral_id)
        {

            //for user table
            $register->first_name = $request->first_name;
            $register->last_name = $request->last_name;
            $register->user_id = $user_id;
            $register->parent_id = $parent_id;
            $register->email = $request->email;
            $register->phone = $request->phone;
            $register->referral_id = $request->referral_id;
            $register->level_2 = $request->level_2;
            $register->level_3 = $request->level_3;
            $register->level_4 = $request->level_4;
            $register->level_5 = $request->level_5;
            $register->sponser_url = env('APP_URL')."/public/register/?sponser-url=".$parent_id;
            $register->password = Hash::make($request->password);

            $register->save();

            //for plan table;

            $plan->plan = $request->plan;
            $plan->user_id = $user_id;
            $plan->invest_rang = $request->invest_rang;
            $plan->plan_invest  = $request->plan_invest;
            $plan->plan_status  = 0;
            //echo "<pre>";
            //print_r($plan);
            //exit();
            $plan->save();

        }else{
            $fullurl = $request->fullUrl()."/?sponser-url=".$parent_id;
            //dd($fullurl);
            $register->first_name = $request->first_name;
            $register->last_name = $request->last_name;
            $register->user_id = $user_id;
            $register->parent_id = $parent_id;
            $register->email = $request->email;
            $register->phone = $request->phone;
            $register->referral_id = $request->referral_id;
            $register->level_2 = $request->level_2;
            $register->level_3 = $request->level_3;
            $register->level_4 = $request->level_4;
            $register->level_5 = $request->level_5;
            $register->sponser_url = $fullurl;
            $register->status  = 1;
            $register->password = Hash::make($request->password);
            $register->save();
        }




        $request->flashExcept('password');
        return redirect('user/login')->with('message', 'Registration Successful!');




        $register->first_name = $request->first_name;
        $register->last_name  = $request->last_name;
        $register->email      = $request->email;
        $register->password   = Hash::make($request->password);

        $register->save();
        $request->flashExcept('password');

        return redirect('user/login')->with('message', 'Registration Successful!');
    }

    public function ShowUserLoginPage()
    {
        //TODO: if user is logged then go to dashboard page // done
        if (session('userData')){
            return redirect('user/dashboard');
        }

        return view('login');
    }

    public function ForgotPasswordView()
    {
        return view('forgot_password');
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
            return redirect()->back()->withErrors(['email' => trans('User does not exist')]);
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
        //dd($user);
        //Generate, the password reset link. The token generated is embedded in the link
        $link = url('user/reset-password-view/' . $token . '?email=' . urlencode($user->email));

        $email = new \SendGrid\Mail\Mail();
        $email->setFrom("dev.uforialogic@gmail.com", "User Falcon");
        $email->setSubject("Reset Admin password request");
        $email->addTo("refaqatkhattak88@gmail.com", $user->first_name);
        $email->addContent(
            "text/html", "<p>Please click this link to reset your password.</p><br><a href='$link'>$link</a>"
        );
        $sendgrid = new \SendGrid('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');
        try {
            $response = $sendgrid->send($email);

            return $response;
            //dd($response);
        } catch (Exception $e) {
            echo 'Caught exception: ' . $e->getMessage() . "\n";
        }
    }

    public function validateToken(Request $request)
    {
        $token  = $request->token;
        $exists = DB::table('password_resets')->where("token", "like", "$token")->delete();
        if ($exists == 1){
            $email = $request->input("email");
            $user  = UserModel::where("email", "=", "$email")->first();

            return redirect("user/reset_password/$user->id");
        }
    }

    public function ShowUpdatePasswordView(Request $request)
    {
        //dd($request->all());
        $users = UserModel::where('email', $request->email)->first();
        //dd($users);
        $id = $users->id;

        //dd($id);

        return view("reset_password", compact("id"));
    }

    public function UpdatePassword(Request $request)
    {
        $request->validate([
            'password'        => 'required',
            'confirmPassword' => 'required_with:password|same:password',
            'userId'          => 'required'
        ]);
        if ($request->confirmPassword != $request->password){
            return redirect()->back()->withErrors(['error' => trans('Password does not match')]);
        }

        $password       = Hash::make($request->password);
        $user           = UserModel::find($request->userId);
        $user->password = $password;
        $user->save();
        session()->flush();

        return redirect('user/login')->with('message', 'Password is updated successfully');
    }
}
