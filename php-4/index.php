<?php 
    date_default_timezone_set('Asia/Tokyo');
    $now_hour = (int)date("G");
    
    $name = "名無し";
    if (array_key_exists('target_name', $_POST)) {
        $name = $_POST['target_name'];
    }
    
    function greeting($hour) {
        $result = "";
        
        if (6 <= $hour && $hour < 12) {
            $result = "おはよう";
        }
        elseif (12 <= $hour && $hour < 18) {
            $result = "こんにちは";
        }
        else {
            $result = "こんばんは";
        }
        
        return $result;
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>タイトル</title>
    </head>
    <body>
        <form action="index.php" method="POST">
            <label>名前：<input type="text" name="target_name" required></label>
            <input type="submit" value="送信">
        </form>
        <p>今は<?php print $now_hour; ?>時です。</p>
        <p><?php print greeting($now_hour); ?>、<?php print htmlspecialchars($name, ENT_QUOTES, "UTF-8"); ?>さん</p>
    </body>
</html>

