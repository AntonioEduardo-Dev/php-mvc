<?php

class UserController
{
  public function index()
  {
  }
  
  public function show($id)
  {
    $user_id = $id[0];
    $user = new UserModel();
    $this->loadView('users', ['user' => $user->fetchById($user_id)])
  }
}