<?php


// require "../auth/onlyAdmin.php";

    include "managment.php";

    if (isset($_POST["delete"])) {
        deleteProductById($_POST["delete"]);
    }
    if (isset($_POST["update"])) {

        updateProductById($_POST,$_FILES["image"]);
    }
    if (isset($_POST["create"])) {
        echo "is update";
        // addProduct();
    }
    header("location: dashboard.php");

