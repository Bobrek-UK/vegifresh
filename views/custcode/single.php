<?php
/**
 * Created by PhpStorm.
 * User: Bobrek
 * Date: 21/02/2019
 * Time: 19:09
 */
?>
<div class="pagewide">
    <?php foreach($viewmodel as $item) : ?>
        <div class="contentbox">
            <h3><?php if(isset($_SESSION['admin'])){echo '<a href="'.ROOT_URL.'recipeset/edit/'.$item['wid'].'">';} ?>
                Set <?php echo $item['wid']; ?><?php if(isset($_SESSION['admin'])){echo '</a>';} ?></h3><hr />
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
        </div>
        <br>
    <?php endforeach; ?>
</div>
