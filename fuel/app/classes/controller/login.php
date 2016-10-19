<?php
class Controller_Login extends Controller
{
    public function action_index()
    {
        return View::forge('login/index');
    }

    public function action_auth()
    {
        $get = array();
        $get = Input::post();
        //var_dump($get);
        $uname = $get['username'];
        $pwd = $get['password'];

        $sql = "select username, password from user where username='$uname' and password='$pwd'";
        //$sql = "select username, password from user where username='' or '1'='1' and password='' or '1'='1'";
        $query = DB::query($sql);
        $ans = $query->execute();
        //var_dump($ans);

        if ($get['username']==$ans[0]['username'] && $get['password']==$ans[0]['password']) {
           $data = array();
           $data['username'] = $uname;
           $data['userid'] = 'WELCOM!';
           //課題ファイル一覧取得
            $viewdata = null;
            $query = null;
            $query = DB::query("select upload_time,file_name from `file` where user_name = '$uname' ");
            $viewdata = $query->execute();
            $data['rows'] = Format::forge($viewdata)->to_array();
            //var_dump($data);
            //die;
            return View::forge('./home/index.php',$data);
        }
        else;
            Response::redirect('./index.php/login/index.php');

    }
}

