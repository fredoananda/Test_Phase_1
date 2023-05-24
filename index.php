<!DOCTYPE html>
<html>
<head>
    <title>Pemilihan Hari</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="days-container">
        <?php
        $daysOfWeek = array("Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu", "Minggu");
        $today = date("l");

        foreach ($daysOfWeek as $day) {
            if ($day === $today) {
                echo '<div class="day selected" onclick="selectDay(this)">' . $day . '</div>';
            } else {
                echo '<div class="day" onclick="selectDay(this)">' . $day . '</div>';
            }
        }
        ?>
    </div>

    <p id="selected-day">Hari yang dipilih adalah <span id="selected-day-value"></span>.</p>

    <script src="script.js"></script>
</body>
</html>
