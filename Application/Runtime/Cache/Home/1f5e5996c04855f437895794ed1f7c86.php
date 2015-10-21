<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
    </head>
    <body>
    <form action="/test/index.php/Home/Form/insert" method="post" accept-charset="utf-8">
        标题：<input type="text" name="title" /><br>
        内容：<textarea name="content" cols="45" rows="5"></textarea><br>
        <input type="submit" value="提交">
    </form> 
    </body>
</html>