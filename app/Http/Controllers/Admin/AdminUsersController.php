<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminUsersController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response(
            view('admin.users', [
                'users' => User::all()
            ])
        );
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
        $user = User::query()->find($id);
        return response(
            view('admin.editUser', [
                'user' => $user
            ])
        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function edit($id)
    {
        $user = User::query()->find($id);

        if ($user->is_admin) {
            $user->fill([
                'is_admin' => false
            ]);
            $message = 'Пользователь убран из администраторов';
        } else {
            $user->fill([
                'is_admin' => true
            ]);
            $message = 'Пользователь добавлен в администаторы';
        }

        $user->save();

        return redirect()
            ->route('admin.users.index')
            ->with('success', $message);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $user = User::query()->find($id);

        $user->fill([
            'name' => $request->get('name'),
            'email' => $request->get('email')
        ]);

        $user->save();

        return redirect()
            ->route('admin.users.index')
            ->with('success', 'Данные пользователя изменены');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        User::destroy($id);
        return redirect()->back()->with('success', 'Пользователь удален');
    }
}
