<!-- 1.Viết chương trình PHP để kiểm tra xem một số có phải là số chẵn hay không.  -->
<?php
function laSoChan($so) {
    if ($so % 2 == 0) {
        return true; // Số chẵn
    } else {
        return false; // Số lẻ
    }
}
$so = 14;
if (laSoChan($so)) {
    echo "$so là số chẵn";
} else {
    echo "$so là số lẻ";
}
echo "<br>";
?>

<!-- 2. Viết chương trình PHP để tính tổng của các số từ 1 đến n. -->
<?php
function tinhTong($n) {
    $tong = 0;
    for ($i = 1; $i <= $n; $i++) {
        $tong += $i;
    }
    return $tong;
}
$n = 5; 
echo "Tổng của các số từ 1 đến $n là: " . tinhTong($n);
echo "<br>";
?>

<!-- 3. Viết chương trình PHP để in ra bảng cửu chương từ 1 đến 10. -->
<?php
function inBangCuuChuong($n) {
    echo "<h2>Bảng cửu chương $n</h2>";
    for ($i = 1; $i <= 10; $i++) {
        $tich = $n * $i;
        echo "$n x $i = $tich <br>";
    }
}
for ($j = 1; $j <= 10; $j++) {
    inBangCuuChuong($j);
    echo "<hr>";
}
echo "<br>";
?>

<!-- 4. Viết chương trình PHP để kiểm tra xem một chuỗi có chứa một từ cụ thể hay không. -->
<?php
function chuaTu($chuoi, $tuCanKiemTra) {
    // Chuyển cả chuỗi và từ cần kiểm tra về chữ thường để so sánh không phân biệt chữ hoa chữ thường
    $chuoiThap = mb_strtolower($chuoi, 'UTF-8');
    $tuCanKiemTraThap = mb_strtolower($tuCanKiemTra, 'UTF-8');
    // Kiểm tra xem chuỗi chữ thường có chứa từ chữ thường không
    return mb_strpos($chuoiThap, $tuCanKiemTraThap) !== false;
}
$chuoi = "Đây là một chuỗi mẫu.";
$tuCuThe = "mẫu";
if (chuaTu($chuoi, $tuCuThe)) {
    echo "Chuỗi chứa từ '$tuCuThe'.";
} else {
    echo "Chuỗi không chứa từ '$tuCuThe'.";
}
echo "<br>";
?>

<!-- 5. Viết chương trình PHP để tìm giá trị lớn nhất và nhỏ nhất trong một mảng. -->
<?php
function timGiaTriLonNhat($mang) {
    $lonNhat = $mang[0];
    foreach ($mang as $giaTri) {
        if ($giaTri > $lonNhat) {
            $lonNhat = $giaTri;
        }
    }
    return $lonNhat;
}
function timGiaTriNhoNhat($mang) {
    $nhoNhat = $mang[0];
    foreach ($mang as $giaTri) {
        if ($giaTri < $nhoNhat) {
            $nhoNhat = $giaTri;
        }
    }
    return $nhoNhat;
}
$soNguyen = array(3, 1, 4, 1, 5, 9, 2, 6, 5, 3, 5);
$giaTriLonNhat = timGiaTriLonNhat($soNguyen);
$giaTriNhoNhat = timGiaTriNhoNhat($soNguyen);
echo "Giá trị lớn nhất là: " . $giaTriLonNhat . "<br>";
echo "Giá trị nhỏ nhất là: " . $giaTriNhoNhat . "<br>";
?>

<!-- 6. Viết chương trình PHP để sắp xếp một mảng theo thứ tự tăng dần. -->
<?php
function sapXepTangDan($mang) {
    sort($mang);
    return $mang;
}
$so = array(4, 2, 8, 6, 1, 3, 7, 5);
$mangDaSapXep = sapXepTangDan($so);
foreach ($mangDaSapXep as $value) {
    echo $value . " " ."<br>";
}
?>

<!-- 7. Viết chương trình PHP để tính giai thừa của một số nguyên dương. -->
<?php
function tinhGiaiThua($n) {
    if ($n == 0 || $n == 1) {
        return 1;
    } else {
        return $n * tinhGiaiThua($n - 1);
    }
}
$soNguyenDuong = 5;
$giaiThua = tinhGiaiThua($soNguyenDuong);
echo "Giai thừa của $soNguyenDuong là: $giaiThua" . "<br>";
?>

<!-- 8. Viết chương trình PHP để tìm số nguyên tố trong một khoảng cho trước. -->
<?php
function laSoNguyenTo($n) {
    if ($n < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) {
            return false;
        }
    }
    return true;
}
function timSoNguyenToTrongKhoang($batDau, $ketThuc) {
    $soNguyenTo = array();

    for ($i = $batDau; $i <= $ketThuc; $i++) {
        if (laSoNguyenTo($i)) {
            $soNguyenTo[] = $i;
        }
    }
    return $soNguyenTo;
}
$batDau = 10;
$ketThuc = 50;
$soNguyenToTrongKhoang = timSoNguyenToTrongKhoang($batDau, $ketThuc);
echo "Các số nguyên tố trong khoảng từ $batDau đến $ketThuc là: " . implode(", ", $soNguyenToTrongKhoang);
echo "<br>";
?>

<!-- 9. Viết chương trình PHP để tính tổng của các số trong một mảng. -->
<?php
function tinhTongMang($mang) {
    $tong = 0;
    foreach ($mang as $so) {
        $tong += $so;
    }
    return $tong;
}
$mang = array(1, 2, 3, 4, 5);
$tong = tinhTongMang($mang);
echo "Tổng của các số trong mảng là: $tong" . "<br>";
?>

<!-- 10. Viết chương trình PHP để in ra các số Fibonacci trong một khoảng cho trước. -->
<?php
function fibonacciTrongKhoang($batDau, $ketThuc) {
    $fibonacci = array();
    $a = 0;
    $b = 1;
    while ($a <= $ketThuc) {
        if ($a >= $batDau) {
            $fibonacci[] = $a;
        }

        $temp = $a + $b;
        $a = $b;
        $b = $temp;
    }

    return $fibonacci;
}
$batDau = 0;
$ketThuc = 50;
echo "Các số Fibonacci trong khoảng từ $batDau đến $ketThuc là: " . implode(", ", fibonacciTrongKhoang($batDau, $ketThuc));
echo "<br>";
?>

<!-- 11. Viết chương trình PHP để kiểm tra xem một số có phải là số Armstrong hay không. -->
<?php
function laSoArmstrong($n) {
    $soChuSo = strlen($n);
    $tong = 0;
    $so = $n;

    while ($so > 0) {
        $chuSo = $so % 10;
        $tong += pow($chuSo, $soChuSo);
        $so = floor($so / 10);
    }
    return $tong == $n;
}
$so = 153;
if (laSoArmstrong($so)) {
    echo "$so là số Armstrong.";
} else {
    echo "$so không là số Armstrong." . "<br>";
}
?>

<!-- 12. Viết chương trình PHP để chèn một phần tử vào một mảng ở vị trí bất kỳ. -->
<?php
function chenPhanTu($mang, $viTri, $phanTu) {
    array_splice($mang, $viTri, 0, $phanTu);
    return $mang;
}
$mangBanDau = array(1, 2, 3, 4, 5);
$phanTuChen = 10;
$viTriChen = 2;
$mangSauKhiChen = chenPhanTu($mangBanDau, $viTriChen, $phanTuChen);
echo "Mảng sau khi chèn phần tử là: " . implode(", ", $mangSauKhiChen) . "<br>";
?>

<!-- 13. Viết chương trình PHP để loại bỏ các phần tử trùng lặp trong một mảng. -->
<?php
function loaiBoTrung($mang) {
    return array_values(array_unique($mang));
}
$mangCoTrung = array(1, 2, 3, 4, 2, 5, 3, 6, 1);
$mangSauKhiLoaiBoTrung = loaiBoTrung($mangCoTrung);
echo "Mảng sau khi loại bỏ các phần tử trùng lặp là: " . implode(", ", $mangSauKhiLoaiBoTrung);
echo "<br>";
?>

<!-- 14. Viết chương trình PHP để tìm vị trí của một phần tử trong một mảng. -->
<?php
function timViTriPhanTu($mang, $phanTu) {
    $viTri = array_search($phanTu, $mang);
    return $viTri !== false ? $viTri : "Không tìm thấy";
}
$mang = array(1, 2, 3, 4, 5, 6);
$phanTuCanTim = 3;
$viTri = timViTriPhanTu($mang, $phanTuCanTim);
echo "Vị trí của phần tử $phanTuCanTim trong mảng là: $viTri";
echo "<br>";
?>

<!-- 15. Viết chương trình PHP để đảo ngược một chuỗi. -->
<?php
function daoNguocChuoi($chuoi) {
    return strrev($chuoi);
}
$chuoi = "Hello, World!";
$chuoiDaoNguoc = daoNguocChuoi($chuoi);
echo "Chuỗi đảo ngược là: $chuoiDaoNguoc";
echo "<br>";
?>

<!-- 16. Viết chương trình PHP để tính số lượng phần tử trong một mảng. -->
<?php
function demSoLuongPhanTu($mang) {
    return count($mang);
}
$mang = array(1, 2, 3, 4, 5, 6);
$soLuong = demSoLuongPhanTu($mang);
echo "Số lượng phần tử trong mảng là: $soLuong";
echo "<br>";
?>

<!-- 17. Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi Palindrome hay không. -->
<?php
function laChuoiPalindrome($chuoi) {
    $chuoiDaXoaBoKhoangTrang = strtolower(preg_replace('/[^a-zA-Z0-9]/', '', $chuoi));
    $chuoiDaoNguoc = strrev($chuoiDaXoaBoKhoangTrang);
    return $chuoiDaXoaBoKhoangTrang === $chuoiDaoNguoc;
}
$chuoiPalindrome = "A man, a plan, a canal, Panama";
if (laChuoiPalindrome($chuoiPalindrome)) {
    echo "$chuoiPalindrome là chuỗi Palindrome.";
} else {
    echo "$chuoiPalindrome không là chuỗi Palindrome." . "<br>";
}
?>

<!-- 18. Viết chương trình PHP để đếm số lần xuất hiện của một phần tử trong một mảng. -->
<?php
function demSoLanXuatHien($mang, $phanTu) {
    return array_count_values($mang)[$phanTu] ?? 0;
}
$mang = array(1, 2, 3, 4, 2, 5, 3, 6, 1);
$phanTuCanDem = 2;
$soLanXuatHien = demSoLanXuatHien($mang, $phanTuCanDem);
echo "Số lần xuất hiện của phần tử $phanTuCanDem trong mảng là: $soLanXuatHien";
echo "<br>";
?>

<!-- 19. Viết chương trình PHP để sắp xếp một mảng theo thứ tự giảm dần. -->
<?php
function sapXepGiamDan($mang) {
    arsort($mang);
    return $mang;
}
$mang = array(4, 2, 8, 6, 1, 3, 7, 5);
$mangSauKhiSapXep = sapXepGiamDan($mang);
echo "Mảng sau khi sắp xếp giảm dần: " . implode(", ", $mangSauKhiSapXep) . "<br>";
?>

<!-- 20. Viết chương trình PHP để thêm một phần tử vào đầu hoặc cuối của một mảng. -->
<?php
function themPhanTuVaoDau($mang, $phanTu) {
    array_unshift($mang, $phanTu);
    return $mang;
}
function themPhanTuVaoCuoi($mang, $phanTu) {
    $mang[] = $phanTu;
    return $mang;
}
$mangBanDau = array(1, 2, 3, 4, 5);
$phanTuThem = 0;
$mangSauKhiThemDau = themPhanTuVaoDau($mangBanDau, $phanTuThem);
echo "Mảng sau khi thêm phần tử $phanTuThem vào đầu là: " . implode(", ", $mangSauKhiThemDau) . "<br>";
$mangSauKhiThemCuoi = themPhanTuVaoCuoi($mangBanDau, $phanTuThem);
echo "Mảng sau khi thêm phần tử $phanTuThem vào cuối là: " . implode(", ", $mangSauKhiThemCuoi) . "<br>";
?>

<!-- 21. Viết chương trình PHP để tìm số lớn thứ hai trong một mảng. -->
<?php
function timSoLonThuHai($mang) {
    rsort($mang);
    return $mang[1] ?? "Không có số lớn thứ hai";
}
$mang = array(5, 8, 2, 10, 7);
$soLonThuHai = timSoLonThuHai($mang);
echo "Số lớn thứ hai trong mảng là: $soLonThuHai" . "<br>";
?>

<!-- 22. Viết chương trình PHP để tìm ước số chung lớn nhất và bội số chung nhỏ nhất của hai số nguyên dương. -->
<?php
function uscln($a, $b) {
    while ($b != 0) {
        $temp = $b;
        $b = $a % $b;
        $a = $temp;
    }
    return $a;
}
function bscnn($a, $b) {
    return abs($a * $b) / uscln($a, $b);
}
$so1 = 12;
$so2 = 18;
$uscln = uscln($so1, $so2);
$bscnn = bscnn($so1, $so2);
echo "USCLN của $so1 và $so2 là: $uscln" . "<br>";
echo "BSCNN của $so1 và $so2 là: $bscnn" . "<br>";
?>

<!-- 23. Viết chương trình PHP để kiểm tra xem một số có phải là số hoàn hảo hay không. -->
<?php
function laSoHoanHao($n) {
    if ($n <= 0) {
        return false;
    }

    $tongUoc = 0;
    for ($i = 1; $i <= $n / 2; $i++) {
        if ($n % $i == 0) {
            $tongUoc += $i;
        }
    }
    return $tongUoc == $n;
}
$soHoanHao = 28;
if (laSoHoanHao($soHoanHao)) {
    echo "$soHoanHao là số hoàn hảo." . "<br>";
} else {
    echo "$soHoanHao không là số hoàn hảo." . "<br>";
}
?>

<!-- 24. Viết chương trình PHP để tìm số lẻ lớn nhất trong một mảng. -->
<?php
function timSoLeLonNhat($mang) {
    $soLe = array_filter($mang, function ($so) {
        return $so % 2 != 0;
    });

    if (empty($soLe)) {
        return "Không có số lẻ trong mảng";
    }
    return max($soLe);
}
$mang = array(2, 8, 5, 3, 10, 7);
$soLeLonNhat = timSoLeLonNhat($mang);
echo "Số lẻ lớn nhất trong mảng là: $soLeLonNhat";
echo "<br>";
?>

<!-- 25. Viết chương trình PHP để kiểm tra xem một số có phải là số nguyên tố hay không. -->
<?php
    function soNguyenTo($n)
    {
        if ($n < 2) {
            return false;
        }
        for ($i = 2; $i <= sqrt($n); $i++) {
            if ($n % $i == 0) {
                return false;
            }
        }
        return true;
    }
$soKiemTra = 17;
if (soNguyenTo($soKiemTra)) {
    echo "{$soKiemTra} là số nguyên tố." . "<br>";
} else {
    echo "{$soKiemTra} không phải là số nguyên tố." . "<br>";
}
?>


<!-- 26. Viết chương trình PHP để tìm số dương lớn nhất trong một mảng. -->
<?php
function timSoDuongLonNhat($mang) {
    $soDuong = array_filter($mang, function ($so) {
        return $so > 0;
    });

    if (empty($soDuong)) {
        return "Không có số dương trong mảng";
    }
    return max($soDuong);
}
$mang = array(-2, 8, -5, 3, 10, -7);
$soDuongLonNhat = timSoDuongLonNhat($mang);
echo "Số dương lớn nhất trong mảng là: $soDuongLonNhat" . "<br>";
?>

<!-- 27. Viết chương trình PHP để tìm số âm lớn nhất trong một mảng. -->
<?php
function timSoAmLonNhat($mang) {
    $soAm = array_filter($mang, function ($so) {
        return $so < 0;
    });
    if (empty($soAm)) {
        return "Không có số âm trong mảng";
    }
    return max($soAm);
}
$mang = array(-2, 8, -5, 3, 10, -7);
$soAmLonNhat = timSoAmLonNhat($mang);
echo "Số âm lớn nhất trong mảng là: $soAmLonNhat" . "<br>";
?>

<!-- 28. Viết chương trình PHP để tính tổng các số lẻ từ 1 đến n. -->
<?php
function tinhTongSoLe($n) {
    $tong = 0;

    for ($i = 1; $i <= $n; $i += 2) {
        $tong += $i;
    }

    return $tong;
}
$n = 10;
$tongSoLe = tinhTongSoLe($n);
echo "Tổng các số lẻ từ 1 đến $n là: $tongSoLe" . "<br>";
?>

<!-- 29. Viết chương trình PHP để tìm số chính phương trong một khoảng cho trước. -->
<?php
function laSoChinhPhuong($so) {
    $canBacHai = sqrt($so);
    return ($canBacHai * $canBacHai) == $so;
}
function timSoChinhPhuong($batDau, $ketThuc) {
    $soChinhPhuong = array();

    for ($i = $batDau; $i <= $ketThuc; $i++) {
        if (laSoChinhPhuong($i)) {
            $soChinhPhuong[] = $i;
        }
    }
    return $soChinhPhuong;
}
$batDau = 1;
$ketThuc = 50;
$soChinhPhuongTrongKhoang = timSoChinhPhuong($batDau, $ketThuc);
echo "Số chính phương trong khoảng từ $batDau đến $ketThuc là: " . implode(", ", $soChinhPhuongTrongKhoang);
echo "<br>";
?>

<!-- 30. Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi con của một chuỗi khác hay không. -->
<?php
function laChuoiCon($chuoiGoc, $chuoiCon) {
    return strpos($chuoiGoc, $chuoiCon) !== false;
}
$chuoiGoc = "Hello, World!";
$chuoiCon = "World";
if (laChuoiCon($chuoiGoc, $chuoiCon)) {
    echo "$chuoiCon là chuỗi con của $chuoiGoc." . "<br>";
} else {
    echo "$chuoiCon không là chuỗi con của $chuoiGoc." . "<br>";
}
?>

