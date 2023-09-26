<?php
require_once("..\..\config.php");
if (isset($_GET['id'])) {

    // Lấy id từ tham số URL
    $id = $_GET['id'];

    // Thực hiện xử lý đổi vị trí hàng

    // Kết nối CSDL
    $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    // Kiểm tra kết nối
    if (!$conn) {
        die("Kết nối CSDL thất bại: " . mysqli_connect_error());
    }

    // Lấy thông tin hàng
    $sql = "SELECT * FROM address WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // Có kết quả, lấy thông tin hàng
        $row = mysqli_fetch_assoc($result);
        $name = $row['name'];
        $address = $row['address'];

        // Đổi vị trí hàng lên đầu tiên
        $updateSql = "UPDATE address SET order_column = 0 WHERE id = '$id'";
        mysqli_query($conn, $updateSql);

        // Đóng kết nối
        mysqli_close($conn);

        // Hiển thị thông báo thành công
        redirect("..\..\..\public\admin\index_user.php?address");
    } else {
        // Không có kết quả, không thể đổi vị trí hàng
        redirect("..\..\..\public\admin\index_user.php?address");
    }
} else {
    redirect("..\..\..\public\admin\index_user.php?address");
}
?>
