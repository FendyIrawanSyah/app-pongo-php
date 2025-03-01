<?php include 'header.php';  ?>

        <div class="main p-3">
        <br>
        <h4>Manage Web Pongo</h4>
        <br><br>
        <div class="row">
            <div class="col-md-3 col-sm-12">
                <button type="button" class="btn btn-sm btn-primary" id="btn-show-modal-content">Add Content</button>
                <button type="button" class="btn btn-sm btn-danger">Add Banner</button>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-7">
                <h5>Content Image</h5>
                <div class="table-responsive">
                    <table class="table" id="tabel-content-images" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th scope="col">Image</th>
                                <th scope="col">Name</th>
                                <th>Status</th>
                                <th>Date</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                
                            </tr>
                        <tbody>   
                    </table>
                </div>
            </div>
            <div class="col-md-5 mt-3">
                <h5>Location Maps</h5>
                <div class="ratio ratio-16x9" id="maps-website">
                    
                </div>
                <div class="mt-2">
                    <div class="mb-3">
                        <input type="text" class="form-control" id="txt-maps-address" name="txt-maps-address" placeholder="Location Address" required>
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-primary" type="button" id="update-maps">Save</button>
                    </div>
                </div>
            </div>
        </div>

                    
        <!--modal image content-->
        <div class="modal" id="modal-image-content" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title modal-title-images">Add Image Content</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="form-image-content" type="file/multiple">
                            <div class="mb-3">
                                <input type="text" class="form-control" id="txtnameImage" name="txtnameImage" placeholder="Image Name" required>
                            </div>
                            <div class="mb-3">
                                <input type="file" class="form-control" id="txtimagefile" name="txtimagefile" required>
                            </div>
                            <div class="mb-3">
                                <select class="form-select" id="txtstatus" name="txtstatus" required>
                                    <option value="">Select Status</option>
                                    <option value="Active">Active</option>
                                    <option value="Inactive">Inactive</option>
                                </select>
                            </div>
                            <input type="hidden" name="txtidimage" id="txtidimage">
                            <input type="hidden" name="operation" id="operation">
                            <div class="mb-3">
                                <input type="submit" class="btn btn-primary" id="action" name="action" value="Add">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
 
<?php include 'footer.php';  ?>