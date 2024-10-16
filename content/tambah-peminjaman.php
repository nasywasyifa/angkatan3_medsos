<?php

if (isset($_POST['tambah'])) {
    $nama_anggota   = $_POST['nama_anggota'];
    $no_peminjaman   = $_POST['no_peminjaman'];
    $tgl_peminjaman   = $_POST['tgl_peminjaman'];
    $tgl_pengembalian   = $_POST['tgl_pengembalian'];
    $status  = $_POST['status'];

    // sql = structur query languages / DML = data manipulation language
    // select, insert, update, delete
    $insert = mysqli_query($koneksi, "INSERT INTO peminjaman (nama_anggota, no_peminjaman, tgl_peminjaman, tgl_pengembalian, status) VALUES
    ('$nama_anggota', '$no_peminjaman', '$tgl_peminjaman', '$tgl_pengembalian', '$status')");
    header("location:?pg=peminjaman&tambah=berhasil");
}

$id = isset($_GET['edit']) ? $_GET['edit'] : '';
$editUser = mysqli_query(
    $koneksi,
    "SELECT * FROM peminjaman WHERE id = '$id'"
);
$rowEdit = mysqli_fetch_assoc($editUser);

if (isset($_POST['edit'])) {
    $nama_anggota   = $_POST['nama_anggota'];
    $no_peminjaman   = $_POST['no_peminjaman'];
    $tgl_peminjaman   = $_POST['tgl_peminjaman'];
    $tgl_pengemmbalian   = $_POST['tgl_pengembalian'];
    $status  = $_POST['status'];

    // ubah user kolom apa yang mau di ubah (SET), yang mau di ubah id ke berapa
    $update = mysqli_query($koneksi, "UPDATE peminjaman SET nama_anggota='$nama_anggota',no_peminjaman='$no_peminjaman',tgl_peminjaman='$tgl_peminjaman',tgl_pengembalian='$tgl_pengembalian', status='$status'  WHERE id='$id'");
    header("location:?pg=peminjaman&ubah=berhasil");
}
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];

    $delete = mysqli_query($koneksi, "DELETE FROM peminjaman WHERE id='$id'");
    header("location:?pg=peminjaman&hapus=berhasil");
}

$queryBuku = mysqli_query($koneksi, "SELECT * FROM buku");

?>

<div class="mt-5 container">
    <div class="row d-flex justify-content-center">
        <div class="">
            <fieldset class="border p-3">
                <legend class="float-none w-auto px-3 fw-bold">
                    <?php echo isset($_GET['edit']) ? 'Edit' : 'Tambah' ?>
                    Peminjaman
                </legend>
                <form action="" method="post">
                    <div class="mb-3 row">
                        <div class="col-sm-4">
                            <div class="mb-3">
                                <label for="" class="form-label">No Peminjaman</label>
                                <input type="text" class="form-control" name="no_peminjaman" value="" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Tanggal Peminjaman</label>
                                <input type="date" class="form-control" name="tgl_peminjaman" value="">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Nama Anggota</label>
                                <select name="id_anggota" id="" class="form-control">
                                    <option value="">Pilih Anggota</option>
                                    <!-- ini ngambil data dari tabel anggota -->

                                </select>
                            </div>
                        </div>
                        <div class="col-sm-4 ms-5">
                            <div class="mb-3">
                                <label for="" class="form-label">Tanggal Pengembalian</label>
                                <input type="date" class="form-control" name="tgl_pengembalian" value="">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Nama Buku</label>
                                <select name="" id="id_buku" class="form-control">
                                    <option value="">Pilih Buku</option>
                                    <!-- ambil data buku dari table buku -->
                                    <?php while ($rowBuku = mysqli_fetch_assoc($queryBuku)): ?>
                                        <option value="<?php echo $rowBuku['id'] ?>">
                                            <?php echo $rowBuku['nama_buku']; ?>
                                        </option>
                                    <?php endwhile ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div align="right" class="mb-3">
                        <button type="button" id="add-row" class="btn btn-primary">Tambah Row
                    </div>
                    <table id="table" class=" table table-bordered">
                        <thead>
                            <tr>
                                <th>Nama Buku</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="table-row"></tbody>
                        <table>
                </form>
            </fieldset>
        </div>
        <div>
        </div>
    </div>
</div>