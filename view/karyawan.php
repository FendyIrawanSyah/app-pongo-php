<?php include 'header.php';  ?>

        <div class="main p-3">
        <h4 class="mb-4">Karyawan</h4>
            <div class="row">
                <div class="col-md-2">
                    <button type="button" class="btn-sm btn-light" id="show-modal">Add</button>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <!--Tabel Karyawan-->
                    <div class="table-responsive">
                        <table class="table" id="tabel-karyawan" class="display" style="width:100%">
                            <thead>
                                <tr>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Password</th>
                                    <th>Phone</th>
                                    <th scope="col">Jabatan</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>


<!--Modal Karyawan-->
<div class="modal" id="modal-karyawan" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title-karyawan">Daftar Karyawan</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="form-karyawan" enctype="multipart/form-data">
            <div class="mb-3">
                <input type="text" class="form-control" id="txtnama" name="txtnama" placeholder="Nama" required>
            </div>
            <div class="mb-3">
                <input type="email" class="form-control" id="txtemail" name="txtemail" placeholder="email" required>
            </div>
            <div class="mb-3">
                <input type="number" class="form-control" id="txtphone" name="txtphone" placeholder="Phone" required>
            </div>
            <div class="mb-3">  
                <input type="password" class="form-control" id="txtpassword" name="txtpassword" placeholder="Password" required>
            </div>
            <div class="mb-3">
                <select class="form-select" name="txtjabatan" id="txtjabatan">
                    <option value="">Pilih Jabatan</option>
                    <option value="Admin">Admin</option>
                    <option value="Manager">Manager</option>
                    <option value="Developer">Developer</option>
                    <option value="Tester">Tester</option>
                </select>
            </div>
            <input type="hidden" name="id_karyawan" id="id_karyawan">
            <input type="hidden" name="operation" id="operation">
            
                <input type="submit" name="action" id="action" class="btn btn-primary"  value="Add">
        </form>
    </div>
  </div>
</div>

<?php include 'footer.php';  ?>