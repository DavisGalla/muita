<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index(){
        $users = User::all();

        return view('users.index', ['users' => $users]);
    }

    public function show($id){
        $user = User::findOrFail($id);
        return view('users.show', compact('user'));
    }

    public function edit($id){
        $user = User::findOrFail($id);
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, $id){
        $user = User::findOrFail($id);
        $validated = $request->validate([
            'username' => 'required|string|max:255',
            'full_name' => 'required|string|max:255',
            'role' => 'required|string|max:255',
            'active' => 'required|boolean',
        ]);
        $user->update($validated);
        return redirect()->route('users.show', $user->id);
    }

    public function create(){
        return view('users.create');
    }

    public function store(Request $request){
        $validated = $request->validate([
           
            'username' => 'required|string|max:255|unique:users,username',
            'full_name' => 'required|string|max:255',
            'role' => 'required|string|in:inspector,analyst,admin,broker',
            'active' => 'required|boolean',
            'password' => 'required|string|min:6',
        ]);

       
        $validated['id'] = $this->generateUserId();
        $validated['password'] = bcrypt($validated['password']);

        $user = User::create($validated);
        return redirect()->route('users.show', $validated['id']);
    }

    
    private function generateUserId(){
       
        $lastUser = User::orderBy('id', 'desc')->first();

        if (!$lastUser) {
            return 'usr-000001';
        }

        
        $lastNumber = (int) str_replace('usr-', '', $lastUser->id);
        $nextNumber = $lastNumber + 1;

        
        return 'usr-' . str_pad($nextNumber, 6, '0', STR_PAD_LEFT);
    }

    public function destroy($id){
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('users.index')->with('success', 'User deleted successfully');
    }
}
