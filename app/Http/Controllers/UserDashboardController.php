<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.user.index', [
            'user' => User::find(auth()->user()->id),
        ]);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('dashboard.user.edit', [
            'user' => $user
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $validateUserData = $request->validate([
            'user_image' =>  'image|file|max:1024',
            'nama_lengkap' => 'required|max:255',
            'nama_panggilan' => 'required|min:3',
            'nim'=>'required',
            'tanggal_lahir' => 'required|max:255',
            'no_hp' => 'required',
            'alamat' => 'required|max:255',
            'asal_sekolah' => 'required|max:255',
            'pengalaman' => 'required|max:255',
            'motto' => 'required|max:255',
            'motivasi' => 'required|max:255',
        ]);

        if ($request->file('user_image')) {
            if ($request->old_user_image) {
                Storage::delete($request->old_user_image);
            }

            $validateUserData['user_image'] = $request->file('user_image')->store('user-images');
        }
        

        $validateUserData['user_id'] = auth()->user()->id;

        UserData::where('user_id', auth()->user()->id)->update($validateUserData);

        return redirect('/dashboard/user')->with('success', 'User data has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
