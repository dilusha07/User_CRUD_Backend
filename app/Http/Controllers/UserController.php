<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;

class UserController extends Controller
{
    protected $user;


    // Constructor injection to assign the model
    public function __construct(UserModel $user)
    {
        $this->user = $user;
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       return $this->user->all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return $this->user->create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = $this->user->find($id);  
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         $user = $this->user->find($id);
         $user->update($request->all());
         return $user;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = $this->user->find($id);
        return $user->delete();   
    }
}
