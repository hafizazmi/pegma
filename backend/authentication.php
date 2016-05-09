<?php
session_start();
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
header('Content-Type: text/html');
extract($_REQUEST);
include('class/connection.class.php');
$mysqli = connect();
include('function/trim_data.php');
include('function/class.php');
function VisitorIP()
{
    if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $TheIp = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else $TheIp = $_SERVER['REMOTE_ADDR'];

    return trim($TheIp);
}

$Users_IP_address = VisitorIP();
$_SESSION['ip_login'] = $Users_IP_address;

$username = trim_input($mysqli, $username);
$sql = $mysqli->query("select * from pengguna where nama_pengguna = '$username'");
$row = $sql->fetch_array();
$count = $sql->num_rows;
if ($row['status'] == 3 || $row['status'] == 4) {
    ?>
    <script>
        alert("Akaun anda telah digantung! Sila hubungi pihak pendatbir");
        window.location.href = 'index.php';
    </script>
    <?php
} else if ($row['status'] == 6) { ?>
    <script>
        alert("Akaun anda masih tunggu pengesahan dari pihak pentadbir");
        window.location.href = 'index.php';
    </script>
    <?php
} else {
    if (password_verify($password, $row['kata_laluan'])) {
        if (isset($keep)) {
            setcookie("id", $row['id'], time() + 7200);
        }
        $_SESSION['id'] = $row['id'];
        $_SESSION['level'] = getParam($mysqli, $row['jenis']);
        $_SESSION['type'] = $row['jenis'];
        $_SESSION['name'] = $row['nama_pengguna'];
        $_SESSION['email'] = $row['email'];




        if (isset($_SESSION['id']) || isset($_COOKIE['id'])) {
            if ($_SESSION['type'] == 9) {

                ?>
                <script>
                    window.location.href = 'admin/index.php';
                </script>
                <?php
            } else {



                ?>
                <script>
                    window.location.href = 'index.php';
                </script>
            <?php }
        } else {
            ?>
            <script>
                window.location.href = 'index.php';
            </script>
            <?php
        }

    } else {
//        if ($qo != '1') {
        ?>
        <script>
            alert('Username atau password yang telah dimasukkan adalah tidak sah. Cuba lagi sekali.');
            window.history.back();
        </script>
        <?php
//        }
    }
//
}
?>