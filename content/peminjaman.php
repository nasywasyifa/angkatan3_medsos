<?php
$query = mysqli_query($koneksi, "SELECT anggota.nama_anggota, peminjaman.* FROM peminjaman LEFT JOIN anggota ON anggota.id = peminjaman.id_anggota WHERE deleted_at = 0 ORDER BY id DESC");
?>

<div class="mt-5 container">
    <div class="row">
        <div class="col-sm-12">
            <fieldset class="border p-3">
                <legend class="float-none w-auto px-3">Data Peminjaman</legend>
                <div class="button-action">
                    <a href="?pg=tambah-peminjaman" type="button" class="btn text-info" style="background-color: #bee1fa;">Add</a>

                </div>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover mt-3">
                        <thead>
                            <tr>
                                <th scope="col">No<i class="bx bxs-sort-alt"></th>
                                <th scope="col">Nama Anggota</th>
                                <th scope="col">No Peminjaman<i class="bx bxs-sort-alt"></th>
                                <th scope="col">Tanggal Peminjaman<i class="bx bxs-sort-alt"></th>
                                <th scope="col">Tanggal Pengembalian<i class="bx bxs-sort-alt"></th>
                                <th scope="col">Status<i class="bx bxs-sort-alt"></th>
                                <th scope="col">Aksi<i class="bx bxs-sort-alt"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            while ($row = mysqli_fetch_array($query)):
                            ?>
                                <tr>
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $row['nama_anggota'] ?></td>
                                    <td><?php echo $row['no_peminjaman'] ?></td>
                                    <td><?php echo date('d-m-Y', strtotime($row['tgl_peminjaman'])) ?></td>
                                    <td><?php echo date('d-m-Y', strtotime($row['tgl_pengembalian'])) ?></td>
                                    <td><?php echo $row['status'] ?></td>

                                    <!-- <td>
                                        <button type="button" class="btn btn-danger icon-button">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                        <button type="button" class="btn btn-primary">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                    </td> -->
                                    <td>
                                        <a href="?pg=tambah-peminjaman&detail=<?php echo $row['id'] ?>"
                                            class="btn btn-success btn-sm">Detail

                                        </a> |
                                        <a
                                            href="?pg=tambah-peminjaman&delete=<?php echo $row['id'] ?>"
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