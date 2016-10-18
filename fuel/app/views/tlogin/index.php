<html>
    <head>
       <title>Sample</title>
    </head>
    <body>
        <?php echo Form::open(array('action'=>'./index.php/tlogin/auth', 'method'=>'post')); ?><br/>
        <?php echo Form::input('username', null, array('type'=>'text')); ?><br/>
        <?php echo Form::input('password', null, array('type'=>'text')); ?>
        <?php echo Form::submit('submit', '送信'); ?>
    </body>
</html>
