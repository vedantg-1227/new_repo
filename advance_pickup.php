<?php
    require "lessc.inc.php";
    $less = new lessc;
    $less->checkedCompile("css/advance_pickup.less", "css/advance_pickup.css");
?>
    <!DOCTYPE html>

    <html>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <head>
        <meta charset="utf-8">
        <title>Advance Pickup</title>
        <script src="js/jquery-1.9.1.min.js"></script>
        <script src="js/less.js"></script>
        <link rel="stylesheet" type="text/css" href="css/advance_pickup.css">
    </head>

    <body>

        <div class="advance_pickup">
            <div class="new_container">
                <div class="bg_container">
                    <ul class="pickup_value">
                        <li>
                            <span>MID</span>
                            <span>3470288</span>
                        </li>
                        <li>
                            <span>ASN</span>
                            <span>3470288</span>
                        </li>
                        <li>
                            <span>Expected Date of pickup</span>
                            <span>12th April 2019</span>
                        </li>
                        <li>
                            <span>Last date advance pickup</span>
                            <span>16th April 2019</span>
                        </li>
                        <li>
                            <span>Fulfilment centre</span>
                            <span>Ezowing</span>
                        </li>
                        <li>
                            <span>Products</span>
                            <span>45</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="new_container">
                <div class="bg_container">
                    <div class="top_search">
                        <div class="search_box">
                            <input type="search" name="" placeholder="search">
                            <button></button>
                        </div>
                        <div class="flt_rt">
                            <div class="common_dropdown margin_l25 ">
                                <a href="javascript:void(0);">Donload</a>
                                <ul style="display: none;">
                                    <li><a href="javascript:void(0);">Monday</a></li>
                                    <li class="selected"><a href="javascript:void(0);">Tuesday</a></li>
                                    <li><a href="javascript:void(0);">Today</a></li>
                                    <li><a href="javascript:void(0);">Today</a></li>
                                    <li><a href="javascript:void(0);">Today</a></li>
                                </ul>
                            </div>
                            <input type="submit" name="" class="n_btn orange_fill margin_l25">
                        </div>
                    </div>

                    <div class="common_table">
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tbody>
                                <tr>
                                    <th class="common_checkbox check"><input type="checkbox" name="confirm" id="confirm"><label for="confirm"></label></th>
                                    <th width="30%">Product Info</th>
                                    <th>Expected Quantity</th>
                                    <th>Quantity Available with Merchant:</th>
                                    <th>Dispatch Quantity</th>
                                    <th>Received Quantity</th>
                                    <th>SR Inventory</th>
                                </tr>
                                <tr>
                                    <td class="common_checkbox"><input type="checkbox" name="" id="confirm2"><label for="confirm2"></label></td>
                                    <td>
                                        <div class="product_view">
                                            <img src="http://cdn.shopclues.com/images/thumbnails/56108/160/160/SamsungEHS64AVFWEGH5911843AWiredSDL29035391014b1621487058411.jpg" alt="">
                                            <span>Red Tape Mens Tan Formal Red Tape Mens Tan Formal</span>
                                            <p>PID : <a href="javascript:void(0);">103274466</a></p>
                                            <p>M Ref ID: <em>C-201</em></p>
                                            <div>
                                                <p>Size: <em>small</em></p>
                                                <p>Color: <em>Green</em></p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>45</td>
                                    <td class="input-row"><input type="text" name="" value="45" style="max-width: 75px;" class="text_ac"></td>
                                    <td>15</td>
                                    <td>5</td>
                                    <td><a href="javascript:void(0);">1400</a></td>
                                </tr>
                                <tr>
                                    <td class="common_checkbox"><input type="checkbox" name="" id="confirm2"><label for="confirm2"></label></td>
                                    <td>
                                        <div class="product_view">
                                            <img src="http://cdn.shopclues.com/images/thumbnails/56108/160/160/SamsungEHS64AVFWEGH5911843AWiredSDL29035391014b1621487058411.jpg" alt="">
                                            <span>Red Tape Mens Tan Formal Red Tape Mens Tan Formal</span>
                                            <p>PID : <a href="javascript:void(0);">103274466</a></p>
                                            <p>M Ref ID: <em>C-201</em></p>
                                            <div>
                                                <p>Size: <em>small</em></p>
                                                <p>Color: <em>Green</em></p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>45</td>
                                    <td class="input-row"><input type="text" name="" value="45" style="max-width: 75px;" class="text_ac"></td>
                                    <td>15</td>
                                    <td>5</td>
                                    <td><a href="javascript:void(0);">1400</a></td>
                                </tr>
                                <tr>
                                    <td class="common_checkbox"><input type="checkbox" name="" id="confirm2"><label for="confirm2"></label></td>
                                    <td>
                                        <div class="product_view">
                                            <img src="http://cdn.shopclues.com/images/thumbnails/56108/160/160/SamsungEHS64AVFWEGH5911843AWiredSDL29035391014b1621487058411.jpg" alt="">
                                            <span>Red Tape Mens Tan Formal Red Tape Mens Tan Formal</span>
                                            <p>PID : <a href="javascript:void(0);">103274466</a></p>
                                            <p>M Ref ID: <em>C-201</em></p>
                                            <div>
                                                <p>Size: <em>small</em></p>
                                                <p>Color: <em>Green</em></p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>45</td>
                                    <td class="input-row"><input type="text" name="" value="45" style="max-width: 75px;" class="text_ac"></td>
                                    <td>15</td>
                                    <td>5</td>
                                    <td><a href="javascript:void(0);">1400</a></td>
                                </tr>  

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="js/common.js"></script>
    </body>

    </html>