<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Velocity : About</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
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
            <li><a href="#">Home</a></li>
            <li><a href="{{url("/about")}}" class="active">About</a></li>
            <li><a href="#">Contact</a></li>
            @if (Route::has('login'))
                @auth
                    <li><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                @else
                    <li><a href="{{ route('login') }}">Log in</a></li>
                    @if (Route::has('register'))
                        <li><a  href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a></li>
                    @endif
                @endauth
                <!--<li><a href="#"><i class="fas fa-user"></i></a></li>-->
            @endif
        </ul>
    </nav>
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

            </div>
        </div>
    </section>

</body>
</html>
    <style>
        body{
            overflow-x: hidden;
        }
        #a{
            text-decoration: none;
            color: white;
        }
        section{
            color: white;
        }
        .heading{
            font-size: 3.5rem;
            letter-spacing: 3px;
            margin-right: -3px;
            margin-bottom: 5rem;
            text-align: center;
            color: rgb(255,183,0);
            position: relative;
        }
        .heading::after{
            content: "";
            width: 10rem;
            height: 0.8rem;
            background-color: rgb(255,183,0);
            position: absolute;
            bottom: -2rem;
            left: 50%;
            transform: translateX(-50%);
            border-radius: 2rem;
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
        .train{
            color: #fff;
            margin: auto;
            margin-top: 5%;
            margin-bottom: 3%;
            align-items: center;
            justify-content: center;
            text-align: center;
        }


        .title{
            margin-top: 2%;
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
            font-weight: 700;
            letter-spacing: 3px;
            margin-top: 3%;
            margin-bottom: 3%;
        }
        .card p, h3,a,i{
                background: #414141;
            }
        h2{
            text-align: center;
            align-items: center;
            justify-content: center;
            margin: auto;
            font-size: 2rem;
            font-weight: 300;
            letter-spacing: 2px;
        }
            @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
            *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
            background: rgb(34,34,34);
            color: white;
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
                }
            nav .logo{
                color: #fff;
                font-size: 35px;
                font-weight: 600;
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
                .title{
                    padding-top: 10%;
                    display: none;
                }
            nav{
                    position: fixed;
                    margin-bottom: 10%;
                    z-index: 3;
                }


            nav .menu-btn i{
                    display: block;
                }
                #click:checked ~ .menu-btn i:before{
                    content: "\f00d";
                }

            nav ul{
                    position: fixed;
                    top: 9.9vh;
                    left: -100%;
                    height: 100vh;
                    width: 20%;
                    text-align: center;
                    display: block;
                    transition: all 0.3s ease;
                    z-index: 1;
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
                    background: rgba(34, 34, 34, 0);
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
            .card-img{
                height: 200px;
                width: 200px;
            }
    </style>
