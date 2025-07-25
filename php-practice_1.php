<?php
// Q1 変数と文字列

$message = '佐竹';
var_dump($message);
$newMessage = '私の名前は「' . $message . '」です。';
var_dump($newMessage);


// Q2 四則演算

$num = 5 * 4;
echo $num . "\n";
echo $num / 2 . "\n";


// Q3 日付操作

$now = date("Y年m月d日 H時i分s秒");
echo "現在時刻は、" . $now . "です。";


// Q4 条件分岐-1 if文

$device = "mac";

if ($device === "windows") {
    echo "使用OSは、windowsです。";
} else {
    if ($device === "mac") {
        echo "使用OSは、macです。";
    } else {
        echo "どちらでもありません。";
    }
}


// Q5 条件分岐-2 三項演算子

$age = 24;

echo ($age < 18) ? "未成年です。" : "成人です。";


// Q6 配列

$kanto = ["東京都", "神奈川県", "埼玉県", "栃木県", "千葉県", "茨城県", "群馬県"];

echo $kanto[3] . "と" . $kanto[4] . "は関東地方の都道府県です。";


// Q7 連想配列-1

$prefectural_capital_cities = [
    "東京都"   => "新宿区",
    "神奈川県" => "横浜市",
    "千葉県"   => "千葉市",
    "埼玉県"   => "さいたま市",
    "栃木県"   => "宇都宮市",
    "群馬県"   => "前橋市",
    "茨城県"   => "水戸市"
];

foreach ($prefectural_capital_cities as $capital) {
    echo $capital . "\n";
}


// Q8 連想配列-2

$prefectural_capital_cities = [
    "東京都"   => "新宿区",
    "神奈川県" => "横浜市",
    "千葉県"   => "千葉市",
    "埼玉県"   => "さいたま市",
    "栃木県"   => "宇都宮市",
    "群馬県"   => "前橋市",
    "茨城県"   => "水戸市"
];

if (isset ($prefectural_capital_cities["埼玉県"])){
  echo "埼玉県の県庁所在地は、" . $prefectural_capital_cities["埼玉県"] . "です。";
}


// Q9 連想配列-3

$prefectural_capital_cities = [
    "東京都"   => "新宿区",
    "神奈川県" => "横浜市",
    "千葉県"   => "千葉市",
    "埼玉県"   => "さいたま市",
    "栃木県"   => "宇都宮市",
    "群馬県"   => "前橋市",
    "茨城県"   => "水戸市",
    "高知県"   => "高知市",
    "愛媛県"   => "松山市",
];

$kanto = ["東京都", "神奈川県", "千葉県", "埼玉県", "栃木県", "群馬県", "茨城県"];

foreach ($prefectural_capital_cities as $capital => $city) {
  if (in_array($capital, $kanto)){
    echo "{$capital}の県庁所在地は、{$city}です。\n";
  } else {
    echo "{$capital}は関東地方ではありません。\n";
  }
}

// Q10 関数-1

function hello($name) {
  return $name . "さん、こんにちは。";
}

echo hello("三枝") . "\n";
echo hello("仙河") . "\n";


// Q11 関数-2

function calcTaxInPrice($price) {
    return $price * 1.10;
}

$price = 1000;

$taxInPrice = calcTaxInPrice($price);

echo "税込価格は {$taxInPrice} 円です。";


// Q12 関数とif文

function distinguishNum($num) {
    if ($num % 2 === 0) {
        return "{$num}は偶数です。";
    } else {
        return "{$num}は奇数です。";
    }
}

echo distinguishNum(4) . "\n";
echo distinguishNum(7) . "\n";


// Q13 関数とswitch文

<?php
function evaluateGrade($grade) {
  switch ($grade) {
    case 'A':
    case 'B':
      return "合格です。";
    case 'C':
      return "合格ですが追加課題があります。";
    case 'D':
      return "不合格です。";
    default:
      return "判定不明です。講師に問い合わせてください。";
    }
}

echo evaluateGrade('A') . "\n";
echo evaluateGrade('C') . "\n";

?>