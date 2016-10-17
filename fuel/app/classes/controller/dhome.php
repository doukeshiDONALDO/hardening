<?php
//homeページを表示するためのコントローラ　コピー元sample.php
class Controller_Dhome extends Controller
{
    public function action_index()
    {
       $user = 'aaa';
		$data = array();
		$data['username'] = 'doukeshiDONALDO';
		$data['userid'] = 'b1234567';

      //課題ファイル一覧取得
      $viewdata = null;
      $query = null;
      $query = DB::query("select upload_time,file_name from `file` where user_name = '$user' ");
      $viewdata = $query->execute();
      $data['rows'] = Format::forge($viewdata)->to_array();

      if(Input::method() === 'POST') {
            // 初期設定
            $config = array(
               'path' => DOCROOT.DS.'assets/files',
               //'path' => '/var/www/html/hardening/public/',
//                'randomize' => true,
//                'ext_whitelist' => array('img', 'jpg', 'jpeg', 'gif', 'png'),
            );

            // アップロード基本プロセス実行
            Upload::process($config);

            // 検証
            if (Upload::is_valid())
            {
                // 保存
                Upload::save();
                echo "<script>alert('fileupload SUCCESS!'); </script>";
                $file = null;
                $file = Upload::get_files();
            //データベースへ課題ファイル情報insert
                $insertdata = Model_Dhome::forge();
                $insertdata->user_name = $user;
                $insertdata->file_name = $file[0]['saved_as'];
                $insertdata->upload_time = date('y/m/d H:I:s');
                $insertdata->save();
                
            }

            // エラー有り
            foreach (Upload::get_errors() as $file)
            {
                var_dump($file['errors']);
                // エラー処理
            }
      }

      return View::forge('dhome/index',$data);
    }
}

