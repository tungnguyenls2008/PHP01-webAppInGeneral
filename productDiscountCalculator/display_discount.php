
<html>
<head>
    <title>Product Discount Calculator</title>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
<body>
<div id="content">
    <h1>Product Discount Calculator</h1>
    <label>Product Description: </label>
    <span><?php
        if (isset($_POST["submit"])){
            echo $_POST['description'];
        }
        ?></span><br/>
    <label>Price: </label>
    <span><?php
        if (isset($_POST["submit"])){
            echo '$'.$_POST['price'];
        }
        ?></span><br/>
    <label>Discount Percent: </label>
    <span><?php
        if (isset($_POST["submit"])){
            echo $_POST['discount_percent'];
        }
        ?>%</span><br/>
    <label>Discount Amount: </label>
    <span><?php
        if (isset($_POST["submit"])){
            echo '$'.($_POST['price']*($_POST['discount_percent']*10/100)*0.1);
        }
        ?></span><br/>
    <label>Discount Price: </label>
    <span><?php
        if (isset($_POST["submit"])){
            echo '$'.($_POST['price']-(($_POST['price']*$_POST['discount_percent']*10/100)*0.1));
        }
        ?></span><br/>
</div>
</body>
</html>