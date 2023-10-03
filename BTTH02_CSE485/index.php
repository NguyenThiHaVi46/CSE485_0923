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
        main{
            border: 1px solid blue !important;
        }
    </style>
</head>
<body>
    <?php
     require './php/connect.php';

     try{
        $sql = 'select * from baiviet';
        $stmt = $strConnection->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
    }catch(PDOException $e){
        $e->getMessage();
    }
    ?>
    
    
    <div class="main">
        <div class="container g-0">
            <?php
            include "header.php"; 
            ?>
            <div class="content mt-3">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="content_body">
                                <img src="./img/main.png" alt="" class ="content_img w-100 h-100" >
                            </div>
                        </div>
                    </div>
            </div>
            <div class="footer mt-3">
                <div class="footer_wrap">
                    <h3 class="footer_title text-center" style = "color: blue">TOP BÀI HÁT YÊU THÍCH</h3>   
                </div>
                <div class="row">
                    <?php foreach ($result as $song) { ?>
                        <div class="col-md-3">
                        <div class="card song-wrapped border rounded pb-3">
                            <a class="d-block" href="./php/form_edit.php?id=<?= $song['ma_bviet'] ?>">
                            <img class="w-100 h-100" src="<?= $song['hinhanh'] ?>" alt="">
                            </a>
                        <h6 class="text-primary text-center mt-2 fw-normal"><?= $song['ten_bhat'] ?></h6>
                        </div>
                        </div>
                    <?php } ?>
                    <hr>
                    <h4 class="text-center">TLU'S MUSIC GARDEN</h4>
            </div>
        </div>
    </div>
</body>
</html>