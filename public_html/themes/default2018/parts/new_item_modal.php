<?php


?>

                <!-- Button trigger modal -->
                <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#products">
                    Add New Product
                </button>
                <!-- Modal -->
                <div class="modal fade" id="products" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title" id="myModalLabel">Create New Product</h4>
                            </div>
                            <div class="modal-body">
                                <h4>Product Name<hr />
                                    <input type="text" name="productname">
                                    <h4>Product Price<hr />
                                        <input type="number" name="price">
                                        <h4>Vendor Name<hr />
                                            <input type="text" name="vendorname">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                <button type="button" class="btn btn-primary">Insert Product</button>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!-- /.modal -->

