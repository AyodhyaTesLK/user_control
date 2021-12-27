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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //data validation--------------------------------------------------
        // $data = $this->validate($request, [
        //     'fname' => 'required|max:255',
        //     'lname' => 'nullable',
        // ]);
        // dd($data);

        //get data from form---------------------------------------------
        $user = new User;
        $name = $request->fname . ' ' . $request->lname;
        $img_url = 'default.png';
        $user->name = $name;
        $user->email = $request->email;
        $user->username = $request->username;
        $user->password = bcrypt($request->password);
        $user->has_crm = $request->has('has_crm');
        $user->has_360 = $request->has('has_360');
        $user->last_login = '1980-09-19';
        $user->status = 1;
        if ($request->hasfile('img_url')) {


            //save in public folder----------------------------------------------------
            // $photo_path = $request->file('img_url');
            // $m_path = $photo_path->getClientOriginalName();
            // $photo_path->move(public_path('images/'), $m_path);   //it will be save your image on public/images folder
            // $user->update(['image' => "/images/{$m_path}"]);
            // $img_url = 'images/' . $m_path;


            //save in storage folder---------------------------------------------------
            $img_url = time() . '.' . $request->img_url->extension();
            $request->img_url->storeAs('images', $img_url);
        }

        $user->img_url = $img_url;
        $user->save();
        return redirect('/adduser');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
