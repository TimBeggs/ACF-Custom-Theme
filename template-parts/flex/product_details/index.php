<?php
global $flex_content;
$detail = $flex_content['detail'];?>
<div class="astm container container-lg">
    <div class = "test_results">
        <div class="border">
            <p><span><img src = "<?php echo get_stylesheet_directory_uri() . '/assets/img/test_result.png'; ?>"></span>Product Details</p>
            <table class="tests">
                <tr>
                    <th>Test Name</th>
                    <th>Test Method</th>
                    <th>Result</th>
                </tr>
            <?php
            foreach ($detail as $detail_data) {
                $test_name = $detail_data['test_name'];
                $test_method = $detail_data['test_method'];
                $result = $detail_data['result'];?>
                <tr class="astm_item">
                    <td><?php echo $test_name; ?></td>
                    <td><?php echo $test_method; ?></td>
                    <td><?php echo $result; ?></td>
                </tr>
                <?php
            }
            ?>
            </table>
        </div>
    </div>
	<p><a href="https://www.astm.org/" target="_blank">*Average Values</a></p>
</div>
<?php