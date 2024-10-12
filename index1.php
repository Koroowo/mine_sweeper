<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MineSweeper - Level 1</title>
    <link rel="stylesheet" href="index1.css">
</head>
<body>
    <?php
        // for 迴圈 
        for($i=0;$i<8;$i++) {
            ?>
                <!-- 外面的容器 -->
                <div class="outer_box">
            <?php
            for($j=1;$j<=8;$j++){
                $id = $i*8+$j;
                ?>
                    <!-- 裡面的一格一格的空格(放地雷的藍色格子) -->
                    <div id="<?php echo $id; ?>" onclick="userclick('<?php echo $id; ?>')" class="box"></div>
                    <!-- 我每一格都給他一個$id 他就是我上面的 $i+$j 他就是(x,y) -->
                <?php
            }
            ?>
                </div>
            <?php
        }
    ?>
    <br>
    <div class="outer_box">
        <!-- 返回按鈕 onclick="location.href='home.php'" 是當使用者按下時 會導到home.php -->
        <button class="btn" onclick="location.href='home.php'">返回</button>
    </div>
</body>
</html>
<script>
    function start(){
        let mines=[];
        let number=0;
        for(let i=0;i<=9;i++){
            number=Math.floor(Math.random()*80)+1;
            while(mines.includes(number)){
                number=Math.floor(Math.random()*80)+1;
            }
            mines.push(number);
        }
        console.log(mines);
    }
    start();

    function userclick(id){
        document.getElementById(id).style.backgroundColor="white";
    }
</script>

