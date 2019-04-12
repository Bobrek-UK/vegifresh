<?php
/**
 * Created by PhpStorm.
 * User: Bobrek
 * Date: 21/02/2019
 * Time: 19:08
 */
?>

<div class="pagewide">
    <br><br>
    <div class="contentbox">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title" style="margin-bottom:15px;">Enter Customer Code</h3>
            </div>
            <div class="panel-body">
                <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>" >
                    <div class="form-group">

                        <input type="text" name="custcode" class=""  />
                    </div>

                    <input class="btn btn-primary" name="submit" type="submit" value="Submit" />
                </form>
            </div>
        </div>
    </div>
</div>
