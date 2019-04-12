<?php
if(isset($_SESSION['is_logged_in'])||isset($_SESSION['validcode'])) { ?>

    <div class="pagewide">
        <?php foreach($viewmodel as $item) : ?>

            <script type="application/ld+json">
                {
                    "@context": "https://schema.org/",
                    "@type": "Recipe",
                    "name":"<?php echo $item['name']; ?>",
                    "image":"<?php echo $item['image']; ?>",
                    "recipeCuisine":"<?php echo $item['nationality']; ?>",
                    "recipeInstructions": "<?php echo $item['instructions']; ?>",
                }
            </script>



            <div class="contentboxsingle">
                <h2><?php if(isset($_SESSION['admin'])){echo '<a href="'.ROOT_URL.'recipe/edit/'.$item['id'].'">';} ?>
                    <?php echo $item['name']; ?>
                    <?php if(isset($_SESSION['admin'])){echo '</a>';} ?></h2>
                <div class="contentwide" style="height:1px; background-color:black; margin-bottom:20px;"></div>
                <img src ="http://localhost/assets/img/<?php echo $item['image']; ?>" class="singleimage">
                <p><strong>Nation of Origin:</strong> <?php echo $item['nationality']; ?></p>
                <div class="form-check">
                    <input class="form-check-input position-static" style="margin-left:-20px;" name="available" type="checkbox" onclick="return false;"
                           id="blankCheckbox" value="1" aria-label="..." <?php if($item['Vegetarian'] == 1) echo 'checked'; ?>>
                    <label style="margin-right:30px;">Vegetarian</label>

                    <input class="form-check-input position-static" name="available" type="checkbox" onclick="return false;"
                           id="blankCheckbox" value="1" aria-label="..." <?php if($item['Vegan'] == 1) echo 'checked'; ?>>
                    <label>Vegan</label>
                </div>
                <p <?php if($item['Dairy'] ==0 && $item['Eggs'] ==0 && $item['Wheat'] ==0 && $item['TreeNuts'] ==0 &&
                    $item['Peanuts'] ==0 && $item['Shellfish'] ==0 && $item['Soy'] ==0 && $item['Fish'] ==0)
                {echo 'class="allergenfree"';} else {echo 'class="allergens"';} ?>><strong>Contains allergens: <br><?php if($item['Dairy'] ==1) echo 'Dairy. ';
                        if($item['Eggs'] ==1) echo 'Eggs. ';
                        if($item['Wheat'] ==1) echo 'Wheat. ';
                        if($item['TreeNuts'] ==1) echo 'Tree Nuts. ';
                        if($item['Peanuts'] ==1) echo 'Peanuts. ';
                        if($item['Shellfish'] ==1) echo 'Shellfish. ';
                        if($item['Soy'] ==1) echo 'Soy. ';
                        if($item['Fish'] ==1) echo 'Fish. ';
                        if($item['Dairy'] ==0 && $item['Eggs'] ==0 && $item['Wheat'] ==0 && $item['TreeNuts'] ==0 &&
                            $item['Peanuts'] ==0 && $item['Shellfish'] ==0 && $item['Soy'] ==0 && $item['Fish'] ==0)
                        {echo 'None';}?></strong></p>

                <div class="contentwide" style="height:1px; background-color:black; margin-bottom:20px;"></div>

                <p><strong>Instructions:</strong></p><p><?php echo nl2br($item["instructions"]); ?></p>
            </div>
        <?php endforeach; ?>
    </div>

<?php }else{



    echo '<div class="pagewide"><div class="contentboxsingle">Sorry! You must be logged in to view recipe instructions</div></div>';

}
?>



<?php ?>