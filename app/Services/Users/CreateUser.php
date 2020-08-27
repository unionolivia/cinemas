<?php

namespace App\Services;

use Illuminate\Support\Facades\Hash;
use App\Exceptions\DuplicateEmailException;
use App\Repositories\Eloquent\UserRepository;
use App\Helpers\JwtHelper;


class CreateUser
{
    protected $userRepository;
    
    public function __construct(UserRepository $userRepository){
    	$this->userRepository = $userRepository;
    }

    public function execute(array $data){
        $email = $data['email'];
        
      try{
        $this->userRepository->findBy('email', $email);
       
        $user = $this->userRepository->create([
         'name' => $data['name'],
         'email' => $data['email'],
         'password' => Hash::make($data['password'])
        ]);

        $token =  auth()->login($user); 
      }
        catch (\Illuminate\Database\QueryException $e){
            $errorCode = $e->errorInfo[1];
            if($errorCode == 1062){
                return response()->json(['message' => 'You already have an account with us.']);
            }
        }

        return JwtHelper::respondWithToken($token);
        
    }
}
