<?php
/**
 * Created by Doxramos.
 * Powered by JQuery, Font-Awesome, and Bootstrap
 * Copyright Doxramos Web Development
 *
 */
DEFINE("__DEFAULT_LOGIN_MODULE_P", ReplaceSlashes(dirname(__file__)));


    ?>
    <input type="hidden" name="login_default_functionURL" id="login_default_functionURL" value="<?php echo ConvertToURL(ReplaceSlashes(dirname(__file__).'/function.d.php')); ?>">

    <!--TODO Create Bootstrap 4 loader-->
    <!-- Button trigger modal -->

Sign in or Create an Account<a href="javascript:void();" data-toggle="modal" class="text-center" data-target="#loginModal"><i class="fas fa-user-circle fa-3x"></i></a>

    <!-- Modal -->
    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalTitle"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-center" id="loginModalTitle">Sign In</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fas fa-times"></i></span>
                    </button>
                </div>
                <div class="modal-body">
                    <style>
                        .fa_placeholder {
                            font-family: "Font Awesome 5 Free";
                            font-weight: 900;
                        }
                        .big-icon {
                            font-size:104px;
                        }
                    </style>
                    <div class="text-center"><i class="fas fa-user-secret big-icon"></i></div>
                    <br />
                    <form id="login_form_default">
                    <input type="hidden" name="process" id="process" value="login_default">
                    <div class="text-center">
                        <input type="text" class="form-control fa_placeholder" id="inlineFormInputGroup" name="login_username"
                           placeholder="&#xf2bd; Username">
                        <br />
                    <br/>
                    <input type="password" class="form-control fa_placeholder" id="inlineFormInputGroup" name="login_password"
                           placeholder="&#xf023; Password">
                    <br/>
                    <a href="javascript:void();" data-toggle="modal" data-dismiss="modal" data-target="#forgotModal">Forgot
                        Username or Password</a>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                    <button type="button" class="btn btn-secondary" data-dismiss="modal" data-target="#registerModal"
                            data-toggle="modal">Create Account
                    </button>
                    <button type="submit" class="btn btn-primary">Sign In</button>
                </div></form>
                </div>
            </div>
        </div>


    <!--Register Modal-->

    <div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="loginModalTitle"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-center" id="loginModalTitle">Create New Account</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fas fa-times"></i></span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="text" class="form-control fa_placeholder" id="inlineFormInputGroup"
                           placeholder="&#xf0e0; Email"><br/>
                    <input type="text" class="form-control fa_placeholder" id="inlineFormInputGroup"
                           placeholder="&#xf2bd; Username"><br/>
                    <input type="text" class="form-control fa_placeholder" id="inlineFormInputGroup"
                           placeholder="&#xf023; Password"><br/>
                    <input type="text" class="form-control fa_placeholder" id="inlineFormInputGroup"
                           placeholder="&#xf023; Password Confirm"><br/>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                    <button type="button" class="btn btn-secondary" data-dismiss="modal" data-target="#loginModal"
                            data-toggle="modal">Sign In
                    </button>
                    <button type="button" class="btn btn-primary">Create Account</button>
                </div>
            </div>
        </div>
    </div>

    <!--Register Modal-->

    <div class="modal fade" id="forgotModal" tabindex="-1" role="dialog" aria-labelledby="loginModalTitle"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-center" id="loginModalTitle">Forgot Username or Password</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fas fa-times"></i></span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal" data-target="#loginModal"
                            data-toggle="modal">Cancel
                    </button>

                    <button type="button" class="btn btn-primary">Send Reset Link</button>
                </div>
            </div>
        </div>
    </div>



