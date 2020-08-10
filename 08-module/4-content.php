<?php
    $url_host = $_SERVER['HTTP_HOST'];

    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

    preg_match_all($pattern_uri, __DIR__, $matches);

    $url_path = $url_host . $matches[1][0];

    $url_path = str_replace('\\', '/', $url_path);
?>

<div class="container">
<div class="menu">
    <div class="menu-title">
        <h3>SEARCH FOR PROPERTY</h3>
    </div>
    <div class="menu-select">
        <select name="cars" id="cars" >
            <option value="volvo">Volvo</option>
            <option value="saab">Saab</option>
            <option value="mercedes">Mercedes</option>
            <option value="audi">Audi</option>
        </select>
    </div>
    <div class="menu-select">
        <select name="cars" id="cars" >
            <option value="volvo">Volvo</option>
            <option value="saab">Saab</option>
            <option value="mercedes">Mercedes</option>
            <option value="audi">Audi</option>
        </select>
    </div>
    <div class="menu-select">
        <select name="cars" id="cars" >
            <option value="volvo">Volvo</option>
            <option value="saab">Saab</option>
            <option value="mercedes">Mercedes</option>
            <option value="audi">Audi</option>
        </select>
    </div>
    <div class="menu-select">
        <select name="cars" id="cars" >
            <option value="volvo">Volvo</option>
            <option value="saab">Saab</option>
            <option value="mercedes">Mercedes</option>
            <option value="audi">Audi</option>
        </select>
    </div>
    <div class="menu-select">
        <select name="cars" id="cars" >
            <option value="volvo">Volvo</option>
            <option value="saab">Saab</option>
            <option value="mercedes">Mercedes</option>
            <option value="audi">Audi</option>
        </select>
    </div>
    <div class="menu-select">
        <select name="cars" id="cars" >
            <option value="volvo">Volvo</option>
            <option value="saab">Saab</option>
            <option value="mercedes">Mercedes</option>
            <option value="audi">Audi</option>
        </select>
    </div>
    <div class='price'>
        <div class='name'>Price</div>
        <div id="slider"></div>
    </div>
    <div class='are' >
        <div class='name'>Area</div>
        <div id="slider1"></div>
    </div>
    <div class="search">
        <p>SEARCH PROPERTY</p>
    </div>
</div>

</div>
<script>

    var slider = document.getElementById('slider');

    noUiSlider.create(slider, {
        start: [0, 100],
        connect: true,
        range: {
            'min': 0,
            'max': 100
        }
    });
</script>
<script>

    var slider1 = document.getElementById('slider1');

    noUiSlider.create(slider1, {
        start: [0, 100],
        connect: true,
        range: {
            'min': 0,
            'max': 100
        }
    });
</script>




                    
                    