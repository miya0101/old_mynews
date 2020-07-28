<?php
     //身長が 150cm よりも小さい場合は拒否する
//$height=160;
//if ($height<150)
//{echo "150cm 未満の方はご乗車できません。";}
//else{echo"ご乗車になれます。";}

//$height=230;
     // もし $height が 150 未満の数値なら、 ifのあとの { } の中のコードが実行される
     // もし $height が 200 以上の数値なら、 else ifのあとの{ }の中のコードが実行される
     // それ以外なら、 else のあとの　｛ ｝ の中のコードが実行される
//if ($height < 150) {echo "150cm 未満の方はご乗車になれません。";}
//else if($height >= 200)
//{echo"200cm 以上の方はご乗車できません。";}
//else {echo "ご乗車になれます。";}

     //switch による複数条件分岐
//$weekday="月曜";
     // $weekday が月曜だったら「可燃ごみの日です。」、 水曜だったら「資源ごみの日です。」、それ以外だったら「回収はありません。」
     // と表示される
//switch($weekday){
//    case"月曜":
//        echo"可燃ごみの日です。";
//        break;
//    case"水曜":
//       echo"資源ごみの日です。";
//        break;
//    default:
//        echo "回収はありません。";
//        break;
//}

//$weekday = "月曜";
     // $weekday が月曜だったら「可燃ごみの日です。」、 水曜だったら「資源ごみの日です。」、それ以外だったら「回収はありません。」
     // と表示したい
//switch ($weekday) {
//  case "月曜":
//    echo "可燃ごみの日です。";
//  case "水曜":
//    echo "資源ごみの日です。";
//  default:
//    echo "回収はありません。";
//}
      //=> 可燃ごみの日です。 資源ごみの日です。改修はありません。 と表示されてしまう。

//$weekday = "木曜";
     // $weekday が月曜か木曜だったら「可燃ごみの日です。」、 水曜だったら「資源ごみの日です。」、それ以外だったら「回収はありません。」
     // と表示したい
//switch ($weekday) {
//  case "月曜":
//  case "木曜":
//    echo "可燃ごみの日です。";
//    break;
//  case "水曜":
//    echo "資源ごみの日です。";
//    break;
//  default:
//    echo "回収はありません。";
//    break;
//}
     //=> 可燃ごみの日です。 

     //さまざまな条件で比較して、その結果によって処理の分岐ができます。

     //比較には不等号や否定記号を使うことができます。例を交えて見てみましょう。
//$a = 3;
//$b = 3;
//$c = "3";
     // $a と $b が等しいときに true　そうでなければ false を返す。
//var_dump($a == $b);
     //=> bool(true) が表示される。

     // $a と $b が等しくないときに true
//var_dump($a != $b);
     //=> bool(false)　が表示される。

     // $a が $b　より大きいときに　true、そうでなければ false を返す。
//var_dump($a > $b);
     //=> bool(false)が表示される

     // $a が $b 以上のときtrue、そうでなければ false を返す。
//var_dump($a >= $b);
     //=> bool(true) が表示される。

     // $a が $b より小さいときtrue、そうでなければ false を返す。
//var_dump($a < $b);
     //=> bool(false)が表示される

     //$a が $b より小さいか、または等しいときに true、そうでなければ false を返す。
//var_dump($a <= $b);
     //=> bool(true) が表示される。

     //$a が $c　とデータ型が等しく、かつ値も等しいときに true、そうでなければ false を返す。
//var_dump($a === $c);
     //=> bool(false)が表示される。

     //$a が $c　とデータ型が等しくないか、もしくは値が等しくないときに true、そうでなければ false を返す。
//var_dump($a !== $c);
     //=> bool(true)が表示される。

     //for による繰り返し処理
     
//for($i=0;$i<10;$i++){echo$i;}

     //for文は例を出します。次に1〜100までを繰り返し処理で足してみましょう。
     
//$total = 0;
//echo $total;
     //=> 0 と表示される。

     // $iが0から始まり、$iが100以下の間繰り返し処理を行う。
//for ($i = 0; $i <= 100; $i++) {$total += $i;}
//echo $total;
     //=> 5050 と表示される。

     # 配列の全ての要素を出力
//$fruits = array("apple", "orange", "lemon");

//echo count($fruits);
     //=> 3 と表示される。

//for ($i = 0; $i < count($fruits); $i++) {
//  echo "要素は" . $fruits[$i];
//  echo "\n";
//}
     //=> 要素はapple
     //=> 要素はorange
     //=> 要素はlemon
     //=> と表示される

//$animals = array("dog", "cat", "panda");
     // $animals から一つずつ要素を取り出して、$animal に代入される

//foreach($animals as $animal){echo "要素は" . $animal;echo "\n";}

     //=> 要素はdog
     //=> 要素はcat
     //=> 要素はpanda
     //=> と表示される

echo "\n";
     //$name にあなたの名前を代入し、 if文で $name があなたの名前だったら 「私は あなたの名前 です」、
     //もし違ったら「あなたの名前ではありません」と表示するように実装してください。
$name="miya";if($name){echo"私は　あなたの名前です";}else{"あなたの名前ではありません";}
echo "\n";
echo "\n";
     //for文を使って、1から10000までの合計の値を表示してください。
$total=0;
for($i=0;$i<=10000;$i++){$total+=$i;}
echo $total;
echo "\n";
echo "\n";
     //$fruits に配列で好きなフルーツを5個代入し、foreach文で順番に出力してください。
$fruits=array("blueberry","peach","cherry","coconut","raspberry");
foreach($fruits as $fruit){echo $fruit;echo "\n";}
echo "\n";
     //【応用】 次のプログラムのバグを修正し、1から100までの間で5の倍数のみ表示するようにしてみてください。
     /* for文の始めの値を定義する /
     $start = 1;
     /* for文の終わりの値を定義する */
     //$end = 100;
     //for($i = $start; $i < $end; $i++){5で割り切れたら{}内を実行するif($i % 5 == 0){echo $i}} 
     
     //(最後に;がない)　(最後に}が二つ付いている)   (改行が無いので見ずらい（バグ?に入るかはよく分からない）( $i < $end;ではなく $i <= $end; )
$start=1;
$end=100;
for($i=$start; $i<=$end;$i++)if($i%5==0){echo $i;echo "\n";}
?>