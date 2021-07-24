<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <form class="user" method="post" action="<?= base_url('auth/registration'); ?>">
        <div class="form-group">
            <input type="text" class="form-control form-control-user" id="name" name="name" placeholder="Full Name" value="<?= set_value('name'); ?>">
            <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group">
            <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Email Address" value="<?= set_value('email'); ?>">
            <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group row">
            <div class="col-sm-6 mb-3 mb-sm-0">
                <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
                <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="col-sm-6">
                <input type="password" class="form-control form-control-user" id="repassword" name="repassword" placeholder="Repeat Password">
            </div>
        </div>
        <button type="submit" class="btn btn-primary btn-user btn-block">
            Register Account
        </button>
    </form>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->