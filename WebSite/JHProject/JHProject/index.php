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
            <a href="#" class="filter">filter<span class="filter-icon"></span></a>
            <ul class="drop-down">
                <li><a href="?show=all" id="allJokes" data-scroll>ALL Jokes</a></li>
                <li><a href="?show=html" class="active-element" data-scroll>HTML</a></li>
                <li><a href="?show=css" data-scroll>CSS</a></li>
                <li><a href="?show=csharp" data-scroll>C#</a></li>
                <li><a href="?show=java" data-scroll>Java</a></li>
            </ul>
        </nav>
		
        <footer id="media-links">
            <ul>
                <li><a class="softuni-link" title="Softuni" href="http://softuni.org" target="_blank"></a></li>
                <li><a class="twitter-link" title="Twitter" target="_blank" href="https://twitter.com/softunibg"></a></li>
                <li><a class="facebook-link" title="Facebook page" target="_blank" href="https://www.facebook.com/SoftwareUniversity"></a></li>
				<li><a class="googleplus-link" title="Google Plus" target="_blank" href="https://plus.google.com/+SoftuniBg"></a></li>            
            </ul>
            <!--Social media links - softuni pages: main page, facebook page and etc.. our pages too.. friendly pages-->
            <span>&copy; 2014 SoftUni</span>
        </footer>
    </aside>
    <?php
        include 'database/GetInfomation.php';
    ?>

    <main>
        <div id="jokes">
        <?php
            if(isset($joke) && isset($id)){
                for ($i = sizeof($id); $i >=1 ; $i--) {
                    if($joke[$id[$i]]['type']==1){
                        echo '
                        <section class="box">
                            <article class="box pic">
                                <figure>
                                    <a href="'.$joke[$id[$i]]['content'].'" target="_blank"><img src="'.$joke[$id[$i]]['content'].'" /></a>
                                </figure>
                                <figcaption>'.$joke[$id[$i]]['title'].'</figcaption>
                                <div class="date">
                                    <p>'.$joke[$id[$i]]['date'].'</p>
                                </div>
                            </article>
                        </section>';
                    }  elseif ($joke[$id[$i]]['type']==2) {
                        echo '
                            <section class="box">
                                <article class="box story">
                                    <h2>'.$joke[$id[$i]]['title'].'</h2>
                                    <div class="story-entry">'.$joke[$id[$i]]['content'].'</div>
                                    <div class="date">
                                        <p>'.$joke[$id[$i]]['date'].'</p>
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
</body>
</html>
