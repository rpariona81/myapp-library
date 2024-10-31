<div class="box-body">
    <div class="table-responsive">
        <table class="table no-margin">
            <thead>
                <tr>
                    <th>ID#</th>
                    <th>Product Name</th>
                    <th>SKU</th>
                    <th>Price</th>
                    <th>Is Active</th>
                    <th>Created At</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php if (! empty($users)) { ?>
                    <?php foreach ($users as $product) { ?>
                        <tr>
                            <td width="40px"><?php echo $product->id ?></a></td>
                            <td><?php echo $product->username ?></td>
                            <td><?php echo $product->email  ?></td>
                            <td><?php echo $product->remember_token  ?></td>
                            <td>
                                <?php echo ($product->status) ? '<span class="label label-success">Enabled</span>' : '<span class="label label-danger">Disabled</span>' ?>
                            </td>
                            <td><?php echo $product->created_at  ?></td>
                            <td class="action">
                                <?php echo anchor('', 'Edit', array('title' => 'Edit')) ?>
                            </td>
                        </tr>
                    <?php } ?>
                <?php } else { ?>
                    <tr>
                        <td colspan="8" class="no-records">No records</td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
<div class="box-footer">
    <ul class="pagination">
        <?php echo $pagelinks ?>
    </ul>
</div>


<hr />
<footer class="text-center">
    <p>© <?php echo date('Y') ?> truecodex.com</p>
</footer>


</body>

</html>