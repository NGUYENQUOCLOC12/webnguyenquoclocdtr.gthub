<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>web trẻ trâu</title>
    <link rel="icon" type="image/png" href="https://upload.wikimedia.org/wikipedia/commons/thumb/4/46/Apple_Store_logo.svg/1200px-Apple_Store_logo.svg.png">
    
    
</head>
<link rel="stylesheet" href="oklaa.css">
<body>
    
    <h1>ĐÂY LÀ WEB CỦA LỘC ĐẸP TRAI</h1>
    <form method="post">
        <button type="submit" name="cainut" id="ok">Hello</button>
        
    </form>

    <div class="okla">
        <ul>
            <li>1</li>
            <li>2</li>
            <li>3</li>
            <li>4</li>
            <li>5</li>
            <div class="bar">
        </ul>
    <?php
    session_start();

    if(isset($_POST['cainut'])){
        if(!isset($_SESSION['show_message'])){
            $_SESSION['show_message'] = true;
            echo "<h2>XIN CHÀO ANH EM</h2>";
        } else {
            unset($_SESSION['show_message']);
            echo"<h2>ĐỊT MẸ ANH EM</h2>";
        }
    }
    
    
    

    
    ?>
</body>

</html>

