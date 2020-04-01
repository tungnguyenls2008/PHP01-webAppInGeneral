<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link type="text/css" rel="stylesheet" href="css/style.css"/>
<head>
    <title>Future Value Calculator</title>
</head>
<body>
<div id="content">
    <h1>Future Value Calculator</h1>

    <label>Investment Amount: </label>
    <span><?php
        if (isset($_POST["submit"])){
            echo '$'.$_POST['investment'];
        }
        ?> </span> <br/>

    <label>Yearly Interest Rate: </label>
    <span> <?php
        if (isset($_POST["submit"])){
            echo $_POST['rate'].'%';
        }
        ?> </span> <br/>

    <label>Number of Years: </label>
    <span> <?php
        if (isset($_POST["submit"])){
            echo $_POST['years'];
        }
        ?> </span> <br/>

    <label>Future Value: </label>
    <span> <?php
        if (isset($_POST["submit"])){
            $f=($_POST['investment']+($_POST['investment']*$_POST['rate']))*$_POST['years'];
            echo '$'.$f;
        }
        ?> </span> <br/>
</div>
</body>
</html>
