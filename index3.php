<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MineSweeper - Level 3</title>
    <link rel="stylesheet" href="index3.css">
</head>
<body>
    <?php
        for($i=0;$i<24;$i++) {
            ?>
                <div class="outer_box">
            <?php
            for($j=1;$j<=24;$j++){
                $id = $i*24+$j;
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
        for(let i=0;i<=98;i++){
            number=Math.floor(Math.random()*575)+1;
            while(mines.includes(number)){
                number=Math.floor(Math.random()*575)+1;
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