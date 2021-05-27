<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Velocity : Contact</title>
    <!-- Styles -->
    <style>
        @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
        *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
        }
        body{
            background: rgb(34,34,34);
            color: white;
        }
</style>
</head>
<body>
    <nav>
        <div class="logo">
            <img src="images/logo2.png" alt="">
        </div>
        <input type="checkbox" id="click">
        <label for="click" class="menu-btn">
            <i class="fas fa-bars"></i>
        </label>
        <ul>
            <li><a href="{{url("/")}}">Home</a></li>
            <li><a href="{{url("/about")}}">About</a></li>
            <li><a class="active" href="{{url("/contact")}}">Contact</a></li>
            <div class="dropdown">
                <li class="fuck"><a href="#"><i class="fas fa-user"></i></a></li>
                <div class="dropdown-content">
                    @if (Route::has('login'))
                        @auth
                            <li><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                    @else
                    @endif
                        <li><a href="{{ route('login') }}">Log in</a></li>
                        @if (Route::has('register'))
                            <li><a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a></li>
                        @endif
                    @endauth
                </div>
            </div>
            <li><a href="{{url("/tickets")}}">Tickets</a></li>
        </ul>
    </nav>
    <section>
        <div class="container">
            <div class="contactInfo">
                <div>
                    <h2>Contact Info</h2>
                    <ul class="info">
                        <li>
                            <span><img src="images/location.png" alt=""></span>
                            <span>
                                8 Rue Ibnou Katima<br>
                                Casablanca, MA<br>
                                20000
                            </span>
                        </li>
                        <li>
                            <span><img src="images/mail.png" alt=""></span>
                            <span>velocity@gmail.com</span>
                        </li>
                        <li>
                            <span><img src="images/call.png" alt=""></span>
                            <span>05222-02944</span>
                        </li>
                    </ul>
                </div>
                <ul class="sci">
                    <li><a href="#"><img src="images/fb.png"></a></li>
                    <li><a href="#"><img src="images/tw.png"></a></li>
                    <li><a href="#"><img src="images/ig.png"></a></li>
                    <li><a href="#"><img src="images/pt.png"></a></li>
                    <li><a href="#"><img src="images/in.png"></a></li>
                </ul>
            </div>

            <div class="contactForm">
                <h2>Send A Message</h2>
                <div class="formBox">
                    <div class="inputBox w50">
                        <input type="text" required>
                        <span>First Name</span>
                    </div>
                    <div class="inputBox w50">
                        <input type="text" required>
                        <span>Last Name</span>
                    </div>
                    <div class="inputBox w50">
                        <input type="email" required>
                        <span>Email Adress</span>
                    </div>
                    <div class="inputBox w50">
                        <input type="text" required>
                        <span>Mobile Number</span>
                    </div>
                    <div class="inputBox w100">
                        <textarea required></textarea>
                        <span>Write Your Message : </span>
                    </div>
                    <div class="inputBox w100">
                        <input type="submit" value="send">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <iframe class="ggl" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13295.9055856652!2d-7.6224504!3d33.5799621!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x9aecd027048e90a7!2sSUPINFO%20Casablanca!5e0!3m2!1sen!2sma!4v1620690148430!5m2!1sen!2sma" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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
</body>
</html>
<style>
    section{
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
    }
    .container{
        position: relative;
        min-width: 1100px;
        min-height: 550px;
        display: flex;
        z-index: 1;
    }
    .container .contactInfo{
        position: absolute;
        top: 40px;
        width: 350px;
        height: calc(100% - 80px);
        background: rgb(255,183,0);
        z-index: 1;
        padding: 40px;
        display: flex;
        justify-content: center;
        flex-direction: column;
        justify-content: space-between;
        box-shadow: rgba(0, 0, 0, 0.15);
    }
    .container.contactInfo h2{
        font-size: 24px;
        font-weight: 500;
    }
    .container.contactInfo ul.info{
        position: relative;
        margin: 20px 0;
    }
    .contactInfo ul.info li{
        position: relative;
        margin: 20px 0;
        display: flex;
        cursor: pointer;
        align-items: flex-start;
    }
    .contactInfo ul.info li span:nth-child(1){
        width: 30px;
        min-width: 30px;
    }

    .container .contactInfo ul.sci{
        position: relative;
        display: flex;
        color: black
    }

    .container .contactInfo ul.sci li{
        list-style: none;
        margin-right: 15px;
    }
    .container .contactInfo ul.sci li a{
        text-decoration: none;
    }
    .container .contactInfo ul.sci li a img{
        filter: invert(1);
    }
    .contactInfo ul.info li span:nth-child(1) img{
        max-width: 100%;
        filter: invert(1);
    }
    .contactInfo ul.info li span:nth-child(2){
        margin-left: 10px;
        font-weight: 300;
    }
    .container .contactForm{
        position: absolute;
        padding: 70px 50px;
        padding-left: 250px;
        margin-left: 150px;
        width: calc(100% - 150px);
        height: 100%;
        background: rgb(34,34,34);
        box-shadow: 0 20px 0 10px rgba(0, 0, 0, 0.25);
    }
    .container .contactForm h2{
        color: white;
        font-size: 24px;
        font-weight: 500;
    }
    .container .contactForm .formBox{
        position: relative;
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
        padding-top: 30px;
    }
    .container .contactForm .formBox .inputBox{
        position: relative;
        margin-bottom: 35px;
    }
    .container .contactForm .formBox .inputBox.w50{
        width: 47%;
    }
    .container .contactForm .formBox .inputBox.w100{
        width: 100%;
    }
    .container .contactForm .formBox .inputBox input,
    .container .contactForm .formBox .inputBox textarea{
        width: 100%;
        resize: none;
        padding: 5px 0;
        font-size: 18px;
        font-weight: 300;
        color: white;
        border: none;
        outline: none;
        border-bottom: 3px solid rgb(255,183,0);
        background: rgb(34,34,34);
    }
    .container .contactForm .formBox .inputBox textarea{
        height: 120px;
    }
    .container .contactForm .formBox .inputBox span{
        position: absolute;
        left: 0;
        padding: 5px 0;
        pointer-events: none;
        font-size: 18px;
        font-weight: 300;
        transition: 0.3s;
        color: white;
    }
    .container .contactForm .formBox .inputBox input:focus ~ span,
    .container .contactForm .formBox .inputBox input:valid ~ span,
    .container .contactForm .formBox .inputBox textarea:focus ~ span,
    .container .contactForm .formBox .inputBox textarea:valid ~ span{
        transform: translateY(-30px);
        font-size: 12px;
        letter-spacing: 3px;
        color: rgb(255,183,0);
    }
    .container .contactForm .formBox .inputBox input[type="submit"]{
        position: relative;
        cursor: pointer;
        background: rgb(255,183,0);
        color: white;
        border: none;
        max-width: 150px;
        padding: 12px;
        transition: 0.3s;
        border-radius: 100px;
    }
    .container .contactForm .formBox .inputBox input[type="submit"]:hover{
        transform: scale(1.1);
        transition: all 0.3s ease-in-out;
        background: rgb(255, 189, 40);
    }
    @media (max-width : 1200px){
        .container{
            width: 80%;
            min-width: auto;
            margin: 20px;
        }
        .container .contactInfo{
            top: 0;
            height: 550px;
            position: relative;
            box-shadow: none;
            height: auto;

        }
        .container .contactForm{
            position: relative;
            width: calc(100% - 350px);
            padding-left: 0;
            margin-left: 0;
            padding: 40px;
            height: 550px;
            box-shadow: none;
        }
        @media (max-width : 991px){
            .container{
                display: flex;
                flex-direction: column-reverse;
            }
            .container .contactForm{
                width: 100%;
                height: auto;
            }
            .container .contactInfo{
                width: 100%;
                height: auto;
                flex-direction: row
            }
            .container .contactInfo ul.sci{
                position: relative;
                display: flex;
                justify-content: center;
                align-items: center;
            }
        }
        @media (max-width : 600px){
            .container .contactForm{
                padding: 25px;
            }
            .container .contactInfo{
                padding: 25px;
                flex-direction: column;
                align-items: flex-start;
            }
            .container .contactInfo ul.sci{
                margin-top: 40px;
            }
            .container .contactForm .formBox .inputBox.w50{
                width: 100%;
            }
        }
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
    .light-mode hr{
        background: rgb(34,34,34);
    }
    .ggl{
        width: 80%;
        align-items: center;
        justify-content: center;
        margin-left: 10%;
        height: 300px;
        margin-bottom: 5%;
        margin-top: 5%;
    }
    nav{
    display: flex;
    height: 10vh;
    width: 100%;
    background: rgb(34,34,34);
    align-items: center;
    justify-content: space-between;
    padding: 0 50px 0 100px;
    flex-wrap: wrap;
    margin-bottom: 5%;
    }
nav .logo{
    color: rgb(255,183,0);
    font-size: 35px;
    font-weight: 600;
    z-index: 1;
}
nav .logo img{
    max-width: 120px;
    display: flex;
}
nav ul{
    display: flex;
    flex-wrap: wrap;
    list-style: none;
}
nav ul li{
    margin: 0 5px;
}
nav ul li a{
    color: white;
    text-decoration: none;
    font-size: 18px;
    font-weight: 500;
    padding: 8px 15px;
    border-radius: 5px;
    letter-spacing: 1px;
    transition: all 0.3s ease;
    }
@media (max-width: 920px){
    .fuck{
        display: none;
    }
    nav .dropdown-content{
        display: contents;
    }
}
    .dropdown-content{
        display: none;
        position: absolute;
        background-color: rgb(34,34,34);
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        min-width: 160px;
        padding: 12px 16px;
    }
    .dropdown:hover .dropdown-content {
        display: block;
    }
nav ul li a.active,
nav ul li a:hover{
    color: rgb(255,183,0);
}
nav .menu-btn i{
    color: #fff;
    font-size: 22px;
    cursor: pointer;
    display: none;
    }
    input[type="checkbox"]{
    display: none;
}
@media (max-width: 1000px){
    nav{
        padding: 0 40px 0 50px;
    }
    .empty{
        height: 25vh;
    }
}

@media (max-width: 920px) {

    nav .menu-btn i{
        display: block;
    }
    .empty{
    height: 10rem;
    background: rgb(34,34,34);
}
@media (max-width: 480px){
    .main-header h3{
        font-weight: 400;
    }
    .main-header h1{
        font-weight: 500;
    }
    .rm{
        float: none;
    }
    .main-header .button{
        margin-right: 0%;
    }
    .remember{
        text-align: center;
        align-items: center;
        display: -webkit-inline-box;
    }
    .main-header input[type=checkbox]{
        margin-top: 4%;
    }
    footer{
        margin-top: 20%;
    }
    nav .logo{
        font-size: 1.5rem;
    }
}
#click:checked ~ .menu-btn i:before{
content: "\f00d";
}
nav ul{
position: fixed;
padding-top: 5%;
top: 10vh;
left: -100%;
background: #111;
height: 100%;
width: 100%;
text-align: center;
display: block;
transition: all 0.3s ease;
opacity: 0.9;
z-index: 2;
}
#click:checked ~ ul{
left: 0;
}
nav ul li{
width: 100%;
margin: 40px 0;
}
nav ul li a{
width: 100%;
margin-left: -100%;
display: block;
font-size: 20px;
transition: 0.6s cubic-bezier(0.68, -0.55, 0.265, 1.55);
}
#click:checked ~ ul li a{
margin-left: 0px;
}
nav ul li a.active,
nav ul li a:hover{
background: none;
color: rgb(255,183,0);
}
}
/****************************************/
/*footer*/

footer{
    display: -webkit-flex;
    display: -moz-flex;
    display: -ms-flex;
    display: -o-flex;
    display: flex;
    flex-flow: row wrap;
    padding: 50px;
    color: white;
    background-color: rgb(34, 34, 34);
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
    .col p{
        font-size: 1.5rem;
    }
}
</style>
