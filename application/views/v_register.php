<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo base_url()?>asset/img/logo/favicon.ico">
   

    <title>regist now | bakulbuku.id</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url().'asset/'?>login_style.css" rel='stylesheet' type='text/css' />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfonts-->
<link href='http://fonts.googleapis.com/css?family=Oxygen:400,300,700|Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
<!--//webfonts-->

  </head>

  <body class="text-center">
    <div class="main">
    <div class="user">
      <img src="<?php echo base_url().'asset/img/' ?>user.png" alt="">
    </div>
    <div class="login">
      <div class="inset">
        
          <?php echo form_open('c_register/regis'); ?>
               <div>
            
            <span><input placeholder="username" type="text" name="username" class="textbox" id="active"></span>
           </div>
            <div>
            
            <span><input placeholder="email" type="text" name="email" class="textbox" ></span>
           </div>
            <div>
            
            <span><input placeholder="no.telpon" type="text" name="tlp" class="textbox"></span>
           </div>
           <div>
           
              <span><input placeholder="password" type="password" name="password" class="password"></span>
           </div>
          <div class="sign">
            <div class="submit">
              <input type="submit" name="submit" onclick="myFunction()" value="Regist now" >
            </div>
            
              <div class="clear"> </div>
          </div>
          </form>
        </div>
      </div>
    
    </div>
    
  

</body></html>

