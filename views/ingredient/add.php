<?php
if(isset($_SESSION['admin'])) { ?>

    <div style="width:100%; text-align:center; margin-top:20px;" >
        <h2>Add New Ingredient</h2>
    </div>

    <div class="pagewideish" style="height:1px; background-color:black; margin-bottom:20px;"></div>

    <div class="pagewide">
        <div class="contentbox">

            <div class="panel-body">

                <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
                    <div class="form-group">
                        <label><strong>Ingredient Name</label>
                        <input type="text" name="name" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label>County Grown</strong></label>
                        <input type="text" name="county" class="form-control" />
                    </div>
                    <input class="btn btn-primary" name="submit" type="submit" value="Submit" />
                    <a class="btn btn-danger" href="<?php echo ROOT_PATH; ?>hardware">Cancel</a>
                </form>

            </div>
        </div>
    </div>
    </div>



<?php }else{



    echo "Sorry you are not logged in";

}
?>



<?php ?>