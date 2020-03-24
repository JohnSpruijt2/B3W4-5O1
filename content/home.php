<header><h1>Alle <?php
 foreach ($resultCount as $count) {
    echo $count['total'];
} ?> characters uit de database</h1>

</header>

<div id="container">
<?php foreach($result as $data) {?>
    <a class="item" href="?page=char&ID=<?php echo $data['id'] ?>">
        <div class="left">
            <img class="avatar" src="images/<?php echo $data['avatar'] ?>">
        </div>
        <div class="right">
            <h2> <?php echo $data['name'] ?></h2>
            <div class="stats">
                <ul class="fa-ul">
                    <li><span class="fa-li"><i class="fas fa-heart"></i></span> <?php echo $data['health'] ?></li>
                    <li><span class="fa-li"><i class="fas fa-fist-raised"></i></span> <?php echo $data['attack'] ?></li>
                    <li><span class="fa-li"><i class="fas fa-shield-alt"></i></span> <?php echo $data['defense'] ?></li>
                </ul>
            </div>
        </div>
        <div class="detailButton"><i class="fas fa-search"></i> bekijk</div>
    </a>
    <?php } ?>
</div>