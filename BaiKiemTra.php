<!-- Phần trắc nghiệm.
Câu 1. 
Array
(
    [0] => 1
    [1] => 2
    [2] => 3
    [3] => 4
    [4] => 5
    [5] => 6
    [6] => 9
)

Câu 2. a) True

Câu 3. a) array()

Câu 4. a) readfile()

Câu 5. b) Chuyển đổi một đối tượng thành một chuỗi
-->

<!-- Phần tự luận -->
<!-- Bài 1: Viết một chương trình PHP để hiển thị dãy số Fibonacci. Yêu cầu:
- Tạo một hàm generateFibonacci nhận một số nguyên dương n và trả về dãy số Fibonacci đầu tiên có n phần tử.
- Hiển thị dãy số Fibonacci đầu tiên có 10 phần tử. -->
<?php
function generateFibonacci($n) {
    $fibonacci = array();
    for ($i = 0; $i < $n; $i++) {
        if ($i == 0) {
            $fibonacci[$i] = 0;
        } elseif ($i == 1) {
            $fibonacci[$i] = 1;
        } else {
            $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
        }
    }
    return $fibonacci;
}
$n = 10;
$daysoFibonacci = generateFibonacci($n);
echo "Dãy số Fibonacci đầu tiên có $n phần tử:\n";
echo implode(", ", $daysoFibonacci);
echo "<br>";
?>

<!-- Bài 2: Viết một ứng dụng PHP để quản lý thông tin về học sinh trong một lớp học sử dụng mảng kết hợp. Yêu cầu:
- Tạo một mảng kết hợp chứa thông tin về học sinh với các khóa như id, name, age, và grade.
- Hiển thị thông tin của tất cả học sinh trong mảng.
- Viết hàm để tìm học sinh có điểm cao nhất (grade).-->
<?php
$students = array(
    'student1' => array('id' => 1,'name' => 'Nguyen Van A','age' => 18,'grade' => 85),
    'student2' => array('id' => 2,'name' => 'Tran Thi B','age' => 17,'grade' => 92),
    'student3' => array('id' => 3,'name' => 'Hoang Minh C','age' => 16,'grade' => 78),
    'student4' => array('id' => 4,'name' => 'Le Van D','age' => 16,'grade' => 88),
    'student5' => array('id' => 5,'name' => 'Pham Thi E','age' => 18,'grade' => 95),
    'student6' => array('id' => 6,'name' => 'Vo Van F','age' => 17,'grade' => 75),
    'student7' => array('id' => 7,'name' => 'Truong Van G','age' => 18,'grade' => 80),
    'student8' => array('id' => 8,'name' => 'Nguyen Thi H','age' => 16,'grade' => 91),
    'student9' => array('id' => 9,'name' => 'Do Van I','age' => 16,'grade' => 89),
    'student10' => array('id' => 10,'name' => 'Le Thi K','age' => 17,'grade' => 82),
);
echo "<br>Thông tin học sinh:<br>";
foreach ($students as $value => $student) {
    echo "Học sinh: $value<br>";
    echo "ID: " . $student['id'] . "<br>";
    echo "Tên: " . $student['name'] . "<br>";
    echo "Tuổi: " . $student['age'] . "<br>";
    echo "Điểm: " . $student['grade'] . "<br>";
    echo "------------------------<br>";
}
function timHocSinhDiemCaoNhat($students) {
    $diemCaoNhat = 0;
    $hocsinhDiemCaoNhat = null;
    foreach ($students as $student) {
        if ($student['grade'] > $diemCaoNhat) {
            $diemCaoNhat = $student['grade'];
            $hocsinhDiemCaoNhat = $student;
        }
    }
    return $hocsinhDiemCaoNhat;
}
$hocsinhDiemCaoNhat = timHocSinhDiemCaoNhat($students);
echo "<br>Học sinh có điểm cao nhất:<br>";
echo "ID: " . $hocsinhDiemCaoNhat['id'] . "<br>";
echo "Tên: " . $hocsinhDiemCaoNhat['name'] . "<br>";
echo "Tuổi: " . $hocsinhDiemCaoNhat['age'] . "<br>";
echo "Điểm: " . $hocsinhDiemCaoNhat['grade'] . "<br>";
?>

