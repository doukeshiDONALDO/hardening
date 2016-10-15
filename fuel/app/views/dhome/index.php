<!DOCTYPE HTML>
<!DOCTYPE html PUBLIC "" ""><HTML><HEAD><META content="IE=11.0000" 
http-equiv="X-UA-Compatible">

<META charset="utf-8">
<META http-equiv="ContentType" content="text/html:charset=utf-8">
<META http-equiv="X-UA-Compatible" content="IE=Edge">
<LINK href="学生ポータル.files/portal.css" 
rel="stylesheet" type="text/css">

<?php echo Asset::css("portal.css"); ?>    
    <TITLE>学生ポータル</TITLE>
<META name="GENERATOR" content="MSHTML 11.00.10570.1001"></HEAD> 
<BODY class="STUDENT">
<DIV class="TOP">
<HEADER> 
<DIV class="headers">
<DIV class="studentTab">     
    <SPAN class="dispPC"><A class="studentPortal selectedTab" href="">
<!--<IMG src="学生ポータル.files/student_portal.png">
-->
<?php echo Asset::img('student_portal.png'); ?> 
<SPAN>学生ポータル</SPAN>      </A>              
     <A class="crrclmFlow " href="">
<!--<IMG src="学生ポータル.files/crrclm_flow.png">
-->
<?php echo Asset::img('crrclm_flow.png'); ?>
         
         <SPAN>課題提出</SPAN>        </A>                
                      </SPAN>    </DIV>
                      <DIV class="studentUsers"> 
    <SPAN class="userMenu beginner"><a href="">ログアウト</a></SPAN>
    
<SPAN class="userMenu"><SPAN class="dropdownLabel">
<!--<IMG src="学生ポータル.files/user.png">
-->
<?php echo Asset::img('user.png'); ?>
    <DIV style="display: inline-block;">
    <SPAN class="loginuser-pc">
        <?php echo $username; ?>
    </SPAN>
    <BR>
    <SPAN class="dropdownLabelSub">
        <?php echo $userid; ?>
    </SPAN></DIV>
    </SPAN>
</SPAN>            
</DIV></DIV>
</HEADER>
<DIV id="main"><ARTICLE style="padding-bottom: 30px;">
<DIV class="topMessages sortableArea">


  
<DIV id="eSyllabusPane">
<DIV class="KITP00200">
<DIV class="KITP00200Title messageTitle">課題ファイル一覧</DIV>
<DIV>
<DIV id="KITP00200List">
<TABLE>
  <TBODY>

	<?php foreach ($rows as $row): ?>
				<tr>
					<td nowrap=""><?php echo $row["date"]; ?></td>
					<TD class="KITP00200PC"></TD><!-- このtdタグを削除するとレイアウト崩れるので削除せずに残している-->
					<TD><A class="KITP00200Portfolio" href="" ><?php echo $row["filename"]; ?></A></TD>
            </tr>
   <?php endforeach;?>
<!-- 以下出力例
  <TR>
    <TD nowrap="">日付</TD>
    <TD class="KITP00200PC"></TD>
    <TD><A class="KITP00200Portfolio" href="" >「数値処理&nbsp;2EP1，2」で第3回の宿題(10/13(木)締切)が配信されました。</A></TD>
  </TR>
  <TR>
    <TD nowrap="">10/08(土)</TD>
    <TD class="KITP00200PC"></TD>
    <TD><A class="KITP00200Portfolio" href="" >「情報工学専門実験・演習Ｂ&nbsp;3EP全」で第2回レポート（阿部）(10/17(月)締切)が配信されました。</A></TD>
  </TR>
  <TR>
    <TD nowrap="">10/08(土)</TD>
    <TD class="KITP00200PC"></TD>
    <TD><A class="KITP00200Portfolio" href="" >「情報工学専門実験・演習Ｂ&nbsp;3EP全」で第2回レポート(元木)(10/17(月)締切)が配信されました。</A></TD>
  </TR>
  <TR>
    <TD nowrap="">10/07(金)</TD>
    <TD class="KITP00200PC"></TD>
    <TD><A 
      class="KITP00200Portfolio" href="" >「数値処理&nbsp;2EP1，2」で講義資料が配信されました。</A></TD></TR>
   <TR>
    <TD nowrap="">09/23(金)</TD>
    <TD class="KITP00200PC"></TD>
    <TD><A 
      class="KITP00200Portfolio" href="" >「数値処理&nbsp;2EP1，2」で講義資料が配信されました。</A></TD></TR>
  <TR>
    <TD nowrap="">09/21(水)</TD>
    <TD class="KITP00200PC"></TD>
    <TD><A class="KITP00200Portfolio" href="" >「人間と自然セミナーⅢ&nbsp;3全」&nbsp;自己評価(G083-01-2001)</A></TD>
  </TR>
-->
        
        </TBODY></TABLE></DIV></DIV></DIV></DIV>


</DIV>
<DIV id="launchpadPane">
<DIV class="KITPC050001 module">
<DIV class="header">
<H2 class="title messageTitle">課題ファイルアップロード                 
      </H2></DIV>
<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="upload_file">
    <input type="submit" name="submit" value="送信">
</form>


<DIV class="accordion"></DIV></DIV></DIV>




</ARTICLE><NAV id="studentMenu">
<DIV>
<DIV class="menuHeader">修学情報</DIV>       　      
<DIV><A href="https://navi.mars.kanazawa-it.ac.jp/portal/student/KITP00600">時間割</A></DIV>
<DIV><A href="http://mars10.mars.kanazawa-it.ac.jp/seiseki/syusseki_gp" target="_seiseki">出席照会</A></DIV>
</DIV>

<DIV>
     
    </DIV></DIV>
</NAV>  </DIV>

 </BODY></HTML>

