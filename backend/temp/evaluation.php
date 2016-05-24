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
        <h1>Soalan Penilaian</h1>
    </div>

    <div class="row">

        <div class="col-lg-12">

            <br><br>
            <div class="card card-block">
                <div class="card-heading">
                    <h3 class="card-title">Senarai Soalan Penilaian</h3>
                </div>
                <div class="card-body">
                    <div class="pull-right">
                        <button class="btn btn-primary" class="add_new_user" id="add_new_user"><i class="glyphicon glyphicon-plus"></i>&nbsp;&nbsp;Tambah Soalan</button>
                    </div>
                    <br>

                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead class="thead-default">
                            <tr>
                                <th class="table-responsive">No</th>
                                <th>Soalan</th>
                                <th class="table-responsive">Mata Demerit</th>
                                <th>Tindakan</th>
                            </tr>
                            </thead>



                            <tbody>

                            <?php
                            include '../dbcon.php';
                            $sql = "SELECT * FROM soalan";
                            $query =  mysqli_query($conn, $sql);
                            $rows = mysqli_num_rows($query);
                            if($rows>0)
                            {
                                while($data = mysqli_fetch_array($query))
                                {
                                    ?>
                                    <tr class="user_<?php echo $data['id']; ?>">
                                        <td><?php echo $data['id']; ?></td>
                                        <td><?php echo $data['soalan']; ?></td>
                                        <td><?php echo $data['mata_demerit']; ?></td>
                                        <td>
                                            <a href="javascript:void(0);" onclick="edit_question('<?php echo $data['id']; ?>')"><i class="glyphicon glyphicon-pencil"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
                                            <a href="javascript:void(0);" onclick="delete_question('<?php echo $data['id']; ?>')"><i class="glyphicon glyphicon-trash"></i></a>
                                        </td>
                                    </tr>
                                    <?php
                                }
                            } /*if condition*/
                            ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->

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

<div class="modal fade" id="add_new_user_modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Isi Maklumat</h4>
            </div>
            <div class="modal-body">
                <form method="POST" role="form">

                    <div class="form-group">
                        <label for="">Soalan</label>&nbsp;&nbsp;&nbsp;<span class="f_name_error error"></span>
                        <input type="text" class="form-control" id="question" name="question" placeholder="Soalan Penilaian">
                    </div>

                    <div class="form-group">
                        <label for="">Mata Demerit</label>&nbsp;&nbsp;&nbsp;<span class="phone_error error"></span>
                        <input type="text" class="form-control" id="d_mark" name="d_mark" placeholder="Mata Demerit">
                    </div>

                    <input type="hidden" id="action" name="action" value="add">
                    <input type="hidden" id="id" name="id" value="">
                    <button type="button" id="submit" class="btn btn-primary">Submit</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </form>
            </div>
            <!-- <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div> -->
        </div>
    </div>
</div>

<!-- Script for add new data -->
<script type="text/javascript">
    $("#add_new_user").click(function(){
        $("#action").val("add");
        $("#id").val("");
        $('#question').val("");
        $('#d_mark').val("");
        $("#id").val("");
        $("#add_new_user_modal").modal('show');
    });

    $("#submit").click(function(){
        var question = $('#question').val();
        var d_mark = $('#d_mark').val();

        var html = "";
        var d_mark_validate = "";
        var action = $("#action").val();
        var id = $("#id").val();
        var valid = true;

        if(question == "" || question == null)
        {
            valid = false;
            $(".question_error").html("* Maklumat ini diperlukan.");
        }
        else
        {
            $(".question_error").html("");
        }

        if(d_mark == "")
        {
            valid = false;
            $(".d_mark_error").html("* Maklumat ini diperlukan.");
        }
        else
        {
            d_mark_validate = isDmark(dmark);
            if(!d_mark_validate)
            {
                valid = false;
                $(".d_mark_error").html("* Mata demerit mesti mengandungi nombor sahaja. E.g. 01,05,10,99");
            }
            else
            {
                $(".d_mark_error").html("");
            }
        }

        if(valid == true)
        {
            var form_data = {
                question : question,
                d_mark : d_mark,
                action : action,
                id : id
            };

            $.ajax({
                url : "evaluation-insert.php",
                type : "POST",
                data : form_data,
                dataType : "json",
                success: function(response){
                    if(response['valid']==false)
                    {
                        alert(response['msg']);
                    }
                    else
                    {
                        if(action == 'add')
                        {
                            $("#add_new_user_modal").modal('hide');
                            html += "<tr class=user_"+response['id']+">";
                            html += "<td>"+response['question']+"</td>";
                            html += "<td>"+response['d_mark']+"</td>";
                            html += "<td><a href='javascript:void(0);' onclick='edit_question("+response['id']+");'><i class='glyphicon glyphicon-pencil'></i></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href='javascript:void(0);' onclick='delete_question("+response['id']+");'><i class='glyphicon glyphicon-trash'></i></a></td>";
                            html += "<tr>";
                            $("#usersdata").append(html);
                        }
                        else
                        {
                            window.location.reload();
                        }
                    }
                }
            });
        }
        else
        {
            return false;
        }
    });

    /*Function for validate email*/
    function isDmark(dmark) {
        if(dmark.length<=2)
        {
            if (dmark.match(/^\d{2}/)) {
                return true;
            }
            else
            {
                return false;
            }
        }
        else
        {
            return false;
        }
    }

    function edit_question(id) {
        var form_data = {
            id : id
        };
        $.ajax({
            url : "evaluation-update.php",
            method : "POST",
            data : form_data,
            dataType : "json",
            success : function(response) {
                $('#question').val(response['soalan']);
                $('#d_mark').val(response['mata_demerit']);
                $("#id").val(response['id']);
                $("#add_new_user_modal").modal('show');
                $("#action").val("edit");
            }
        });
    }

    function delete_question(id) {
        var form_data = {
            id : id
        };
        $.ajax({
            url : "evaluation-delete.php",
            method : "POST",
            data : form_data,
            success : function(response) {
                $(".user_"+id).css("background","red");
                $(".user_"+id).fadeOut(1000);
            }
        });
    }
</script>
</html>