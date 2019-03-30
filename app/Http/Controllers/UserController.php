<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

    public function indexProvider()
    {
        $users = User::all()->where('role_id', 3);
        return view('index_provider')->with('users', $users);
    }

    public function createProvider()
    {
        return view('create_provider');
    }

    public function showProvider(User $user)
    {
        return view('show_provider')->with('user', $user);
    }

    public function storeProvider(Request $request)
    {
        if ($request->input('password') == $request->input('confirmPassword')) {
            $user = new User();
            $user->name = $request->input('name');
            $user->email = $request->input('email');
            $user->password = bcrypt($request->input('password'));
            $user->role_id = 3;
            $user->save();
            $providerController = new ProviderController();
            $providerController->createProvider($user);
            return redirect()->route('provider.index')->with('success', 'Provider Created');
        } else
        {
            return false;
        }
    }

    public function editProvider(User $user)
    {
        return view('edit_provider')->with('user', $user);
    }

    public function updateProvider(Request $request, User $user)
    {
        if ($request->input('password') == $request->input('confirmPassword')) {
            $user->name = $request->input('name');
            $user->email = $request->input('email');
            $user->password = $request->input('password');
            $user->save();

            return redirect()->route('provider.index')->with('success', 'Provider Created');
        } else
        {
            return false;
        }
    }

    public function deleteProvider(User $user)
    {
            $user->delete();
            return redirect()->route('provider.index')->with('success', 'Hotel Deleted');
    }
}
