<?php
/*
Template Name: Homepage
*/ ?>

<?php get_header('aboutme'); ?>
    <!-- Navigation -->
    <div class="overlay"></div>
    <div class="sidebarwrapper">
        <a class="menu-toggle rounded" href="">
            <i class="fa fa-bars"></i>
        </a>
        <nav id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <h2>
                        <i class="fas fa-ellipsis-h fa-sm"></i>
                    </h2>
                    </a>
                </li>
                <li class="sidebar-nav-item">
                    <a class="js-scroll-trigger" href="https://maiphamquanghuy.com/">Home</a>
                </li>
                <li class="sidebar-nav-item">
                    <a class="js-scroll-trigger" href="https://maiphamquanghuy.com/blog/">Blog</a>
                    </li>
                <li class="sidebar-nav-item">
                    <a href="https://myanimelist.net/animelist/imhikarucat" target="_blank">MAL List</a>
                </li>
                <li class="sidebar-nav-item">
                    <a href="https://nyaa.si/user/imhikarucat" target="_blank">Anime</a>
                </li>
                <li class="sidebar-nav-item">
                    <a href="#sitesSubmenu" data-toggle="collapse" aria-expanded="false">Awesome sites</a>
                    <ul class="collapse list-unstyled" id="sitesSubmenu">
                    <li>
                        <a href="https://nishiro-fansub.com/" target="_blank">Nishiro Fansubs</a>
                    </li>
                    <li>
                        <a href="http://doki.co/" target="_blank">Doki Fansusb</a>
                    </li>
                    <li>
                        <a href="https://sumire.moe/" target="_blank">Sumire Fansubs</a>
                    </li>
                    <li>
                        <a href="https://asenshi.moe/" target="_blank">Asenshi Fansubs</a>
                    </li>
                    <li>
                        <a href="https://yuri-ism.com/" target="_blank">Yuri-ism</a>
                    </li>
                    </ul>
                </li>
                <li class="sidebar-nav-item">
                    <a class="js-scroll-trigger" href="https://discord.gg/YQZWUnb" target="_blank">Discord Server</a>
                </li>
                <li class="credit">
                    _________________________________________<br>
                    Built with Bootstrap 4 <br>
                    Mai Pham Quang Huy <br>
                    Copyright &copy; 2017 &mdash; <span id="currentDate"></span>
                </li>
            </ul>
        </nav>
    </div>


    <!-- Body contents -->
    <div class="masthead d-flex">
        <div class="container text-center my-auto">
            <div class="col-xl-8 col-centered">
                <img src="https://i.imgur.com/bWBDHeb.gif" class="img-fluid" alt="" data-toggle="tooltip" data-placement="top" title="me irl">
                <!-- <h1>The easiest and powerful way</h1> -->
                <h1>Mai Pham Quang Huy (<span id="age"></span>)</h1>
                <h4>Dev, Videomaker, Tryharder, Student</h4>
                <p>Me? A wanderer, although don’t travel much. Hobbies? Many, working with codes, editing videos,
                    <span data-toggle="tooltip" data-placement="bottom" title="R6 Seige, CS:GO, Dota">competitive gamer</span>, translating, working on some encodes, and fansubbing.</p>
                <p>
                    <span data-toggle="tooltip" data-placement="bottom" title="mother tongue">Tiếng Việt</span>,
                    <span data-toggle="tooltip" data-placement="bottom" title="second language">English</span>,
                    <span data-toggle="tooltip" data-placement="bottom" title="third language">日本語</span> OK!</p>
                <div class="social-media-box">
                    <i class="fas fa-at fa-2x" data-toggle="tooltip" data-placement="bottom" title="maipham.quanghuy@gmail.com"></i>
                    <a href="https://twitter.com/maiphamquanghuy" target="_blank" data-toggle="tooltip" data-placement="bottom" title="しまう">
                    <i class="fab fa-twitter fa-2x" style="padding: 0 5px 0 5px"></i>
                    </a>
                    <a href="skype:mai.pham.quang.huy?userinfo" target="_blank" data-toggle="tooltip" data-placement="bottom" title="mai.pham.quang.huy">
                    <i class="fab fa-skype fa-2x" style="padding: 0 5px 0 5px"></i>
                    </a>
                    <a href="https://github.com/usagi123" target="_blank" data-toggle="tooltip" data-placement="bottom" title="usagi123">
                    <i class="fab fa-github fa-2x" style="padding: 0 5px 0 5px"></i>
                    </a>
                    <a href="https://stackoverflow.com/users/7814157" target="_blank" data-toggle="tooltip" data-placement="bottom" title="Quang Huy">
                    <i class="fab fa-stack-overflow fa-2x" style="padding: 0 5px 0 5px"></i>
                    </a>
                    <a href="https://www.reddit.com/user/comtrends123" target="_blank" data-toggle="tooltip" data-placement="bottom" title="comtrends123">
                    <i class="fab fa-reddit-alien fa-2x" style="padding: 0 5px 0 5px"></i>
                    </a>
                    <a href="https://www.youtube.com/c/ImHikaruCat2707" target="_blank" data-toggle="tooltip" data-placement="bottom" title="ImHikaruCat">
                    <i class="fab fa-youtube fa-2x" style="padding: 0 5px 0 5px"></i>
                    </a>
                    <i class="fab fa-discord fa-2x" style="padding: 0 5px 0 5px" data-toggle="tooltip" data-placement="bottom" title="imhikarucat#2707"></i>
                    <a href="http://steamcommunity.com/id/imhikarucat" target="_blank" data-toggle="tooltip" data-placement="bottom" title="黄前久美子">
                    <i class="fab fa-steam fa-2x" style="padding: 0 5px 0 5px"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
<?php get_footer('aboutme'); ?>
