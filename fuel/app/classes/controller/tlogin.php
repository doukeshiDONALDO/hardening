<?php
class Controller_Tlogin extends Controller
{
    public function action_index()
    {
        return View::forge('tlogin/index');
    }

    public function action_auth()
    {
        $get = array();
        $get = Input::post();
        var_dump($get);
        $uname = $get['username'];
        $pwd = $get['password'];

        $sql = "select username, password from user where username='$uname' and password='$pwd'";
        //$sql = "select username, password from user where username='' or '1'='1' and password='' or '1'='1'";
        $query = DB::query($sql);
        $ans = $query->execute();
        var_dump($ans);

        if ($get['username']==$ans[0]['username'] && $get['password']==$ans[0]['password']) {
            Response::redirect('./index.php/thome/index.php');
        }
        else;
            Response::redirect('./index.php/tlogin/index.php');

    }
}

