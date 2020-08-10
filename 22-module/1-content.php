<?php
    $url_host = $_SERVER['HTTP_HOST'];

    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

    preg_match_all($pattern_uri, __DIR__, $matches);

    $url_path = $url_host . $matches[1][0];

    $url_path = str_replace('\\', '/', $url_path);
?>
<div class="container">
    <div class="title">
        <div class="title--name">
            Visalia, NJ 93277
        </div>
        <div class="title--social">
            <img class="fb" src="./images/fb.png" >
            <img class="fb" src="./images/tw.png" >
            <img class="fb" src="./images/is.png" >
        </div>
    </div>
    <div class="menu">
        <img class="menu-image" src="./images/1.jpg" >
        <div class="menu-thumb">
            <a class="caroufredsel-prev" href="#"><</a>
            <img class="thumb-img--left" src="./images/1.jpg" >
            <img class="thumb-img--mid" src="./images/2.jpg" >
            <img class="thumb-img--mid" src="./images/3.jpg" >
            <img class="thumb-img--mid" src="./images/4.jpg" >
            <img class="thumb-img--right" src="./images/5.jpg" >
            <a class="caroufredsel-next" href="#">></a>
            
        </div>
        
    </div>
</div>




                    
                    