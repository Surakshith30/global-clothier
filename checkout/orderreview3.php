<!DOCTYPE HTML>
<html>

<head>

    <?php include '../header.php';?>


    <script>
        var digitalData = digitalData || {};
        digitalData = {
            page: {
                pageName:"Order Review Page",
                siteSection:"Checkout Section",
                server:"USA Server"
            },
			product: {
				productEvent:"Payment",
				productID:"201233",
				productName:"Tuxedo"
            },
        };
    </script>


    <title>GlobalClothiers|Checkout|Order Review Step 3</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="robots" content="noindex, nofollow">
    <script type="text/javascript" src="http://ats-sb.adobe.com/jjsite/include/scripts/menu.js"></script>
    <!--<script type="text/javascript" src="http://ats-sb.adobe.com/jjsite/include/scripts/searchfield.js"></script> -->
    <script type="text/javascript" src="http://ats-sb.adobe.com/jjsite/include/scripts/simpleCart.js"></script>
    <script language="JavaScript" type="text/javascript">
        window.onunload = function() {
            void(0)
        }
    </script>
    <script language="JavaScript">
        <!--if (document.images) {pic1= new Image(200,70); pic1.src="http://localhost:8080/globalclothiers/images/gc_logo.png";}//-->
    </script>

    <style type="text/css">
        @import url(http://ats-sb.adobe.com/jjsite/include/css/jje.css);
        @import url(http://ats-sb.adobe.com/jjsite/include/css/menu.css);
    </style>
    <link rel="shortcut icon" href="http://ats-sb.adobe.com/jjsite/include/images/jj1.ico">
</head>

<body>

    <div id="superwrap">

        <div id="wrapper">
            <!--start logo and head-->

            <div class="head_logo">
                <a href="../index.php" onmouseover="document.jj.src='http://localhost:8080/globalclothiers/images/gc_logo.png'" onmouseout="document.jj.src='http://localhost:8080/globalclothiers/images/gc_logo_black.png'">
                    <img src="http://localhost:8080/globalclothiers/images/gc_logo_black.png" border="0" name="jj" />
                </a>
                <br />
            </div>


            <!--start search box-->

            <div class="rightheader">

                <div class="search_box">

                    <form action="../search/searchresults.php">
                        <input type="text" id="searchfield" name="q" />
                        <input type="submit" Value="Go" class="button">
                    </form>
                </div>

                <div class="checkout"><a href="../checkout/shoppingcart.php">shopping cart</a>
                    <a href="../checkout/shipping1.php">checkout</a>
                </div>
            </div>
            <!--end search box-->

            <!--end logo and head-->



            <!--start top nav-->

            <table width=800>
                <tr>
                    <div class="head_tabs_bar">
                        <div id="menu">
                            <!--Menu Start-->
                            <ul id="sddm">

                                <li><a href="../women/women.php" onmouseover="mopen('m2')" onmouseout="mclosetime()">WOMEN</a>
                                    <div id="m2" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">
                                        <a href="../women/activewear/activewear.php">Activewear</a>
                                        <a href="../women/fineapparel/fineapparel.php">Fine Apparel</a>

                                        <a href="#">Footwear</a>
                                        <a href="#">Handbags</a>
                                    </div>
                                </li>
                                <li>
                                    <a href="../men/men.php" onmouseover="mopen('m3')" onmouseout="mclosetime()">MEN</a>
                                    <div id="m3" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">
                                        <a href="../men/activewear/activewear.php">Activewear</a>

                                        <a href="../men/fineapparel/fineapparel.php">Fine Apparel</a>
                                        <a href="#">Footwear</a>
                                        <a href="#">Accessories</a>
                                    </div>
                                </li>
                                <li><a href="#" onmouseover="mopen('m4')" onmouseout="mclosetime()">JEWELRY</a>
                                    <div id="m4" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">

                                        <a href="#">Anniversary</a>
                                        <a href="#">Broaches</a>
                                        <a href="#">Forgive Me</a>
                                        <a href="#">Necklaces</a>
                                        <a href="#">Rings</a>
                                        <a href="#">Watches</a>
                                    </div>

                                </li>
                                <li><a href="#" onmouseover="mopen('m5')" onmouseout="mclosetime()">HOME</a>
                                    <div id="m5" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">
                                        <a href="#">Artwork</a>
                                        <a href="#">Bed & Bath</a>
                                        <a href="#">Chotskies</a>
                                        <a href="#">Floor Clocks</a>

                                        <a href="#">Furniture</a>
                                        <a href="#">Gourmet Food</a>
                                        <a href="#">Home Scents</a>
                                        <a href="#">Kitchen</a>
                                        <a href="#">Lighting</a>
                                        <a href="#">Patio & Garden</a>
                                        <a href="#">Wall Decor</a>

                                    </div>
                                </li>
                                <li>
                                    <a href="#" onmouseover="mopen('m6')" onmouseout="mclosetime()">CHILDREN</a>
                                    <div id="m6" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">
                                        <a href="#">Accessories</a>
                                        <a href="#">Apparel</a>
                                        <a href="#">Bed & Bath</a>
                                        <a href="#">Shoes</a>

                                        <a href="#">Toys</a>
                                    </div>
                                </li>
                                <li><a href="#" onmouseover="mopen('m7')" onmouseout="mclosetime()">ELECTRONICS</a>
                                    <div id="m7" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">
                                        <a href="#">Audio</a>
                                        <a href="#">Cameras</a>
                                        <a href="#">Computers</a>
                                        <a href="#">Gadgets</a>

                                        <a href="#">Home Appliance</a>
                                        <a href="#">Home Theater</a>
                                        <a href="#">TV & Video</a>
                                    </div>
                                    <li>
                                        <a href="../company/company.php" onmouseover="mopen('m8')" onmouseout="mclosetime()">COMPANY</a>
                                        <div id="m8" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">
                                            <a href="../company/chargecard_application1.php">GC Charge Card</a>
                                            <a href="../company/travel1.php">GC Travel</a>
                                            <a href="../company/newsletter1.php">GC Newsletter</a>
                                            <a href="../company/activation.php">Activation</a>
                                            <a href="../company/courselinks.php">Course Links</a>
                                        </div>
                                    </li>
                                </li>
                            </ul>

                            <!--Menu End-->
                        </div>
                    </div>

                    <br clear="all">
                </tr>
            </table>
            <!--end top nav-->

            <!---------------------->
            <!--start page content-->
            <!---------------------->

            <br />
            <table border="0" height="250" width="800" style="margin-left:20px;">

                <span style="font: 30px Verdana bold;color:#F05A28;margin-left:20px;">CONFIRM YOUR PURCHASE</span>

                <!---Form Start--->
                <td valign="top">

                    <div style="width:800px;">

                        <p>
                            <span style="font: 24px Verdana;color:#F05A28;">TOTALS:</span>
                            <span style="font: 20px Verdana;color:#cc9900;" class="simpleCart_total"></span> (<span class="simpleCart_quantity"></span> items) <span class="empty"><a href="javascript:;" class="simpleCart_empty">Empty Basket</a></span>
                            <br />
                        </p>

                        <div class="cartHeaders">
                            <div class="simpleCart_items">
                            </div>
                        </div>
                    </div>

                </td>
                <tr>
                    <td>
                        <form action="confirmreceipt4.php">
                            <input type="submit" value="PURCHASE" class="button">
                        </form>
                    </td>
                </tr>


                </td>
                </tr>
            </table>
            </td>

            </table>

            <!---Form End--->

        </div>

        <!--start footer-->
        <span class="footer">
        </span>
    </div>
    <!--End footer-->

	<?php include '../footer.php';?>

</body>

</html>