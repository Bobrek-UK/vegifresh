<div class="pagewide">
    <br><br>
    <div class="contentbox">

        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Register</h3>
                <br>
            </div>
            <div class="panel-body">
                <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
                    <div class="form-group">
                        <label style="margin-right:4px;"><strong>User email address</label>
                        <input type="email" name="email" required class="" />
                    </div>
                    <div class="form-group">
                        <label>Choose a username</label>
                        <input type="text" name="username" required class="" />
                    </div>
                    <div class="form-group">
                        <label style="margin-right:2px;">Choose a password</label>
                        <input type="password" name="password" required class="" />
                    </div>
                    <div class="form-group">
                        <label style="margin-right:8px;">Confirm password</strong></label>
                        <input type="password" name="password2" required class="" />
                    </div>
                    <?php
                    if(isset($_SESSION['admin'])) { ?>
                        <div class="form-check"> <label>Make new user an administrator?</label>
                            <input class="form-check-input position-static" style="margin-left:1px;" name="admincheck" type="checkbox" id="blankCheckbox" value="1" aria-label="...">
                        </div>
                        <div style="height:11px;"></div>
                    <?php } ?>

                    <input class="btn btn-primary" name="submit" type="submit" value="Submit" />
                </form>
            </div>
        </div>
    </div>
</div>