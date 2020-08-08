<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="noo-wrapper">

    <div class="container noo-mainbody">
        <div class="noo-mainbody-inner">
            <div class="row clearfix">


                <div class="noo-content col-xs-12 col-md-8">
                    <div id="block-system-main" class="block block-system">


                        <div class="content">

                            <div class="agent-property">
                                <div class="agent-property-title">
                                    <h3>CONTACT ME</h3>
                                </div>
                                <div class="agents grid clearfix">

                                    <div class="conact-agent">
                                        <form class="webform-client-form webform-client-form-49 element-inline" enctype="multipart/form-data" action="/citilights/property/villa-ernesto-subdivision" method="post" id="webform-client-form-49" accept-charset="UTF-8">
                                            <div>
                                                <div class="form-group col-md-6 col-sm-6">
                                                    <div class="form-item webform-component webform-component-textfield webform-component--your-name">
                                                        <label class="element-invisible" for="edit-submitted-your-name"> <span class="form-required" title="This field is required."></span></label>
                                                        <input placeholder="Your Name *" class="form-control form-text required" type="text" id="edit-submitted-your-name" name="submitted[your_name]" value="" size="60" maxlength="128" />
                                                    </div>
                                                </div>
                                                <div class="form-group  col-md-6 col-sm-6">
                                                    <div class="form-item webform-component webform-component-email webform-component--your-email">
                                                        <label class="element-invisible" for="edit-submitted-your-email"><span class="form-required" title="This field is required."></span></label>
                                                        <input placeholder="Your Email *" class="form-control form-text form-email required" type="email" id="edit-submitted-your-email" name="submitted[your_email]" size="60" />
                                                    </div>
                                                </div>
                                                <div class="form-group message col-md-12 col-sm-12">
                                                    <div class="form-item webform-component webform-component-textarea webform-component--message">
                                                        <label class="element-invisible" for="edit-submitted-message"> <span class="form-required" title="This field is required."></span></label>
                                                        <div class="form-textarea-wrapper resizable"><textarea placeholder="Message *" class="form-control form-textarea required" name="submitted[message]" id="edit-submitted-message" cols="60" rows="5"></textarea></div>
                                                    </div>
                                                </div>

                                                <div class="form-action col-md-12 col-sm-12">
                                                    <a class="btn btn-default click-other-action" data-click=".hide-actions .form-submit" href="#">Send Me</a>
                                                </div>

                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>


            </div>
        </div>
    </div>

</div>