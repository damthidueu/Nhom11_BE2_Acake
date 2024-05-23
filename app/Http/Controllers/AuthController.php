<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;



class AuthController extends Controller{

    // Xử lí đăng ký
    public function register(){
        return view('Auth.register');
    }

    public function Registration(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        $data = $request->all();
        $check = $this->create($data, $request);

        return redirect("register")->with('success', 'Sign Up Success');
    }

    public function create(array $data, Request $request)
    {

        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),

        ]);
    }
    // Xử lí đăng nhập
    public function login(){
        return view('Auth.login');
    }

    public function customLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('index')
                ->withSuccess('Signed in');
        }
        return redirect("login")->withSuccess('Login details are not valid');
    }
       //trang index (trang chu)
       public function index(){
        return view('index');
    }

    public function customLogin1(Request $request)
{
$request->validate([
    'email' => 'required',
    'password' => 'required',
]);

$credentials = $request->only('email', 'password');
if (Auth::attempt($credentials)) {
    // Xác thực thành công, chuyển hướng đến đường dẫn mong muốn
    return redirect()->intended($this->redirectPath());
}
// Xác thực thất bại, quay lại trang đăng nhập
return redirect("login")->withSuccess('Login details are not valid');
}

// Định nghĩa phương thức redirectPath() để kiểm tra vai trò và trả về đường dẫn
public function redirectPath()
{
// Nếu người dùng là admin, chuyển hướng đến trang admin
if (Auth::user()->email == 'admin@gmail.com') {
    return "/admin/user";
}
// Nếu người dùng là user, chuyển hướng đến trang index
if (Auth::user()->email != 'admin@gmail.com') {
    return "/index";
}
// Nếu không có vai trò nào khớp, chuyển hướng đến trang mặc định
return "login";
}

    //logout
    public function logOut()
    {
        Session::flush();
        Auth::logout();

        return Redirect('index');
    }
  

}