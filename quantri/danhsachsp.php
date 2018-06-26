<script>
    function xoaSanPham(){
        var conf=confirm("Bạn có chắc chắn muốn xóa sản phẩm này hay không?");
        return conf;
    }
</script>

<?php
    if(isset($_GET['page'])){
        $page=$_GET['page'];
    }
    else{
        $page=1;
    }

    $rowsPerPage=5;
    $perRow=$page*$rowsPerPage-$rowsPerPage;

    $sql = "SELECT *FROM sanpham INNER JOIN dmsanpham ON sanpham.id_dm = dmsanpham.id_dm  ORDER BY id_sp DESC  LIMIT $perRow,$rowsPerPage ";
    $query = mysqli_query($con, $sql);

    $totalRows= mysqli_num_rows(mysqli_query($con, "SELECT * FROM sanpham"));
    $totalPages= ceil($totalRows/$rowsPerPage);

    $listPage="";
    for($i=1;$i<=$totalPages;$i++){
        if($page==$i){
            $listPage.='<li class="active"><a href="quantri.php?page_layout=danhsachsp&page='.$i.'">'.$i.'</a></li>';
        }
        else{
            $listPage.='<li><a href="quantri.php?page_layout=danhsachsp&page='.$i.'">'.$i.'</a></li>';
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
        <h1 class="page-header">Quản lý sản phẩm</h1>
    </div>
</div><!--/.row-->


<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">					
            <div class="panel-body" style="position: relative;">
                <a href="quantri.php?page_layout=themsp" class="btn btn-primary" style="margin: 10px 0 20px 0; position: absolute;">Thêm sản phẩm mới</a>				
                <table data-toggle="table" data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-sort-name="name" data-sort-order="desc">
                    <thead>
                        <tr>						        
                            <th data-sortable="true">ID</th>
                            <th data-sortable="true">Tên sản phẩm</th>
                            <th data-sortable="true">Giá</th>
                            <th data-sortable="true">Nhà cung cấp</th>
                            <th data-sortable="true">Ảnh mô tả</th>
                            <th data-sortable="true">Sửa</th>
                            <th data-sortable="true">Xóa</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            while($row = mysqli_fetch_array($query)) { 
                        ?>
                        <tr style="height: 300px;">
                            <td data-checkbox="true"><?php echo $row['id_sp'];  ?> </td>
                            <td data-checkbox="true"><a href="quantri.php?page_layout=suasp"><?php echo $row['ten_sp'];  ?></a></td>
                            <td data-checkbox="true"><?php echo $row['gia_sp'];  ?></td>
                            <td data-sortable="true"><?php echo $row['ten_dm'];  ?></td>
                            <td data-sortable="true">
                                <span class="thumb"><img width="80px" height="150px" src="anh/<?php echo $row['anh_sp'];  ?>" /></span>

                            </td>						        
                            <td>
                                <a href="quantri.php?page_layout=suasp&id_sp=<?php echo $row['id_sp']; ?>"><span><svg class="glyph stroked brush" style="width: 20px;height: 20px;"><use xlink:href="#stroked-brush"/></svg></span></a>
                            </td>

                            <td>
                                <a onclick="return xoaSanPham();" href="xoasp.php?id_sp=<?php echo $row['id_sp']; ?>"><span><svg class="glyph stroked cancel" style="width: 20px;height: 20px;"><use xlink:href="#stroked-cancel"/></svg></span></a>
                            </td>
                        </tr>
                        <?php
                            } ;
                        ?>                       
                    </tbody>
                </table>
                <ul class="pagination" style="float: right;">
                    <?php 
                        echo $listPage;
                    ?>
                </ul>
            </div>
        </div>
    </div>
</div><!--/.row-->	
