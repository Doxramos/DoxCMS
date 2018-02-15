<?php


?>
                <!-- Button trigger modal -->
                <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#vendor">
                    Add New Vendor
                </button>
                <!-- Modal -->
                <div class="modal fade" id="vendor" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title" id="myModalLabel">Create New Vendor</h4>
                            </div>
                            <div class="modal-body">
                                <form id="createvendor">
                                    <input name="process" value="createVendor" type="hidden">
                                    <input name="doAfter" value="alert" type="hidden" id="doAfter">
                                    <input name="teamsession" value="<?php echo $_SESSION['teamID']; ?>" type="hidden">
                                        <div class="col-lg-12"><i>All Fields marked with an asterisk (*) are required</i></div>
                                    <div class="row">
                                    <div class="col-lg-4">*Vendor Name</div>
                                    <div class="col-lg-4">*Vendor Phone</div>
                                    <div class="col-lg-4">*Vendor Email</div>

                                    <div class="col-lg-4"><input type="text" name="vendorname" required></div>
                                    <div class="col-lg-4"><input type="tel" name="vendorphone" onkeypress='return event.charCode >= 48' maxlength="11" required></div>
                                    <div class="col-lg-4"><input type="email" name="vendoremail" required></div>

                                    <div class="col-lg-4">Street Address</div>
                                    <div class="col-lg-4">City</div>
                                    <div class="col-lg-4">State</div>
                                    <div class="col-lg-4"><input type="text" name="street"></div>
                                    <div class="col-lg-4"><input type="text" name="city"></div>
                                        <div class="col-lg-4"><select class="input-sm" name="state"><?php echo StateListOptions(); ?></select></div>
                                        <div class="row">
                                    </div>
                                    </div>

                                    <hr>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                <input type="submit" value="Create Vendor" class="btn btn-success">
                            </form>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!-- /.modal -->
            <!-- .panel-body -->
        <!-- /.panel -->
    <!-- /.row -->
