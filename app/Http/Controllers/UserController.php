<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

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
    public function store(StorePostRequest $request)
    {
        $data = $request->only([
            'first_name',
            'last_name',
            'email',
        ]);
        //get data from form
        $data['password'] = bcrypt($request->password);
        $data['has_crm'] = $request->has('has_crm');
        $data['has_360'] = $request->has('has_360');
        $data['has_ops'] = $request->has('has_ops');
        $data['is_active'] = 1;

        //check if user add image and save it
        $data['img_url'] = $this->saveAvatar($request);
        $user = User::create($data);
        return redirect('users')->with('flash_message', 'User Addedd!');
    }

    protected function saveAvatar(Request $request, $url = false){
        if($url && Storage::disk('avatars')->exists($url)){
            unlink(storage_path('app/public/avatars/'.$url));
        }
        $img_url = '';
        if ($request->hasfile('img_url')) {
            //save in storage folder
            $img_url = time() . '.' . $request->img_url->extension();
            $request->img_url->storeAs('public/avatars', $img_url);
        }
        return $img_url;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('users.show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $input = $request->all();
        $input['has_crm'] = $request->has('has_crm');
        $input['has_360'] = $request->has('has_360');
        $input['has_ops'] = $request->has('has_ops'); 
        $input['img_url'] = $this->saveAvatar($request, $user->img_url);
        $user->update($input);
        return redirect('users')->with('flash_message', 'User Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //image delete from storage
        if(Storage::disk('avatars')->exists($user->img_url)){
            unlink(storage_path('app/public/avatars/'.$user->img_url));
        }
        $user->delete();
        return redirect('users')->with('flash_message', 'User deleted!');
    }
}
