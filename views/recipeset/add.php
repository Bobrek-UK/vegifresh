<?php
if(isset($_SESSION['admin'])) { ?>

    <div style="width:100%; text-align:center; margin-top:20px;" >
        <h2>Add New Weekly Meal Set</h2>
    </div>

    <div class="pagewide" style="height:1px; background-color:black; margin-bottom:20px;"></div>

    <div class="pagewide">
        <div class="contentbox">
            <div class="panel-body">
                <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
                    <div class="form-group">
                        <label style="margin-left:-12px;"><strong>Delivery Date</label>
                        <input type="date" name="delivery" required class="" />
                    </div>
                    <div class="form-group">
                        <label>Recipe ID 1</label>
                        <input type="text" name="rid1" required class="" />
                    </div>
                    <div class="form-group">
                        <label>Recipe ID 2</label>
                        <input type="text" name="rid2" required class="" />
                    </div>
                    <div class="form-group">
                        <label>Recipe ID 3</label>
                        <input type="text" name="rid3" required class="" />
                    </div>
                    <div class="form-group">
                        <label>Recipe ID 4</label>
                        <input type="text" name="rid4" required class="" />
                    </div>
                    <div class="form-group">
                        <label>Recipe ID 5</label>
                        <input type="text" name="rid5" required class="" />
                    </div>
                    <div class="form-group">
                        <label>Customer Code (8 characters exactly)</label>
                        <input type="text" name="code" required class="" />
                    </div>
                    <div class="form-check"> <label>Available for Purchase</strong></label>
                        <input class="form-check-input position-static" style="margin-left:5px;" name="available" type="checkbox" id="blankCheckbox" value="1" aria-label="...">
                    </div>
                    <input class="btn btn-primary" name="submit" type="submit" value="Submit" />
                </form>
            </div>
        </div>
    </div>
    </div>


    <div class="pagewide" style="height:1px; background-color:black; margin-bottom:20px;"></div>

    <div style="width:100%; text-align:center; margin-top:20px;" >
        <h4>Recipe List</h4>
    </div>

    <div class="pagewide">
        <?php foreach($viewmodel as $item) : ?>

            <div class="contentboxsmall">

                <strong>ID:</strong><?php echo $item['id']; ?>
                <?php echo $item['name']; ?>
                <br>
            </div>

        <?php endforeach; ?>
    </div>

<?php }else{



    echo "Sorry you are not logged in as an administrator";

}
?>



<?php ?>