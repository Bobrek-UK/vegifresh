<?php
if(isset($_SESSION['admin'])) { ?>

    <div style="width:100%; text-align:center; margin-top:20px;" >
        <h2>Edit Weekly Meal Set</h2>
    </div>

    <div class="pagewide" style="height:1px; background-color:black; margin-bottom:20px;"></div>

    <div class="pagewide">
        <div class="contentbox" style="padding-left:25px; padding-right:25px;">



            <div class="panel-body">

                <form  method="post" action="<?php $_SERVER['PHP_SELF']; ?>" >
                    <?php foreach($viewmodel as $item) : ?>
                        <div class="form-group">
                            <label><strong>Week ID</label>
                            <input type="text" name="wid" readonly value="<?=$item['wid']?>"  class="form-control" />
                        </div>
                        <div class="form-group">
                            <label>Recipe ID</label>
                            <input type="date" name="delivery" value="<?=$item['deliverydate']?>" class="form-control" />
                        </div>
                        <div class="form-group">
                            <label>Recipe ID</label>
                            <input type="text" name="rid1" value="<?=$item['rid1']?>" class="form-control" />
                        </div>
                        <div class="form-group">
                            <label>Recipe ID</label>
                            <input type="text" name="rid2" value="<?=$item['rid2']?>" class="form-control" />
                        </div>
                        <div class="form-group">
                            <label>Recipe ID</label>
                            <input type="text" name="rid3" value="<?=$item['rid3']?>" class="form-control" />
                        </div>
                        <div class="form-group">
                            <label>Recipe ID</label>
                            <input type="text" name="rid4" value="<?=$item['rid4']?>" class="form-control" />
                        </div>
                        <div class="form-group">
                            <label>Recipe ID</label>
                            <input type="text" name="rid5" value="<?=$item['rid5']?>" class="form-control" />
                        </div>

                        <div class="form-check"> <label>Available for Purchase</strong></label>
                            <input class="form-check-input position-static" style="margin-left:5px;" name="available" type="checkbox" id="blankCheckbox" value="1" aria-label="..." <?php if($item['available'] == 1) echo 'checked'; ?>>
                        </div>


                    <?php endforeach; ?>

                    <br>
                    <input class="btn btn-primary" name="submit" type="submit" value="Edit Set" />
                    <input class="btn btn-primary" name="delete" type="submit" value="Delete Set" />
                    <a class="btn btn-danger" href="<?php echo ROOT_PATH; ?>recipeset">Cancel</a>
                </form>

            </div>

        </div>
    </div>


<?php }else{



    echo "Sorry you are not logged in as an administrator";

}
?>



<?php ?>





	
