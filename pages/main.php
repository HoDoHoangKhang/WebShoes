<?php
    if(isset($_GET["danhmuc"])){
        switch ($_GET["danhmuc"]) {
            case 'about':
                include_once 'pages/main/about.php';
                break;
            case 'products':
                include_once 'pages/main/products.php';
                break;
            case 'contact':
                include_once 'pages/main/contact.php';
                break;
            case 'blog':
                include_once 'pages/main/blog.php';
                break;
            case 'shell':
                include_once 'pages/main/shell.php';
                break;
            default:
                include_once 'pages/main/home.php';
                break;
            
            case 'product-detail':
                include_once 'pages/main/product-detail.php';
                break;
        }
    }
    else{
        include_once 'pages/main/home.php';
    }
?>

