<div class="pagewide">
    <?php foreach($viewmodel as $item) : ?>
        <div class="contentbox">
            <h3><?php echo $item['name']; ?></h3>
            <div class="contentwide" style="height:1px; background-color:black; margin-bottom:20px;"></div>
            <p>Produce county: <?php echo $item['county']; ?></p>
        </div>
    <?php endforeach; ?>
</div>