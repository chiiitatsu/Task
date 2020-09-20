<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>task1</title>
</head>
<body>
    <h1>FIzzBuzz問題</h1>
    <form class="num" action="submit.php" method="get">
        <dl>
            <dt>FizzNum:</dt>
            <?php $fizzNum = $_GET["FizzNum"]; ?>
            <dd><input type="text" size="22" name="FizzNum" 
            value="<?php echo $fizzNum ?>" placeholder="整数値を入力してください"></dd>

            <dt>BuzzNum:</dt>
            <?php $buzzNum = $_GET["BuzzNum"]; ?>
            <dd><input type="text" size="22" name="BuzzNum" 
            value= "<?php echo $buzzNum ?>" placeholder="整数値を入力してください"></dd>
        </dl>
    
        <input type="submit" id="botton" value="実行">
        
    </form>

    <p><?php echo '【出力】'; ?></p>

    <p>
        <?php
            //倍数計算のための変数
            $num1 = $fizzNum;
            $num2 = $buzzNum;
       
            for($i = 1; $i < 100 ; $i++){

                //空欄・文字列だった場合
                if($fizzNum == 0 || $buzzNum == 0){
                  echo '整数値を入力してください';
                  break;
                }
                //小数・マイナスだった場合
                if(ctype_digit(strval($fizzNum)) == 0 || ctype_digit(strval($buzzNum)) == 0){
                    echo '整数値を入力してください';
                    break;
                }

                //BuzzFizz表示
                if($i == $fizzNum && $i == $buzzNum){
                    echo 'FizzBuzz '.$fizzNum;  //表示
                    echo "</br>";               //改行
                    $fizzNum += $num1;          //倍数計算
                    $buzzNum += $num2;          //倍数計算
                }

                //Fizz表紙
                else if($i == $fizzNum){
                    echo 'Fizz '.$fizzNum;  //表示
                    echo "</br>";           //改行
                    $fizzNum += $num1;      //倍数計算
                }

                //Buzz表示
                else if($i == $buzzNum){
                    echo 'Buzz '.$buzzNum;  //表示
                    echo "</br>";           //改行
                    $buzzNum += $num2;      //倍数計算
                }

            }
        ?>
    </p>
</body>
</html>