{"filter":false,"title":"sample.php","tooltip":"/kadai-commit/sample.php","undoManager":{"mark":4,"position":4,"stack":[[{"start":{"row":0,"column":0},"end":{"row":13,"column":7},"action":"insert","lines":["<!DOCTYPE html>","<html lang=\"ja\">","    <head>","        <meta charset=\"UTF-8\">","        <title>おみくじ</title>","    </head>","    <body>","        <h1>おみくじ</h1>","        <p>おみくじの結果：無し</p>","        <form action=\"sample.php\" method=\"POST\">","            <button type=\"submit\" name=\"act\" value=\"draw\">おみくじをひく！</button>","        </form>","    </body>","</html>"],"id":5}],[{"start":{"row":0,"column":0},"end":{"row":1,"column":0},"action":"insert","lines":["",""],"id":6}],[{"start":{"row":0,"column":0},"end":{"row":2,"column":2},"action":"insert","lines":["<?php","    $result = '無し';","?>"],"id":7}],[{"start":{"row":11,"column":19},"end":{"row":11,"column":21},"action":"remove","lines":["無し"],"id":8},{"start":{"row":11,"column":19},"end":{"row":11,"column":81},"action":"insert","lines":["<?php print htmlspecialchars($result, ENT_QUOTES, \"UTF-8\"); ?>"]}],[{"start":{"row":0,"column":0},"end":{"row":2,"column":2},"action":"remove","lines":["<?php","    $result = '無し';","?>"],"id":9},{"start":{"row":0,"column":0},"end":{"row":10,"column":2},"action":"insert","lines":["<?php","    $result = '無し';","    if (array_key_exists('act', $_POST)) {","        $result = omikuji();","    }","    ","    function omikuji() {","        $fortune = [\"大吉\", \"吉\", \"中吉\", \"小吉\", \"末吉\", \"凶\"];","        return $fortune[random_int(0, count($fortune) - 1)];","    }","?>"]}]]},"ace":{"folds":[],"scrolltop":60,"scrollleft":0,"selection":{"start":{"row":16,"column":11},"end":{"row":16,"column":11},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":3,"state":"php-start","mode":"ace/mode/php"}},"timestamp":1560155286957,"hash":"a5494fba78c8fa993a22959ec58a8ae523bfd971"}