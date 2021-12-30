<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    //another method to pass array to view
    // public function index()
    // {
    //     $users_data = User::all();
    //     return view('users.index', ['users' => $users_data]);
    // }

    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //data validation-----------------------------------------------------------------------
        // $data = $this->validate($request, [
        //     'fname' => 'required|max:255',
        //     'lname' => 'nullable',
        // ]);

        //get data from form--------------------------------------------------------------------
        $user = new User;
        $user->fname = $request->fname;
        $user->lname = $request->lname;
        $img_url = '';
        $user->email = $request->email;
        $user->username = $request->username;
        $user->password = bcrypt($request->password);
        $user->has_crm = $request->has('has_crm');
        $user->has_360 = $request->has('has_360');
        $user->last_login = '1980-09-19';
        $user->status = 1;

        //check if user add image if it is not image url set as default.png
        if ($request->hasfile('img_url')) {

            //save in public folder-----------------------------------------------------------------
            // $photo_path = $request->file('img_url');
            // $m_path = $photo_path->getClientOriginalName();
            // $photo_path->move(public_path('images/'), $m_path);   //it will be save your image on public/images folder
            // $user->update(['image' => "/images/{$m_path}"]);
            // $img_url = 'images/' . $m_path;

            //save in storage folder----------------------------------------------------------------
            $img_url = time() . '.' . $request->img_url->extension();
            $request->img_url->storeAs('public/avatars', $img_url);
        }

        $user->img_url = $img_url;
        // dd($user);
        $user->save();
        // return redirect('/adduser');
        return redirect('users')->with('flash_message', 'User Addedd!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return view('users.show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('users.edit')->with('user', $user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $input = $request->all();
        // $user->has_crm = $request->has('has_crm');
        // $user->has_360 = $request->has('has_360');
        
        // if($input['has_360'] == "on"){

        // }
        
        $user->update($input);
        return redirect('users')->with('flash_message', 'User Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);
        return redirect('users')->with('flash_message', 'User deleted!');
    }
}
