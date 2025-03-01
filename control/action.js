$(document).ready(function () {

    urlnow = window.location.pathname;

    if (urlnow === '/app-pongo-php/view/index.php') {
        console.log('index.html');
    } else if(urlnow === '/app-pongo-php/view/order.php') {
        console.log('order.html');
    }else if(urlnow === '/app-pongo-php/view/payslip.php') {
        console.log('payslip.html');
    }else if(urlnow === '/app-pongo-php/view/customer.php') {
        console.log('customer.html');
    }else if(urlnow === '/app-pongo-php/view/karyawan.php') {
        console.log('karyawan.html');
    }else if(urlnow === '/app-pongo-php/view/contenWeb.php') {
        loadMapsContent();
    }else{
        window.location.href = 'index.php';
    }

   

     //login karyawan
   $('#btn-login-admin').click(function (e) { 
    e.preventDefault();
    email = $('#txtemail').val();
    password = $('#txtpassword').val();
    $.ajax({
        type: "post",
        url: "../control/controler.php",
        data: {
            operation: 'login',
            email: email,
            password: password
        },
        success: function (response) {
            console.log(response);
            if (response === 'success') {
                window.location.href = 'index.php';
            } else {
                alert('Login failed');
            }
        }
    });
   });

   //logout karaywan
   $('#btn-logout').click(function (e) { 
    e.preventDefault();
    $.ajax({
        type: "post",
        url: "../control/controler.php",
        data: {
            operation: 'logout'
        },
        success: function (response) {
            if (response ==='success') {
                window.location.href = 'login.php';
            } else {
                alert('Logout failed');
            }
        }
    });
   });
    
    //fetch data karyawan
    var loadDataKaryawan = $("#tabel-karyawan").DataTable({
        serverSide: true,
        processing: true,
        paging: true,
        order: [],
        ajax: {
        url: "../model/fetchKaryawan.php",
        type: "post",
        },
        columnDefs: [
        {
            targets: [0, 2, 4],
            orderable: false,
        },
        ],
    });

    //show modal karyawan
    $(document).on('click','#show-modal',function (e) { 
        e.preventDefault();
        $("#form-karyawan")[0].reset();
        $('#txtjabatan').prop('disabled', false);
        $('#modal-karyawan').modal('show');
        $(".modal-title-karyawan").text("Tambah Karyawan");
        $("#action").val("Add");
        $("#operation").val("addKaryawan");
        
    });

    //tambahkan karyawan
    $(document).on('submit', "#form-karyawan", function (e) { 
        e.preventDefault();
        $.ajax({
            type: "post",
            url: "../control/controler.php",
            data: new FormData(this),
            contentType: false,
            processData: false,
            success: function (response) {
                loadDataKaryawan.ajax.reload();
                $('#modal-karyawan').modal('hide');
                alert(response);
            }
        });
    });

    //delete karyawan
    $(document).on('click','.btn-delete-karyawan',function (e) { 
        e.preventDefault();
        id = $(this).attr('id');
        $.ajax({
            url: "../control/controler.php",
            type: "post",
            data: {
                operation: 'deleteKaryawan',
                id: id
            },
            success: function (response) {
                loadDataKaryawan.ajax.reload();
                alert(response);
            }
        });
    });

    //edit karyawan
    $(document).on('click','.btn-update-karyawan',function (e) {
        e.preventDefault();
        id = $(this).attr('id');
        $.ajax({
            url: "../model/fetchKaryawanById.php",
            type: "post",
            data: {
                id: id
            },
            dataType: "json",
            success: function (data) {
                $('#modal-karyawan').modal('show');
                $(".modal-title-karyawan").text("Update Karyawan");
                $('#id_karyawan').val(data.id);
                $('#txtnama').val(data.nama);
                $('#txtemail').val(data.email);
                $('#txtphone').val(data.phone);
                $('#txtpassword').val(data.password);
                $("#txtjabatan").val(data.jabatan).change().prop("disabled", "disabled");  
                $("#id_karyawan").val(data.id);
                $("#action").val("Edit");
                $("#operation").val("editKaryawan");
            }
        });
    });


   //fetc data customers
   var loadDataCustomers = $("#tabel-customers").DataTable({
        serverSide: true,
        processing: true,
        paging: true,
        order: [],
        ajax: {
            url: "../model/fetchCustomers.php",
            type: "post",
        },
        columnDefs: [
        {
            targets: [0, 2],
            orderable: false,
        },
        ],
    });

    //images content load
    var loadImagesContent = $('#tabel-content-images').DataTable({
        serverSide: true,
        processing: true,
        paging: true,
        order: [],
        ajax: {
            url: "../model/fetchImagesContent.php",
            type: "post",
        },
        columnDefs: [
        {
            targets: [0],
            orderable: false,
        },
        ],
    });

    //show modal add images
    $(document).on('click','#btn-show-modal-content',function (e) {
        e.preventDefault();
        $('#modal-image-content').modal('show');
        $(".modal-title-images").text("Add Images Content");
        $("#action").val("Add");
        $("#operation").val("addImagesContent");
    });
    
    //add images content
    $(document).on('submit', "#form-image-content", function (e) {
        e.preventDefault();
        $.ajax({
            type: "post",
            url: "../control/controler.php",
            data: new FormData(this),
            contentType: false,
            processData: false,
            success: function (response) {
                $("#form-image-content")[0].reset();
                loadImagesContent.ajax.reload();
                alert(response);
            }
        });
    });

    //delete images content
    $(document).on('click','.btn-delete-image',function (e) {
        e.preventDefault();
        id = $(this).attr('id');
        path = $(this).attr('path');
        if (confirm('Delete Data Image?')) {
            $.ajax({
                url: "../control/controler.php",
                type: "post",
                data: {
                    operation: 'deleteImagesContent',
                    id: id,
                    path: path
                },
                success: function (response) {
                    loadImagesContent.ajax.reload();
                    alert(response);
                }
            });
        } 
      
    });

    //read maps web
    function loadMapsContent(){
        $.ajax({
            url: "../model/fetchMapsContent.php",
            type: "post",
            dataType: "json",
            success: function (data) {
                $('#maps-website').html(data.iframe);
                $('#txt-maps-address').val(data.src_iframe);

            }
        });
    }

    //edit maps web
    $(document).on('click','#update-maps',function (e) {
        e.preventDefault();
        iframe = $('#txt-maps-address').val();
        $.ajax({
            type: "post",
            url: "../control/controler.php",
            data: {
                operation: "updateMapsWeb",
                new_iframe: iframe
            },
            success: function (response) {
                loadMapsContent();
                alert(response);
            }
        });
    });

    
});