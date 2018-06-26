<style type="text/css">
    #abc{
        float: left;
    }
</style>


<script>
    // hiệu ứng đưa chuột vào javascript
    function searchFocus(){
        if(document.sform.stext.value=='Tìm kiếm sản phẩm...'){
            document.sform.stext.value='';
        }
    }
    
    function searchBlur(){
        if(document.sform.stext.value==''){
            document.sform.stext.value='Tìm kiếm sản phẩm...';
        }
    }
</script>

<div id="search" class="col-md-4 col-sm-12 col-xs-12">
    <form method="post" name="sform" action="index.php?page_layout=danhsachtimkiem">
        <input type="submit" name="submit" value="" id="abc">
        <input onfocus="searchFocus();" onblur="searchBlur();" type="text" name="stext" value="Tìm kiếm sản phẩm...">
    </form>
</div>