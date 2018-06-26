<?php
    ob_start();
    session_start();
   
    include_once "./ketnoi.php";

    if(isset($_POST["submit"]))
    {
        $email = $_POST["email"];
        $mk = $_POST["mk"];
        if(isset($email) && isset($mk)){
            $sql = "SELECT *FROM thanhvien WHERE email ='$email' and mat_khau = '$mk' ";
            $query = mysqli_query($con,$sql);
            $rows = mysqli_fetch_array($query);
            if($rows > 0)
            {
                $_SESSION["email"]= $email;
                $_SESSION["mk"]= $mk ;
                header('location: quantri.php');
            }
            else
            {
                echo '<center class ="alert alert-danger"> tai khoan khong ton tai </center>';
            }
        }
        
    }
   

?>







<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Vietpro Mobile Shop</title>

        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/datepicker3.css" rel="stylesheet">
        <link href="css/styles.css" rel="stylesheet">

        <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->

    </head>

    <body>

        <div class="row">
            <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">Đăng nhập hệ thống quản trị</div>
                    <div class="panel-body">
                        <?php
                            if( ! isset($_SESSION["ema  il"]) ) {
                        ?>
                        <form method="post" role="form">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Tài khoản E-mail" name="email" type="email" autofocus="" required="">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Mật khẩu" name="mk" type="password" required="">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="check" type="checkbox" value="Remember Me">Ghi nhớ
                                    </label>
                                </div>
                                <br/>
                                <input type="submit" name="submit" value="Đăng nhập" class="btn btn-primary">
                                <input type="reset" name="resset" value="Làm mới" class="btn btn-primary" />							
                            </fieldset>
                        </form>
                        <?php
                            }
                            else
                            {
                                header('location: quantri.php');
                            }
                        ?>
                    </div>
                </div>
            </div><!-- /.col-->
        </div><!-- /.row -->	



        <script src="js/jquery-1.11.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/chart.min.js"></script>
        <script src="js/chart-data.js"></script>
        <script src="js/easypiechart.js"></script>
        <script src="js/easypiechart-data.js"></script>
        <script src="js/bootstrap-datepicker.js"></script>
        <script>
            !function ($) {
                $(document).on("click", "ul.nav li.parent > a > span.icon", function () {
                    $(this).find('em:first').toggleClass("glyphicon-minus");
                });
                $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
            }(window.jQuery);

            $(window).on('resize', function () {
                if ($(window).width() > 768)
                    $('#sidebar-collapse').collapse('show')
            })
            $(window).on('resize', function () {
                if ($(window).width() <= 767)
                    $('#sidebar-collapse').collapse('hide')
            })
        </script>	
    </body>

</html>
