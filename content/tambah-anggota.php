<?php
if (isset($_POST['tambah'])) {

    $nama_anggota = $_POST['nama_anggota'];
    $telepon = $_POST['telepon'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];

    // sql = structur query languages / DML = data manipulation language
    // select, insert, update, deleted
    $insert = mysqli_query($koneksi, "INSERT INTO anggota (nama_anggota, telepon, email, alamat) VALUES('$nama_anggota','$telepon', '$email','$alamat')");
    header("location:?pg=anggota&tambah=berhasil");
}

$id = isset($_GET['edit']) ? $_GET['edit'] : '';
$editAnggota = mysqli_query($koneksi, "SELECT * FROM anggota WHERE id = '$id'");
$rowEdit = mysqli_fetch_assoc($editAnggota);

if (isset($_POST['edit'])) {
    $nama_anggota = $_POST['nama_anggota'];
    $telepon = $_POST['telepon'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];

    // ubah user kolom apa yang mau diubah (SET) yang mau di ubah id ke berapa
    $update = mysqli_query($koneksi, "UPDATE anggota SET nama_anggota='$nama_anggota', telepon='$telepon', email='$email', alamat='$alamat' WHERE id='$id'");
    header("location:?pg=anggota&ubah=berhasil");
}

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $delete = mysqli_query($koneksi, "DELETE FROM anggota WHERE id='$id'");
    header("location:?pg=anggota&hapus=berhasil");
}
?>

<div class="mt-5 container">
    <div class="row">
        <div class="col-sm-12">
            <fieldset class="border p-3">
                <legend class="float-none w-auto px-3"><?php echo isset($_GET['edit']) ? 'Edit' : 'Tambah' ?> Anggota</legend>
                <form action="" method="post">
                    <div class="mb-3">
                        <label for="" class="form-label">Nama Anggota</label>
                        <input type="text"
                            name="nama_anggota"
                            class="form-control"
                            placeholder="Masukan Nama Anda"
                            value="<?php echo isset($_GET['edit']) ? $rowEdit['nama_anggota'] : '' ?>">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Telepon </label>
                        <input type="number"
                            class="form-control"
                            name="telepon"
                            placeholder="Masukan Nama Anda"
                            value="<?php echo isset($_GET['edit']) ? $rowEdit['telepon'] : '' ?>">
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Email </label>
                        <input type="text"
                            class="form-control"
                            name="email"
                            placeholder="Masukan Email Anda"
                            value="<?php echo isset($_GET['edit']) ? $rowEdit['email'] : '' ?>">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Alamat </label>
                        <input type="text"
                            class="form-control"
                            name="alamat"
                            placeholder="Masukan Alamat Anda"
                            value="<?php echo isset($_GET['edit']) ? $rowEdit['alamat'] : '' ?>">
                    </div>
                    <div class="mb-3">
                        <button name="<?php echo isset($_GET['edit']) ? 'edit' : 'tambah' ?>" class="btn btn-primary" type="submit">Simpan</button>
                    </div>
                </form>
            </fieldset>
        </div>
    </div>
</div>