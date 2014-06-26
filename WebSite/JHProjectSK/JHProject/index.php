<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Joke Hunter</title>
    <link href="styles/reset.css" rel="stylesheet" />
    <link href="styles/mainpage.css" rel="stylesheet" />
</head>
<body>
    <aside>  <!--This is left panel width:300 height:100%-->

        <header>
            <!--Box 300x125px
        logo inside..lets use google fonts.. see the file font.txt
            -->
            <h1 id="logo">JokeHunter</h1>
        </header>
        <nav>
          <!--This is navigation (width 300 and height auto)..
                ul li - height 60-->
            <ul>
                <li><a href="#" id="firstElement" data-scroll>FILTER</a></li>
                <li><a href="#" data-scroll>ALL Jokes</a></li>
                <li><a href="#" data-scroll>HTML</a></li>
                <li><a href="#" data-scroll>CSS</a></li>
                <li><a href="#" data-scroll>C#</a></li>
                <li><a href="#" data-scroll>Java</a></li>
            </ul>
        </nav>

        <section id="media-links">
            <ul>
                <li><a href="#"><img src="http://transcript-bg.com/images/google+.png" alt="googlePlus logo"/></a></li>
                <li><a href="#"><img src="https://www.seoclerk.com/pics/220394-1C4vDD1400131701.png" alt="twitter logo"/></a></li>
                <li><a href="#"><img src="http://img2.wikia.nocookie.net/__cb20130729002338/gtawiki/images/4/44/Facebook_Logo.png" alt="facebook logo"/></a></li>
                <li><a href="#"><img src="http://www.nakov.com/wp-content/uploads/2012/03/SoftUni-Logo.png" alt="SoftUni logo"/></a></li>
                <li><a href="#"><img src="http://www.montreal-kosher.com/wp-content/uploads/2014/02/instagram-logo-png-transparent-backgroundadanali-hasan-kolcuoglu-restaurant-uoqzlntb.png" alt="Instagram logo"/></a></li>
                <li><a href="#"><img src="https://origin.ih.constantcontact.com/fs105/1100458305930/img/468.png?ver=1384611382000" alt="flickr logo"/></a></li>
            </ul><!--Social media links - softuni pages: main page, facebook page and etc.. our pages too.. friendly pages-->
            <span>&copy; 2014 SoftUni <?php
    echo 'asdasd';
?></span>
        </section>
    </aside>
<?php
    echo "asdasd";
?>
    <main><!--This is main panel on the right width:100% padding:20px(I use rem, em for paddings).. due main is very new tag we can use div or section instead-->
        <section class="box">
            <!--This is frame for every box width:294px each height auto-->
            <article>
                <!--Inside each box there is different type of content - article-->
                <h1>First Joke</h1>
                <h3>Joce Content</h3>
            </article>  
        </section>

        <section class="box">
            <!--we have many boxes-->
            <article>
                <!--Inside each box there is different type of content - article-->
                <h1>Second</h1>
            </article>
        </section>

        <section class="box last">
            <!--we have many boxes-->
            <article>
                <!--Inside each box there is different type of content - article-->
                <h1>Second</h1>
            </article>
        </section>

        <section class="box link">
            <!--we have many boxes-->
            <article>
                <!--Inside each box there is different type of content - article-->
                <h1>Second</h1>
            </article>
        </section>

        <section class="box link">
            <!--we have many boxes-->
            <article>
                <!--Inside each box there is different type of content - article-->
                <p><a href="https://softuni.bg" target="_blank">http://softuni.bg</a></p>
            </article>
        </section>

        <section class="box gallery">
            <!--we have many boxes-->
            <article>
                <!--Inside each box there is different type of content - article-->
                <h1>Second</h1>
            </article>
        </section>

        <section class="box gallery">
            <!--we have many boxes-->
            <article>
                <!--Inside each box there is different type of content - article-->
                <h1>Second</h1>
            </article>
        </section>

        <section class="box">
            <!--we have many boxes-->
            <article>
                <!--Inside each box there is different type of content - article-->
                <h1>Second</h1>
            </article>
        </section>

        <section class="box gallery">
            <!--we have many boxes-->
            <article>
                <!--Inside each box there is different type of content - article-->
                <h1>Second</h1>
            </article>
        </section>

        <section class="box">
            <!--we have many boxes-->
            <article>
                <!--Inside each box there is different type of content - article-->
                <h1>Second</h1>
            </article>
        </section>

        <section class="box last">
            <!--last box is to add a content--> 
            <h1>Second</h1>           
        </section>
    </main>
    <footer>
        <div class="footer">
            <a href="#">Older Posts</a>
        </div>
    </footer>
</body>
</html>
