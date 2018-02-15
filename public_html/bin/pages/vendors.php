<div class="panel panel-default">
    <div class="panel-heading">
        <?php echo GetUserActiveTeam(); ?>'s Vendor List
    </div>
    <!-- /.panel-heading -->
    <div class="panel-body">
        <div class="col-sm-1">
        <select name="dataTables-example_length" aria-controls="dataTables-example" id="resultlimit" class="form-control input-sm">
            <option value="10">Result Limit</option>
            <option value="10">10</option>
            <option value="25">25</option>
            <option value="50">50</option>
            <option value="100">100</option>
        </select>
        </div>
        <?php
            if (!isset($_GET['page'])) {
                $page = 1;
            } else {
                $page = $_GET['page'];
            }
            if (!isset($_GET['limit'])) {
                $limit = 10;
            } else {
                $limit = $_GET['limit'];
            }
        ?>
            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
            <thead>
            <tr>
                <th>Vendor Name</th>
                <th>Vendor Address</th>
                <th>Vendor Phone</th>
                <th>Vendor Email</th>
                <th>Edit Vendor</th>
            </tr>
            </thead>
            <tbody id="vendortable">
            <?php require_once 'vendor_table.php'; ?>

            </tbody>
        </table>
        <?php echo CreateLinks($limit, $page); ?>
        <script>

        </script>