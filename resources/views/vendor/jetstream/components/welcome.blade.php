<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>

    <div class="middle">
        <div class="contenu">
            <div class="laravel">
                <div class="welcome">
                    Welcome to your Velocity Dashboard!
                </div>
                <div class="text">
                    <p>
                       Laravel has wonderful documentation covering every aspect of the framework. Whether you're new to the framework or have previous experience, we recommend reading all of the documentation from beginning to end.
                    </p>
                </div>
            </div>
        </div>
        <div class="flex">
            <div class="half1">
                <div class="offers">
                    <div class="documentation"><i class="fas fa-book-open"></i>Documentation</div>
                        <p>
                            Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development. Check them out, see for yourself, and massively level up your development skills in the process.
                        </p>
                </div>
            </div>

            <div class="half2">
                <div class="offers">
                    <div class="documentation"><i class="fas fa-book-open"></i>Documentation</div>
                        <p>
                            Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development. Check them out, see for yourself, and massively level up your development skills in the process.
                        </p>
                </div>
            </div>
            <div class="half1">
                <div class="offers">
                    <div class="documentation"><i class="fas fa-book-open"></i>Documentation</div>
                        <p>
                            Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development. Check them out, see for yourself, and massively level up your development skills in the process.
                        </p>
                </div>
            </div>

            <div class="half2">
                <div class="offers">
                    <div class="documentation"><i class="fas fa-book-open"></i>Documentation</div>
                        <p>
                            Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development. Check them out, see for yourself, and massively level up your development skills in the process.
                        </p>
                </div>
            </div>
        </div>
        <footer class="footer">
            <div class="footer-left">
                <img src="images/logo2.png" alt="">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In malesuada leo mauris, non ultricies nunc</p>
                <div class="socials">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-dribbble"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                    <a href="#"><i class="fab fa-tumblr"></i></a>
                </div>
            </div>
            <ul class="footer-right">
                <li>
                    <h2>Product</h2>

                    <ul class="box">
                        <li><a href="#">Theme Design</a></li>
                        <li><a href="#">Plugin Design</a></li>
                        <li><a href="#">Wordpress</a></li>
                        <li><a href="#">Joomla Template</a></li>
                        <li><a href="#">HTML Template</a></li>
                    </ul>
                </li>
                <li class="features">
                    <h2>Useful Links</h2>

                    <ul class="box">
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Pricing</a></li>
                        <li><a href="#">Sales</a></li>
                        <li><a href="#">Tickets</a></li>
                        <li><a href="#">Customer Service</a></li>
                    </ul>
                </li>
                <li>
                    <h2>Address</h2>

                    <ul class="box">
                        <li><a href="#">8 ibnou khatima</a></li>
                        <li><a href="#">Rue Les Hopitaux</a></li>
                        <li><a href="#">Casablanca</a></li>
                        <li><a href="#">Maroc</a></li>
                    </ul>
                </li>
            </ul>

            <div class="footer-bottom">
                <p>All Rights Reserved By &copy;Velocity 2021</p>
                <img class="footer-dark-mode" src="images/sun.png" id="icon">
            </div>
        </footer>
</body>
<style>
    @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }
    .middle .contenu .laravel .text{
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
    }
    .middle .contenu .laravel .welcome{
        text-align: center;
        color: rgb(255, 183, 0);
        font-size: 3rem;
        font-weight: 600;
    }
    .middle .contenu{
        display: grid;
        grid-template-columns: 1fr;
        margin-bottom: 3%;
        grid-column-gap: 20px;
        grid-row-gap: 20px;
        justify-items: stretch;
        align-items: stretch;
    }
    .flex{
        display: grid;
        grid-template-columns: 2fr 2fr;
        grid-template-rows: 2fr 2fr;
        grid-column-gap: 20px;
        grid-row-gap: 20px;
        justify-items: stretch;
        align-items: stretch;
        margin-left: 2%;
        margin-right: 2%;
    }
    .laravel{
        margin-top: 3%;
        box-shadow: 0px 10px 30px 20px #111;
        margin-left: 2%;
        margin-right: 2%;
        padding: 40px;
    }
    .half1, .half2{
        box-shadow: 0px 10px 30px 20px #111;
        padding: 40px;

    }

    .documentation{
        color: rgb(255, 183, 0);
        font-weight: 600;
    }
    .documentation i{
        padding: 15px;
        color: white;
    }
    .footer-dark-mode {
        width: 30px;
        cursor: pointer;
        margin-top: 2%;
    }
    .light-mode {
        background-color: rgb(216, 216, 216);
        color: rgb(34,34,34);
        transition: 0.3s linear;
    }
    .light-mode .section i{
        border-color: rgb(34,34,34)
    }
    .light-mode .footer-left p{
        color: white;
    }
    .light-mode .footer h2{
        color: white;
    }
    .light-mode .half1, .light-mode .half2 {
        box-shadow: 0px 10px 30px 20px #888;
        background: rgb(255, 183, 0);
    }
    .light-mode .laravel{
        box-shadow: 0px 10px 30px 20px #888;
        background: rgb(255, 183, 0);
    }
    .light-mode .middle .contenu .laravel .welcome{
        color: rgb(34,34,34);
    }
    .light-mode .documentation{
        color: rgb(34,34,34);
    }
    .light-mode p{
        color: white;
    }
    footer{
        display: -webkit-flex;
        display: -moz-flex;
        display: -ms-flex;
        display: -o-flex;
        display: flex;
        flex-flow: row wrap;
        padding: 50px;
        padding-bottom: 1%;
        background: rgb(34,34,34);
        margin-top: 5%;
    }

    .footer > *{
        flex: 1 100%;
    }
    .footer-left{
        margin-right: 1.25em;
        margin-bottom: 2em;

    }
    .footer-left img{
        width: 50%;
    }

    .footer h2{
        font-weight: 600;
        font-size: 17px;
    }

    .footer ul{
        list-style: none;
        padding-left: 0;
    }

    .footer li{
        line-height: 2em;
        margin-top: 1%;
    }

    .footer a{
        text-decoration: none;
    }
    .footer-right{
        display: -webkit-flex;
        display: -moz-flex;
        display: -ms-flex;
        display: -o-flex;
        display: flex;
        flex-flow: row wrap;
    }

    .footer-right > * {
        flex: 1 50%;
        margin-right: 1.25en;
    }

    .box a {
        color: #999;
    }

    .footer-bottom{
        text-align: center;
        color: #999;
        padding-top: 50px;
    }

    .footer-left p{
        padding-right: 20%;
    }

    .footer-dark-mode {
        width: 30px;
        cursor: pointer;
        margin-top: 2%;
    }

    .socials a i{
        color: #e7f2f4;
        padding: 10px 12px;
        font-size: 20px;
    }

    @media screen and (min-width: 600px) {
        .footer-right > * {
            flex: 1;
        }
        .footer-left{
            flex: 1 0px;
        }
        .footer-right{
            flex: 2 0px;
        }
    }
    @media (max-width: 920px) {
        .laravel{
        margin-top: 3%;
        box-shadow: 0px 10px 30px 20px #111;
        margin-left: 2%;
        margin-right: 2%;
        padding: 40px;
        }
        .half1 , .half2{
            margin-bottom: 5%;
        }
    }
    @media screen and (max-width: 920px){
        .flex{
            display: block;
        }
    }

</style>
<script>
    var icon = document.getElementById("icon");

    let localData = localStorage.getItem("theme");

    if(localData == "light"){
        icon.src = "images/moon.png";
        document.body.classList.remove("light-mode");
    }
    else if(localData == "dark"){
        icon.src = "images/sun.png";
              document.body.classList.remove("light-mode");
    }

     localStorage.setItem("theme" , "light");

     icon.onclick = function() {
         document.body.classList.toggle("light-mode");
         if(document.body.classList.contains("light-mode")){
             icon.src = "images/moon.png"
             localStorage.setItem("theme" , "light");
         }
         else{
             icon.src = "images/sun.png"
             localStorage.setItem("theme" , "dark");
         }
     }
 </script>
</html>
