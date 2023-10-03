<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <style>
        h5:hover{
            color: #000 !important;
        }
    </style>
</head>
<body>

    <div class="main">
    <div class="container g-0">
        <?php
             include "header.php"; 
            ?>
            <div class="content mt-3">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="content_left">
                                <img src="./img/anh1.jpg" alt="" class="content_img" style ="width:100%">
                            </div>
                        </div>
                        <div class="col-md-9">
                           
                        </div>
                    </div>
                </div>
                <hr>
                <h4 class="text-center">TLU'S MUSIC GARDEN</h4>
            </div>
    </div>
    </div>
</body>
</html>

            <div class="bottom_content d-flex">
                <div class="row">
                    <?php
                            while($row = $list_sql->fetch())
                        {
                            ?>
                                <div class="card col-md-3 mx-4 g-0 my-2" style="width: 18rem;">
                                    <img src="../img/<?= $row[2] ?>" alt="">
                                    <div class="card-body text-center">
                                        <a class=" text-decoration-none" href="detail1.php?mabv=<?=$row[3]?>"><p class="text-center"><?= $row[5]?></p></a>
                                    </div>
                            </div>

                            <?php
                        }
                        ?>
                </div>   
            </div>