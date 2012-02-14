<?php include("../GLOBALS"); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php echo $sitename; ?> Yönetim Paneli</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le styles -->
    <link href="../bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
      }
    </style>

  </head>

  <body>
  
  <div class="container">
	<form>
	<fieldset>
	<legend><?php echo $sitename; ?> Yönetim Paneli Girişi</legend>
	<div class="clearfix">
            <div class="input">
              <input class="xlarge" id="xlInput" name="username" size="30" type="text" placeholder='Kullanıcı Adı' />
            </div>
          </div><!-- /clearfix -->
		  
		  <div class="clearfix">
            <div class="input">
              <input class="xlarge" id="xlInput" name="password" size="30" type="password" placeholder='Şifre' />
            </div>
          </div><!-- /clearfix -->
		  
		  <div class="actions">
            <input type="submit" class="btn primary large" value="Gönder">
          </div>
		  
		  
		  </fieldset>
		  </form>
	
	
  
  
  
      <footer>
        <p>&copy; <?php echo $sitename; ?> 2012</p>
      </footer>

  </div>
  
  <?php include('scripts.php'); 

?>

	
	
	
	
	
	
  </body>
</html>
