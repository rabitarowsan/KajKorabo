
<!-- CSS -->
<link rel="stylesheet" href="{{ asset('assets/css/header.css') }}">
<!-- JS -->
<script src="{{ asset('assets/js/header.js') }}"></script>


<nav class="nav">
        <div class="container">
            <div class="logo">
                <a href="#">
                    <img src="{{ asset('uploads\KajKorabo-removebg-preview.png') }}" alt="Your Logo" style="height:100px;">
                </a>
            </div>
            <div id="mainListDiv" class="main_list">
                <ul class="navlinks">
        
                    <li>
                        <div class="navbar-search">
                          <div id="wrap">
                            <form action="" autocomplete="on">
                              <input id="search" name="search" type="text" placeholder="What're we looking for?">
                              <input id="search_submit" value="Rechercher" type="submit">
                            </form>
                          </div>
                        </div>

                    </li>

                    <li><a href="#">About</a></li>
                    <li><a href="#">Portfolio</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
            <span class="navTrigger">
                <i></i>
                <i></i>
                <i></i>
            </span>
        </div>
    </nav>

    

<!-- Jquery needed -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    

<!-- Function used to shrink nav bar removing paddings and adding black background -->
    <script>
        $(window).scroll(function() {
            if ($(document).scrollTop() > 50) {
                $('.nav').addClass('affix');
                console.log("OK");
            } else {
                $('.nav').removeClass('affix');
            }
        });
    </script>