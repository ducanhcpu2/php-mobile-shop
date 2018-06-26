<?php
$sql="SELECT * FROM dmsanpham";
$query= mysqli_query($conn, $sql);
?>

<div id="menu-but" type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
</div>
<div id="menu" class="sidebar collapse navbar-collapse">
    <h2 class="h2-bar">danh mục sản phẩm</h2>
    <ul>
        <?php
        while($row= mysqli_fetch_array($query)){
        ?>
        <li><a href="index.php?page_layout=danhsachsp&id_dm=<?php echo $row['id_dm']; ?>"><?php echo $row['ten_dm']; ?></a></li>
        <?php
        }
        ?>
    </ul>
</div>