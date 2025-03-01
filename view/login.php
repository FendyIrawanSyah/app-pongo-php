<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../src/asset/style.css">

    <link href="https://cdn.datatables.net/v/bs5/jq-3.7.0/dt-2.2.2/datatables.min.css" rel="stylesheet">
 
    

    <title>Pongo</title>
</head>
<body>
    
   
    <div class="container" id="form-login" style="margin-top: 10%;">
        <div class="row">
            <div class="col-md-6 col-sm-10 offset-md-3 offset-sm-1">
                <div class="card text-start">
                    
                    <div class="card-body">
                        <h4 class="card-title mb-5 text-center">Pongo Admin</h4>
                        <form method="post">
                            <div class="mb-3">
                                <input type="email" class="form-control" id="txtemail" name="txtemail" placeholder="Email" required>
                            </div>
                            <div class="mb-3">
                                <input type="password" class="form-control" id="txtpassword" name="txtpassword" placeholder="password" required>
                            </div>
                            <div class="mb-3">
                                <button class="btn btn-success" type="submit" id="btn-login-admin">Sign In</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/v/bs5/jq-3.7.0/dt-2.2.2/datatables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="../control/action.js"></script>
</body>
</html>