<?php
include '../dbcon.php';
$question = $d_mark = "";
$valid = true;
if(isset($_POST['question']) && !empty($_POST['question']))
{
    $question = mysqli_real_escape_string($conn,$_POST['question']);
}
else
{
    $valid = false;
    $error .= "* Soalan diperlukan.\n";
    $question = '';
}

if(isset($_POST['d_mark']) && !empty($_POST['d_mark']))
{
    $d_mark = $_POST['d_mark'];
    if (!preg_match("/^\d{2}/",$d_mark)) {
        $valid = false;
        $error .= "* Mata demerit tak sah";
        $d_mark = '';
    }
    else
    {
        $d_mark = $_POST['d_mark'];
    }
}
else
{
    $valid = false;
    $error .= "* Mata Demerit diperlukan.\n";
    $d_mark = '';
}

if(isset($_POST['action']) && !empty($_POST['action']))
{
    $action = $_POST['action'];
}
else
{
    $action = "";
}

if(isset($_POST['id']) && !empty($_POST['id']))
{
    $id = $_POST['id'];
}
else
{
    $id = "";
}

if($valid)
{
    if($action == 'add')
    {
        $sql = "INSERT INTO soalan (id, soalan, mata_demerit) VALUES (NULL, '$question', '$d_mark',)";
        $query = mysqli_query($conn, $sql);
        if($query)
        {
            $retrive_sql = "SELECT * FROM soalan WHERE is = (SELECT MAX(id) FROM soalan)";
            $retrive_query = mysqli_query($conn, $retrive_sql);
            if($retrive_query)
            {
                $data = mysqli_fetch_assoc($retrive_query);
                echo json_encode($data);
            }
        }
        else
        {
            $data = array("valid"=>false, "msg"=>"Maklumat tidak dimasukkan.");
            echo json_encode($data);
        }
    }

    if($action == 'edit')
    {
        $sql = "UPDATE soalan SET soalan = '$question', mata_demerit = '$d_mark' WHERE id = '$id' ";
        $query = mysqli_query($conn, $sql);
        if($query)
        {
            $data = array("valid"=>true, "msg"=>"Maklumat berjaya dikemaskini.");
            echo json_encode($data);
        }
        else
        {
            $data = array("valid"=>false, "msg"=>"Maklumat tidak dikemaskini.");
            echo json_encode($data);
        }
    }

}
else
{
    $resp = [];
    $resp =	array("valid"=>false, "msg"=>$error);
    echo json_encode($resp);
}

?>