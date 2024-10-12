<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MineSweeper - Level 2</title>
    <link rel="stylesheet" href="index2.css">
</head>
<body>
    <?php
        for($i=0;$i<16;$i++) {
            ?>
                <div class="outer_box">
            <?php
            for($j=1;$j<=16;$j++){
                $id = $i*16+$j;
                ?>
                    <div id="<?php echo $id; ?>" onclick="userclick('<?php echo $id; ?>')" class="box"></div>
                <?php
            }
            ?>
                </div>
            <?php
        }
    ?>
    <br>
    <div class="outer_box">
    <button class="btn" onclick="location.href='home.php'">返回</button>
    </div>
</body>
</html>
<script>
    function start(){
        let mines=[];
        let number=0;
        for(let i=0;i<=39;i++){
            number=Math.floor(Math.random()*255)+1;
            while(mines.includes(number)){
                number=Math.floor(Math.random()*255)+1;
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