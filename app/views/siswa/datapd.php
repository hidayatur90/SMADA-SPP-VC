<?php
    include '../app/config/config.php';
    $this_kelas = $data[0];  

    session_start();
    $role = $_SESSION['role'];

    $all_kelas = [];
    $get_kelas = mysqli_query($conn, "SELECT DISTINCT(kelas) as kelas FROM datapd");
    while($row = mysqli_fetch_array($get_kelas))
    {
        $all_kelas[] = $row['kelas'];
    }
?>

<title>Daftar Peserta Didik</title>
<div class="container mt-3">
    <?php if($role == "petugas") {?>
        <a href="<?= base_url . '/keuangan' ?>" class="btn btn-secondary mb-2"><i class="bi bi-arrow-left me-2"></i>Kembali</a>
    <?php } else if ($role == "kepsek") {?>
        <a href="../kepsek/tinjau.php" class="btn btn-secondary mb-2"><i class="bi bi-arrow-left me-2"></i>Kembali</a>
    <?php } ?>
    <div class="row">
        <div class="col-6 mb-2">
            <label for="kelas"><strong>Kelas : </strong></label>
            <select class="form-select w-25" id="kelas" name="kelas">
                <option selected hidden><?= $this_kelas; ?></option>
                <?php foreach($all_kelas as $kelas) { ?>
                    <option value="<?= $kelas; ?>"><?= $kelas; ?></option>
                <?php }; ?>
            </select>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-12">
            <div class="card mb-4">
                <div class="card-header">
                    Data Siswa
                </div>
                <div class="card-body">
                    <table class="table table-bordered text-center">
                        <thead>
                            <tr>
                            <th scope="col">No.</th>
                            <th scope="col">NIS</th>
                            <th scope="col">Nama Siswa</th>
                            <th scope="col">Kelas</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php 
                            $sql = "SELECT * FROM datapd WHERE kelas='$this_kelas'";	
                            $result = $conn->query($sql); 	
                            $i = 1;
                            while($data = $result->fetch_assoc()){ ?>
                            <tr>
                                <th><?= $i; ?></th>
                                <td><?= $data['nis']; ?></td>
                                <td><?= $data['nama_pd']; ?></td>
                                <td><?= $data['kelas']; ?></td>
                                <?php $i++; ?>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    var kelas = document.getElementById('kelas');

    kelas.addEventListener("input", function(){
        var strUser = this.value;
        var nextURL = "<?= base_url . '/siswa' ?>" +'/'+ strUser;
        window.location.replace(nextURL);
    });
</script>