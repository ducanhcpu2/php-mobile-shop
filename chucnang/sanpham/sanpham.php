<?php
include_once './cauhinh/ketnoi.php';
$sql="SELECT * FROM sanpham WHERE dac_biet=1 ORDER BY id_sp DESC LIMIT 8";
$query= mysqli_query($conn, $sql);
?>
<div class="products">
    <h2 class="h2-bar">sản phẩm đặc biệt</h2>
    <div class="row">
        <?php
        while($row= mysqli_fetch_array($query)){
        ?>
        <div class="col-md-3 col-sm-6 product-item text-center">
            <a href="index.php?page_layout=chitietsp&id_sp=<?php echo $row['id_sp']; ?>"><img width="80" height="144" src="quantri/anh/<?php echo $row['anh_sp']; ?>"></a>
            <h3><a href="index.php?page_layout=chitietsp&id_sp=<?php echo $row['id_sp']; ?>"><?php echo $row['ten_sp']; ?></a></h3>
            <p>Bảo hành: <?php echo $row['bao_hanh']; ?></p>
            <p>Tình trạng: <?php echo $row['tinh_trang']; ?></p>
            <p class="price">Giá: <?php echo $row['gia_sp']; ?> VNĐ</p>
        </div>   
        <?php
        }
        ?>
    </div>
</div>
<?php
$sql2="SELECT * FROM sanpham ORDER BY id_sp DESC LIMIT 8";
$query2= mysqli_query($conn, $sql2);
?>
<div class="products">
    <h2 class="h2-bar">sản phẩm mới</h2>
    <div class="row">
        <?php
        while($row2=mysqli_fetch_array($query2)){
        ?>
        <div class="col-md-3 col-sm-6 product-item text-center">
            <a href="index.php?page_layout=chitietsp&id_sp=<?php echo $row2['id_sp']; ?>"><img width="80" height="144" src="quantri/anh/<?php echo $row2['anh_sp']; ?>"></a>
            <h3><a href="index.php?page_layout=chitietsp&id_sp=<?php echo $row2['id_sp']; ?>"><?php echo $row2['ten_sp']; ?></a></h3>
            <p>Bảo hành: <?php echo $row2['bao_hanh']; ?></p>
            <p>Tình trạng: <?php echo $row2['tinh_trang']; ?></p>
            <p class="price">Giá: <?php echo $row2['gia_sp']; ?> VNĐ</p>
        </div>
        <?php
        }
        ?>
    </div>
</div>