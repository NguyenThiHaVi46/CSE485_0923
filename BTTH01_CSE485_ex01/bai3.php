<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, tr, td{
            border: 1px solid #000;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <?php
      $arrs = ['PHP', 'HTML', 'CSS', 'JS'];
    ?>
<table>
    <tr>Tên khóa học</tr>
    <tr>
        <td><?php echo $arrs[0]?></td>
    </tr>
    <tr>
        <td><?php echo $arrs[1] ?></td>
    </tr>
    <tr>
        <td><?php echo $arrs[2] ?></td>
    </tr>
    <tr>
        <td><?php echo $arrs[3] ?></td>
    </tr>   
 </table>
</body>
</html>
