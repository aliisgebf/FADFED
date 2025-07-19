<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $session_type = $_POST['session_type'];
    $gender = $_POST['gender'];
    $save_session = $_POST['save_session'];
    $duration = intval($_POST['duration']);

    $price = 0;
    if ($session_type == 'text') {
        if ($duration == 30) $price = 15;
        elseif ($duration == 60) $price = 30;
        elseif ($duration == 120) $price = 50;
    } elseif ($session_type == 'audio') {
        if ($duration == 30) $price = 30;
        elseif ($duration == 60) $price = 55;
        elseif ($duration == 120) $price = 100;
    } elseif ($session_type == 'video') {
        if ($duration == 30) $price = 50;
        elseif ($duration == 60) $price = 100;
        elseif ($duration == 120) $price = 190;
    }

    $sql = "INSERT INTO bookings (name, session_type, gender, save_session, duration, price)
            VALUES ('$name', '$session_type', '$gender', '$save_session', $duration, $price)";
    if (mysqli_query($conn, $sql)) {
        echo "<p>تم حجز الجلسة بنجاح! سيتم التواصل معك لتأكيد الدفع.</p>";
    } else {
        echo "<p>حدث خطأ أثناء الحجز: " . mysqli_error($conn) . "</p>";
    }
}
?>
