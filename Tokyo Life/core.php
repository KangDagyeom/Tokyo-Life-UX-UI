<?php
// core.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông Tin Đăng Nhập</title>
</head>
<body>
    <?php
    // Kiểm tra xem form có được gửi không
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Kiểm tra xem các trường có tồn tại trong $_POST không
        if (isset($_POST['username']) && isset($_POST['password'])) {
            // Lấy dữ liệu từ form
            $username = htmlspecialchars($_POST['username']);
            $password = htmlspecialchars($_POST['password']);

            // Hiển thị thông tin
            echo "<h1>Thông Tin Đăng Nhập</h1>";
            echo "<p>Tên đăng nhập: $username</p>";
            echo "<p>Mật khẩu: $password</p>"; // Lưu ý: Không nên hiển thị mật khẩu trong thực tế

            // Lưu thông tin vào file output.txt
            $file = 'output.txt';
            $content = "Tên đăng nhập: $username\nMật khẩu: $password\n";
            file_put_contents($file, $content, FILE_APPEND); // Ghi vào file
        } else {
            echo "<p>Không có dữ liệu được gửi.</p>";
        }
    } else {
        echo "<p>Không có dữ liệu được gửi.</p>";
    }
    ?>
</body>
</html>