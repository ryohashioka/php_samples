<!DOCTYPE html>
<html lang="ja">
    <head>
        <title>Index</title>
        <style>
body {
    background: black;
}
.wrap {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 0 6px;
}
.box1 {
  grid-column-start: 1;
  grid-column-end: 3;
  grid-row-start: 1;
  grid-row-end: 3;
}
.box6 {
  grid-column-start: 2;
  grid-column-end: 4;
  grid-row-start: 3;
  grid-row-end: 5;
}

img {
    width: 100%;
}
        </style>
    </head>
    <body>
        <div class="wrap">
            <div class="box1">
                <img src="./images/1.jpg" />
            </div>
            <div class="box2">
                <img src="./images/2.jpg" />
            </div>
            <div class="box3">
                <img src="./images/3.jpg" />
            </div>
            <div class="box4">
                <img src="./images/4.jpg" />
            </div>
            <div class="box5">
                <img src="./images/5.jpg" />
            </div>
            <div class="box6">
                <img src="./images/6.jpg" />
            </div>
        </div>

        <hr>
        
        <div class="wrap">
            <?php for ($i = 1; $i <=6; $i++) { ?>
                <div class="<?php echo "box$i" ?>">
                    <img src="<?php echo "./images/$i.jpg" ?>" />
                </div>
            <?php } ?>
        </div>
    </body>
</html>