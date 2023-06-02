@extends('master')
@section('judul','Users')
@section('isi')
<main id="main">
    <!-- ======= Users Section ======= -->
    <section id="users" class="about">
    <div class="container" data-aos="fade-up">
        <div class="row">
            <div class="span9">
            <br>
            <?php
            /*
                $sql = "SELECT * FROM users;";
                $result=$conn->query($sql);
            */
            ?>
            <table class="table" id = "tables">
            <thead style="background-color: #FF6D60;">
                <tr style="text-align: center;">
                <th scope="col" class="pb-4">Id</th>
                <th scope="col" class="pb-4">Avatar</th>
                <th scope="col" class="pb-4">Name</th>
                <th scope="col" class="pb-4">Email</th>
                <th scope="col" class="pb-4">Phone</th>
                <th scope="col" class="pb-4">Role</th>
                <th scope="col" class="pb-4">Menu</th>
                </tr>
            </thead>
            <tbody>
                <?php
                /*
                while($row=$result->fetch_assoc())
                {
                    $id=$row['id'];
                    $avatar=$row['avatar'];
                    $name=$row['name'];
                    $email=$row['email'];
                    $phone=$row['phone'];
                    $role=$row['role'];
                */
                ?>
                <tr style="text-align: center;">
                    <td><?php // echo $id?></td>
                    <td><img src="upload/<?php // echo $avatar;?>" alt="" width="100px" height="100px"></td>
                    <td><?php // echo $name?></td>
                    <td><?php // echo $email?></td>
                    <td><?php // echo $phone?></td>
                    <td><?php // echo $role?></td>
                    <td><center>
                        <a href="details_user.php?id=<?php // echo $id; ?>" class="btn btn-primary">Details</a>
                        <a href="edit_user.php?id=<?php // echo $id; ?>" class="btn btn-success">Edit</a>
                        <a href="delete_user.php?id=<?php // echo $id; ?>" class="btn btn-danger">Delete</a>
                        </center>
                    </td>
                </tr>
                <?php /*
                }
                */
            ?>
            </tbody>
            </table>
            </div>
        </div>
        </div>
    </section>
    <!-- ====== Add Users Section -->
    <section id="addusers" class="about">
    <div class="container" data-aos="fade-up">
        <br> 
        <h5><b>Add Users</b></h5>
        <br>
        <form class="form-horizontal row-fluid" action="add_user.php" method="post" enctype="multipart/form-data">
            <div class="control-group">
                <div class="mb-3">
                    <label class="form-label"><b>Nama</b></label>
                    <div class="controls">
                        <input type="text" name="name" class="form-control form Button-Up" placeholder="Nama Lengkap" required >
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-6">
                        <label class="form-label"><b>Role</b></label>
                        <select class="form-select" aria-label="Default select example" name="role" required="">
                            <option disabled="" selected="">Pilih Role</option>
                            <option value="admin">Admin</option>
                            <option value="staff">Staff</option>
                        </select>
                        <br>
                    </div>
                    <div class="col-6">
                        <label class="form-label"><b>Password</b></label>
                        <div class="controls">
                            <input type="password" name="password"  class="form-control form Button-Up" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="col-6">
                        <label class="form-label"><b>Email Address</b></label>
                        <div class="controls">
                            <input type="email" name="email"  class="form-control form Button-Up" placeholder="name@example.com" required>
                        </div>
                        <br>
                    </div>
                    <div class="col-6">
                        <label class="form-label"><b>Telp</b></label>
                        <div class="controls">
                            <input type="text" name="telp"  class="form-control form Button-Up" placeholder="08967565" required>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label"><b>Alamat Lengkap</b></label>
                    <div class="controls">
                        <textarea type="text" name="alamat" class="form-control form Button-Up"  rows="3" required></textarea>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label"> <b>Unggah Foto</b></label>
                    <input type="file" name="foto" class="form-control form Button-Up">
                </div>
                <div class="mb-3">
                    <div class="controls mt-3">
                        <button type="submit" name="add_user" class="btn btn-primary">Add New User</button>
                    </div>
                </div>
            </div>
        </form>
        </div>
    </section>
    </main>
@endsection