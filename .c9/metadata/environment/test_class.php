{"changed":true,"filter":false,"title":"test_class.php","tooltip":"/test_class.php","value":"<?php\n\nnamespace TechAcademy\\RPG\\Characters;\n\nclass Character {\n    public static $type = '';\n    public $suffix = '';\n    public $hp = 1;\n    public $power = 1;\n    \n    function __construct($hp, $power, $suffix = '') {\n        $this->hp = $hp;\n        $this->power = $power;\n        $this->suffix = $suffix;\n    }\n    \n    function name() {\n        return $this::$type . $this->suffix;\n    }\n    \n    function attack($character) {\n        print $this->name(). 'が' .$character->name(). 'を攻撃して' . $this->power . 'ポイントのダメージを与えた' . PHP_EOL;\n        \n        $character->hp = $character->hp - $this->power;\n        \n        if ($character->hp <= 0) {\n            $this->defeat($character);\n        }\n    }\n    \n    function defeat($character) {\n        print $this->name() . 'は' . $character->name() . 'を倒した！' . PHP_EOL;\n    }\n    \n    static function description() {\n        print 'このゲームのキャラクターです' . PHP_EOL;\n    }\n}\n\nclass Slime extends Character {\n    public static $type = 'スライム';\n    \n    static function description() {\n        print self::$type . 'は、最弱のモンスターだ！' . PHP_EOL;\n    }\n}\n\nclass Hero extends Character {\n    public static $type = '主人公';\n    \n    static function description() {\n        print self::$type . 'は、この世界を守る勇者だ！' . PHP_EOL;\n    }\n}\n\nSlime::description();\nHero::description();\n\n$slime_A = new Slime(10, 3, 'A');\n$hero = new Hero(0, 0);\n\n$slime_A->attack($hero);\n$hero->attack($slime_A);\n\n","undoManager":{"mark":72,"position":100,"stack":[[{"start":{"row":53,"column":21},"end":{"row":54,"column":0},"action":"insert","lines":["",""],"id":1085},{"start":{"row":54,"column":0},"end":{"row":54,"column":1},"action":"insert","lines":["H"]},{"start":{"row":54,"column":1},"end":{"row":54,"column":2},"action":"insert","lines":["e"]},{"start":{"row":54,"column":2},"end":{"row":54,"column":3},"action":"insert","lines":["r"]}],[{"start":{"row":54,"column":3},"end":{"row":54,"column":4},"action":"insert","lines":["o"],"id":1086},{"start":{"row":54,"column":4},"end":{"row":54,"column":5},"action":"insert","lines":[":"]},{"start":{"row":54,"column":5},"end":{"row":54,"column":6},"action":"insert","lines":[":"]}],[{"start":{"row":54,"column":6},"end":{"row":54,"column":7},"action":"insert","lines":["d"],"id":1087},{"start":{"row":54,"column":7},"end":{"row":54,"column":8},"action":"insert","lines":["e"]},{"start":{"row":54,"column":8},"end":{"row":54,"column":9},"action":"insert","lines":["s"]}],[{"start":{"row":54,"column":6},"end":{"row":54,"column":9},"action":"remove","lines":["des"],"id":1088},{"start":{"row":54,"column":6},"end":{"row":54,"column":17},"action":"insert","lines":["description"]}],[{"start":{"row":54,"column":17},"end":{"row":54,"column":19},"action":"insert","lines":["()"],"id":1089}],[{"start":{"row":54,"column":19},"end":{"row":54,"column":20},"action":"insert","lines":[";"],"id":1090}],[{"start":{"row":54,"column":20},"end":{"row":55,"column":0},"action":"insert","lines":["",""],"id":1091},{"start":{"row":55,"column":0},"end":{"row":56,"column":0},"action":"insert","lines":["",""]}],[{"start":{"row":56,"column":0},"end":{"row":56,"column":1},"action":"insert","lines":["$"],"id":1092},{"start":{"row":56,"column":1},"end":{"row":56,"column":2},"action":"insert","lines":["s"]},{"start":{"row":56,"column":2},"end":{"row":56,"column":3},"action":"insert","lines":["l"]},{"start":{"row":56,"column":3},"end":{"row":56,"column":4},"action":"insert","lines":["i"]},{"start":{"row":56,"column":4},"end":{"row":56,"column":5},"action":"insert","lines":["m"]},{"start":{"row":56,"column":5},"end":{"row":56,"column":6},"action":"insert","lines":["e"]}],[{"start":{"row":56,"column":6},"end":{"row":56,"column":7},"action":"insert","lines":[" "],"id":1093}],[{"start":{"row":56,"column":6},"end":{"row":56,"column":7},"action":"remove","lines":[" "],"id":1094}],[{"start":{"row":56,"column":6},"end":{"row":56,"column":7},"action":"insert","lines":["_"],"id":1095},{"start":{"row":56,"column":7},"end":{"row":56,"column":8},"action":"insert","lines":["A"]}],[{"start":{"row":56,"column":8},"end":{"row":56,"column":9},"action":"insert","lines":[" "],"id":1096},{"start":{"row":56,"column":9},"end":{"row":56,"column":10},"action":"insert","lines":["="]}],[{"start":{"row":56,"column":10},"end":{"row":56,"column":11},"action":"insert","lines":[" "],"id":1097},{"start":{"row":56,"column":11},"end":{"row":56,"column":12},"action":"insert","lines":["n"]},{"start":{"row":56,"column":12},"end":{"row":56,"column":13},"action":"insert","lines":["w"]},{"start":{"row":56,"column":13},"end":{"row":56,"column":14},"action":"insert","lines":["e"]}],[{"start":{"row":56,"column":13},"end":{"row":56,"column":14},"action":"remove","lines":["e"],"id":1098},{"start":{"row":56,"column":12},"end":{"row":56,"column":13},"action":"remove","lines":["w"]}],[{"start":{"row":56,"column":12},"end":{"row":56,"column":13},"action":"insert","lines":["e"],"id":1099},{"start":{"row":56,"column":13},"end":{"row":56,"column":14},"action":"insert","lines":["w"]}],[{"start":{"row":56,"column":14},"end":{"row":56,"column":15},"action":"insert","lines":[" "],"id":1100},{"start":{"row":56,"column":15},"end":{"row":56,"column":16},"action":"insert","lines":["S"]},{"start":{"row":56,"column":16},"end":{"row":56,"column":17},"action":"insert","lines":["l"]},{"start":{"row":56,"column":17},"end":{"row":56,"column":18},"action":"insert","lines":["i"]},{"start":{"row":56,"column":18},"end":{"row":56,"column":19},"action":"insert","lines":["m"]},{"start":{"row":56,"column":19},"end":{"row":56,"column":20},"action":"insert","lines":["e"]}],[{"start":{"row":56,"column":20},"end":{"row":56,"column":22},"action":"insert","lines":["()"],"id":1101}],[{"start":{"row":56,"column":21},"end":{"row":56,"column":22},"action":"insert","lines":["1"],"id":1102},{"start":{"row":56,"column":22},"end":{"row":56,"column":23},"action":"insert","lines":["0"]},{"start":{"row":56,"column":23},"end":{"row":56,"column":24},"action":"insert","lines":["."]}],[{"start":{"row":56,"column":23},"end":{"row":56,"column":24},"action":"remove","lines":["."],"id":1103}],[{"start":{"row":56,"column":23},"end":{"row":56,"column":24},"action":"insert","lines":[","],"id":1104}],[{"start":{"row":56,"column":24},"end":{"row":56,"column":25},"action":"insert","lines":[" "],"id":1105},{"start":{"row":56,"column":25},"end":{"row":56,"column":26},"action":"insert","lines":["3"]},{"start":{"row":56,"column":26},"end":{"row":56,"column":27},"action":"insert","lines":[","]}],[{"start":{"row":56,"column":27},"end":{"row":56,"column":28},"action":"insert","lines":[" "],"id":1106}],[{"start":{"row":56,"column":28},"end":{"row":56,"column":30},"action":"insert","lines":["''"],"id":1107}],[{"start":{"row":56,"column":29},"end":{"row":56,"column":30},"action":"insert","lines":["A"],"id":1108}],[{"start":{"row":56,"column":32},"end":{"row":56,"column":33},"action":"insert","lines":[";"],"id":1109}],[{"start":{"row":56,"column":33},"end":{"row":57,"column":0},"action":"insert","lines":["",""],"id":1110}],[{"start":{"row":57,"column":0},"end":{"row":57,"column":1},"action":"insert","lines":["$"],"id":1111},{"start":{"row":57,"column":1},"end":{"row":57,"column":2},"action":"insert","lines":["h"]},{"start":{"row":57,"column":2},"end":{"row":57,"column":3},"action":"insert","lines":["e"]},{"start":{"row":57,"column":3},"end":{"row":57,"column":4},"action":"insert","lines":["r"]},{"start":{"row":57,"column":4},"end":{"row":57,"column":5},"action":"insert","lines":["o"]}],[{"start":{"row":57,"column":5},"end":{"row":57,"column":6},"action":"insert","lines":[" "],"id":1112},{"start":{"row":57,"column":6},"end":{"row":57,"column":7},"action":"insert","lines":["="]}],[{"start":{"row":57,"column":7},"end":{"row":57,"column":8},"action":"insert","lines":[" "],"id":1113},{"start":{"row":57,"column":8},"end":{"row":57,"column":9},"action":"insert","lines":["n"]}],[{"start":{"row":57,"column":9},"end":{"row":57,"column":10},"action":"insert","lines":["e"],"id":1114},{"start":{"row":57,"column":10},"end":{"row":57,"column":11},"action":"insert","lines":["w"]}],[{"start":{"row":57,"column":11},"end":{"row":57,"column":12},"action":"insert","lines":[" "],"id":1115},{"start":{"row":57,"column":12},"end":{"row":57,"column":13},"action":"insert","lines":["H"]},{"start":{"row":57,"column":13},"end":{"row":57,"column":14},"action":"insert","lines":["e"]},{"start":{"row":57,"column":14},"end":{"row":57,"column":15},"action":"insert","lines":["r"]},{"start":{"row":57,"column":15},"end":{"row":57,"column":16},"action":"insert","lines":["o"]}],[{"start":{"row":57,"column":16},"end":{"row":57,"column":18},"action":"insert","lines":["()"],"id":1116}],[{"start":{"row":57,"column":17},"end":{"row":57,"column":18},"action":"insert","lines":["1"],"id":1117},{"start":{"row":57,"column":18},"end":{"row":57,"column":19},"action":"insert","lines":["0"]},{"start":{"row":57,"column":19},"end":{"row":57,"column":20},"action":"insert","lines":["0"]},{"start":{"row":57,"column":20},"end":{"row":57,"column":21},"action":"insert","lines":["0"]},{"start":{"row":57,"column":21},"end":{"row":57,"column":22},"action":"insert","lines":[","]}],[{"start":{"row":57,"column":22},"end":{"row":57,"column":23},"action":"insert","lines":[" "],"id":1118},{"start":{"row":57,"column":23},"end":{"row":57,"column":24},"action":"insert","lines":["3"]},{"start":{"row":57,"column":24},"end":{"row":57,"column":25},"action":"insert","lines":["0"]}],[{"start":{"row":57,"column":26},"end":{"row":57,"column":27},"action":"insert","lines":[";"],"id":1119}],[{"start":{"row":57,"column":27},"end":{"row":58,"column":0},"action":"insert","lines":["",""],"id":1120}],[{"start":{"row":58,"column":0},"end":{"row":59,"column":0},"action":"insert","lines":["",""],"id":1121}],[{"start":{"row":59,"column":0},"end":{"row":59,"column":1},"action":"insert","lines":["$"],"id":1122},{"start":{"row":59,"column":1},"end":{"row":59,"column":2},"action":"insert","lines":["l"]},{"start":{"row":59,"column":2},"end":{"row":59,"column":3},"action":"insert","lines":["i"]}],[{"start":{"row":59,"column":2},"end":{"row":59,"column":3},"action":"remove","lines":["i"],"id":1123},{"start":{"row":59,"column":1},"end":{"row":59,"column":2},"action":"remove","lines":["l"]}],[{"start":{"row":59,"column":1},"end":{"row":59,"column":2},"action":"insert","lines":["s"],"id":1124},{"start":{"row":59,"column":2},"end":{"row":59,"column":3},"action":"insert","lines":["l"]},{"start":{"row":59,"column":3},"end":{"row":59,"column":4},"action":"insert","lines":["i"]},{"start":{"row":59,"column":4},"end":{"row":59,"column":5},"action":"insert","lines":["m"]},{"start":{"row":59,"column":5},"end":{"row":59,"column":6},"action":"insert","lines":["e"]}],[{"start":{"row":59,"column":6},"end":{"row":59,"column":7},"action":"insert","lines":["_"],"id":1125},{"start":{"row":59,"column":7},"end":{"row":59,"column":8},"action":"insert","lines":["A"]}],[{"start":{"row":59,"column":8},"end":{"row":59,"column":9},"action":"insert","lines":[" "],"id":1126},{"start":{"row":59,"column":9},"end":{"row":59,"column":10},"action":"insert","lines":["="]}],[{"start":{"row":59,"column":10},"end":{"row":59,"column":11},"action":"insert","lines":[" "],"id":1127}],[{"start":{"row":59,"column":11},"end":{"row":59,"column":12},"action":"insert","lines":["n"],"id":1128},{"start":{"row":59,"column":12},"end":{"row":59,"column":13},"action":"insert","lines":["e"]},{"start":{"row":59,"column":13},"end":{"row":59,"column":14},"action":"insert","lines":["w"]}],[{"start":{"row":59,"column":14},"end":{"row":59,"column":15},"action":"insert","lines":[" "],"id":1129},{"start":{"row":59,"column":15},"end":{"row":59,"column":16},"action":"insert","lines":["S"]},{"start":{"row":59,"column":16},"end":{"row":59,"column":17},"action":"insert","lines":["l"]},{"start":{"row":59,"column":17},"end":{"row":59,"column":18},"action":"insert","lines":["i"]},{"start":{"row":59,"column":18},"end":{"row":59,"column":19},"action":"insert","lines":["m"]},{"start":{"row":59,"column":19},"end":{"row":59,"column":20},"action":"insert","lines":["e"]}],[{"start":{"row":59,"column":20},"end":{"row":59,"column":22},"action":"insert","lines":["()"],"id":1130}],[{"start":{"row":59,"column":21},"end":{"row":59,"column":22},"action":"insert","lines":["1"],"id":1131},{"start":{"row":59,"column":22},"end":{"row":59,"column":23},"action":"insert","lines":["0"]},{"start":{"row":59,"column":23},"end":{"row":59,"column":24},"action":"insert","lines":[","]},{"start":{"row":59,"column":24},"end":{"row":59,"column":25},"action":"insert","lines":["3"]}],[{"start":{"row":59,"column":24},"end":{"row":59,"column":25},"action":"remove","lines":["3"],"id":1132}],[{"start":{"row":59,"column":24},"end":{"row":59,"column":25},"action":"insert","lines":[" "],"id":1133},{"start":{"row":59,"column":25},"end":{"row":59,"column":26},"action":"insert","lines":["3"]},{"start":{"row":59,"column":26},"end":{"row":59,"column":27},"action":"insert","lines":[","]}],[{"start":{"row":59,"column":26},"end":{"row":59,"column":27},"action":"remove","lines":[","],"id":1134},{"start":{"row":59,"column":25},"end":{"row":59,"column":26},"action":"remove","lines":["3"]},{"start":{"row":59,"column":24},"end":{"row":59,"column":25},"action":"remove","lines":[" "]},{"start":{"row":59,"column":23},"end":{"row":59,"column":24},"action":"remove","lines":[","]},{"start":{"row":59,"column":22},"end":{"row":59,"column":23},"action":"remove","lines":["0"]},{"start":{"row":59,"column":21},"end":{"row":59,"column":22},"action":"remove","lines":["1"]},{"start":{"row":59,"column":20},"end":{"row":59,"column":22},"action":"remove","lines":["()"]},{"start":{"row":59,"column":19},"end":{"row":59,"column":20},"action":"remove","lines":["e"]},{"start":{"row":59,"column":18},"end":{"row":59,"column":19},"action":"remove","lines":["m"]},{"start":{"row":59,"column":17},"end":{"row":59,"column":18},"action":"remove","lines":["i"]},{"start":{"row":59,"column":16},"end":{"row":59,"column":17},"action":"remove","lines":["l"]},{"start":{"row":59,"column":15},"end":{"row":59,"column":16},"action":"remove","lines":["S"]},{"start":{"row":59,"column":14},"end":{"row":59,"column":15},"action":"remove","lines":[" "]},{"start":{"row":59,"column":13},"end":{"row":59,"column":14},"action":"remove","lines":["w"]}],[{"start":{"row":59,"column":12},"end":{"row":59,"column":13},"action":"remove","lines":["e"],"id":1135},{"start":{"row":59,"column":11},"end":{"row":59,"column":12},"action":"remove","lines":["n"]},{"start":{"row":59,"column":10},"end":{"row":59,"column":11},"action":"remove","lines":[" "]},{"start":{"row":59,"column":9},"end":{"row":59,"column":10},"action":"remove","lines":["="]},{"start":{"row":59,"column":8},"end":{"row":59,"column":9},"action":"remove","lines":[" "]}],[{"start":{"row":59,"column":8},"end":{"row":59,"column":9},"action":"insert","lines":["-"],"id":1136},{"start":{"row":59,"column":9},"end":{"row":59,"column":10},"action":"insert","lines":[">"]},{"start":{"row":59,"column":10},"end":{"row":59,"column":11},"action":"insert","lines":["a"]},{"start":{"row":59,"column":11},"end":{"row":59,"column":12},"action":"insert","lines":["t"]},{"start":{"row":59,"column":12},"end":{"row":59,"column":13},"action":"insert","lines":["t"]}],[{"start":{"row":59,"column":13},"end":{"row":59,"column":15},"action":"insert","lines":["[]"],"id":1137}],[{"start":{"row":59,"column":13},"end":{"row":59,"column":15},"action":"remove","lines":["[]"],"id":1138},{"start":{"row":59,"column":12},"end":{"row":59,"column":13},"action":"remove","lines":["t"]},{"start":{"row":59,"column":11},"end":{"row":59,"column":12},"action":"remove","lines":["t"]},{"start":{"row":59,"column":10},"end":{"row":59,"column":11},"action":"remove","lines":["a"]}],[{"start":{"row":59,"column":10},"end":{"row":59,"column":11},"action":"insert","lines":["a"],"id":1139},{"start":{"row":59,"column":11},"end":{"row":59,"column":12},"action":"insert","lines":["t"]}],[{"start":{"row":59,"column":10},"end":{"row":59,"column":12},"action":"remove","lines":["at"],"id":1140},{"start":{"row":59,"column":10},"end":{"row":59,"column":16},"action":"insert","lines":["attack"]}],[{"start":{"row":59,"column":16},"end":{"row":59,"column":18},"action":"insert","lines":["()"],"id":1141}],[{"start":{"row":59,"column":17},"end":{"row":59,"column":18},"action":"insert","lines":["$"],"id":1142},{"start":{"row":59,"column":18},"end":{"row":59,"column":19},"action":"insert","lines":["h"]},{"start":{"row":59,"column":19},"end":{"row":59,"column":20},"action":"insert","lines":["e"]},{"start":{"row":59,"column":20},"end":{"row":59,"column":21},"action":"insert","lines":["r"]},{"start":{"row":59,"column":21},"end":{"row":59,"column":22},"action":"insert","lines":["o"]}],[{"start":{"row":59,"column":23},"end":{"row":59,"column":24},"action":"insert","lines":[";"],"id":1143}],[{"start":{"row":59,"column":24},"end":{"row":60,"column":0},"action":"insert","lines":["",""],"id":1144}],[{"start":{"row":60,"column":0},"end":{"row":60,"column":1},"action":"insert","lines":["$"],"id":1145},{"start":{"row":60,"column":1},"end":{"row":60,"column":2},"action":"insert","lines":["h"]},{"start":{"row":60,"column":2},"end":{"row":60,"column":3},"action":"insert","lines":["e"]},{"start":{"row":60,"column":3},"end":{"row":60,"column":4},"action":"insert","lines":["r"]},{"start":{"row":60,"column":4},"end":{"row":60,"column":5},"action":"insert","lines":["o"]}],[{"start":{"row":60,"column":5},"end":{"row":60,"column":6},"action":"insert","lines":["-"],"id":1146},{"start":{"row":60,"column":6},"end":{"row":60,"column":7},"action":"insert","lines":[">"]},{"start":{"row":60,"column":7},"end":{"row":60,"column":8},"action":"insert","lines":["a"]},{"start":{"row":60,"column":8},"end":{"row":60,"column":9},"action":"insert","lines":["t"]},{"start":{"row":60,"column":9},"end":{"row":60,"column":10},"action":"insert","lines":["a"]}],[{"start":{"row":60,"column":9},"end":{"row":60,"column":10},"action":"remove","lines":["a"],"id":1147}],[{"start":{"row":60,"column":7},"end":{"row":60,"column":9},"action":"remove","lines":["at"],"id":1148},{"start":{"row":60,"column":7},"end":{"row":60,"column":13},"action":"insert","lines":["attack"]}],[{"start":{"row":60,"column":13},"end":{"row":60,"column":15},"action":"insert","lines":["()"],"id":1149}],[{"start":{"row":60,"column":14},"end":{"row":60,"column":15},"action":"insert","lines":["$"],"id":1150},{"start":{"row":60,"column":15},"end":{"row":60,"column":16},"action":"insert","lines":["s"]},{"start":{"row":60,"column":16},"end":{"row":60,"column":17},"action":"insert","lines":["l"]},{"start":{"row":60,"column":17},"end":{"row":60,"column":18},"action":"insert","lines":["i"]},{"start":{"row":60,"column":18},"end":{"row":60,"column":19},"action":"insert","lines":["m"]},{"start":{"row":60,"column":19},"end":{"row":60,"column":20},"action":"insert","lines":["e"]}],[{"start":{"row":60,"column":14},"end":{"row":60,"column":20},"action":"remove","lines":["$slime"],"id":1151},{"start":{"row":60,"column":14},"end":{"row":60,"column":22},"action":"insert","lines":["$slime_A"]}],[{"start":{"row":60,"column":23},"end":{"row":60,"column":24},"action":"insert","lines":[";"],"id":1152}],[{"start":{"row":19,"column":50},"end":{"row":19,"column":51},"action":"remove","lines":[" "],"id":1153}],[{"start":{"row":19,"column":50},"end":{"row":19,"column":52},"action":"insert","lines":["()"],"id":1154}],[{"start":{"row":57,"column":17},"end":{"row":57,"column":21},"action":"remove","lines":["1000"],"id":1156},{"start":{"row":57,"column":17},"end":{"row":57,"column":18},"action":"insert","lines":["1"]},{"start":{"row":57,"column":18},"end":{"row":57,"column":19},"action":"insert","lines":["0"]}],[{"start":{"row":57,"column":17},"end":{"row":57,"column":18},"action":"remove","lines":["1"],"id":1157}],[{"start":{"row":57,"column":20},"end":{"row":57,"column":21},"action":"remove","lines":["3"],"id":1158}],[{"start":{"row":1,"column":0},"end":{"row":2,"column":0},"action":"insert","lines":["",""],"id":1159},{"start":{"row":2,"column":0},"end":{"row":3,"column":0},"action":"insert","lines":["",""]}],[{"start":{"row":2,"column":0},"end":{"row":2,"column":1},"action":"insert","lines":["n"],"id":1160},{"start":{"row":2,"column":1},"end":{"row":2,"column":2},"action":"insert","lines":["a"]},{"start":{"row":2,"column":2},"end":{"row":2,"column":3},"action":"insert","lines":["m"]},{"start":{"row":2,"column":3},"end":{"row":2,"column":4},"action":"insert","lines":["e"]},{"start":{"row":2,"column":4},"end":{"row":2,"column":5},"action":"insert","lines":["s"]},{"start":{"row":2,"column":5},"end":{"row":2,"column":6},"action":"insert","lines":["@"]}],[{"start":{"row":2,"column":5},"end":{"row":2,"column":6},"action":"remove","lines":["@"],"id":1161}],[{"start":{"row":2,"column":5},"end":{"row":2,"column":6},"action":"insert","lines":["p"],"id":1162},{"start":{"row":2,"column":6},"end":{"row":2,"column":7},"action":"insert","lines":["a"]},{"start":{"row":2,"column":7},"end":{"row":2,"column":8},"action":"insert","lines":["v"]}],[{"start":{"row":2,"column":7},"end":{"row":2,"column":8},"action":"remove","lines":["v"],"id":1163}],[{"start":{"row":2,"column":7},"end":{"row":2,"column":8},"action":"insert","lines":["c"],"id":1164},{"start":{"row":2,"column":8},"end":{"row":2,"column":9},"action":"insert","lines":["e"]}],[{"start":{"row":2,"column":9},"end":{"row":2,"column":10},"action":"insert","lines":[" "],"id":1165},{"start":{"row":2,"column":10},"end":{"row":2,"column":11},"action":"insert","lines":["T"]},{"start":{"row":2,"column":11},"end":{"row":2,"column":12},"action":"insert","lines":["e"]}],[{"start":{"row":2,"column":12},"end":{"row":2,"column":13},"action":"insert","lines":["c"],"id":1166},{"start":{"row":2,"column":13},"end":{"row":2,"column":14},"action":"insert","lines":["h"]},{"start":{"row":2,"column":14},"end":{"row":2,"column":15},"action":"insert","lines":["A"]}],[{"start":{"row":2,"column":15},"end":{"row":2,"column":16},"action":"insert","lines":["c"],"id":1167},{"start":{"row":2,"column":16},"end":{"row":2,"column":17},"action":"insert","lines":["a"]},{"start":{"row":2,"column":17},"end":{"row":2,"column":18},"action":"insert","lines":["d"]},{"start":{"row":2,"column":18},"end":{"row":2,"column":19},"action":"insert","lines":["e"]},{"start":{"row":2,"column":19},"end":{"row":2,"column":20},"action":"insert","lines":["m"]}],[{"start":{"row":2,"column":20},"end":{"row":2,"column":21},"action":"insert","lines":["y"],"id":1168}],[{"start":{"row":2,"column":21},"end":{"row":2,"column":22},"action":"insert","lines":["/"],"id":1169}],[{"start":{"row":2,"column":21},"end":{"row":2,"column":22},"action":"remove","lines":["/"],"id":1170}],[{"start":{"row":2,"column":21},"end":{"row":2,"column":22},"action":"insert","lines":["_"],"id":1171}],[{"start":{"row":2,"column":21},"end":{"row":2,"column":22},"action":"remove","lines":["_"],"id":1172}],[{"start":{"row":2,"column":21},"end":{"row":2,"column":22},"action":"insert","lines":["\\"],"id":1173}],[{"start":{"row":2,"column":21},"end":{"row":2,"column":22},"action":"remove","lines":["\\"],"id":1174}],[{"start":{"row":2,"column":21},"end":{"row":2,"column":22},"action":"insert","lines":["_"],"id":1175}],[{"start":{"row":2,"column":21},"end":{"row":2,"column":22},"action":"remove","lines":["_"],"id":1176}],[{"start":{"row":2,"column":21},"end":{"row":2,"column":22},"action":"insert","lines":["|"],"id":1177},{"start":{"row":2,"column":22},"end":{"row":2,"column":23},"action":"insert","lines":["\\"]}],[{"start":{"row":2,"column":22},"end":{"row":2,"column":23},"action":"remove","lines":["\\"],"id":1178},{"start":{"row":2,"column":21},"end":{"row":2,"column":22},"action":"remove","lines":["|"]}],[{"start":{"row":2,"column":21},"end":{"row":2,"column":22},"action":"insert","lines":["\\"],"id":1179}],[{"start":{"row":2,"column":22},"end":{"row":2,"column":23},"action":"insert","lines":["R"],"id":1180},{"start":{"row":2,"column":23},"end":{"row":2,"column":24},"action":"insert","lines":["G"]}],[{"start":{"row":2,"column":23},"end":{"row":2,"column":24},"action":"remove","lines":["G"],"id":1181}],[{"start":{"row":2,"column":23},"end":{"row":2,"column":24},"action":"insert","lines":["P"],"id":1182},{"start":{"row":2,"column":24},"end":{"row":2,"column":25},"action":"insert","lines":["G"]},{"start":{"row":2,"column":25},"end":{"row":2,"column":26},"action":"insert","lines":["\\"]}],[{"start":{"row":2,"column":26},"end":{"row":2,"column":27},"action":"insert","lines":["C"],"id":1183},{"start":{"row":2,"column":27},"end":{"row":2,"column":28},"action":"insert","lines":["a"]}],[{"start":{"row":2,"column":27},"end":{"row":2,"column":28},"action":"remove","lines":["a"],"id":1184}],[{"start":{"row":2,"column":26},"end":{"row":2,"column":27},"action":"remove","lines":["C"],"id":1185},{"start":{"row":2,"column":26},"end":{"row":2,"column":35},"action":"insert","lines":["Character"]}],[{"start":{"row":2,"column":35},"end":{"row":2,"column":36},"action":"insert","lines":["s"],"id":1186},{"start":{"row":2,"column":36},"end":{"row":2,"column":37},"action":"insert","lines":[";"]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":4,"column":17},"end":{"row":4,"column":17},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1558246920248}