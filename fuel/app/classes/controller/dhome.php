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
   
      return View::forge('dhome/index',$data);
    }

/*    public function action_get()
    {
        $get = Input::get();
        return View::forge('sample/get', $get);
}*/
}

