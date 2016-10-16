<?php
class Controller_Sample extends Controller
{
    public function action_index()
    {
        return View::forge('sample/index');
    }

    public function action_get()
    {
        $get = Input::get();
        return View::forge('sample/get', $get);
    }
}

