<link rel="stylesheet" href="../public/css/main.css">
<title>Pembayaran SPP</title>
<div class="container">
    <h2 class="text-end mt-4"><strong style="color:#5271FF;">ADMINISTRASI KEUANGAN</strong></h2>
    <h4 class="text-end">SMAN 2 BONDOWOSO</h4>
    <h4 class="ms-5 mt-4">Selamat datang, <strong style="color:#5271FF;"><?= $data[0] ?></strong></h4>
    <div class="row text-center mt-5">
        <div class="col-4">
            <div class="icon">
                <a href="<?= base_url . '/siswa/X-MIPA-1' ?>">
                    <i class="bi bi-person-lines-fill"></i>
                </a>
            </div>
            <h5>Data Siswa</h5>
        </div>
        <div class="col-4">
            <div class="icon">
                <a href="detail_pembayaran.php?cari=">
                    <i class="bi bi-coin"></i>
                </a>
            </div>
            <h5>Pembayaran</h5>
        </div>
        <div class="col-4">
            <div class="icon">
                <a href="pembatalan.php">
                    <i class="bi bi-x-circle-fill"></i>
                </a>
            </div>
            <h5>Pembatalan</h5>
        </div>
        <div class="col-4">
            <div class="icon">
                <a href="rekap.php?start=&end=">
                    <i class="bi bi-clock-history"></i>
                </a>
            </div>
            <h5>Rekap/History</h5>
        </div>
        <div class="col-4">
            <div class="icon">
                <a href="laporan.php?kelas=Semua">
                    <i class="bi bi-journal-arrow-down"></i>
                </a>
            </div>
            <h5>Laporan</h5>
        </div>
        <div class="col-4">
            <div class="icon">
                <a href="<?= base_url . '/logout' ?>">
                    <i class="bi bi-box-arrow-left"></i>
                </a>
            </div>
            <h5>Keluar</h5>
        </div>
    </div>
</div>
<script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
</script>