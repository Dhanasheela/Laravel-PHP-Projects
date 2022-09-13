<link rel="icon" type="image/x-icon" href="img/logo.jpg">
<title>TechAdvise-Home</title>
<style>
    h1 {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: white;
        font: 40px Raleway, sans-serif;
        /* font-weight: bold; */
        line-height: 60px;
    }

    /* * {
        border: solid red 1px;
        style="border:solid blue 2px;"
    } */
</style>
<?php
include_once("navbar.php");
?>
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <img class="mySlides" src="img/home.jpg" width="100%" height="70%">
            <img class="mySlides" src="img/download.jpg" width="100%" height="70%">
        </div>
        <script>
            var myIndex = 0;
            carousel();

            function carousel() {
                var i;
                var x = document.getElementsByClassName("mySlides");
                for (i = 0; i < x.length; i++) {
                    x[i].style.display = "none";
                }
                myIndex++;
                if (myIndex > x.length) {
                    myIndex = 1
                }
                x[myIndex - 1].style.display = "block";
                setTimeout(carousel, 2000); // Change image every 2 seconds
            }
        </script>
        <div class="col">
            <h1 style="margin-top:0px;"> We craft digital experiences that combineDesign, Technology & Strategy</h1>
        </div>
        <!-- <div class="col"> -->
        <h2 style=" text-align:center;padding-left:18px;">
            <b style="color: darkblue ;">"Technology is Best When it Brings People Together"</b>
        </h2>
        <hr style=" height:1px;border-width:1px;width:400px;color:black;background-color:black">

        <!-- </div><br> -->
    </div>
</div>
<?php
include_once('footer.php');
?>