<?php require_once('config.php'); ?>
<!DOCTYPE html>
<html lang="en">
<body>
<?php $page = isset($_GET['p']) ? $_GET['p'] : 'home';  ?>
<?php 
    if(!file_exists($page.".php") && !is_dir($page)){
        include '404.html';
    }else{
    if(is_dir($page))
        include $page.'admin/index.php';
    else
        include $page.'.php'; 
    }
?>
  <script>
        start_loader();
        $(function(){
          end_loader()
        })
    </script>
</body>
</html>