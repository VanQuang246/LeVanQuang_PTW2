<?php
    $url_host = $_SERVER['HTTP_HOST'];

    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

    preg_match_all($pattern_uri, __DIR__, $matches);

    $url_path = $url_host . $matches[1][0];

    $url_path = str_replace('\\', '/', $url_path);
?>

<div class="menu">
<div class="container">
    <div class="text-center">
        <h1>TESTIMONIAL</h1> 
        <div class="menu-point">
            <div class="point">
                <a class="point-tick" style="background-color: green;" href="#carouselExampleIndicators" data-slide="next"></a>
                <a class="point-tick" style="background-color: #d6d6d6;" href="#carouselExampleIndicators" data-slide="next"></a>
                <a class="point-tick" style="background-color: #d6d6d6;" href="#carouselExampleIndicators" data-slide="next"></a>
                <a class="point-tick" style="background-color: #d6d6d6;" href="#carouselExampleIndicators" data-slide="next"></a>
                <a class="point-tick" style="background-color: #d6d6d6;" href="#carouselExampleIndicators" data-slide="next"></a>
            </div>
        </div>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <!-- <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol> -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    
                    <p>“Stacy is a long time resident and successful broker in the Lincoln Center area. Never far from home, sheis intimately acquainted....Michael Feng is a real estate agent, but his true goal is to be a resource for his clients. Since 2006,...Michael Feng is a real estate agent, but his true goal is to be a resource for his clients. Since 2006,...”</p>
                    <div class="avatar">
                        <img src='./images/1.jpg' >
                        <div class="avatar-name">
                        <div class="name">Dave Softel</div>
                            <div class="sub-name">Happy Buyer of June</div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    
                    <p>“I found my current apartment on Citilights with extraordinary help from them and totally satisfied with the choice I made. All I had to do was to tell what I was looking for and I got back property suggestions nearly exact to my imagination. Among those, I finally chose mine now then completed procedure at ease. Highly recommend Citilights for your home search.”</p>
                    <div class="avatar">
                        <img src='./images/2.jpg' >
                        <div class="avatar-name">
                            <div class="name">Tom Softel</div>
                            <div class="sub-name">Cari Buyer of June</div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    
                    <p>“What do you do when you visit a new city? Try out the local cuisine? Check out the most popular museum on TripAdvisor? If you’re big on Instagram, you might be more interested in walking wall to wall to wall. “Wall crawls” are an incredibly popular tourist activity as murals and street art have long been considered the best backdrop for interesting #holiday pics”</p>
                    <div class="avatar">
                        <img src='./images/4.jpg' >
                        <div class="avatar-name">
                            <div class="name">Unvolving</div>
                            <div class="sub-name">Yhh Buyer o</div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <div class="footer">
        <img src="./images/5.png" >
        <img src="./images/6.png" >
        <img src="./images/7.png" >
        <img src="./images/8.png" >
        <img src="./images/9.png" >
        <img src="./images/10.png" >
       
    </div>
</div>

</div>
<script>
     
</script>





                    
                    