<?php

session_start();

class HomeController extends RenderView
{
  public function index($id)
  {
    $users = new UserModel();

    $this->loadView('home', [
      'title' => 'Home',
      'users' => $users->fetch()
    ]);
  }
}