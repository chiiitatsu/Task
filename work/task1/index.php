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

    <form class="fizzBuzz" action="index.php" method="post">
        <dl>
            <dt>FizzNum:</dt>
            <dd><input type="text" size="22" name="FizzNum" placeholder="整数値を入力してください"></dd>
            
            <dt>BuzzNum:</dt>
            <dd><input type="text" size="22" name="BuzzNum" placeholder="整数値を入力してください"></dt>
        </dl>
    
        <input type="submit" id="botton" value="実行">
        
    </form>

    <p><?php echo '【出力】'; ?></p>

    <p>
        
        <?php

        if($_SERVER['REQUEST_METHOD'] === 'POST'){

            $fizzNum = $_POST["FizzNum"];
            $buzzNum = $_POST["BuzzNum"]; 

            //倍数計算のための変数
            $num1 = $fizzNum;
            $num2 = $buzzNum;
            
            //空欄・文字列だった場合
            if($fizzNum === false || $buzzNum === false){
                echo '整数値を入力してください';
                exit;
            }
            
            //小数・マイナスだった場合
            if(ctype_digit(strval($fizzNum)) === false || ctype_digit(strval($buzzNum)) === false){
                echo '整数値を入力してください';
                exit;
            }

            for($i = 1; $i < 100 ; $i++){

                //BuzzFizz表示
                if($i % $fizzNum === 0 && $i % $buzzNum === 0 ){
                    echo 'FizzBuzz '.$fizzNum;  //表示
                    echo "</br>";               //改行
                    $fizzNum += $num1;          //倍数計算
                    $buzzNum += $num2;          //倍数計算
                }

                //Fizz表示
                else if($i % $fizzNum === 0 ){
                    echo 'Fizz '.$fizzNum;  //表示
                    echo "</br>";           //改行
                    $fizzNum += $num1;      //倍数計算
                }

                //Buzz表示
                else if($i % $buzzNum === 0 ){
                    echo 'Buzz '.$buzzNum;  //表示
                    echo "</br>";           //改行
                    $buzzNum += $num2;      //倍数計算
                }
            }
        }
        ?>
    </p> 
</body>
</html>