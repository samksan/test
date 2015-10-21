<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
    </head>
    <body>
    <table>
        <tr>
            <td>id:</td>
            <td><?php echo ($data["id"]); ?></td>
        </tr>
        <tr>
            <td>Title:</td>
            <td><?php echo ($data["title"]); ?></td>
        </tr>
        <tr>
            <td>Content:</td>
            <td><?php echo ($data["content"]); ?></td>
        </tr>
    </table>
    </body>
</html>