<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login','register']]);
    }

    public function login()
    {
        $credentials = request(['email', 'password']);

        if (! $token = auth()->attempt($credentials)) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        return $this->respondWithToken($token);
    }

    public function register(Request $request)
    {
      $user = User::where('email', $request->email)->first();

      if(!$user){
         $user = new User();
         $user->name = $request->name;
         $user->email = $request->email;
         //$user->email_verified_at = date();
         $user->password = bcrypt($request->password);
         //$user->remember_token = "";
		 $user->active = 1;
         $user->save();

         return response()->json(['message' => 'user created sucessful', 'user' => $user]);
      }else{
         return response()->json(['message' => 'ERROR:User not created.', 404]);
      }

    }

    public function me()
    {
        return response()->json(auth()->user());
    }

    public function logout()
    {
        auth()->logout();

        return response()->json(['message' => 'Successfully logged out']);
    }

    public function refresh()
    {
        return $this->respondWithToken(auth()->refresh());
    }

    protected function respondWithToken($token)
    {
        return response()->json([
            'user' => auth()->user(),
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60
        ]);
    }
}
