<!-- this is my own one  -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learners</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-slimScroll/1.3.8/jquery.slimscroll.min.js" integrity="sha512-cJMgI2OtiquRH4L9u+WQW+mz828vmdp9ljOcm/vKTQ7+ydQUktrPVewlykMgozPP+NUBbHdeifE6iJ6UVjNw5Q==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-slimScroll/1.3.8/jquery.slimscroll.js" integrity="sha512-37SbZHAnGzLuZV850k61DfQdZ5cnahfloYHizjpEwDgZGw49+D6oswdI8EX3ogzKelDLjckhvlK0QZsY/7oxYg==" crossorigin="anonymous"></script>

    <style>
        body {
        font-family: 'Source Sans Pro', sans-serif;
        background: #F8F8F8;
        font-weight: 400;
        color: #696769;
        font-size: 14px;
        overflow-x: hidden;
}
        a{
            text-decoration: none;
        }
        aside{
            background-color: #fff !important;
            width: 250px;
            height: 100%;
            position: fixed;
            float: left;
            z-index: 99;
            
            border-right: 1px solid #D4D9DD;
            -webkit-transition: all 0.9s ease;
            -moz-transition: all 0.9s ease;
            -o-transition: all 0.9s ease;
            transition: all 0.9s ease;
        }
        aside ul {
    padding-left: 0;
}

aside li {
    list-style: none;
}

aside i {    
    font-size: 22px;
    margin-right: 15px;
    vertical-align: middle;
}

aside span.text {
    margin-top: 8px;
    position: absolute;
    font-size: 10px;
}

aside span.bubble {
    float: right;
    margin-top: 7px;
    width: 25px;
    height: 25px;
    padding-top: 8px;
    text-align: center;
}

aside label.menu-icon {
    width: 40px;
}

aside li a {
    display: block;
    font-size: 10px;
    color: #696769;
    padding: 7px !important;
}
aside li a span {
    margin-top: 6px;
}
aside li.menu-label {
    font-size: 11px;
    color: #A9ABB3;
    margin-left: 44px;
    margin-top: 33px;
    text-transform: uppercase;
}

        header {
            background: #fff !important;
            height: 70px;
            padding: 15px;
            position: fixed;
            width: 100%;
            z-index: 98;
            -webkit-box-shadow: 0 0 45px 0 rgba(0, 0, 0, 0.12);
            box-shadow: 0 0 45px 0 rgba(0, 0, 0, 0.12);
        }
        .header-right {
            float: right;
        }
        .header-links>li {
            display: inline-block;
            margin-left: 20px;
        }
        header .nav > li > a {
            padding: 0 !important;
        }

        header .nav > li > a.btn {
            padding: 6px 20px !important;
        }
        .header-left {
            float: left;
            margin-left: 245px;
            -webkit-transition: all 0.9s ease;
            -moz-transition: all 0.9s ease;
            -o-transition: all 0.9s ease;
            transition: all 0.9s ease;
        }
        header .nav > li > a.btn.btn-icon {
            padding-left: 40px !important;
        }

        .header-links>li.humbager, .header-links>li.header-logo {
            display: none;
        }
        .main-content {
            margin: 0 0 0 250px;
            padding: 30px;
            padding-top: 90px;
            -webkit-transition: all 0.9s ease;
            -moz-transition: all 0.9s ease;
            -o-transition: all 0.9s ease;
            transition: all 0.9s ease;
        }
        a.close-aside {
            position: absolute;
            top: 11px;
            left: 162px;
            color: #A9ABB3;
            display: none;
        }
        .side-branding img {
            width: 170px;
            -webkit-transition: all 0.9s ease;
            -moz-transition: all 0.9s ease;
            -o-transition: all 0.9s ease;
            transition: all 0.9s ease;
        }
        .slimscroll-menu {
            padding: 30px;
            padding-top: 45px;
        }
        .header-branding img {
            max-width: 125px;
            max-height: 50px;
            margin-right: 65px;
            margin-top: -6px;
        }

        @media (max-width: 1100px) {
        aside {
            width: 200px;
            -webkit-transition: all 0.9s ease;
            -moz-transition: all 0.9s ease;
            -o-transition: all 0.9s ease;
            transition: all 0.9s ease;
        }
        .slimscroll-menu {
            padding-left: 15px;
        }
        .main-content, footer {
            margin: 0 0 0 200px;
            -webkit-transition: all 0.9s ease;
            -moz-transition: all 0.9s ease;
            -o-transition: all 0.9s ease;
            transition: all 0.9s ease;
        }
        footer {
            margin: 35px 15px 0 230px;
        }
        .side-branding img {
            max-width: 91%;
            -webkit-transition: all 0.9s ease;
            -moz-transition: all 0.9s ease;
            -o-transition: all 0.9s ease;
            transition: all 0.9s ease;
        }
        .header-left {
            margin-left: 196px;
            -webkit-transition: all 0.9s ease;
            -moz-transition: all 0.9s ease;
            -o-transition: all 0.9s ease;
            transition: all 0.9s ease;
        }
        }
        @media (max-width: 992px) {
        aside {
            margin-left: -200px;
            width: 200px;
            height: 100%;
            -webkit-transition: all 0.9s ease;
            -moz-transition: all 0.9s ease;
            -o-transition: all 0.9s ease;
            transition: all 0.9s ease;
        }
        .main-content,
        footer {
            margin: 0 0 0 0px;
            -webkit-transition: all 0.9s ease;
            -moz-transition: all 0.9s ease;
            -o-transition: all 0.9s ease;
            transition: all 0.9s ease;
        }
        footer {
            margin: 35px 15px 0 15px;
        }
        .humbager {
            margin-left: 0px;
            -webkit-transition: all 0.9s ease;
            -moz-transition: all 0.9s ease;
            -o-transition: all 0.9s ease;
            transition: all 0.9s ease;
        }
        .header-left {
            margin-left: 0px;
            /* -webkit-transition: all 0.9s ease;
            -moz-transition: all 0.9s ease;
            -o-transition: all 0.9s ease; */
        }
        .header-links>li.humbager, .header-links>li.header-logo {
            display: inline-block;
        }
        .open-menu {
            margin-left: 0px;
            box-shadow: 0 10px 48px rgba(0, 0, 174, 0.5), 0 1px 1px rgba(255, 248, 254, 0.61);
            height: 100%;
        }
        a.close-aside {
            display: block;
        }
        .widget-title h1 {
            font-size: 38px;
        }
        .page-rightbar {
            width: 100%;
            position: relative !important;
            top: 0;
            margin-bottom: 30px;
        }
        .halfpage-content {
            padding-right: 0px;
            width: 100%;
        }
    }
    @media (max-width: 768px) {
        .header-links>li.scheduling-link {
            display: none !important;
        }
        .header-branding img {
            max-width: 125px;
            max-height: 50px;
            margin-right: 0;
        }
        .notification-date {
            float: none;
            margin-top: -7px;
        }
        .modal-dialog {
            width: 100% !important;
        }
    }
    @media (max-width: 510px) {
        .profile-name span {
            display: none;
        }
        .header-links>li.humbager {
            margin-left: 0;
        }
        header .notify {
            margin-right: 0;
        }
        .auth-card {
            width: 80%;
        }
    }

    #sidebar{
        background-color: #222944;
    }
    
    .menu-title{
        color: white;
    }

    #nav-item:hover{
        background-color: #3AAFA9;
        border-radius: 20px;
    }

    #nav-item:hover #item{
        padding-left: 25px;
        transition-duration: 0.5s;
        /* color: #17252A; */
    }

    #item{
        padding: 0px;
        position: relative;
        /* display: block; */
        transition-duration: 0.5s;
        font-size: 20px;
    }

    .header{
        background-color: #1A1A1D;
    }

    .dropdoun{
        background-color: #222944;
    }

    #dropdown_item{
        background-color: #172222;
        color: #fff;
        border-radius: 15px;
    }

    #dropdown_item:hover{
        background-color: #3AAFA9;
        /* color: black; */
    }

    #dropdown_item:hover #svg{
        background-color: #15DB95;
    }

    .item_div{
        /* background-color: #292828; */
        /* border-radius: 10px; */
        padding-top: 10px;
        margin-left: 10px;
        margin-right: 10px;
        display: flex;
        /* display: inline-flex; */
        /* flex-direction: row; */
        /* justify-content: center; */
    }

    #svg{
        width: 35px;
        height: 35px;
        fill: #696769;
    }

    #svg:hover{
        fill: #15DB95;
    }

    .link{
        padding-left: 10px;
    }

    #img{
        padding-left: 10px;
        width: 40px;
        height: 40px;
        border-radius: 50px;
    }

    #submit_btn:hover{
        padding-left: 20%;
        padding-right: 20%;
        
        transition-duration: 0.5s;
    }

    #submit_btn{
        padding-left: 0px;
        padding-right: 0px;
        position: relative;
        transition-duration: 0.5s;
    }

    #dash_icon{
        fill: black;
        width: 12px;
        height: 12px;
    }

    #statics_cards{
        width: 14rem; 
        background-color: #1D1D1D; 
        box-shadow: 0px 0px 5px #BB86FB;
        padding-top: 10px;
        margin-top: 10px;
    }

    #dash_text{
        color: #08DAC5;
    }

    .gradient{
        background-color: #155DAF; /* For browsers that do not support gradients */
        background-image: linear-gradient(#155DAF, #00254F);
        margin-bottom: 20px;
    }

    #image{
        margin-bottom: 20px;
    }

    </style>
</head>
<body style="background-color: #FAFAFA;">
   <div>
       <!-- slidebar -->
    <aside>
        <div class="slimscroll-menu" id='sidebar'>
            <!-- close the menu  -->
            <a href="#" class="close-aside"><img src="images/close.png" alt=""></a>
            <!-- Branding -->
            
            <div class="side-branding">
                <a href="#">
                    <img src="images/logo.png" class="img-responsive">
                </a>
            </div>

            <!-- navigation -->
            <ul>

                <li class="menu-label">Main</li>
                    <div class="dropdown-divider"></div>
                    <!-- margin botton mb-5 added for the scroll testing -->
                    <li class="nav-item  mb-3" id="nav-item"><a class="nav-link" href="{{ route('owner.ownerdashboad') }}"><i><img src="images/dashboard.png" alt=""></i>
                      <span class="menu-title " id="item">Dashboard</span>
                    </a>
                    </li>

                    <li class="nav-item  mb-3" id="nav-item"><a class="nav-link" href="{{ route('instructors') }}"><i><img src="images/dashboard.png" alt=""></i>
                        <span class="menu-title" id="item">Instructors</span>
                      </a>
                    </li>

                    <li class="nav-item mb-3" id="nav-item"><a class="nav-link" href="{{ route('students') }}"><i><img src="images/dashboard.png" alt=""></i>
                        <span class="menu-title" id="item">Students</span>
                      </a>
                    </li>

                    <li class="nav-item mb-3" id="nav-item"><a class="nav-link" href="#"><i><img src="images/dashboard.png" alt=""></i>
                        <span class="menu-title" id="item">Payments</span>
                      </a>
                      </li>

                      <li class="nav-item mb-2" id="nav-item"><a class="nav-link" href="#"><i><img src="images/dashboard.png" alt=""></i>
                        <span class="menu-title" id="item">Scheduling</span>
                      </a>
                      </li>

                      <li class="nav-item mb-3" id="nav-item"><a class="nav-link" href="{{ route('viewrequest') }}"><i><img src="images/dashboard.png" alt=""></i>
                        <span class="menu-title" id="item">Request</span>
                      </a>
                      </li>

                      <li class="nav-item mb-3" id="nav-item"><a class="nav-link" href="#"><i><img src="images/dashboard.png" alt=""></i>
                        <span class="menu-title" id="item">Vehicles</span>
                      </a>
                      </li>

                      <li class="nav-item mb-3" id="nav-item"><a class="nav-link" href="#"><i><img src="images/dashboard.png" alt=""></i>
                        <span class="menu-title" id="item">Settings</span>
                      </a>
                </li>

            </ul>    
        </div>
    </aside>

    <!-- header -->
    <header style="background-color: #FFFFFF !important;">
        <div class="header-left">
            <ul class="nav header-links pull-right">
                <li class="humbager">
                    <a href="" class="btn btn-light">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="black" class="bi bi-list" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                        </svg>
                    </a>
                </li>
                <li class="header-logo">
                    <a href="/" class="header-branding"><img src="images/logo2.png" class="img-responsive"> </a>
                </li>
               
            </ul>
        </div>
    
        <!-- message and message notification should be added -->
        <div class="header-right">
            <nav class="nav">
                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item active">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item active">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="padding-right: 20px; font-size: 20px;">
                                    {{ Auth::user()->username }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" style="background-color:#17252A;">
                                    
                                    <!-- <div>
                                        <div class="profile-picture">
                                            <img id="img" src="https://images.unsplash.com/photo-1542103749-8ef59b94f47e?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8cGVyc29ufGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60">
                                        </div>
                                        <div class="username">
                                            {{ Auth::user()->username }}
                                        </div>
                                    </div> -->

                                    <div class="dropdown-divider"></div>

                                    <div class="item_div">
                                        <div class="icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-pencil-square" viewBox="0 0 16 16" id="svg">
                                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                            </svg>
                                        </div>
                                        <div class="link">
                                            <a class="dropdown-item" href="#" id="dropdown_item">
                                                Edit Profile
                                            </a>
                                        </div>
                                    </div>

                                    <div class="item_div">

                                        <div class="icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="white" class="bi bi-gear-fill" viewBox="0 0 16 16" id="svg">
                                                <path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z"/>
                                            </svg>
                                        </div>
                                        <div class="link">
                                            <a class="dropdown-item" href="#" id="dropdown_item">
                                                Setting & Privacy
                                            </a>
                                        </div>
                                    </div>

                                    <div class="item_div">

                                        <div class="icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-question-circle-fill" viewBox="0 0 16 16"  id="svg">
                                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.496 6.033h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286a.237.237 0 0 0 .241.247zm2.325 6.443c.61 0 1.029-.394 1.029-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94 0 .533.425.927 1.01.927z"/> 
                                            </svg>
                                        </div>
                                        <div class="link">
                                            <a class="dropdown-item" href="#" id="dropdown_item">
                                                Help & Support
                                            </a>
                                        </div>
                                    </div>

                                    <div class="dropdown-divider"></div>

                                    <div class="item_div">
                                        <div class="icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
                                                <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                                            </svg>
                                        </div>
                                        <div class="link">
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();"  id="dropdown_item">
                                                {{ __('Logout') }}
                                            </a>
                                        </div>
                                    </div>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
             
            </nav>
        </div>
    </header>

    <!-- main content -->
    <div class="main-content">
        @yield('content')
    </div>
   </div>
</body>
<script>
    // Jquery start
$(document).ready(function() {

// sidebar - scroll container
$('.slimscroll-menu').slimscroll({
    height: 'auto',
    position: 'right',
    size: "3px",
    color: '#9ea5ab',
    wheelStep: 5,
    touchScrollStep: 50
});


$('aside a').each(function() {
if ($(this).attr('href') == window.location.pathname) {
    $(this).addClass('active');
}
});


// close humbager
$(".main-content").click(function() {
if ($("aside").hasClass("open-menu")) {
    $("aside").removeClass("open-menu");
}
});
$(".close-aside").click(function(event) {
event.preventDefault();
$("aside").removeClass("open-menu");
});

// humbager
$(".humbager").click(function(event) {
event.preventDefault();
if ($("aside").hasClass("open-menu")) {
    $("aside").removeClass("open-menu");
} else {
    $("aside").addClass("open-menu");
}
});

 // tooltip
// $('[data-toggle="tooltip"]').tooltip();

});





</script>
</html>