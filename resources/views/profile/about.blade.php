<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Velocity : About</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
    <nav>
        <div class="logo">Velocity</div>
        <input type="checkbox" id="click">
        <label for="click" class="menu-btn">
          <i class="fas fa-bars"></i>
        </label>
        <ul>
          <li><a  href="#">Home</a></li>
          <li><a href="{{url("/about")}}" class="active">About</a></li>
          <li><a href="#">Contact</a></li>
          @if (Route::has('login'))
            @auth
                <li><a href="{{ url('/dashboard') }}">Dashboard</a></li>
          @else
              <li><a href="{{ route('login') }}">Log In</a></li>
              @if (Route::has('register'))
                  <li><a  href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a></li>
              @endif
          @endauth
            <!--<li><a href="#"><i class="fas fa-user"></i></a></li>-->
            @endif
        </ul>
    </nav>
    <div class="empty"></div>

    <div class="title">
        <h1>About Us</h1>
        <hr>
        <h2>The Brains, Brauns, And Devs Behind Velocity</h2>
    </div>
    <div class="train">
        <img id="trainImg" src="images/train.png" alt="">
    </div>
    <div class="paragraph">
        <p>Vis accumsan feugiat adipiscing nisl amet adipiscing accumsan blandit accumsan sapien blandit ac amet faucibus aliquet placerat
            commodo. Interdum ante aliquet commodo accumsan vis phasellus adipiscing. Ornare a in lacinia.Vestibulum accumsan ac metus massa
            tempor. Accumsan in lacinia ornare massa amet. Ac interdum ac non praesent Cubilia lacinia interdum massa faucibus blandit nullam.
            Accumsan phasellus nunc integer. Accumsan euismod nunc adipiscing lacinia erat ut sit. Arcu amet. Id massa aliquet arcu accumsan.</p>
    </div>
    <div class="paragraph">
        <p>Amet nibh adipiscing adipiscing. Commodo ante vis placerat interdum massa massa primis. Tempus condimentum tempus non ac varius
            cubilia adipiscing placerat lorem turpis at. Aliquet lorem porttitor interdum. Amet lacus. Aliquam lobortis faucibus blandit ac phasellus.
            In amet magna non interdum volutpat porttitor metus a ante ac neque. Nisi turpis. Commodo col. Interdum adipiscing mollis ut aliquam
            id ante adipiscing commodo integer arcu amet Ac interdum ac non praesent. Cubilia lacinia interdum massa faucibus blandit nullam.
            Accumsan phasellus nunc integer. Accumsan euismod nunc adipiscing lacinia erat ut sit. Arcu amet. Id massa aliquet arcu accumsan lorem
            amet accumsan commodo odio cubilia ac eu interdum placerat placerat arcu commodo lobortis adipiscing semper ornare pellentesque.</p>
    </div>
    <div class="paragraph">
        <p>Amet nibh adipiscing adipiscing. Commodo ante vis placerat interdum massa massa primis. Tempus condimentum tempus non ac varius cubilia
            adipiscing placerat lorem turpis at. Aliquet lorem porttitor interdum. Amet lacus. Aliquam lobortis faucibus blandit ac phasellus. In amet
            magna non interdum volutpat porttitor metus a ante ac neque. Nisi turpis. Commodo col. Interdum adipiscing mollis ut aliquam id ante
            adipiscing commodo integer arcu amet blandit adipiscing arcu ante.</p>
    </div>
    <section>
        <div class="container">
            <h1 class="heading">Meet The Team</h1>
            <div class="card-wrapper">
                <div class="card">
                    <img src="images/card-bg.jpg" alt="card background" class="card-img">
                    <img src="images/user-1.png" alt="profile image" class="profile-picture">
                    <h3>Abdelaziz Haidar</h3>
                    <p class="job-title">Front-End Dev</p>
                    <p class="about">
                        Amet nibh adipiscing adipiscing. Commodo ante vis placerat interdum massa massa primis. Tempus condimentum tempus non ac varius cubilia
                    </p>
                    <a href="#" class="btn">Contact</a>
                    <ul class="social-media">
                        <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter-square"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fab fa-google-plus-square"></i></a></li>
                    </ul>
                </div>

                <div class="card">
                    <img src="images/card-bg.jpg" alt="card background" class="card-img">
                    <img src="images/user-1.png" alt="profile image" class="profile-picture">
                    <h3>Othamn Lahlou</h3>
                    <p class="job-title">Back-End Dev</p>
                    <p class="about">
                        Amet nibh adipiscing adipiscing. Commodo ante vis placerat interdum massa massa primis. Tempus condimentum tempus non ac varius cubilia
                    </p>
                    <a href="#" class="btn">Contact</a>
                    <ul class="social-media">
                        <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter-square"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fab fa-google-plus-square"></i></a></li>
                    </ul>
                </div>

                <div class="card">
                    <img src="images/card-bg.jpg" alt="card background" class="card-img">
                    <img src="images/user-1.png" alt="profile image" class="profile-picture">
                    <h3>Yassine Belhad</h3>
                    <p class="job-title">UI/UX Dev</p>
                    <p class="about">
                        Amet nibh adipiscing adipiscing. Commodo ante vis placerat interdum massa massa primis. Tempus condimentum tempus non ac varius cubilia
                    </p>
                    <a href="#" class="btn">Contact</a>
                    <ul class="social-media">
                        <li><a href="#" id="a"><i class="fab fa-facebook-square"></i></a></li>
                        <li><a href="#" id="a"><i class="fab fa-twitter-square"></i></a></li>
                        <li><a href="#" id="a"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#" id="a"><i class="fab fa-google-plus-square"></i></a></li>
                    </ul>
                </div>
                <div class="card">
                    <img src="images/card-bg.jpg" alt="card background" class="card-img">
                    <img src="images/user-1.png" alt="profile image" class="profile-picture">
                    <h3>Yassine Belhad</h3>
                    <p class="job-title">UI/UX Dev</p>
                    <p class="about">
                        Amet nibh adipiscing adipiscing. Commodo ante vis placerat interdum massa massa primis. Tempus condimentum tempus non ac varius cubilia
                    </p>
                    <a href="#" class="btn">Contact</a>
                    <ul class="social-media">
                        <li><a href="#" id="a"><i class="fab fa-facebook-square"></i></a></li>
                        <li><a href="#" id="a"><i class="fab fa-twitter-square"></i></a></li>
                        <li><a href="#" id="a"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#" id="a"><i class="fab fa-google-plus-square"></i></a></li>
                    </ul>
                </div>
                <div class="card">
                    <img src="images/card-bg.jpg" alt="card background" class="card-img">
                    <img src="images/user-1.png" alt="profile image" class="profile-picture">
                    <h3>Yassine Belhad</h3>
                    <p class="job-title">UI/UX Dev</p>
                    <p class="about">
                        Amet nibh adipiscing adipiscing. Commodo ante vis placerat interdum massa massa primis. Tempus condimentum tempus non ac varius cubilia
                    </p>
                    <a href="#" class="btn">Contact</a>
                    <ul class="social-media">
                        <li><a href="#" id="a"><i class="fab fa-facebook-square"></i></a></li>
                        <li><a href="#" id="a"><i class="fab fa-twitter-square"></i></a></li>
                        <li><a href="#" id="a"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#" id="a"><i class="fab fa-google-plus-square"></i></a></li>
                    </ul>
                </div>
                <div class="card">
                    <img src="images/card-bg.jpg" alt="card background" class="card-img">
                    <img src="images/user-1.png" alt="profile image" class="profile-picture">
                    <h3>Yassine Belhad</h3>
                    <p class="job-title">UI/UX Dev</p>
                    <p class="about">
                        Amet nibh adipiscing adipiscing. Commodo ante vis placerat interdum massa massa primis. Tempus condimentum tempus non ac varius cubilia
                    </p>
                    <a href="#" class="btn">Contact</a>
                    <ul class="social-media">
                        <li><a href="#" id="a"><i class="fab fa-facebook-square"></i></a></li>
                        <li><a href="#" id="a"><i class="fab fa-twitter-square"></i></a></li>
                        <li><a href="#" id="a"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#" id="a"><i class="fab fa-google-plus-square"></i></a></li>
                    </ul>
                </div>
                <div class="card">
                    <img src="images/card-bg.jpg" alt="card background" class="card-img">
                    <img src="images/user-1.png" alt="profile image" class="profile-picture">
                    <h3>Yassine Belhad</h3>
                    <p class="job-title">UI/UX Dev</p>
                    <p class="about">
                        Amet nibh adipiscing adipiscing. Commodo ante vis placerat interdum massa massa primis. Tempus condimentum tempus non ac varius cubilia
                    </p>
                    <a href="#" class="btn">Contact</a>
                    <ul class="social-media">
                        <li><a href="#" id="a"><i class="fab fa-facebook-square"></i></a></li>
                        <li><a href="#" id="a"><i class="fab fa-twitter-square"></i></a></li>
                        <li><a href="#" id="a"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#" id="a"><i class="fab fa-google-plus-square"></i></a></li>
                    </ul>
                </div>
                <div class="card">
                    <img src="images/card-bg.jpg" alt="card background" class="card-img">
                    <img src="images/user-1.png" alt="profile image" class="profile-picture">
                    <h3>Yassine Belhad</h3>
                    <p class="job-title">UI/UX Dev</p>
                    <p class="about">
                        Amet nibh adipiscing adipiscing. Commodo ante vis placerat interdum massa massa primis. Tempus condimentum tempus non ac varius cubilia
                    </p>
                    <a href="#" class="btn">Contact</a>
                    <ul class="social-media">
                        <li><a href="#" id="a"><i class="fab fa-facebook-square"></i></a></li>
                        <li><a href="#" id="a"><i class="fab fa-twitter-square"></i></a></li>
                        <li><a href="#" id="a"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#" id="a"><i class="fab fa-google-plus-square"></i></a></li>
                    </ul>
                </div>

                <footer class="footer">
                    <div class="footer-left">
                        <img src="images/logo3.png" alt="">
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
                    </div>

                </footer>

</body>
</html>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
    *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
    background: rgb(34,34,34);
    color: white;
    }
    body{
    overflow-x: hidden,
    }
    hr{
    width: 70%;
    margin: auto;
    margin-top: 2%;
    margin-bottom: 2%;
    }
    h1{
    text-align: center;
    align-items: center;
    justify-content: center;
    margin: auto;
    font-size: 3.5rem;
    color: rgb(255,183,0);
    font-weight: 500;
    letter-spacing: 3px;
    margin-top: 3%;
    margin-bottom: 3%;
    }
    .title h2{
    text-align: center;
    align-items: center;
    justify-content: center;
    margin: auto;
    font-size: 2rem;
    font-weight: 300;
    letter-spacing: 2px;
    }
    .paragraph{
    margin-bottom: 3%;
    align-items: center;
    justify-content: center;
    width: 80%;
    margin: auto;
    }
    .paragraph p{
    margin-top: 3%;
    margin-bottom: 3%;
    font-size: 1.2rem;
    letter-spacing: 3px;
    }
    .card-wrapper{
    display: flex;
    align-items: center;
    align-content: center;
    flex-direction: column;
    }
    .card{
    width: 24rem;
    background-color: #414141;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    margin: 2rem 0;
    box-shadow: 0.5rem 0.5rem 3rem rgba(255, 183, 0, 0.3);
    }
    h3{
    margin-top: 3%;
    margin-bottom: 3%;
    }
    .card .card-img{
    width: 100%;
    height: 26rem;
    object-fit: cover;
    -webkit-clip-path: polygon(0 0, 100% 0, 100% 78%, 0 100%);
    clip-path: polygon(0 0, 100% 0, 100% 78%, 0 100%)
    }
    .profile-picture{
    width: 15rem;
    height: 15rem;
    object-fit: cover;
    border-radius: 50%;
    margin-top: -10rem;
    z-index: 2;
    border: 1rem solid rgb(255,183,0)
    }
    .card h1{
    font-size: 2.5rem;
    margin: 1.5rem 0;
    }
    .job-title{
    color: black;
    font-size: 1.5rem;
    font-weight: 300;
    }
    .about{
    font-size: 1.5rem;
    margin: 1.5rem 0;
    font-style: italic;
    text-align: center;
    color: #999;
    }
    .card .btn{
    padding: 1rem 2.5rem;
    background-color: #445ae3;
    border-radius: 2rem;
    margin: 1rem 0;
    text-transform: uppercase;
    color: white;
    font-size: 1.4rem;
    text-decoration: none;
    }
    .card .btn :hover{
    transform: translateY(-2px);
    box-shadow: 0.5rem 0.5rem 2rem rgba(0,0,0,0.2);
    }
    .card .btn :active{
    transform: translateY(0);
    box-shadow: none;
    }
    .social-media{
    width: 100%;
    list-style: none;
    display: flex;
    justify-content: space-evenly;
    padding: 2rem 0;
    margin-top: 1.5rem;
    border-top: 1px solid rgba(0,0,0,0.1);
    }
    .social-media i{
    font-size: 3rem;
    background: rgb(34,34,34);
    }
    .fa-facebook-square{
    color: #3b5999
    }
    .fa-twitter-square{
    color: #55acee
    }
    .fa-instagram{
    color: #e6683c
    }
    .fa-google-plus-square{
    color: #dd4b39
    }
    @media screen and (min-width: 700px){
    .card-wrapper{
    flex-direction: row;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
    }
    .card{
    margin: 2rem;
    }

    }
    .card p, .card h3{
            background: #414141;
        }
    .card h2{
        text-align: center;
        align-items: center;
        justify-content: center;
        margin: auto;
        font-size: 2rem;
        font-weight: 300;
        letter-spacing: 2px;
    }
    .train{
    margin: auto;
    margin-top: 5%;
    margin-bottom: 3%;
    align-items: center;
    justify-content: center;
    text-align: center;
    }
    .train img{
    width: 70%;
    }
    .title{
    margin-top: 2%;
    }
    nav{
    margin-bottom: 5%;
    display: flex;
    height: 10vh;
    width: 100%;
    background: rgb(34,34,34);
    align-items: center;
    justify-content: space-between;
    padding: 0 50px 0 100px;
    flex-wrap: wrap;
    z-index: 3;
    }
    nav .logo{
    color: #fff;
    font-size: 35px;
    font-weight: 600;
    z-index: 1;
    }
    /* width */
::-webkit-scrollbar {
  width: 10px;
}

/* Track */
::-webkit-scrollbar-track {
  background: #f1f1f1;
}

/* Handle */
::-webkit-scrollbar-thumb {
  background: #888;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #555;
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
    color: #f2f2f2;
    text-decoration: none;
    font-size: 18px;
    font-weight: 500;
    padding: 8px 15px;
    border-radius: 5px;
    letter-spacing: 1px;
    transition: all 0.3s ease;
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
    }
    @media (max-width: 920px) {

    .empty{
    height: 10vh;
    background: rgb(34,34,34);
    }
    nav{
    position: fixed;
    }
    nav .menu-btn i{
    display: block;
    }
    #click:checked ~ .menu-btn i:before{
    content: "\f00d";
    }
    nav ul{
    position: fixed;
    padding-top: 5%;
    top: 0vh;
    left: -100%;
    background: rgb(34,34,34);
    height: 100vh;
    width: 25%;
    text-align: center;
    display: block;
    transition: all 0.3s ease;
    opacity: 0.9;
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
    /*footer*/

    footer{
    margin-top: 3%;
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
    background: rgb(34,34,34);
    }

    .footer-bottom{
    text-align: center;
    color: #999;
    padding-top: 50px;
    }

    .footer-left p{
    padding-right: 20%;
    }

    .socials i{
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
</style>
