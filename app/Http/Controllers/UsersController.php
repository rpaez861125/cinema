<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Laracast\Flash\Flash;
use App\Http\Requests\UsersRequest;
use Validator;
use Illuminate\Validation\Rule;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
     public function index()
    {
        $users = User::orderBy('id', 'ASC')->paginate(5);

        return view('admin.users.index')->with('users', $users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UsersRequest $request)
    {
        $user = new User($request->all());
        $user->password = bcrypt($request->pasword);
        $user->save();

        flash("Se ha registrado el usuario ". $user->name . " de forma exitosa!" )->success();
        return redirect()->route('users.index');
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
        $user = User::find($id);
        return view('admin.users.edit')->with('user', $user);
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

        $validator =  Validator::make($request->all(), [
                        'email' => [
                        'required',
                        Rule::unique('users')->ignore($user->id),
                            ],
                        ]);
                            
        $user->name = $request->name;
        $user->type = $request->type;
        if ($validator->fails()) {
            return redirect()->route('users.edit', $user )->withErrors($validator)->withInput();        
        }else{
          
            $user->email = $request->email;
            $user->save();
        }
       

        flash("Se ha editado el usuario ". $user->name . " de forma exitosa!" )->warning();
        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();

        flash("Se ha eliminado el usuario ". $user->name . " de forma exitosa!" )->error();
        return redirect()->route('users.index');
    }
}
