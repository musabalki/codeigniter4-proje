<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            padding: 0;
            margin: 0;
        }
        table{
            width: 100%;
        }
        table tr:first-child{background: greenyellow;}
        table th{padding: 8px;}
    </style>
</head>
<body>
    <table>
        <tr>
            <th>Başlık 1</th>
            <th>Başlık 2</th>
            <th>Başlık 3</th>
        </tr>
        <?php 
            echo view_cell('App\Libraries\ViewComponents::getUserView');
        ?>
    </table>
</body>
</html>