<div style="width:100%; text-align:center;  margin-top:20px;" >
    <h2>Browse Weekly Meal Sets</h2><br>
</div>

<div class="pagewideish" style="height:1px; background-color:black;"></div>

<div class="pagewide">
    <?php foreach($viewmodel as $item) : ?>
        <div class="contentbox">
            <h3><?php if(isset($_SESSION['admin'])){echo '<a href="'.ROOT_URL.'recipeset/edit/'.$item['wid'].'">';} ?>
                Set <?php echo $item['wid']; ?><?php if(isset($_SESSION['admin'])){echo '</a>';} ?></h3><hr />
            <p><strong>Delivery date:</strong> <?php echo $item['deliverydate']; ?></p>
            <p <?php if ($item['available']==1){echo 'style="color:#008e0d"';}
            else{echo 'style="color:#ae0017"';} ?>>
                <strong><?php if ($item['available']==1){echo 'Available for purchase';}
                    else{echo 'No longer available for purchase';} ?></strong></p>
            <p><a href="<?php $ROOT_URL ?>/recipe/single/<?php echo $item['rid1']; ?>">
                    <strong>Meal 1:</strong> <?php echo $item['recipe1']; ?></a></p>
            <p><a href="<?php $ROOT_URL ?>/recipe/single/<?php echo $item['rid2']; ?>">
                    <strong>Meal 2:</strong> <?php echo $item['recipe2']; ?></a></p>
            <p><a href="<?php $ROOT_URL ?>/recipe/single/<?php echo $item['rid3']; ?>">
                    <strong>Meal 3:</strong> <?php echo $item['recipe3']; ?></a></p>
            <p><a href="<?php $ROOT_URL ?>/recipe/single/<?php echo $item['rid4']; ?>">
                    <strong>Meal 4:</strong> <?php echo $item['recipe4']; ?></a></p>
            <p><a href="<?php $ROOT_URL ?>/recipe/single/<?php echo $item['rid5']; ?>">
                    <strong>Meal 5:</strong> <?php echo $item['recipe5']; ?></a></p>
            <?php if(isset($_SESSION['admin'])){ ?>
                <p><strong>Customer code: </strong><?php echo $item['custcode']; ?></p>
            <?php } ?>
            <br>
        </div>

    <?php endforeach; ?>
</div>