<?php
//homeページを表示するためのコントローラ　コピー元sample.php
class Controller_Dhome extends Controller
{
    public function action_index()
    {
		$data = array();
		$data['username'] = 'doukeshiDONALDO';
		$data['userid'] = 'b1234567';

		$data['rows'] = [
   	 0 => [ 'date' => 40, 'filename' => 'Hello, world!'],
   	 1 => [ 'date' => 10, 'filename' => '你好，世界！'],
   	 2 => [ 'date' => 30, 'filename' => 'こんにちは、世界！' ],
   	 3 => [ 'date' => 20, 'filename' => 'Salve , per omnia saecula !' ],
		];
		if(Input::method() === 'POST') {
            // 初期設定
            $config = array(
                'path' => DOCROOT.DS.'files',
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
            }

            // エラー有り
            foreach (Upload::get_errors() as $file)
            {
                var_dump($file['errors']);
                // エラー処理
            }
      }
//       $viewdata = null;
//	    $query = DB::query('select * from `file`');
//	    $viewdata = $query->execute();
 //      var_dump($viewdata);

//	    die(); 

      return View::forge('dhome/index',$data);
    }

/*    public function action_get()
    {
        $get = Input::get();
        return View::forge('sample/get', $get);
}*/
}

