<div class="row">
    <div class="col-sm-12">
        <h1>Brand</h1>
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Brand</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $get_br = "select * from brands";
            $run_br = mysqli_query($con,$get_br);
            $count_br = mysqli_num_rows($run_br);
            if($count_br==0){
                echo "<h2> No category found in selected criteria </h2>";
            }
            else {
                $i = 0;
                while ($row_pro = mysqli_fetch_array($run_br))
                {
                    $br_id = $row_pro['brand_id'];
                    $br_title = $row_pro['brand_title'];
                    ?>
                    <tr>
                        <th scope="row"><?php echo ++$i; ?></th>
                        <td><?php echo $br_title; ?></td>
                        <td><a href="index.php?edit_br=<?php echo $br_id?>" class="btn btn-primary">
                                <i class="fa fa-edit"></i> Edit
                            </a>
                            <a href="index.php?del_br=<?php echo $br_id?>" class="btn btn-danger">
                                <i class="fa fa-trash-alt"></i> Delete
                            </a>
                        </td>
                    </tr>
                    <?php
                }
            }
            ?>
            </tbody>
        </table>
    </div>
</div>