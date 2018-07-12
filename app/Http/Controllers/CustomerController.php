<?php

namespace App\Http\Controllers;
use App\Customer;
use App\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    public function addCustomer(Request $req)
    {

        $c=new Customer();
        $c->name=$req->name;
        $c->email=$req->email;
        $c->password=$req->password;
        $c->mobileNum=$req->mnumber;

        $query=DB::select('select * from customers');
        foreach ($query as $user)
        {
            if($user->email==$c->email)
            {

                    return view('signup_error',compact('user'));

            }
        }
        $c->save();
       return view('successfully_signup');
    }
    public function authentication(Request $req)
    {
        $name=$req->uname;
        $password=$req->upassword;
        $users = DB::select('select * from customers ');
        foreach ($users as $user)
        {
            if($user->name==$name)
            {
                if($user->password==$password)
                {
                    return view('home');
                }
            }
        }
        return view('login_error');
        }


}
