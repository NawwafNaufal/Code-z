        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-4 text-gray-800">Dashboard</h1>

            <div class="col-lg-6">
                <?= form_error('menu', '<div class="alert alert-danger text-center" role="alert">', '</div>'); ?>
                <?= $this->session->flashdata('message'); ?>
                <div class="row">
                    <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newRoleModal">Add New Role</a>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Role</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($role as $r) : ?>
                                <tr>
                                    <th scope="row"><?= $i; ?></th>
                                    <td><?= $r['role']; ?></td>
                                    <td>
                                        <a href="<?= base_url('admin/roleaccess/') .  $r['id']; ?>" class="badge badge-warning">access</a>
                                        <a href="" class="badge badge-success">edit</a>
                                        <a href="" class="badge badge-danger">delete</a>
                                    </td>
                                </tr>
                                <?php $i++; ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
        <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <!-- Button trigger modal -->

        <!-- Modal -->
        <div class="modal fade" id="newRoleModal" tabindex="-1" role="dialog" aria-labelledby="newRoleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title fs-5" id="newRoleModalLabel">Add New Role</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="<?= base_url('admin/role'); ?>" method="post">
                        <div class="modal-body">
                            <div class="form-group">
                                <input type="text" class="form-control" id="role" name="role" placeholder="Role name">
                            </div>
                        </div>
                        <div class="modal-body">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Add</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>