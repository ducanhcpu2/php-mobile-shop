<script type="text/javascript">
    function XoaDanhMuc() {
                var conf = confirm("Bạn có muốn xóa danh mục ?");
                return conf;
            }        

</script>


<?php
    // bat dau phan trang
    // kiem tra xem co ton tai bien page hay ko??
    if(isset($_GET['page']))
    {
        $page = $_GET['page'];
    }
    else
    {
        $page = 1; //mac dinh ban dau vao la 1
    };
    //----> thuat toan phan trang <------
    // trang 1 |0->4 | select* from dmsanpham limit 0,5
    // trang 2 |5->9 | select *from dmsanpham limit 5,5 
    // trang 3 |10->14 | select *from dmsanpham limit 10,5 
    // + so dong moi trang = 5
    $RowsPerPage = 5 ;
    // +cong thuc tinh tham so o dau : 
    $PerRows = $page* $RowsPerPage -  $RowsPerPage ;

    $sql  = "SELECT *FROM dmsanpham ORDER BY id_dm ASC LIMIT $PerRows , $RowsPerPage ";
    $query = mysqli_query($con, $sql);
    $totalRows = mysqli_num_rows(mysqli_query($con , "SELECT* FROM dmsanpham" )) ;
    $totalPages = ceil($totalRows/ $RowsPerPage);
    $listPages = "";
    for($i = 1; $i <=  $totalPages ; $i++){
        if($i == $page){ 
            $listPages .= '<li class="active"><a href="quantri.php?page_layout=danhsachdm&page='.$i.' ">'.$i.'</a></li>';
        }
        else{
            $listPages .= '<li><a href="quantri.php?page_layout=danhsachdm&page='.$i.' ">'.$i.'</a></li>' ;
   
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
        <h1 class="page-header">Quản lý danh mục</h1>
    </div>
</div><!--/.row-->


<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">

            <div class="panel-body" style="position: relative;">
                <a href="quantri.php?page_layout=themdm" class="btn btn-primary" style="margin: 10px 0 20px 0; position: absolute;">Thêm danh mục mới</a>
                <table data-toggle="table" data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-sort-name="name" data-sort-order="desc">
                    <thead>
                        <tr>						        
                            <th data-sortable="true">ID</th>
                            <th data-sortable="true">Tên danh mục</th>
                            <th data-sortable="true">Sửa</th>
                            <th data-sortable="true">Xóa</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            while($rows = mysqli_fetch_array($query)) { 
                        ?>
                        <tr>
                            <td data-checkbox="true"><?php echo $rows['id_dm']; ?> </td>
                            <td data-checkbox="true"><a href="quantri.php?page_layout=suadm&id_dm=<?php echo $rows['id_dm'] ; ?> "> <?php echo $rows['ten_dm'] ; ?> </a></td>						        
                            <td>
                                <a href="quantri.php?page_layout=suadm&id_dm=<?php echo $rows['id_dm'] ; ?>"><span><svg class="glyph stroked brush" style="width: 20px;height: 20px;"><use xlink:href="#stroked-brush"/></svg></span></a>
                            </td>

                            <td>
                                <a onclick="return XoaDanhMuc();" href="xoadm.php?id_dm=<?php echo $rows['id_dm'] ; ?>"><span><svg class="glyph stroked cancel" style="width: 20px;height: 20px;"><use xlink:href="#stroked-cancel"/></svg></span></a>
                            </td>
                        </tr>
                        <?php
                            };
                        ?>
                        

                    </tbody>
                </table>
                <ul class="pagination" style="float: right;">
                    <?php
                        echo $listPages ;
                    ?>
                </ul>
            </div>
        </div>
    </div>
</div><!--/.row-->	

