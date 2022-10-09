<!DOCTYPE html>
<html>
<head>
    <title>DigitalArt</title>
    <script src="https://kit.fontawesome.com/bf9497bfb3.js"></script>
    

    <style>
        body
{
    margin: 0;
    padding: 0;
    /* background-color: white; */
}

/* .darkMode
{
    background-color: black;
    color: white;
} */

li
{
    list-style-type: none;
    padding: 10px;
}

a
{
    font-weight: 900;
    font-family: monospace;
    color: white;
    text-decoration: none;
}

.header
{
    width: 100%;
    background-color: rgb(36, 25, 58);
    display: flex;
    position: fixed;
    justify-content: space-between;
}

.headerDark
{
    width: 100%;
    background-color: black;
    display: flex;
    position: fixed;
    justify-content: space-between;
}

.headerDark
{
    top: 0;
}

/* footer
{
    padding-top: 20px;
    color: cornsilk;
    font-family: monospace;
    font-weight: 900;
    font-size: 20px;
    background-color: rgb(36, 25, 58);
    padding: 20px;
    align-items: center;
    flex-direction: column;
    display: flex;
    bottom: 0;
} */

.foot
{
    padding-top: 20px;
    color: white;
    font-family: monospace;
    font-size: 20px;
    background-color: rgb(36, 25, 58);
    padding: 20px;
    align-items: center;
    flex-direction: column;
    display: flex;
    bottom: 0;
}

.footDark
{
    padding-top: 20px;
    color: white;
    font-family: monospace;
    font-size: 20px;
    background-color: rgb(0, 0, 0);
    padding: 20px;
    align-items: center;
    flex-direction: column;
    display: flex;
    bottom: 0;
}


.header
{
    top: 0;
}

.judul
{
    margin-left: 20px;
    font-family:  monospace;
    font-weight: 700;
    font-size: 50px;
    display: flex;
    align-items: center;
}

#nama1
{
    color: white;
}

#nama2
{
    color:crimson;
}

.navigator
{
    display: flex;
    justify-content: space-between;
    flex-direction: row;
    padding: 10px;
    align-items: center;
    font-size: 20px;
    margin-right: 20px;
}

#mf
{
    font-family: monospace;
    text-align: center;
    font-size: 25px;
}

.navigator > li:hover
{
    background-color: rgb(18, 12, 31);
    transition: all .2s ease-in-out;
    border-radius: 8px;
}

.navigator > input
{
    border-radius: 15px;
    font-size: 20px;
}

.colorfont
{
    color: crimson;
}

.containDarkmode
{
    margin-top: 101px;
    padding-bottom : 70px;
    background-color: rgb(14, 14, 14);
    color: white;
}

.contain
{
    margin-top: 101px;
    padding-bottom : 70px;
    background-color: white;
    color: black;
}

.inputBox
{
    width: 800px;
    background-color: rgb(236, 236, 236);
    border-radius: 10px;
    height: 100%;
    padding: 20px;
    padding-bottom : 30px;
    display: flex;
    flex-direction: column;
    justify-content: space-around;
    margin-left: 300px;
    text-align: center;
    font-family: monospace;
}

.inputBox_dark
{
    width: 800px;
    background-color: black;
    border-radius: 10px;
    height: 100%;
    padding: 20px;
    padding-bottom : 30px;
    display: flex;
    flex-direction: column;
    justify-content: space-around;
    margin-left: 300px;
    text-align: center;
    font-family: monospace;
}


.inputText input
{
    border-top-style: hidden;
    border-left-style: hidden;
    border-right-style: hidden;
    border-bottom-style: groove;
    width: 300px;
    height: 30px;
    background-color: rgb(216, 216, 216);
}

.inputBtn
{
    border-style: none;
    width: 100px;
    height: 50px;
    border-radius: 10px;
    color: white;
    background-color: crimson;
}

.inputBtn:hover
{
    background-color: rgb(240, 69, 103);
}
.gallery
{
    margin: 5px;
    border: 1px solid rgb(0, 0, 0);
    width: 180px;
    width: 200%;
}

.illustration
{
    display: flex;
    align-items: center;
    justify-content: space-around;

}

.switch {
    position: relative;
    display: inline-block;
    width: 60px;
    height: 34px;
  }
  
  .switch input { 
    opacity: 0;
    width: 0;
    height: 0;
  }
  
  .slider {
    position: absolute;
    cursor: pointer;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: #ccc;
    -webkit-transition: .4s;
    transition: .4s;
  }
  
  .slider:before {
    position: absolute;
    content: "";
    height: 26px;
    width: 26px;
    left: 4px;
    bottom: 4px;
    background-color: white;
    -webkit-transition: .4s;
    transition: .4s;
  }
  
  input:checked + .slider {
    background-color: #3d3d3d;
  }
  
  input:focus + .slider {
    box-shadow: 0 0 1px #3d3d3d;
  }
  
  input:checked + .slider:before {
    -webkit-transform: translateX(26px);
    -ms-transform: translateX(26px);
    transform: translateX(26px);
  }
  
  /* Rounded sliders */
  .slider.round {
    border-radius: 34px;
  }
  
  .slider.round:before {
    border-radius: 50%;
  }
  

/* .illustration > div
{
    background-color: rgb(36, 36, 36);
    margin: 10px;
    padding: 30px;
    border: 2px solid rgb(36, 25, 58);
} */


#title
{
    font-family: monospace;
    font-size: 50px;
    padding: 12px;
    text-align: center;
}

#in
{
    font-size: 20px;
}

.illustration > div > a > img
{
    width: 200px;
    height: 200px;
}

.illustration > div > a:hover
{
    opacity: 0.5;
    transition: all .2s ease-in-out;
}

.illustration div > i
{
    color: rgb(201, 29, 58);
}

.illustration div > p
{
    font-family: monospace;
}



.item
{
    padding: 25px;

}

.item > a > img
{
    border-radius: 8px;
}

.hp
{
    font-family: monospace;
    font-weight: 900;
    font-size: 30px;
    padding: 30px;
    color: cornsilk;
}


hr
{
    color: black;
}
.img1
{

    font-family: monospace;
}

.img1 > img
{
    width: 20%;
}

#item > a > img
{
    width: 100%;
}


#item > a:hover
{
    opacity: 0.5 ;
    transition: all .2s ease-in-out;
}

#homepage
{
    padding: 20px;
    font-weight: 800;
    font-family: monospace;
    font-size: 50px;
    text-align: center;
}



#in
{
    font-family: monospace;
    font-size: 50px;
    text-align: center;
}

/* style aboutme */
.myPicture
{
    padding: 20px;
    text-align: center;
    font-family: monospace;
    
}

.myPicture > img
{
    width: 10%;
    border-radius: 50%;
}


.icon
{
    text-align: center;
    padding-bottom: 20px;
}

.icon > a > img
{
    width: 2%;
}


.title
{
    font-family : monospace;
    font-size : 50px;
    text-align : center;
    padding : 30px;
}



    </style>


</head>
<body>

<?php
include("header.php");
?>

    <div class="contain" id="container">

        <div class="title">
            <p>Add image</p>
        </div>

        <div class="inputBox" id="box">
        <form action="myart.php" method="post" enctype="multipart/form-data">
            <p>add image : <input type="file" name="file"> </p>
            
            <div class="inputText">
                <p>Title </p> <br>
                <input type="text" name="title" placeholder="Input the title">
                <p>Artist name </p> <br>
                <input type="text" name="artistName" placeholder="Input Artist Name">
                <p>Your Email </p> <br>
                <input type="email" name="email" placeholder="your Email"> 
                <p>software</p> <br>
                <input type="text" name="software" placeholder="Your Software"> <br> <br>
            </div>
            <button class="inputBtn"><i class="fa-solid fa-plus"></i>add</button>

        </form>
        </div>

    </div>
       


    <footer class="foot" id="footer"><p>Create by : Andi Ari Wardana NIM : 2109106146</p></footer>
    <script>

function check()
{
    let cb = document.getElementById('cb').checked;
    if(cb == true)
    {
        document.getElementById('head').classList.remove('header');
        document.getElementById('head').classList.add('headerDark')
        document.getElementById('container').classList.remove('contain');
        document.getElementById('container').classList.add('containDarkmode');
        document.getElementById('footer').classList.remove('foot');
        document.getElementById('footer').classList.add('footDark');
        document.getElementById('box').classList.remove('inputBox');
        document.getElementById('box').classList.add('inputBox_dark');
    }

    else
    {
        document.getElementById('head').classList.remove('headerDark');
        document.getElementById('head').classList.add('header');
        document.getElementById('container').classList.remove('containDarkmode');
        document.getElementById('container').classList.add('contain');
        document.getElementById('footer').classList.remove('footDark');
        document.getElementById('footer').classList.add('foot');
        document.getElementById('box').classList.remove('inputBox_dark');
        document.getElementById('box').classList.add('inputBox');
    }
}

    let button = document.getElementById('buttonInfo');
    button.addEventListener("click", function(){
    let x = document.getElementById("more");
    if(x.style.display == "none")
    {
        x.style.display = "block";
    }

    else
    {
        x.style.display = "none";
    }
    })



    </script>
</body>
</html>