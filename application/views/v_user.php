<div class="col-md-12">
    <div class="card card-primary shadow">
        <div class="card-header">
            <h3 class="card-title">Data User</h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-toggle="modal" data-target="#add"><i class="fas fa-plus"> Add</i>
                </button>
            </div>
            <!-- /.card-tools -->
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <?php
            if ($this->session->flashdata('pesan')) {
                echo '<div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-check"></i> Sukses! ';
                echo $this->session->flashdata('pesan');
                echo '</h5></div>';
            }
            ?>

            <table class="table table-bordered" id="example1">
                <thead class="text-center">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Level</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($user as $key => $user) { ?>

                        <tr>
                            <td class="text-center"><?= $no++ ?></td>
                            <td><?= $user->nama_user ?></td>
                            <td><?= $user->username ?></td>
                            <td><?= $user->password ?></td>
                            <td class="text-center">
                                <?php
                                if ($user->level_user == 1) {
                                    echo '<span class="right badge badge-primary">Admin</span>';
                                } else {
                                    echo '<span class="right badge badge-success">User</span>';
                                }
                                ?></td>
                            <td class="text-center">
                                <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#edit">
                                    <i class="fas fa-edit"></i></button>
                                <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
</div>


<!-- modal add -->
<div class="modal fade" id="add">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Data User</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <?php
                echo form_open('user/add');
                ?>

                <div class="form-group">
                    <label for="nama_user">Nama User</label>
                    <input type="text" name="nama_user" id="nama_user" class="form-control" placeholder="Nama User..." required>
                </div>

                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" class="form-control" placeholder="Username..." required>
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="text" name="password" id="password" class="form-control" placeholder="Password..." required>
                </div>

                <div class="form-group">
                    <label for="level_user">Level</label>
                    <select name="level_user" id="level_user" class="form-control" required>
                        <option disabled selected value>Pilih level</option>
                        <option value="1">Admin</option>
                        <option value="2">User</option>
                    </select>
                </div>

            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>

            <?php
            echo form_close() ?>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<!-- modal edit -->

<?php foreach ($user as $key => $user) { ?>
    <div class="modal fade" id="edit">
        <div class=" modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Data User</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <?php
                    echo form_open('user/edit');
                    ?>

                    <div class="form-group">
                        <label for="nama_user">Nama User</label>
                        <input type="text" name="nama_user" id="nama_user" class="form-control" placeholder="Nama User..." required>
                    </div>

                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" name="username" id="username" class="form-control" placeholder="Username..." required>
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="text" name="password" id="password" class="form-control" placeholder="Password..." required>
                    </div>

                    <div class="form-group">
                        <label for="level_user">Level</label>
                        <select name="level_user" id="level_user" class="form-control" required>
                            <option disabled selected value>Pilih level</option>
                            <option value="1">Admin</option>
                            <option value="2">User</option>
                        </select>
                    </div>

                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>

                <?php
                echo form_close() ?>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
<?php } ?>