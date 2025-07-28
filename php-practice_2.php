<?php
// Q1 tic-tac問題

for ($i = 1; $i <= 100; $i++) {
    if ($i % 4 === 0 && $i % 5 === 0) {
        echo "tic-tac\n";
    } elseif ($i % 4 === 0) {
        echo "tic\n";
    } elseif ($i % 5 === 0) {
        echo "tac\n";
    } else {
        echo $i;
    }
}



// Q2 多次元連想配列

//問題1

echo $personalInfos[1]['name'] . "の電話番号は" . $personalInfos[1]['tel'] . "です。";


//問題2

foreach ($personalInfos as $info => $person) {
    $num = $info + 1;
    echo "{$num}番目の{$person['name']}のメールアドレスは{$person['mail']}で、電話番号は{$person['tel']}です。\n";
}


//問題3

$ageList = [25, 30, 18];

foreach ($personalInfos as $info => $person) {
    $personalInfos[$info]['age'] = $ageList[$info];
}

var_dump($personalInfos);



// Q3 オブジェクト-1

$student = new Student(416, '仙河緑');
echo "学籍番号{$student->studentId}番の生徒は{$student->studentName}です。";
$student->attend();



// Q4 オブジェクト-2

class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend($subject)
    {
        echo "{$this->studentName}は{$subject}の授業に参加しました。学籍番号：{$this->studentId}\n";
    }
}

$yamada = new Student(120, '山田');
$yamada->attend('PHP');



// Q5 定義済みクラス

//問題1

$today = new DateTime();

echo $today->modify('-1 month')->format('Y-m-d');

/*【出力内容】
2025-06-25
*/


//問題2

$today = new DateTime();

$past = new DateTime('1992-04-25');

$diff = $today->diff($past);

echo "あの日から" . $today->diff($past)->days . "日経過しました。";

/*【出力内容】
あの日から12144日経過しました。
*/
