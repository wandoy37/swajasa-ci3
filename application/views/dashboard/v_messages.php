<div class="main-panel">
    <div class="container">
        <div class="page-inner">
            <h2 class="pb-2 fw-bold">Messages <small class="text-muted">Pesan</small></h2>
            <a href="<?php echo base_url() . 'dashboard' ?>" class="btn"><i class="fas fa-home pb-4"></i> Dashboard</a>

            <div class="row">
                <div class="col-sm">
                    <div class="card">
                        <div class="card-header">
                            <h3>Customer Messages</h3>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr class="text-center">
                                        <th scope="col">No</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Nomor Telphone</th>
                                        <th scope="col">Pesan</th>
                                        <th scope="col">Opsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($messages as $m) {
                                    ?>
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $m->messages_nama; ?></td>
                                            <td><?php echo $m->messages_email; ?></td>
                                            <td><?php echo $m->messages_phone; ?></td>
                                            <td><?php echo $m->messages_text; ?></td>
                                            <td class="text-center"><a href="<?php echo base_url() . 'dashboard/messages_hapus/' . $m->messages_id; ?>" class="btn btn-danger btn-sm"> <i class="fa fa-trash"></i> </a></td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>