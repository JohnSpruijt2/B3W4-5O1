<?php $query = $conn->prepare("SELECT * FROM `characters` WHERE id =".$_GET['ID']."");
    $query->execute();
    $charResult = $query->fetchall(); ?>

<?php foreach($charResult as $data) { ?>
<header><h1><?php echo $data['name']; ?></h1>
    <a class="backbutton" href="?page=home"><i class="fas fa-long-arrow-alt-left"></i> Terug</a></header>
<div id="container">
    <div class="detail">
        <div class="left">
            <img class="avatar" src="images/<?php echo $data['avatar'] ?>">
            <div class="stats" style="background-color: <?php echo $data['color'] ?>">
                <ul class="fa-ul">
                    <li><span class="fa-li"><i class="fas fa-heart"></i></span> <?php echo $data['health']; ?></li>
                    <li><span class="fa-li"><i class="fas fa-fist-raised"></i></span> <?php echo $data['attack']; ?></li>
                    <li><span class="fa-li"><i class="fas fa-shield-alt"></i></span> <?php echo $data['defense']; ?></li>
                </ul>
                <ul class="gear">
                    <?php if ($data['weapon'] != null) {
                        echo "<li><b>Weapon</b>: ".$data['weapon']."</li>";
                    }
                        if ($data['armor'] != null) {
                            echo "<li><b>Armor</b>: ".$data['armor']."</li>";
                    } ?>
                    
                </ul>
            </div>
        </div>
        <div class="right">
            <p>
                <?php echo $data['bio']; ?>
            </p>
        </div>
        <div style="clear: both"></div>
    </div>
</div>
<?php } ?>