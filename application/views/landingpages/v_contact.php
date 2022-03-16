<!-- Contact Us -->
<section id="kontak">
    <div class="container">
        <div class="row text-center">
            <div class="col-sm">
                <h2>Contact us</h2>
                <p><small class="text-muted">Hubungi kami melalui kanal telepon dan email atau datang langsung di kantor layanan kami.</small></p>
            </div>
        </div>
        <div class="row p-3 align-items-center">
            <div class="col-sm-5">
                <form action="<?php echo base_url('dashboard/send_message') ?>" method="post">
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" name="nama" class="form-control" placeholder="Name" required>
                        <?php echo form_error('name'); ?>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <input type="text" name="email" class="form-control" placeholder="Email" required>
                                <?php echo form_error('email'); ?>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label class="form-label">Phone</label>
                                <input type="text" name="phone" class="form-control" placeholder="Phone" required>
                                <?php echo form_error('phone'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Messages</label>
                        <textarea class="form-control" name="messages" rows="3" placeholder="Messages" required></textarea>
                        <?php echo form_error('messages'); ?>
                    </div>
                    <div class="mb-3">
                        <input type="submit" class="btn btn-primary" value="Send">
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- /Contact Us -->