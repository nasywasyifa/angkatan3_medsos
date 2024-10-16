<?php
$kategori = mysqli_query($koneksi, "SELECT * FROM kategori ORDER BY id DESC");
?>

<div class="mt-5 container">
    <div class="row">
        <div class="col-sm-12">
            <fieldset class="border p-3">
                <legend class="float-none w-auto px-3">Data Kategori</legend>
                <div class="button-action">
                    <a href="?pg=tambah-kategori" type="button" class="btn text-info" style="background-color: #bee1fa;">Add</a>

                </div>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover mt-3">
                        <thead>
                            <tr>
                                <th scope="col">No<i class="bx bxs-sort-alt"></th>
                                <th scope="col">Nama Kategori<i class="bx bxs-sort-alt"></th>
                                <th scope="col">Aksi<i class="bx bxs-sort-alt"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            while ($rowKategori = mysqli_fetch_array($kategori)):
                            ?>
                                <tr>
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $rowKategori['nama_kategori'] ?></td>

                                    <!-- <td>
                                        <button type="button" class="btn btn-danger icon-button">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                        <button type="button" class="btn btn-primary">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                    </td> -->
                                    <td>
                                        <a href="?pg=tambah-kategori&edit=<?php echo $rowKategori['id'] ?>"
                                            class="btn btn-success btn-sm">Edit

                                        </a> |
                                        <a
                                            href="?pg=tambah-kategori&delete=<?php echo $rowKategori['id'] ?>"
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