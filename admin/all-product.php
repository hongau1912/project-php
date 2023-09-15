<meta charset="utf-8">
<?php

require_once('../model/connect.php');
error_reporting(1);

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
    <style>
      
    </style>
</head>

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
                                <li class="active"><a href="../index.php" title="Home">Home</a></li>
                                <li ><a href="all-product.php" title="Service List">Service List</a>
                                    <!-- <ul>
                                        <li><a href="service-list.html" title="Service List">Service List</a></li>
                                        <li><a href="service-detail.html" title="Service Detail">Service Detail</a></li>
                                    </ul> -->
                                </li>
                                <li ><a href="form.php" title="Blog ">Create Service</a>
                                    <!-- <ul>
                                        <li><a href="blog-default.html" title="Blog">Blog Default</a></li>
                                        <li><a href="blog-single.html" title="Blog Single ">Blog Single</a></li>
                                    </ul> -->
                                </li>
                                <li><a href="order-list.php" title="Features">Order List</a>
                                    <!-- <ul>
                                        <li><a href="testimonial.html" title="Service List">Testimonial</a></li>
                                        <li><a href="styleguide.html" title="Service Detail">Style Guide</a></li>
                                    </ul> -->
                                </li>
                                <li><a href="contact.html" title="Contact Us">Contact</a> </li>
                                <a style="font-weight: 600;" href=""> Hi Admin <br> <center><i class="bi bi-person-fill-gear"></i></center>  </a>
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
                        <h2 class="page-title">Service </h2>
                        <div class="page-breadcrumb">
                            <ol class="breadcrumb">
                                <li><a href="index.php">Home</a></li>
                                <li class="active">service </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Ảnh dịch vụ</th>
                        <th scope="col">Tên dịch vụ</th>
                        <th scope="col">Mô tả</th>
                        <th scope="col">Giá</th>
                        <th scope="col">Trạng thái</th>
                        <th scope="col">Chỉnh sửa</th>
                        <th scope="col">Xóa</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $sql = "SELECT * FROM service";
                        $result = mysqli_query($conn,$sql);
                        while($kq = mysqli_fetch_assoc($result)){
                    ?>
                        <tr>
                            <td style="width: 250px;"><img src="../upload/<?php echo $kq['image']; ?>" width =" 230px;" alt=""></td>
                            <td style="width: 150px;"> <?php echo $kq['name']; ?></td>
                            <td style="width: 300px;"> <?php echo $kq['content']; ?></td>
                            <td style="width: 100px;"> <?php echo $kq['price']; ?> K</td>
                            <?php
                                if($kq['is_available']==1){
                                ?>
                                <td><i style="color: greenyellow;" class="bi bi-check-circle-fill"></i></td>
                                <?php } else { ?>
                                    <td><i style="color: red;" class="bi bi-x-circle-fill"></i></td>
                            <?php } ?>
                            <td><a onclick="return confirm('Bạn có chắc chắn muốn cập nhật dịch vụ này không')" href="update-service.php?id=<?php echo $kq['id'] ?>"> <i style="color: blue;" class="bi bi-pencil-square"></i></a></td>
                            <td><a onclick="return confirm('Bạn có chắc chắn muốn xóa dịch vụ này không')" href="delete-service.php?id=<?php echo $kq['id'] ?>"> <i style="color: red;" class="bi bi-trash3-fill"></i></a></td>
                        </tr>
                    <?php } ?>
                    
                </tbody>
            </table>
        </div>
        <div class="container">

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
    <script src="../js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/menumaker.js"></script>
    <script src="../js/jquery.sticky.js"></script>
    <script src="../js/sticky-header.js"></script>
</body>

</html>