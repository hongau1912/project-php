<?php
require_once('../model/connect.php');

?>
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i%7cMontserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../css/font-awesome.min.css" rel="stylesheet">
    <!-- Style -->
    <link href="../css/style.css" rel="stylesheet">
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

    .form-control {
        margin-top: 40px;
    }

    .hide {
        display: block;
    }

    .box_time_item {
        background: #fff;
        border: 1px solid #000;
        border-radius: 4px;
        padding-top: 10px;
        padding-bottom: 10px;
        text-align: center;
        margin-bottom: 8px;
        cursor: pointer;
        color: #000;
        font-weight: 900;
    }

    .all-box-time {
        display: grid;
        grid-template-columns: repeat(5, 1fr);
        gap: 10px;
    }

    .selected {
        background-color: #AA9144;
    }

    .side-bar {
        height: 600px;
        overflow-x: hidden;
        overflow-y: scroll;
        position: sticky;
        top: 0;
    }

    .timezone {
        background-color: #E8E8E8;
        border: 1px solid #D1D1D1;
        cursor: not-allowed;
        border-radius: 4px;
        padding-top: 10px;
        padding-bottom: 10px;
        text-align: center;
        margin-bottom: 8px;
    }
</style>

<body>
    <div class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <a href="../index.php"><img src="../images/logo.png" alt=""></a>
                </div>
                <div class="col-lg-8 col-md-4 col-sm-12 col-xs-12">
                    <div class="navigation">
                        <div id="navigation">
                            <ul>
                                <li class="active"><a href="index.php" title="Home">Home</a></li>
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
                        <h2 class="page-title">Booking</h2>
                        <div class="page-breadcrumb">
                            <ol class="breadcrumb">
                                <li><a href="../index.php">Home</a></li>
                                <li class="active">Booking</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="side-bar col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="widget widget-contact">
                        <!-- widget search -->
                        <h3 class="widget-title">Contact Info</h3>
                        <address>
                            <strong>Flower.</strong>
                            <br> 1355 Market Street, Suite 900
                            <br> San Francisco, CA 94103
                            <br> Phone: (123) 456-7890
                        </address>
                        <address>
                            <strong>Contact Name</strong>
                            <br>
                            <a href="mailto:#">yourdomain@gmail.com</a>
                        </address>
                    </div>
                    <!-- /.widget search -->
                    <div class="widget widget-social">
                        <div class="social-circle">
                            <a href="#" class="#"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="#"><i class="fa fa-google-plus"></i></a>
                            <a href="#" class="#"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="#"><i class="fa fa-youtube-play"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h1>Booking Form</h1>
                            <p> Chào mừng bạn đến với hệ thống đặt lịch cắt tóc của <strong>MAN HAIR SALON</strong>. Hãy chọn thời gian mà bạn muốn đến với chúng tôi !</p>
                            <form action="./booking-back.php?phone=<?php echo $_GET['phone'] ?>" method="POST">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label class="control-label">name</label>
                                        <input type="text" name="name" class="form-control" required>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="control-label">gmail</label>
                                        <input type="gmail" name="gmail" class="form-control" required>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="control-label">date</label>
                                        <input id="date" type="date" name="date" class="form-control" onkeyup="getValue()" required>
                                    </div>

                                    <input type="hidden" name="time" id="time">
                                </div>
                                <label class="control-label">Time</label>

                                <div class="all-box-time" id="card">


                                </div>
                                <div>
                                    <label class="control-label">dịch vụ</label> <br>
                                    <input required id="btn-service" class="form-control " type="button" value="Xem tất cả các dịch vụ hấp dẫn">
                                </div>
                                <center>
                                    <div id="service" class="hide container-card">
                                        <?php
                                        $sql = "SELECT * FROM service";
                                        $result = mysqli_query($conn, $sql);
                                        while ($kq = mysqli_fetch_assoc($result)) {
                                            if ($kq['is_available'] == 0) {
                                        ?>
                                                <div class="card" style="cursor:no-drop;">
                                                    <img src="../upload/<?php echo $kq['image']; ?>" class="card-img-top" alt="..." width=>
                                                    <div class="card-body">
                                                        <h4 style="height: 40px;" class="card-title"> <?php echo $kq['name']; ?></h4>
                                                        <p style="height: 100px;" class="card-text"><?php echo $kq['content']; ?></p>
                                                        <h4> <?php echo $kq['price']; ?> K</h4>
                                                        <!-- <div class="btn-choose" style="cursor: pointer;">Chọn</div> -->
                                                        <i>
                                                            <p style="color:red">Dịch vụ tạm dừng</p>
                                                        </i>
                                                    </div>
                                                </div>
                                            <?php } else {

                                            ?>
                                                <div class="card">
                                                    <img src="../upload/<?php echo $kq['image']; ?>" class="card-img-top" alt="..." width=>
                                                    <div class="card-body">
                                                        <h4 style="height: 40px;" class="card-title"> <?php echo $kq['name']; ?></h4>
                                                        <p style="height: 100px;" class="card-text"><?php echo $kq['content']; ?></p>
                                                        <h4> <?php echo $kq['price']; ?> K</h4>
                                                        <!-- <div class="btn-choose" style="cursor: pointer;">Chọn</div> -->
                                                        <input type="checkbox" id="vehicle1" name="data[]" value="<?php echo $kq['id']; ?>">
                                                        <label for="vehicle1"> chọn</label><br>
                                                    </div>
                                                </div>

                                        <?php }
                                        } ?>
                                    </div>
                                </center>
                                <input class="btn btn-default form-control" type="submit" name="submit" value="Đặt lịch cắt">


                            </form>

                        </div>
                    </div>
                </div>
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
    <script src="../js/booking.js"></script>
    <script>
        const btn_service = document.querySelector('#btn-service');
        const service = document.querySelector('#service');
        btn_service.addEventListener('click', () => {
            service.classList.toggle('hide');
        })

        function getInnerText(gio) {

            const time = gio;
            document.getElementById('time').value = time;
        }


        // const hourBoxes = document.querySelectorAll('.box_time_item');
        // hourBoxes.forEach(box => {
        //     box.addEventListener('click', () => {
        //         // Remove the 'selected' class from all hour boxes
        //         console.log("helle");
        //         hourBoxes.forEach(box => {
        //             box.classList.remove('selected');
        //         });

        //         // Add the 'selected' class to the clicked hour box
        //         box.classList.add('selected');
        //     })
        // })
       
    </script>
</body>

</html>