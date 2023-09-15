<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Hair salon templates for mens hair cut service provider.">
    <meta name="keywords" content="hair salon website templates free download, html5 template, free responsive website templates, website layout,html5 website templates, template for website design, beauty HTML5 templates, cosmetics website templates free download">
    <title>Men Salon | Hair Salon Website Templates Free Download</title>
    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i%7cMontserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../css/font-awesome.min.css" rel="stylesheet">
    <!-- Style -->
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/booking-confirm.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<style>
    .container-card {
        width: 450px;
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 20px;
    }

    .card-body {
        /* width: 300px;
            height: 200px; */
        border: 1px solid burlywood;
        border-radius: 0px 0px 5px 5px;
    }
    .btn-choose {
            width: 450px;
            border: 1px solid burlywood;
            padding: 10px 0px;
            border-radius: 5px;
            margin-top: 30px;
    }
    .form-control{
        margin-top: 40px;
    }
    .hide{
        display: block;
    }
</style>

<body>
    <div class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <a href="index.php"><img src="images/logo.png" alt=""></a>
                </div>
                <div class="col-lg-8 col-md-4 col-sm-12 col-xs-12">
                    <div class="navigation">
                        <div id="navigation">
                            <ul>
                                <li class="active"><a href="index.html" title="Home">Home</a></li>
                                <li class="has-sub"><a href="service-list.html" title="Service List">Service List</a>
                                    <ul>
                                        <li><a href="service-list.html" title="Service List">Service List</a></li>
                                        <li><a href="service-detail.html" title="Service Detail">Service Detail</a></li>
                                    </ul>
                                </li>
                                <li class="has-sub"><a href="blog-default.html" title="Blog ">News</a>
                                    <ul>
                                        <li><a href="blog-default.html" title="Blog">Blog Default</a></li>
                                        <li><a href="blog-single.html" title="Blog Single ">Blog Single</a></li>
                                    </ul>
                                </li>
                                <li><a href="#" title="Features">Features</a>
                                    <ul>
                                        <li><a href="testimonial.html" title="Service List">Testimonial</a></li>
                                        <li><a href="styleguide.html" title="Service Detail">Style Guide</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.html" title="Contact Us">Contact</a> </li>
                                <li><a href="styleguide.html" title="Styleguide">styleguide</a> </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="page-caption">
                        <h2 class="page-title">booking confirm</h2>
                        <div class="page-breadcrumb">
                            <ol class="breadcrumb">
                                <li><a href="index.php">Home</a></li>
                                <li class="active">booking confirm</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
        require_once('../model/connect.php');
        $id = $_GET['id'];
        $sql = "SELECT * FROM booking WHERE id = $id";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
    ?>
    <div class="content-confirm">
        <div class="content-check">
            <h2>ĐẶT LỊCH TẠI MAN HAIR SALON</h2>
            <p>Chào <strong><?php echo $row["name"] ?></strong></p>
            <p>Tóm tắt nội dung lịch đặt chỗ của bạn:</p>
            <div class="confirm-dis">
                <div>Thông tin</div>
                <div><?php echo $row["phone_number"] ?> | <?php echo $row["gmail"] ?></div>
            </div>
            <div class="confirm-dis">
                <div>Ngày giờ đặt</div>
                <div><?php echo $row["date_booking"] ?> | <?php echo $row["time_booking"] ?></div>
            </div>
            <div class="confirm-dis">
                <div>Dịch vụ sử dụng</div>
                <div>
                    <?php
                        $sql_booking = "SELECT * FROM booking_service WHERE id_booking = $id";
                        $result = mysqli_query($conn, $sql_booking);
                        while($row_booking = mysqli_fetch_assoc($result)) {
                            $select_service = $row_booking["id_service"];
                            $sql_service = "SELECT * FROM service WHERE id = $select_service";
                            $result_service = mysqli_query($conn, $sql_service);
                            $row_service = mysqli_fetch_assoc($result_service);
                            echo ''.$row_service["name"].'<br>';
                        }
                    ?>
                </div>
            </div>
            <div class="confirm-dis">
                <div><strong>Total amount</strong></div>
                <div>
                    <?php
                        $sql_booking = "SELECT * FROM booking_service WHERE id_booking = $id";
                        $result = mysqli_query($conn, $sql_booking);
                        $total = 0;
                        while($row_booking = mysqli_fetch_assoc($result)) {
                            $select_service = $row_booking["id_service"];
                            $sql_service = "SELECT * FROM service WHERE id = $select_service";
                            $result_service = mysqli_query($conn, $sql_service);
                            $row_service = mysqli_fetch_assoc($result_service);
                            $total += $row_service["price"]; 
                        }
                        echo ''.$total.'K';
                    ?>
                </div>
            </div>
            <div style="padding: 30px 0px;">
                <p style="margin: 0px;">Cảm ơn bạn đã đặt lịch để sử dụng các dịch vụ của chúng tôi.</p>
                <p>Rất mong được đón tiếp và phục vụ bạn tại <strong>MAN HAIR SALON</strong></p>
            </div>
            <div class="check-confirm">
                <a id="singlebutton" class="btn btn-default" href="./thank-you-for-booking.php?id=<?php echo $row["id"] ?>">XÁC NHẬN</a>
                <a style="background-color: black;" id="singlebutton" class="btn btn-default" href="./booking-update.php?id=<?php echo $row["id"] ?>">CẬP NHẬT</a>
            </div>
        </div>
    </div>
    <div class="footer">
        <!-- footer-->
        <div class="container">
            <div class="footer-block">
                <!-- footer block -->
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="footer-widget">
                            <h2 class="widget-title">Salon Address</h2>
                            <ul class="listnone contact">
                                <li><i class="fa fa-map-marker"></i> 4958 Norman Street Los Angeles, CA 90042 </li>
                                <li><i class="fa fa-phone"></i> +00 (800) 123-4567</li>
                                <li><i class="fa fa-fax"></i> +00 (123) 456 7890</li>
                                <li><i class="fa fa-envelope-o"></i> info@salon.com</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="footer-widget footer-social">
                            <!-- social block -->
                            <h2 class="widget-title">Social Feed</h2>
                            <ul class="listnone">
                                <li>
                                    <a href="#"> <i class="fa fa-facebook"></i> Facebook </a>
                                </li>
                                <li><a href="#"><i class="fa fa-twitter"></i> Twitter</a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i> Google Plus</a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i> Linked In</a></li>
                                <li>
                                    <a href="#"> <i class="fa fa-youtube"></i>Youtube</a>
                                </li>
                            </ul>
                        </div>
                        <!-- /.social block -->
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                        <div class="footer-widget widget-newsletter">
                            <!-- newsletter block -->
                            <h2 class="widget-title">Newsletters</h2>
                            <p>Enter your email address to receive new patient information and other useful information right to your inbox.</p>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Email Address">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">Subscribe</button>
                                </span>
                            </div>
                            <!-- /input-group -->
                        </div>
                        <!-- newsletter block -->
                    </div>
                </div>
                <div class="tiny-footer">
                    <!-- tiny footer block -->
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="copyright-content">
                                <p>© Men Salon 2020 | all rights reserved</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.tiny footer block -->
            </div>
            <!-- /.footer block -->
        </div>
    </div>
    <!-- /.footer-->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/menumaker.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/sticky-header.js"></script>
</body>

</html>