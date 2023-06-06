<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel='stylesheet' href='assets/stylesheet/application.css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>3D radionica</title>
</head>
<body>
  <?php 
    include_once 'view/partials/header.php';
    include_once 'view/partials/main_nav.php';
    include_once 'view/partials/banner.php';
  ?>
  <div class="search">
    <?php  include_once 'view/partials/search.php'; ?>
  </div>
  <div class="main-content">
    <div class="sidebar">
      <?php include_once 'view/partials/sidebar.php'; ?>
    </div>
    <div class="products">
      <?php include_once 'view/partials/products.php'; ?>
    </div>
  </div>
  <div class="footer">
      <?php include_once 'view/partials/footer.php'; ?>
  </div>
</body>
</html>