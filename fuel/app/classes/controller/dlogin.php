<?php
//ログインページを表示するためのコントローラ　コピー元sample.php
class Controller_Dlogin extends Controller
{
    public function action_index()
    {
        return View::forge('dlogin/index');
    }

/*    public function action_get()
    {
        $get = Input::get();
        return View::forge('sample/get', $get);
}*/
}

