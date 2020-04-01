
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

    <form action="display_result.php" method="POST">
        <div id="data">
            <label>Investment Amount:</label>
            <input type="text" name="investment" value="0"/><br/>

            <label>Yearly Interest Rate:</label>
            <input type="text" name="rate" value="0"/><br/>

            <label>Number of Years:</label>
            <input type="text" name="years" value="0"/>
        </div>
        <div id="buttons">
            <label>&nbsp;</label>
            <input type="submit" name="submit" value="Calculate"/><br/>
        </div>
    </form>
</div>
</body>
</html>