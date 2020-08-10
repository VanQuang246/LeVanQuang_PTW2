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
        <h2>PROPERTITES</h2>
        
        <table class="table ">

            <tbody>
            <tr>
                    <td>
                    <div class="table">
                    <div id="triangle-up">
                        <i class="fa fa-star" style="color: #fd7e14"></i>
                    </div>
                    <div class="rating">ON SALE</div>
                    <img src="./images/1.jpg" >
                    <div class="content-name">Precy Villa Condos</div>
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <td>
                                    <div class="body-td">
                                        <i class="fa fa-home"></i>
                                        <span>2.123 qft</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="body-td">
                                        <i class="fa fa-bath"></i>
                                        <span>4</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="body-td">
                                        <i class="fa fa-user"></i>
                                        <span>1</span>
                                    </div>
                                    
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <td class="name-td">
                                    <div class="body-td">
                                    <div  class="name">$400,000</div>
                                    </div>
                                </td>
                                <td class="mss-td">
                                    <div class="body-td">
                                    <div>MORE DETAILS</div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table> 
                    </td>
                    <td>
                    <div class="table">
                    <div class="rating1">ON SALE</div>
                    <img src="./images/2.jpg" >
                    <div class="content-name">Single Family Residential, NJ</div>
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <td>
                                    <div class="body-td">
                                        <i class="fa fa-home"></i>
                                        <span>1.123 qft</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="body-td">
                                        <i class="fa fa-bath"></i>
                                        <span>2</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="body-td">
                                        <i class="fa fa-user"></i>
                                        <span>5</span>
                                    </div>
                                    
                                </td>
                            </tr>
                        </tbody>
                    </table> 
                    <table class="table table-bordered">
                        
                        <tbody>
                            <tr>
                                <td class="name-td">
                                    <div class="body-td">
                                    <div  class="name">$900,000</div>
                                    </div>
                                </td>
                                <td class="mss-td">
                                    <div class="body-td">
                                    <div>MORE DETAILS</div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table> 
                    </td>
                </tr>
                <tr>
                    <td>
                    <div class="table">
                    <div class="rating">ON HOT</div>
                    <img src="./images/8.jpg" >
                    <div class="content-name">Peter Cooper Village</div>
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <td>
                                    <div class="body-td">
                                        <i class="fa fa-home"></i>
                                        <span>1.923 qft</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="body-td">
                                        <i class="fa fa-bath"></i>
                                        <span>3</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="body-td">
                                        <i class="fa fa-user"></i>
                                        <span>5</span>
                                    </div>
                                    
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <td class="name-td">
                                    <div class="body-td">
                                    <div  class="name">$200,000</div>
                                    </div>
                                </td>
                                <td class="mss-td">
                                    <div class="body-td">
                                    <div>MORE DETAILS</div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table> 
                    </td>
                    <td>
                    <div class="table">
                    <div class="rating1">ON HOT</div>
                    <img src="./images/9.jpg" >
                    <div class="content-name">Aire</div>
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <td>
                                    <div class="body-td">
                                        <i class="fa fa-home"></i>
                                        <span>1.923 qft</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="body-td">
                                        <i class="fa fa-bath"></i>
                                        <span>5</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="body-td">
                                        <i class="fa fa-user"></i>
                                        <span>5</span>
                                    </div>
                                    
                                </td>
                            </tr>
                        </tbody>
                    </table> 
                    <table class="table table-bordered">
                        
                        <tbody>
                            <tr>
                                <td class="name-td">
                                    <div class="body-td">
                                    <div  class="name">$800,000</div>
                                    </div>
                                </td>
                                <td class="mss-td">
                                    <div class="body-td">
                                    <div>MORE DETAILS</div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table> 
                    </td>
                </tr>
            </tbody>
        </table>

        </div>

        
    
</div>




                    
                    