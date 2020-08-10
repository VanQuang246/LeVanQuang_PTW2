<?php
    $url_host = $_SERVER['HTTP_HOST'];

    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

    preg_match_all($pattern_uri, __DIR__, $matches);

    $url_path = $url_host . $matches[1][0];

    $url_path = str_replace('\\', '/', $url_path);
?>
<div class="menu">
<div id="monial">
    <div class='container'>
        <div class="row" >
            <div class="col-xs-12 col-sm-4">
            
                <div class="content">
                    <div class="image-content">
                        <div class="row-image">
                            <i class="fa fa-home"></i>
                        </div>
                    </div>
                    <p class="title--header">Hottest Property List</p>
                    <p>Wherever you are and you want to go, we provide you extremely hot and continuously updated property list.</p>
                    <p><a class="icon-right">See latest list...<i class="fa fa-arrow-circle-o-right"></i></a></p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4">
                <div class="content">
                    <div class="image-content">
                        <div class="row-image">
                        <i class="fa fa-thumbs-o-up" ></i>
                        </div>
                    </div>
                    <p class="title--header">Best Price In Market</p>
                    <p>Wherever you are and you want to go, we provide you extremely hot and continuously updated property list.</p>
                    <p><a class="icon-right">See latest list...<i class="fa fa-arrow-circle-o-right"></i></a></p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4">
                <div class="content">
                    <div class="image-content">
                        <div class="row-image">
                        <i class="fa fa-star" ></i>
                        </div>
                    </div>
                    <p class="title--header">Guaranteed Service</p>
                    <p>Wherever you are and you want to go, we provide you extremely hot and continuously updated property list.</p>
                    <p><a class="icon-right">See latest list...<i class="fa fa-arrow-circle-o-right"></i></a></p>
                </div>
            </div>
            
    </div>
    </div>
</div>
</div>





                    
                    