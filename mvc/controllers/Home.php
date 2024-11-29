<?php

class Home extends Controller
{
   function __construct() {}

   function index()
   {



      return $this->view('client', [
         'title' => 'Video List',
         'pagePath' => 'home',
         'css' => [],
         'js' => ['home'],
      ]);
   }
}
