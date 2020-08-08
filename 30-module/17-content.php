<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="site">

    <div class="noo-wrapper">
        <div id="block-system-main" class="block block-system">


            <div class="content">
                <div class="panel-flexible panels-flexible-6 clearfix">
                    <div class="panel-flexible-inside panels-flexible-6-inside">
                        <div class="panels-flexible-region panels-flexible-region-6-center panels-flexible-region-first panels-flexible-region-last">
                            <div class="inside panels-flexible-region-inside panels-flexible-region-6-center-inside panels-flexible-region-inside-first panels-flexible-region-inside-last">
                                <div class="panel-pane pane-block pane-views-blog-block">

                                    <section class="wrap noo-content blog-page standard-blog noo-mainbody">
                                        <div class="container">
                                            <div class="view view-blog view-id-blog view-display-id-block view-dom-id-d7e836389ccbb36080f08d58862e72d9">



                                                <article class="hentry format-standard has-featured">
                                                    <div class="content-wrap">
                                                        <header class="content-header">
                                                            <h2 class="content-title">
                                                                <a href="/citilights/blog/mauris-ac-risus-neque-ut-pulvinar-risus" title="Mauris ac risus neque, ut pulvinar risus">Mauris ac risus neque, ut pulvinar risus</a>
                                                            </h2>
                                                            <p class="content-meta">
                                                                <i class="fa fa-file-image-o nooicon-file-image-o"></i>
                                                                <span>
                                                                    Posted in <a href="/citilights/taxonomy/term/15" typeof="skos:Concept" property="rdfs:label skos:prefLabel" datatype="">Dining</a>, <a href="/citilights/taxonomy/term/18" typeof="skos:Concept" property="rdfs:label skos:prefLabel" datatype="">Fashion</a>, <a href="/citilights/taxonomy/term/17" typeof="skos:Concept" property="rdfs:label skos:prefLabel" datatype="">Game</a> </span>
                                                                <span>
                                                                    on <time class="entry-date">
                                                                        February 28, 2015 </time>
                                                                </span>
                                                                <span>
                                                                    by <a href="/citilights/users/admin" title="View user profile." class="username" xml:lang="" about="/citilights/users/admin" typeof="sioc:UserAccount" property="foaf:name" datatype="">admin</a> </span>
                                                                <span><a href="#" title="" class="meta-comments"><i class="fa fa-comments fa fa-comments nooicon-comments"></i> 0 comments</a>
                                                                </span>
                                                            </p>
                                                        </header>
                                                        <div class="content-featured">
                                                            <a class="content-thumb" href="/citilights/blog/mauris-ac-risus-neque-ut-pulvinar-risus" title="Mauris ac risus neque, ut pulvinar risus">
                                                                <div id="file-41" class="file file-image file-image-jpeg">




                                                                    <div class="content">
                                                                        <img typeof="foaf:Image" src="http://tk-themes.site/citilights/sites/default/files/blog-img1.jpg" width="800" height="450" alt="" /> </div>


                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="content-excerpt">
                                                            <p>Pendisse blandit ligula turpis, ac convallis risus fermentum non. Duis vestibulum quis quam vel accumsan. Nunc a vulputate lectus. Vestibulum eleifend nisl sed massa sagittis vestibulum. Vestibulum pretium blandit tellus, sodales volutpat sapien varius vel. Phasellus tristique cursus erat, a placerat tellus laoreet eget. Blandit ligula turpis, ac convallis risus fermentum non. Duis vestibulum quis.</p>
                                                            <div><a href="/citilights/blog/mauris-ac-risus-neque-ut-pulvinar-risus" class="read-more">Read More <i class="fa fa-arrow-circle-o-right"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </article>





                                            </div>
                                        </div>
                                    </section>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>