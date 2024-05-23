<?php
namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\LengthAwarePaginator;

class UserController extends Controller{

    public function user() {
        $user = User::paginate(5);
        Paginator::useBootstrap();
        return view('admin.user.user',['user' => $user]);
    }
    public function adduser(){
        return view('admin.user.adduser');
    }
    public function delete($id)
    {
        User::destroy($id);
        return redirect('/admin/user');

    }
    public function edituser($id){
        $user = User::find($id);
        return view('admin.user.edituser',compact('user'));
    }
    public function searchUser(Request $request)
    {
        $keyword = $request->get('search');
        $user = User::where('name', 'like', '%' . $keyword . '%')
            ->orWhere('email', 'like', '%' . $keyword . '%')
            ->paginate(5);
            
        return view('admin.user.user', compact('user', 'keyword'));

    }
   

    public function edit($id, Request $request)
    {
        $user = User::findOrFail($id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
       
        // dd($user);
        $user->update();
        return redirect('/admin/user');
    }
    public function adduser1(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        $data = $request->all();
        $check = $this->create($data, $request);
        
        return redirect('/admin/user');
        
    }

    public function create(array $data, Request $request)
    {

        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),

        ]);
    }

}
 