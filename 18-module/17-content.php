<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="content">
    <div class="panel-flexible panels-flexible-10 clearfix">
        <div class="panel-flexible-inside panels-flexible-10-inside">
            <div class="panels-flexible-region panels-flexible-region-10-center panels-flexible-region-first panels-flexible-region-last">
                <div class="inside panels-flexible-region-inside panels-flexible-region-10-center-inside panels-flexible-region-inside-first panels-flexible-region-inside-last">

                    <div class="panel-separator"></div>
                    <div class="panel-pane pane-block pane-webform-client-block-50">

                        <div class="row contact-form">
                            <div class="col-sm-6 col-md-4">
                                <div class="contact-info">

                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <div class="contact-desc">
                                    <div class="text-block">
                                        <h4>Drop Us A Line</h4>
                                        <p>If you have any problems, please use the form below to leave us your questions. We will reply you as soon as possible. Thank you!</p>
                                    </div>
                                    <hr class="noo-gap">
                                    <form class="webform-client-form webform-client-form-50 element-inline" enctype="multipart/form-data" action="/citilights/contact?fbclid=IwAR11lQfJtcdZinmZgYw-hHcYyUhuD-Xzxcw22QF4lAB_FOODTOqbuAzmi3U" method="post" id="webform-client-form-50" accept-charset="UTF-8">
                                        <div>
                                            <div class="form-group form-control-wrap your-name">
                                                <div class="form-item webform-component webform-component-textfield webform-component--name">
                                                    <label class="element-invisible" for="edit-submitted-name"><span class="form-required" title="This field is required."></span></label>
                                                    <input placeholder="Your Name*" required="required" class="form-control form-text required" type="text" id="edit-submitted-name" name="submitted[name]" value="" size="60" maxlength="128" />
                                                </div>
                                            </div>
                                            <div class="form-group form-control-wrap your-email">
                                                <div class="form-item webform-component webform-component-email webform-component--email">
                                                    <label class="element-invisible" for="edit-submitted-email"><span class="form-required" title="This field is required."></span></label>
                                                    <input placeholder="Your Email*" required="required" class="form-control form-text form-email required" type="email" id="edit-submitted-email" name="submitted[email]" size="60" />
                                                </div>
                                            </div>
                                            <div class="form-group form-control-wrap your-subject">
                                                <div class="form-item webform-component webform-component-textfield webform-component--subject">
                                                    <label class="element-invisible" for="edit-submitted-subject"></label>
                                                    <input placeholder="Subject" class="form-control form-text" type="text" id="edit-submitted-subject" name="submitted[subject]" value="" size="60" maxlength="128" />
                                                </div>
                                            </div>
                                            <div class="form-group form-control-wrap your-message">
                                                <div class="form-item webform-component webform-component-textarea webform-component--message">
                                                    <label class="element-invisible" for="edit-submitted-message"></label>
                                                    <div class="form-textarea-wrapper resizable"><textarea placeholder="Your Message" class="form-control form-textarea" name="submitted[message]" id="edit-submitted-message" cols="60" rows="5"></textarea></div>
                                                </div>
                                            </div><input type="hidden" name="details[sid]" />
                                            <input type="hidden" name="details[page_num]" value="1" />
                                            <input type="hidden" name="details[page_count]" value="1" />
                                            <input type="hidden" name="details[finished]" value="0" />
                                            <input type="hidden" name="form_build_id" value="form-Gj8Tfn2J-F3eztICZb6-X6NYsHgASzF1hgj6XnPJg-Q" />
                                            <input type="hidden" name="form_id" value="webform_client_form_50" />

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

</div>

</div>