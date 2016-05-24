<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include('../include/head.php');
    ?>
</head>
<body>

<div class="pos-f-t">
    <?php include('../include/navbar.php'); ?>
</div>

<div class="container">
    <div class="page-header m-t-1">
        <h1>Gerai Makanan</h1>
    </div>

    <div class="row">

        <div class="col-lg-12">
            <a href="index.php?page=tambah-gerai"
            <button type="button" class="btn btn-primary">  Tambah Gerai</button></a><br><br>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Senarai Gerai Makanan</h3>
                </div>
                <div class="panel-body">

                    <div class="table-responsive">
                        <table class="table table-bordered table-hover table-striped">
                            <thead width="100%">
                            <tr>
                                <th>No</th>
                                <th>ID Syarikat</th>
                                <th>Nama Syarikat</th>
                                <th>Nama Pemilik</th>
                                <th>Tindakan</th>
                            </tr>
                            </thead>
                            <tbody>

                            <?php
                            $i = 1;
                            if($rownum==0){ ?>
                                <tr>
                                    <td colspan="5"><center>-- Tiada Data--</center></td>
                                </tr>
                            <?php 	}else{
                                foreach ($gerai as $data_premis ) {?>



                                    <tr>
                                        <td><?php echo $i++;?></td>
                                        <td><?php echo $data_premis['nodaftar'];?></td>
                                        <td><?php echo $data_premis['namasyarikat'];?></td>
                                        <td><?php echo $data_premis['pronama'];?></td>
                                        <td>

                                            <button type="button" onclick="updateGerai(<?php echo $data_premis['syarikatid'];?>)" class="btn btn-xs btn-success">Kemaskini</button>
                                            <button type="button" class="btn btn-xs btn-danger" onclick="deleteGerai(<?php echo $data_premis['syarikatid'];?>)">Padam</button>
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
            </div>
        </div>
    </div>

</div>







    <?php
        include('../include/footer.php');
    ?>




<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->

</body>
</html>