<?php
if(isset($_SESSION['admin'])) { ?>

    <div style="width:100%; text-align:center; margin-top:20px;" >
        <h2>Edit Recipe</h2>
    </div>

    <div class="pagewide" style="height:1px; background-color:black; margin-bottom:20px;"></div>

    <div class="pagewide">
        <div class="contentboxsingle">

            <div class="panel-body">

                <form  method="post" action="<?php $_SERVER['PHP_SELF']; ?>" >
                    <?php foreach($viewmodel as $item) : ?>
                        <div class="form-group">
                            <label><strong>Recipe ID</label>
                            <input type="text" name="id" readonly value="<?=$item['id']?>"  class="form-control" style="max-width:300px; margin:auto;"/>
                        </div>
                        <div class="form-group">
                            <label>Recipe Name</label>
                            <input type="text" name="name" value="<?=$item['name']?>" class="form-control" style="max-width:300px; margin:auto;"/>
                        </div>
                        <div class="form-group">
                            <label>Nationality</label>
                            <input type="text" name="nationality" value="<?=$item['nationality']?>" class="form-control" style="max-width:300px; margin:auto;"/>
                        </div>
                        <div class="form-group">
                            <label>Instructions</label>
                            <textarea name="instructions"  class="form-control" style="max-width:1000px; margin:auto;"
                                      oninput='this.style.height = "";this.style.height = this.scrollHeight + 3 + "px"'><?php echo $item['instructions']?></textarea>
                        </div>
                        <div class="form-group">
                            <label>Image</label>
                            <input type="text" name="image" value="<?=$item['image']?>" class="form-control" style="max-width:300px; margin:auto;"/>
                        </div>
                        <div>
                            <p>Meets these dietary requirements:</strong></p>
                        </div>
                        <div class="form-check"> <label>Vegetarian</label>
                            <input class="form-check-input position-static" style="margin-left:1px;" name="Vegetarian" type="checkbox" id="blankCheckbox" value="1" aria-label="..." <?php if($item['Vegetarian'] == 1) echo 'checked'; ?>>
                            <label class="offset-right">Vegan</label>
                            <input class="form-check-input position-static" style="margin-left:1px;" name="Vegan" type="checkbox" id="blankCheckbox" value="1" aria-label="..." <?php if($item['Vegan'] == 1) echo 'checked'; ?>>
                        </div>
                        <br>
                        <div>
                            <p><strong>Contains these allergens:</strong></p>
                        </div>
                        <div class="form-check"> <label>Dairy</label>
                            <input class="form-check-input position-static" style="margin-left:1px;" name="Dairy" type="checkbox" id="blankCheckbox" value="1" aria-label="..." <?php if($item['Dairy'] == 1) echo 'checked'; ?>>
                            <label class="offset-right">Eggs</label>
                            <input class="form-check-input position-static" style="margin-left:1px;" name="Eggs" type="checkbox" id="blankCheckbox" value="1" aria-label="..." <?php if($item['Eggs'] == 1) echo 'checked'; ?>>
                            <label class="offset-right">Wheat</label>
                            <input class="form-check-input position-static" style="margin-left:1px;" name="Wheat" type="checkbox" id="blankCheckbox" value="1" aria-label="..." <?php if($item['Wheat'] == 1) echo 'checked'; ?>>
                            <label class="offset-right">TreeNuts</label>
                            <input class="form-check-input position-static" style="margin-left:1px;" name="TreeNuts" type="checkbox" id="blankCheckbox" value="1" aria-label="..." <?php if($item['TreeNuts'] == 1) echo 'checked'; ?>>
                            <br><label>Peanuts</label>
                            <input class="form-check-input position-static" style="margin-left:1px;" name="Peanuts" type="checkbox" id="blankCheckbox" value="1" aria-label="..." <?php if($item['Peanuts'] == 1) echo 'checked'; ?>>
                            <label class="offset-right">Shellfish</label>
                            <input class="form-check-input position-static" style="margin-left:1px;" name="Shellfish" type="checkbox" id="blankCheckbox" value="1" aria-label="..." <?php if($item['Shellfish'] == 1) echo 'checked'; ?>>
                            <label class="offset-right"> Soy</label>
                            <input class="form-check-input position-static" style="margin-left:1px;" name="Soy" type="checkbox" id="blankCheckbox" value="1" aria-label="..." <?php if($item['Soy'] == 1) echo 'checked'; ?>>
                            <label class="offset-right">Fish</label>
                            <input class="form-check-input position-static" style="margin-left:1px;" name="Fish" type="checkbox" id="blankCheckbox" value="1" aria-label="..." <?php if($item['Fish'] == 1) echo 'checked'; ?>>
                        </div>

                    <?php endforeach; ?>

                    <br>
                    <input class="btn btn-primary" name="submit" type="submit" value="Edit Recipe" />
                    <input class="btn btn-primary" name="delete" type="submit" value="Delete Recipe" />
                    <a class="btn btn-danger" href="<?php echo ROOT_PATH; ?>recipe">Cancel</a>
                </form>

            </div>

        </div>
    </div>

<?php }else{



    echo "Sorry you are not logged in as an administrator";

}
?>



<?php ?>





	
