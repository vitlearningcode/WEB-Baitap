<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Thêm lĩnh vực</title>
</head>
<body>
    <form name="fLinhVuc" method="POST" action="themlinhvuc.php">
        <table align="center" border="1" style="border-collapse: collapse; padding: 10px;">
            <tr>
                <td colspan="2" align="center"><b>THÊM LĨNH VỰC</b></td>
            </tr>
            <tr>
                <td>Mã lĩnh vực</td>
                <td><input type="text" name="txtMaLinhVuc"/></td>
            </tr>
            <tr>
                <td>Tên lĩnh vực</td>
                <td><input type="text" name="txtTenLinhVuc"/></td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" name="btnLuu" value="Lưu"/>
                    <input type="reset" name="btnXoa" value="Xóa"/>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>