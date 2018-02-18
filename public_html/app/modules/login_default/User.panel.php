<?php
/**
 * Created by Doxramos.
 * Powered by JQuery, Font-Awesome, and Bootstrap
 * Copyright Doxramos Web Development
 *
 */
$user = new \user\user();
?>
<a href="javascript:void();" data-toggle="modal" class="text-center" data-target="#loginModal"><?php echo $user->UserDetail(UserID(), "username"); ?><img src="<?php echo $user->generateGravatar($user->UserDetail(UserID(), "email"), "40"); ?>"></a>

<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalTitle"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center" id="loginModalTitle">Your Profile</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="fas fa-times"></i></span>
                </button>
            </div>
            <div class="modal-body">

                <div class="text-center"><img src="<?php echo $user->generateGravatar($user->UserDetail(UserID(), "email")); ?>"></div>
                <form id="default_logout">
                    <button type="submit" class="btn btn-danger">Logout</button>
                </form>

            </div>
            <div class="modal-footer">
                <div class="col-lg-2">

                </div>
                <div class="col-lg-4"></div>
                <div class="col-lg-6">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>


                <button type="submit" class="btn btn-primary">Save Changes</button>
                </div>
            </div>
        </div>
    </div>
</div>

