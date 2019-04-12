<div style="width:100%; text-align:center;  margin-top:20px;" >
    <h2>Browse Recipes</h2>
</div>


<div class="pagewide">
    <div class="filterbox">
        <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
            <div class="form-group">
                <label><strong>Filter recipes by nation:</strong></label><br>
                <select name="nationality" style="margin-left:5px;">
                    <?php foreach($viewmodel as $item) : ?>
                        <option value=<?php echo $item['nationality']; ?>>
                            <?php echo $item['nationality']; ?></option>
                    <?php endforeach; ?>
                </select>

            </div>
            <input class="btn btn-primary" name="submit" type="submit" value="Filter by nation" style="margin-top:-1px;" />

        </form>
    </div>


    <div class="filterbox">
        <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
            <div class="centered">
                <p><strong>Dietary options:</strong></p>
            </div>
            <div class="form-check" style="margin-top:-10px;"><label>Vegetarian</label>
                <input class="form-check-input position-static" style="margin-left:1px;" name="Vegetarian" type="checkbox" id="blankCheckbox" value="1" aria-label="...">
                <label class="offset-right">Vegan</label>
                <input class="form-check-input position-static" style="margin-left:1px;" name="Vegan" type="checkbox" id="blankCheckbox" value="1" aria-label="...">
            </div>
            <div>
                <p><strong>Free from:</strong></p>
            </div>
            <div class="form-check" style="margin-top:-10px;"> <label>Dairy</label>
                <input class="form-check-input position-static" style="margin-left:1px;" name="Dairy" type="checkbox" id="blankCheckbox" value="1" aria-label="...">
                <label class="offset-right">Eggs</label>
                <input class="form-check-input position-static" style="margin-left:1px;" name="Eggs" type="checkbox" id="blankCheckbox" value="1" aria-label="...">
                <label class="offset-right">Wheat</label>
                <input class="form-check-input position-static" style="margin-left:1px;" name="Wheat" type="checkbox" id="blankCheckbox" value="1" aria-label="...">
                <label class="offset-right">TreeNuts</label>
                <input class="form-check-input position-static" style="margin-left:1px;" name="TreeNuts" type="checkbox" id="blankCheckbox" value="1" aria-label="...">
                <br>
                <label>Peanuts</label>
                <input class="form-check-input position-static" style="margin-left:1px;" name="Peanuts" type="checkbox" id="blankCheckbox" value="1" aria-label="...">
                <label class="offset-right">Shellfish</label>
                <input class="form-check-input position-static" style="margin-left:1px;" name="Shellfish" type="checkbox" id="blankCheckbox" value="1" aria-label="..." >
                <label class="offset-right"> Soy</label>
                <input class="form-check-input position-static" style="margin-left:1px;" name="Soy" type="checkbox" id="blankCheckbox" value="1" aria-label="...">
                <label class="offset-right">Fish</label>
                <input class="form-check-input position-static" style="margin-left:1px;" name="Fish" type="checkbox" id="blankCheckbox" value="1" aria-label="...">
            </div>
            <input class="btn btn-primary" name="allergen" type="submit" value="Filter by meal type" style="margin-top:-1px;" />

        </form>
    </div>

</div>

<div class="pagewide" style="height:1px; background-color:black; margin-top:0px; margin-bottom:20px;"></div>


<div class="pagewide">
    <?php foreach($viewmodel as $item) : ?>

        <div class="contentbox">
            <div>
                <h4><a href="<?php $ROOT_URL ?>/recipe/single/<?php echo $item['id']; ?>">
                        <?php echo $item['name']; ?></a></h4>
                <hr />
            </div>
            <img src ="http://localhost/assets/img/<?php echo $item['image']; ?>" class="indeximage">
            <p><strong>Nation of Origin:</strong> <?php echo $item['nationality']; ?></p>
            <div class="form-check">
                <input class="form-check-input" style="margin-left:-20px;" name="available" type="checkbox" onclick="return false;"
                       id="blankCheckbox" value="1" aria-label="..." <?php if($item['Vegetarian'] == 1) echo 'checked'; ?>>
                <label style="margin-right:30px;">Vegetarian</label>

                <input class="form-check-input"  name="available" type="checkbox" onclick="return false;"
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
        </div>




    <?php endforeach; ?>

</div>
