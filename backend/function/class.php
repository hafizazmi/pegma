<?php
function getParam($mysqli, $value){
    $v =  $mysqli->query("SELECT * FROM parameters WHERE id='$value'");
    $d = $v->fetch_array();
    return $d['text_ms'];
}
function getState($mysqli, $value){
    $v =  $mysqli->query("SELECT * FROM negeri_wilayah WHERE nid='$value'");
    $d = $v->fetch_array();
    return $d;
}
function getUserName($mysqli, $val){
    $data = mysqli_fetch_array($mysqli->query("SELECT * FROM users WHERE id='$val'"));
    return $data['name'];
}
function getUserNameByProfileID($mysqli, $val){
    $data = mysqli_fetch_array($mysqli->query("SELECT * FROM users WHERE profile_id='$val'"));
    return $data['username'];
}
function getQualification($mysqli, $dept, $prog){
    $studata = mysqli_fetch_array($mysqli->query("SELECT * FROM study_programme WHERE id='$prog'"));
    $deptdata = mysqli_fetch_array($mysqli->query("SELECT * FROM department WHERE id='$dept'"));
    return $deptdata['code'] . ' - ' . $studata['study_program'];
}
function dateFormatdMY($val)
{
    return date("d/m/Y", strtotime($val));
}
function dateFormatdMYhisA($val)
{
    return date("d/m/Y h:i:s A", strtotime($val));
}


?>