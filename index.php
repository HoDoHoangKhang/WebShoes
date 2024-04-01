<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tiêu đề ở đây</title>
    <!-- reset css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css"> 
    <!-- icon -->
    <link rel="stylesheet" href="./assets/fonts/fontawesome-free-6.4.0-web/fontawesome-free-6.4.0-web/css/all.min.css"> 
    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;1,100;1,300&display=swap" rel="stylesheet">
    <!-- slick -->
    <link
    rel="stylesheet"
    type="text/css"
    href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"
    />

    <link rel="stylesheet" href="./assets/css/base.css">
    <link rel="stylesheet" href="./assets/css/main.css">

    <!-- font pro -->
    <link rel="stylesheet" href="./assets/fonts/fontawesome.com/releases/v6.4.0/css/all.css">
    <link rel="stylesheet" href="./assets/fonts/fontawesome.com/releases/v6.4.0/css/sharp-light.css">
    <link rel="stylesheet" href="./assets/fonts/fontawesome.com/releases/v6.4.0/css/sharp-regular.css">
    <link rel="stylesheet" href="./assets/fonts/fontawesome.com/releases/v6.4.0/css/sharp-solid.css">


</head>
<body>
        
    <?php require_once 'config/config.php' ?>
    <div class="app">
        <!-- Header -->
        <?php include_once 'pages/header.php' ?>

        <!-- Main -->
        <?php include_once 'pages/main.php' ?>

        <!-- Footer -->
        <?php include_once 'pages/footer.php' ?>

        
    </div>
    

    <!-- Slick -->
    <script
      type="text/javascript"
      src="https://code.jquery.com/jquery-1.11.0.min.js"
    ></script>
    <script
      type="text/javascript"
      src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"
    ></script>
    <script
      type="text/javascript"
      src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"
    ></script>
    <script src="index.js">
        
    </script>
</body>
<div class="menu-mobile">
    <div class="menu-mobile_title">
        <h2>
            Directory
        </h2>
        <i class="fa-solid fa-xmark menu-mobile_title-icon"></i>
    </div>
    <a class="menu_sub-mobile active" href="index.html" >
        Home
    </a>
    <a class="menu_sub-mobile" href="./product.html">
        Products
        <ul class="menu__hover__content-mobile">
            <li>All Men's Shoes</li>
            <li>Basketball</li>
            <li>Running</li>
            <li>Gym</li>
            <li>Football</li>
            <li>Nike</li>
            <li>Adidas</li>
            <li>Jordan</li>
            <li>New Balance</li>
            <li>Vans</li>
            <li>Puma</li>
        </ul>
    </a>
    <a class="menu_sub-mobile active" href="about.html">About</a>
    <a class="menu_sub-mobile active" href="">Contact</a>
    <a class="menu_sub-mobile active" href="">Blog</a>
</div>
</html>

