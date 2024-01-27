<?php
function check_login($con) {
    if (isset($_SESSION['USER_ID'])) {
        $ID = $_SESSION['USER_ID'];
        $query = "SELECT * FROM registration WHERE USER_ID = '$ID' LIMIT 1";
        $result = mysqli_query($con, $query);
        if ($result && mysqli_num_rows($result) > 0) {
            $user_data = mysqli_fetch_assoc($result);
            return $user_data;
        }
    }
    header("Location: LOGIN.PHP");
}

function random_num($length) {
    $text = "";
    if ($length < 5) {
        $length = 5;
    }
    $len = rand(4, $length);

    for ($i = 0; $i < $len; $i++) {
        $text .= rand(0, 9);
    }
    return $text;
}
?>