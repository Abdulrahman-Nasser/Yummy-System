<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class userAccessController extends Controller
{
    //get all users page
    public function index()
    {
        $user = User::All();
        return view('admin.users.allUsers ', compact('user'));
    }

    // get add user page
    public function getAddUser()
    {

        return view('admin.users.addUser');
    }

    // add user function
    public function store(Request $request)
    {

        // validation
        $request->validate([
            'name' => 'required|string|min:3',
            'email' => 'required|email|string',
            'password' => "required|min:8|max:25",
            'password_confirmation' => "required|min:8|max:25"

        ]);


        $user = User::all();
        foreach ($user as $data) {
            if ($data->email == $request->email) {
                notify()->error('This E-mail Allready Exist !');
                return redirect()->back();
            }
        }

        if ($request->password != $request->password_confirmation) {
            notify()->error('password and confirm password does not match');
            return redirect()->back();
        }

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();

        notify()->success('Create New User Success');
        return redirect()->back();
    }

    // delete user
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        notify()->success('Delete User Success');
        return redirect()->back();
    }

    // get edit user page
    public function getEditUser($id)
    {
        $user = User::find($id);
        return view('admin.users.editUser', compact('user'));
    }

    // edit user data
    public function editUser(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|min:3|string',
            'email' => 'required|email|string',
            'password' => "required|min:8",

        ]);


        // check for matching passwords
        if ($request->password != $request->password_confirmation) {
            notify()->error('password and confirm password does not match');
            return redirect()->back();
        }

        // update user data

        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();
        notify()->success('Update User : ' . " " . $user->name . " " . "Success");
        return redirect()->back();
    }
}
