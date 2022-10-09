<!DOCTYPE html>
<html>
<head>
    <title>DigitalArt</title>
    <script src="https://kit.fontawesome.com/bf9497bfb3.js"></script>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>

<?php
include("header.php");
?>

    <div class="contain" id="container">
        <!-- <div class="item"><a href="bg.jpg"><img src="bg.jpg" alt="image" width="100%"></a></div> -->
        <div id="title">
            <p>My Art</p>
        </div>


        <div class="illustration">

            <?php
                $title = $_POST["title"];
                $nama = $_POST["artistName"];
                $img = $_FILES["file"]["name"];
                $tempName = $_FILES["file"]["tmp_name"];
                $email = $_POST["email"];
                $software = $_POST["software"];

                move_uploaded_file($tempName,"image/".$img);
            ?>


            <div>
                <a href="image/<?php echo $img ?>"><img src="image/<?php echo $img ?>"></a>
                <hr>
                <i class="fa fa-heart"></i>
                <p><?php echo "Title : $title" ?></p>
                <p><?php echo "Artist : $nama" ?></p>
                <p><?php echo "email : $email" ?></p>
                <p><?php echo "Software : $software" ?></p>
            </div>
        </div>


        <div class="illustration">
            <div>
                <a href="image/background.png"><img src="image/background.png" alt=""></a>
                <hr>
                <i class="fa fa-heart"></i>
                <p>title : SpaceMood</p>
                <p>Artist : AndiAri_</p>
                <p>software : Medibang</p>
            </div>

            <div>
                <a href="image/mono.jpg"><img src="image/mono.jpg" alt=""></a>
                <hr>
                <i class="fa fa-heart"></i>
                <p>title : Mono</p>
                <p>Artist : AndiAri_</p>
                <p>software : Medibang</p>
            </div>

            <div>
                <a href="image/butterfly.jpg"><img src="image/butterfly.jpg" alt=""></a>
                <hr>
                <i class="fa fa-heart"></i>
                <p>title : Butterfly</p>
                <p>Artist : AndiAri_</p>
                <p>software : Medibang</p>
            </div>

            <div>
                <a href="image/simple.png"><img src="image/simple.png" alt=""></a>
                <hr>
                <i class="fa fa-heart"></i>
                <p>title : Bless</p>
                <p>Artist : AndiAri_</p>
                <p>software : Medibang</p>
            </div>
        </div>

        <div class="illustration">
            <div>
                <a href="image/bg.jpg"><img src="image/bg.jpg" alt=""></a>
                <hr>
                <i class="fa fa-heart"></i>
                <p>title : DigitalStyle</p>
                <p>Artist : AndiAri_</p>
                <p>software : Medibang</p>
            </div>

            <div>
                <a href="image/waifuasadi.png"><img src="image/waifuasadi.png" alt=""></a>
                <hr>
                <i class="fa fa-heart"></i>
                <p>title : Waifus</p>
                <p>Artist : AndiAri_</p>
                <p>software : Medibang</p>
            </div>

            <div>
                <a href="image/arlecchino.jpg"><img src="image/arlecchino.jpg" alt=""></a>
                <hr>
                <i class="fa fa-heart"></i>
                <p>title : Arlecchino</p>
                <p>Artist : AndiAri_</p>
                <p>software : Medibang</p>
            </div>

            <div>
                <a href="image/space.jpg"><img src="image/space.jpg" alt=""></a>
                <hr>
                <i class="fa fa-heart"></i>
                <p>title : Astrounout</p>
                <p>Artist : AndiAri_</p>
                <p>software : Medibang</p>
            </div>
        </div>

        

    </div>

    <footer class="foot" id="footer"><p>Create by : Andi Ari Wardana NIM : 2109106146</p></footer>
    <script type="text/javascript" src="script2.js"></script>
</body>
</html>