<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>code for break</title>
    <link rel="shortcut icon" href="imgs/icon.ico">
    <link href="styles/reset.css" rel="stylesheet" />    
    <link href="styles/css.css" rel="stylesheet" />
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="script/addForm.js"></script>   
    <script src="script/showForm.js"></script>   
</head>
<body>
    <div id="information" style="display: none;">
        <?php
            if(isset($message)){
                echo '<p>'.$message.'</p>';
            }
        ?>
        <p></p>
    </div>
    <aside class="box">
        <header>            
            <h1 id="logo"><em>code for</em> <strong>break</strong></h1>
        </header>
        <nav id="tags">
            <a href="#" class="filter">FILTER</a>
            <ul class="drop-down">
                <li><a href="#" id="allJokes" data-scroll>ALL Jokes</a></li>
                <li><a href="#" class="active-element" data-scroll>HTML</a></li>
                <li><a href="#" data-scroll>CSS</a></li>
                <li><a href="#" data-scroll>C#</a></li>
                <li><a href="#" data-scroll>Java</a></li>
            </ul>
        </nav>

        <section id="media-links">
            <ul>
                <li><a href="#"><img src="http://transcript-bg.com/images/google+.png" alt="googlePlus logo" /></a></li>
                <li><a href="#"><img src="https://www.seoclerk.com/pics/220394-1C4vDD1400131701.png" alt="twitter logo" /></a></li>
                <li><a href="#"><img src="http://img2.wikia.nocookie.net/__cb20130729002338/gtawiki/images/4/44/Facebook_Logo.png" alt="facebook logo" /></a></li>
                <li><a href="#"><img src="http://www.nakov.com/wp-content/uploads/2012/03/SoftUni-Logo.png" alt="SoftUni logo" /></a></li>
                <li><a href="#"><img src="http://www.montreal-kosher.com/wp-content/uploads/2014/02/instagram-logo-png-transparent-backgroundadanali-hasan-kolcuoglu-restaurant-uoqzlntb.png" alt="Instagram logo" /></a></li>
                <li><a href="#"><img src="https://origin.ih.constantcontact.com/fs105/1100458305930/img/468.png?ver=1384611382000" alt="flickr logo" /></a></li>
            </ul>
            <!--Social media links - softuni pages: main page, facebook page and etc.. our pages too.. friendly pages-->
            <span>&copy; 2014 SoftUni</span>
        </section>
    </aside>
    <?php
        include 'database/GetInfomation.php';
    ?>

    <main>
        <div id="jokes">
        <?php
            if(isset($joke) && isset($num_jokes)){
                for ($i = $num_jokes; $i >=1 ; $i--) {
                    if($joke[$i]['type']==1){
                        echo '
                        <section class="box">
                            <article class="box pic">
                                <figure>
                                    <a href="'.$joke[$i]['content'].'" target="_blank"><img src="'.$joke[$i]['content'].'" /></a>
                                </figure>
                                <figcaption>'.$joke[$i]['title'].'</figcaption>
                                <div class="date">
                                    <p>'.$joke[$i]['date'].'</p>
                                </div>
                            </article>
                        </section>';
                    }  elseif ($joke[$i]['type']==2) {
                        echo '
                            <section class="box">
                                <article class="box story">
                                    <h2>'.$joke[$i]['title'].'</h2>
                                    <p>'.$joke[$i]['content'].'</p>
                                    <div class="date">
                                        <p>'.$joke[$i]['date'].'</p>
                                    </div>
                                </article>
                            </section>';
                    }
                }
            }
        ?>
            <selection class="box">
                <article class="box add-content">
                    <h3 id="add"><span>+</span> ADD</h3>
                </article>
            </selection>
        </div>
        <form action="database/uploadFile.php" style="display: none;" method="post" id="addJoke"
              enctype="multipart/form-data">
            <label for="title">Joke Title</label><br>
            <input type="text" name="title" id="title" autofocus="autofocus"  required="required" placeholder="Joke`s title"/><br>
            <div id="imgFormat" style="display: none;" >
                <label for="file">Filename:</label><br>
                <input type="file" name="file"  id="file"><br>
            </div>
            <div  id="textFormat">
                <label for="content" >The Joke</label><br>
                <textarea  id="content" name="content" placeholder="The Joke..." ></textarea><br>
            </div>
            <label for="date">Date:</label>
            <input type="date" name="date" required="required" id="date"/><br>          
            <input type="radio" name="textJoke" checked="checked" id="textJoke" />
            <label for="textJoke"/>Text format</label>           
            <input type="radio" name="textJoke"  id="imgJoke" />
            <label for="imgJoke"/>Image format</label><br/>
            <input type="submit" name="submit" id="submit" value="POST">
        </form>  
    </main>

    <footer>
        <div class="footer">
             <section id="media-links">
            <ul>
                <li><a href="#"><img src="http://transcript-bg.com/images/google+.png" alt="googlePlus logo" /></a></li>
                <li><a href="#"><img src="https://www.seoclerk.com/pics/220394-1C4vDD1400131701.png" alt="twitter logo" /></a></li>
                <li><a href="#"><img src="http://img2.wikia.nocookie.net/__cb20130729002338/gtawiki/images/4/44/Facebook_Logo.png" alt="facebook logo" /></a></li>
                <li><a href="#"><img src="http://www.nakov.com/wp-content/uploads/2012/03/SoftUni-Logo.png" alt="SoftUni logo" /></a></li>
                <li><a href="#"><img src="http://www.montreal-kosher.com/wp-content/uploads/2014/02/instagram-logo-png-transparent-backgroundadanali-hasan-kolcuoglu-restaurant-uoqzlntb.png" alt="Instagram logo" /></a></li>
                <li><a href="#"><img src="https://origin.ih.constantcontact.com/fs105/1100458305930/img/468.png?ver=1384611382000" alt="flickr logo" /></a></li>
            </ul>
            <!--Social media links - softuni pages: main page, facebook page and etc.. our pages too.. friendly pages-->
            <span>&copy; 2014 SoftUni</span>
        </section>
        </div>
    </footer>
</body>
</html>
