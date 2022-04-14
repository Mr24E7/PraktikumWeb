<!DOCTYPE html>
<head>
    <title>soal 4</title>
    <style>
        .gambar {
            width: 50px;
            height: 50px;
        }
    </style>
</head>
<body>
    <?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nilai = (int)$_POST["nilai"];}
	if (isset($_POST['tambah'])) {
    $nilai += 1;}
	if (isset($_POST['kurang'])) {
    $nilai -= 1;}
    if (empty($nilai)) : ?>
        <form action="" method="post">
            Jumlah Bintang: <input type="text" name="nilai">
            <button type="submit" name="masuk">Masukkan Nilai</button>
        </form>
    <?php
    endif;
    if (!empty($nilai)) :?>
        jumlah bintang = <?= $nilai; ?><br>
        <?php
        for ($i = 0; $i < $nilai; $i++) {
            echo "<img src='./soal 3-4.png' class='gambar'>";}
        ?>
        <form action="" method="post">
            <input type="text" name="nilai" value="<?= $nilai ?>" hidden>
            <button type="submit" name="tambah" value="tambah">tambah</button>
            <button type="submit" name="kurang" value="kurang">kurang</button>
        </form>
    <?php endif; ?>
</body>
</html>
