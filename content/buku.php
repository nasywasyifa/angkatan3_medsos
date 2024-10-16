<?php
$buku = mysqli_query($koneksi, "SELECT kategori.nama_kategori, buku.* FROM buku LEFT JOIN kategori ON kategori.id = buku.id_kategori ORDER BY id DESC");
?>

<div class="mt-5 container">

    <div class="row">
        <div class="col-sm-12">
            <fieldset class="border p-3">
                <legend class="float-none w-auto px-3">Data Buku</legend>
                <div class="button-action">

                    <a href="?pg=tambah-buku" type="button" class="btn text-info" style="background-color: #bee1fa;">Add</a>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover mt-3">
                        <thead>
                            <tr>
                                <th scope="col">No<i class="bx bxs-sort-alt"></th>
                                <th scope="col">Nama Kategori</th>
                                <th scope="col">Nama Buku<i class="bx bxs-sort-alt"></th>
                                <th scope="col">Penerbit<i class="bx bxs-sort-alt"></th>
                                <th scope="col">Tahun Terbit<i class="bx bxs-sort-alt"></th>
                                <th scope="col">Pengarang<i class="bx bxs-sort-alt"></th>
                                <th scope="col">Aksi<i class="bx bxs-sort-alt"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            while ($row = mysqli_fetch_array($buku)):
                            ?>
                                <tr>
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $row['nama_kategori'] ?></td>
                                    <td><?php echo $row['nama_buku'] ?></td>
                                    <td><?php echo $row['penerbit'] ?></td>
                                    <td><?php echo $row['tahun_terbit'] ?></td>
                                    <td><?php echo $row['pengarang'] ?></td>

                                    <!-- <td>
                                        <button type="button" class="btn btn-danger icon-button">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                        <button type="button" class="btn btn-primary">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                    </td> -->
                                    <td>
                                        <a href="?pg=tambah-buku&edit=<?php echo $row['id'] ?>"
                                            class="btn btn-success btn-sm">Edit

                                        </a> |
                                        <a
                                            href="?pg=tambah-buku&delete=<?php echo $row['id'] ?>"
                                            class="btn btn-danger btn-sm"
                                            onclick="return confirm('Apakah anda yakin akan menghapus data ini??')">Delete</a>
                                    </td>
                                </tr>
                            <?php endwhile ?>
                        </tbody>
                    </table>
                </div>
            </fieldset>
        </div>
    </div>
</div>