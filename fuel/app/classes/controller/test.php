<?php
class Controller_Test extends Controller
{
    public function action_index()
    {
        return View::forge('sample/index');
    }

    public function action_get()
    {
        $get = Input::get();
        return View::forge('test/get', $get);
    }
}

