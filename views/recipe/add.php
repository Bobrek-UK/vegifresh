<?php
if(isset($_SESSION['admin'])) { ?>

    <div style="width:100%; text-align:center; margin-top:20px;" >
        <h2>Add New Recipe</h2>
    </div>

    <div class="pagewideish" style="height:1px; background-color:black; margin-bottom:20px;"></div>


    <div class="pagewide">
        <div class="contentboxsingle">

            <div class="panel-body">

                <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
                    <div class="form-group">
                        <label><strong>Recipe Name</label>
                        <input type="text" name="name" class="form-control" style="width:300px; margin:auto;" />
                    </div>
                    <div class="form-group">
                        <label>Nation of Origin</label>
                        <input type="text" name="nationality" class="form-control" style="width:300px; margin:auto;" />
                    </div>
                    <div class="form-group">
                        <label>Instructions</label>
                        <textarea name="instructions" class="form-control" style="max-width:1000px; margin:auto;"
                                  oninput='this.style.height = "";this.style.height = this.scrollHeight + 3 + "px"'></textarea>
                    </div>
                    <div class="form-group">
                        <label>Image</label>
                        <input type="text" name="image" class="form-control" style="width:300px; margin:auto;" />
                    </div>
                    <br>
                    <div>
                        <p>Meets dietary requirements for:</strong></p>
                    </div>
                    <div class="form-check"> <label>Vegetarian</label>
                        <input class="form-check-input position-static" style="margin-left:1px;" name="Vegetarian" type="checkbox" id="blankCheckbox" value="1" aria-label="...">
                        <label class="offset-right">Vegan</label>
                        <input class="form-check-input position-static" style="margin-left:1px;" name="Vegan" type="checkbox" id="blankCheckbox" value="1" aria-label="...">
                    </div>
                    <br>
                    <div>
                        <p><strong>Contains these allergens:</strong></p>
                    </div>
                    <div class="form-check"> <label>Dairy</label>
                        <input class="form-check-input position-static" style="margin-left:1px;" name="Dairy" type="checkbox" id="blankCheckbox" value="1" aria-label="...">
                        <label class="offset-right">Eggs</label>
                        <input class="form-check-input position-static" style="margin-left:1px;" name="Eggs" type="checkbox" id="blankCheckbox" value="1" aria-label="...">
                        <label class="offset-right">Wheat</label>
                        <input class="form-check-input position-static" style="margin-left:1px;" name="Wheat" type="checkbox" id="blankCheckbox" value="1" aria-label="...">
                        <label class="offset-right">TreeNuts</label>
                        <input class="form-check-input position-static" style="margin-left:1px;" name="TreeNuts" type="checkbox" id="blankCheckbox" value="1" aria-label="...">
                        <br><label>Peanuts</label>
                        <input class="form-check-input position-static" style="margin-left:1px;" name="Peanuts" type="checkbox" id="blankCheckbox" value="1" aria-label="...">
                        <label class="offset-right">Shellfish</label>
                        <input class="form-check-input position-static" style="margin-left:1px;" name="Shellfish" type="checkbox" id="blankCheckbox" value="1" aria-label="..." >
                        <label class="offset-right"> Soy</label>
                        <input class="form-check-input position-static" style="margin-left:1px;" name="Soy" type="checkbox" id="blankCheckbox" value="1" aria-label="...">
                        <label class="offset-right">Fish</label>
                        <input class="form-check-input position-static" style="margin-left:1px;" name="Fish" type="checkbox" id="blankCheckbox" value="1" aria-label="...">
                    </div>

                    <input class="btn btn-primary" name="submit" type="submit" value="Submit" />
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