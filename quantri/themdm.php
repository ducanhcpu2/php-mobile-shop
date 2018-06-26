<?php
    if(isset($_POST["submit"]))
        {
                
            $ten_dm = $_POST["ten_dm"];

            if(isset($ten_dm)){
           // $ten_dm = $_POST["ten_dm"];
            $sql = "SELECT *FROM dmsanpham WHERE ten_dm='$ten_dm' ";
            $query = mysqli_query($con,$sql);
            $rows = mysqli_num_rows($query);
            if($rows <= 0){
                    $sql = "INSERT INTO dmsanpham(ten_dm) VALUES('$ten_dm')";
                    $query = mysqli_query($con,$sql);
                    header('location: quantri.php?page_layout=danhsachdm');
                }
            else{
                    echo "<center class= 'alert alert-danger'> san pham da ton tai </center>";
                }
            }   
            // else
            // {
            //     echo "<center class= 'alert alert-danger'> san pham da ton tai </center>";
            // }
        }
?>
<div class="row">
    <ol class="breadcrumb">
        <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
        <li class="active"></li>
    </ol>
</div><!--/.row-->

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Thêm mới danh mục</h1>
    </div>
</div><!--/.row-->


<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">Thêm mới danh mục</div>
            <div class="panel-body">
                <div class="col-md-12">
                    <form role="form" method="post">

                        <div class="form-group">
                            <label>Tên danh mục</label>
                            <input class="form-control" type="text" required="" name="ten_dm">
                        </div>																					
                        <button type="submit" class="btn btn-primary" name="submit">Thêm mới</button>
                        <button type="reset" class="btn btn-default">Làm mới</button>

                </div>
                </form>
            </div>
        </div>
    </div><!-- /.col-->
</div><!-- /.row -->

                  
    
