<?php include('header.php'); ?>
<script type="text/javascript" src="./tinymce/jscripts/tiny_mce/tiny_mce.js" ></script >
<script type="text/javascript" >
tinyMCE.init({
        mode : "textareas",
        theme : "simple"   //(n.b. no trailing comma, this will be critical as you experiment later)
});
</script >
<div class="container-fluid">


<form>  
<div class="clearfix">
<input class="xlInput" name="title" placeholder="Başlık"></input>
</div>


<div class="clearfix">
<textarea name="content" cols="200" rows="15" ></textarea>
</div>

<div class="actions">
<button class="btn large danger" type="submit">Yayınla</button>&nbsp;
<button class="btn large primary" type="submit">Kaydet</button>
</div>
		
</form>


</div>

<?php include("footer.php"); ?>