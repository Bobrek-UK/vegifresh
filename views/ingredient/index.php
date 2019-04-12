<div style="width:100%; text-align:center;  margin-top:20px;" >
    <h2>Browse Ingredients</h2><br>
</div>

<div class="pagewideish" style="height:1px; background-color:black;"></div>

<div class="pagewide">
    <?php foreach($viewmodel as $item) : ?>
        <div class="contentboxsmall">
            <h4><a href="<?php $ROOT_URL ?>/ingredient/single/<?php echo $item['id']; ?>">
                    <?php echo $item['name']; ?></a></h4>
            <hr />
            <p>Produce county: <?php echo $item['county']; ?></p>
            <br>
        </div>
    <?php endforeach; ?>
</div>