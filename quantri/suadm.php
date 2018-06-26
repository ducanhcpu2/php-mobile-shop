<?php
    ob_start();
    $id_dm = $_GET['id_dm'];
    $sql = "SELECT *FROM dmsanpham WHERE id_dm=$id_dm ";
    $query = mysqli_query($con,$sql) ;
    $rows = mysqli_fetch_array($query);
    if(isset($_POST['submit'])){
        $ten_dm = $_POST['ten_dm'];
        if(isset($ten_dm))
        {
            $sql = "UPDATE dmsanpham SET ten_dm = '$ten_dm' WHERE id_dm = $id_dm " ;
            $query = mysqli_query($con,$sql);
            header('location: quantri.php?page_layout=danhsachdm'); 
            //echo 'abc';
        }
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
        <h1 class="page-header">Sửa danh mục</h1>
    </div>
</div><!--/.row-->


<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">Sửa danh mục</div>
            <div class="panel-body">
                <div class="col-md-12">
                    <form role="form" method="post">

                        <div class="form-group">
                            <label>Tên danh mục</label>
                            <input class="form-control" type="text" name="ten_dm" value="<?php echo $rows['ten_dm'] ; ?> " required="">
                        </div>														
                        <button type="submit" class="btn btn-primary" name="submit">Sửa</button>
                        <button type="reset" class="btn btn-default">Làm mới</button>

                </div>
                </form>
            </div>
        </div>
    </div><!-- /.col-->
</div><!-- /.row -->
