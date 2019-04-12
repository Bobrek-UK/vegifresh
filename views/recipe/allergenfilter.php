<div style="width:100%; text-align:center; margin-top:20px;" >
    <h2>Recipe Filter Results</h2>
</div>

<div class="pagewide" style="height:1px; background-color:black; margin-bottom:20px;"></div>

<div class="pagewide">

    <?php foreach($viewmodel as $item) : ?>

        <div class="contentbox">
            <h4><a href="<?php $ROOT_URL ?>/recipe/single/<?php echo $item['id']; ?>">
                    <?php echo $item['name']; ?></a></h4>
            <hr />

            <img src ="http://localhost/assets/img/<?php echo $item['image']; ?>" class="indeximage">
            <p><strong>Nation of Origin:</strong> <?php echo $item['nationality']; ?></p>
            <div class="form-check">
                <input class="form-check-input position-static" style="margin-left:-20px;" name="available" type="checkbox" onclick="return false;"
                       id="blankCheckbox" value="1" aria-label="..." <?php if($item['Vegetarian'] == 1) echo 'checked'; ?>>
                <label style="margin-right:20px;">Vegetarian</label>

                <input class="form-check-input position-static" style="margin-left:-20px;" name="available" type="checkbox" onclick="return false;"
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
            <br>
        </div>


    <?php endforeach; ?>

</div>
