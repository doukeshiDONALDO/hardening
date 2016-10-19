<!DOCTYPE HTML>
<!DOCTYPE html PUBLIC "" ""><HTML><HEAD><META content="IE=11.0000" http-equiv="X-UA-Compatible">

<META charset="utf-8">
<META http-equiv="ContentType" content="text/html:charset=utf-8">
<META http-equiv="X-UA-Compatible" content="IE=Edge">
<!--
<LINK href="files/portal.css" 
rel="stylesheet" type="text/css">
-->
<?php echo Asset::css("portal.css"); ?>
    
<TITLE>学生ポータル</TITLE>
<META name="GENERATOR" content="MSHTML 11.00.10570.1001"></HEAD> 
<BODY class="STUDENT">
<DIV class="STUDENTLOGIN TOP"><SPAN class="commonPaneSP"></SPAN>   
<HEADER>   
<DIV class="headers">
<DIV class="studentTab">
<SPAN class="dispPC">
<A class="studentPortal selectedTab" href="">
<!--
<IMG src="学生ポータル.files/student_portal.png">
-->   
<?php echo Asset::img('student_portal.png'); ?>    
<SPAN>学生ポータル</SPAN>      
</A>              
<A class="crrclmFlow disabled" href="">
<!--      
<IMG src="学生ポータル.files/crrclm_flow.png">
-->
<?php echo Asset::img('crrclm_flow.png'); ?>
<SPAN>課題提出</SPAN> 
</A>
</SPAN>
</DIV>
<DIV class="studentUsers">          
    <SPAN>ログアウト中</SPAN>        
</DIV>
</DIV>
</HEADER>

<DIV id="main">
<DIV id="KITP0000001LoginPane">    
<H2>学生ポータル</H2>


<!--ユーザ名・パスワード入力フォーム-->    
<FORM name="loginform" action="./auth" method="post">
       
<TABLE id="loginTbl">
    <TBODY>
    <TR>
        <TD>学籍番号</TD>
        <TD><INPUT name="username" type="text"></TD>
    </TR>
    <TR>
        <TD nowrap="">パスワード</TD>
        <TD><INPUT name="password" type="password"></TD>
    </TR>
    </TBODY>
</TABLE>
    <DIV class="operation">
    <INPUT class="loginButton" id="StudentLoginBtn" type="submit" value="ログイン"> 
    </DIV>
</FORM>
     
        
      
<P>学生ポータルは、学生個人の修学専用サイトです。<BR>個人宛ての連絡や、講義資料などが配信されます。<BR>また、住所変更などの手続きも行えます。毎日必ず確認しましょう。</P>
<P>学生ポータルはWindows10のMicrosoft Edgeには対応しておりません。<BR>Internet Explorer11、もしくはGoogle 
Chromeでご利用ください。</P></DIV>
<DIV id="KITP0000001HowtoLoginPane">
<DIV class="linkHeader">
<DIV class="menuIconSP"><SPAN>ログイン方法</SPAN></DIV></DIV>
<DIV>
<P>(1)学籍番号を入力してください。（半角英数 ７桁）</P>
<P>(2)パスワードを入力してください。</P>
<P>パスワードは履修申請システム、成績照会システムと同じものになります。<BR>変更されていない場合、初期値はあなたの誕生日に設定されています。<BR>ex.平成3年5月19日生の場合・・・・h030519（半角英数で入力）</P>
<P>※ 注意事項<BR>個人所有以外の不特定多数の利用者が使用するコンピュータからシステムを利用する場合、以下の点に注意してください。</P>
<UL>
  <LI>作業が終了したら必ずブラウザを終了してください</LI>
  <LI>ブラウザが利用者ＩＤ、パスワードの保存をたずねてきた場合は「保存しない」ようにしてください</LI></UL>
<P>※ パスワードを忘れた場合<BR>.......</P></DIV></DIV></DIV>

  </BODY></HTML>

