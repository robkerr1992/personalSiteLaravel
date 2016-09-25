<nav style="background-color: black;" class="navbar navbar-fixed-top">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 nav_container" id="header_nav">
                <ul class="social-network social-circle">
                    <!--                        <li><a href="#" class="icoRss" title="Rss"><i class="fa fa-rss"></i></a></li>-->
                    <li><a href="https://www.facebook.com/robert.kerr.921" target="_blank" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="https://www.twitter.com/rksugarfree" target="_blank" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="https://www.github.com/robkerr1992" target="_blank" class="icoGoogle" title="GitHub"><i class="fa fa-github"></i></a></li>
                    {{--<li><a href="https://www.linkedin.com/in/robertcrawleykerr" target="_blank" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>--}}
                </ul>
                <ul class="nav nav-pills" id="nav">
                    <li role="presentation" class="navbutton" id="robertkerr"><a class="listItem {{ $homeNav or "" }}" href="/">Robert Kerr</a></li>
                    <li role="presentation" class="navbutton" id="projects"><a class="listItem {{ $projectsNav or "" }}" href="/projects">Projects</a></li>
                    <li role="presentation" class="navbutton" id="blog"><a class="listItem {{ $blogNav or "" }}" href="/blog">Blog</a></li>
                    <li role="presentation" class="navbutton" id="contact"><a class="listItem {{ $contactNav or "" }}" href="/contact/create">Contact</a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>