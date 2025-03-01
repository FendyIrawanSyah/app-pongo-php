<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../src/asset/style.css">

    <link href="https://cdn.datatables.net/v/bs5/jq-3.7.0/dt-2.2.2/datatables.min.css" rel="stylesheet">
 
    <title>Pongo Admin</title>
</head>
<body>
    
    <div class="wrapper">
        <aside id="sidebar">
            <div class="d-flex">
                <button id="toggle-btn" type="button">
                    <i class="fa-solid fa-grip-lines"></i>
                </button>
                <div class="sidebar-logo">
                    <a href="index.php">Pongo</a>
                </div>
            </div>
            <ul class="sidebar-nav">
                <li class="sidebar-item">
                    <a href="index.php" class="sidebar-link">
                        <i class="fa-solid fa-house-laptop"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="order.php" class="sidebar-link">
                        <i class="fa-solid fa-calendar"></i>
                        <span>Order</span>
                    </a>
                </li>
                
                <li class="sidebar-item">
                    <a href="payslip.php" class="sidebar-link">
                    <i class="fa-solid fa-hand-holding-dollar"></i>
                        <span>Payslip</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="customer.php" class="sidebar-link">
                        <i class="fa-solid fa-person"></i>
                        <span>Customer</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link has-dropdown collapsed" data-bs-toggle="collapse" 
                        data-bs-target="#multi" aria-expanded="false" aria-controls="multi">
                        <i class="fa-solid fa-border-all"></i>
                        <span>Multi Level Link</span>
                    </a>
                    <ul id="multi" class="sidebar-dropdown list-unstyled collapse" data-bs-target="#sidebar">
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link n collapsed" data-bs-toggle="collapse" 
                                data-bs-target="#multi-two" aria-expanded="false" aria-controls="multi-two">
                                Two Link
                            </a>
                            <ul id="multi-two" class="sidebar-dropdown list-unstyled collapse">
                                <li class="sidebar-item">
                                    <a href="#" class="sidebar-link">Link 1</a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="#" class="sidebar-link">Link 2</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a href="karyawan.php" class="sidebar-link">
                        <i class="fa-solid fa-user-tie"></i>
                        <span>Karyawan</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link has-dropdown collapsed" data-bs-toggle="collapse" 
                    data-bs-target="#gear" aria-expanded="false" aria-controls="gear">
                        <i class="fa-solid fa-gear"></i>
                        <span>Set Your Web</span>
                    </a>
                    <ul id="gear" class="sidebar-dropdown list-unstyled collapse" data-bs-target="#sidebar">
                        <li class="sidebar-item">
                            <a href="contenWeb.php" class="sidebar-link">Setting All image</a>
                        </li>
                    </ul> 
                </li>
            </ul>
            <div class="sidebar-footer">
                <a href="#" class="sidebar-link" id="btn-logout">
                    <i class="fa-solid fa-power-off"></i>
                    <span>Logout</span>
                </a>
            </div>
        </aside>