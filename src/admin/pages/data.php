<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin PTSP</title>
    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css" type="text/css">
    <!-- OUR CSS -->
    <link rel="stylesheet" href="../assets/our/css/index.css">
    <link rel="stylesheet" href="../assets/our/css/data.css">
    <!-- ICON -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- FAVICON -->
    <link rel="icon" href="../assets/image/logo/1.png">
</head>

<body>
    <!-- NAVBAR START-->
    <nav class="navbar navbar-expand-lg color px-3 fixed-top">
        <div class="overlay z-2"></div>
        <div class="container-fluid">
            <div class="collapse navbar-collapse d-flex justify-content-between" id="navbarSupportedContent">
                <div class="d-flex align-items-center">
                    <img class="logo" src="../assets/image/logo/1.png" alt="logo">
                    <p class="fw-bolder fs-5 ms-1 ptsp">PTSP</p>
                </div>
                <form class="z-3">
                    <div class="dropdown">
                        <i class="fas fa-search position-absolute top-50 start-0 translate-middle-y ms-3"></i>
                        <i class="fas fa-times position-absolute top-50 end-0 translate-middle-y me-3 close-icon"
                            style="display: none;"></i>
                        <input class="form-control ps-5 search" placeholder="Cari Produk Anda" aria-label="Search"
                            id="searchInput" autocomplete="off">
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <hr>
                            <p class="list">Produk terbaru anda <a class="text-decoration-none viewAll" href="#">Lihat
                                    semua</a>
                            </p>
                            <hr>
                            <div class="d-flex align-items-center justify-content-between list boxParent">
                                <img class="imageProduct" src="../assets/image/uploads/1.jpg" alt="imageProduct">
                                <div class="box">
                                    <p>Nama Produk</p>
                                    <p class="descriptionProduct">Lorem ipsum dolor sit amet consectetur adipisicing...
                                    </p>
                                </div>
                                <div class="box date">
                                    <p>Feb 16, 2024</p>
                                    <p class="stok">1 Stok</p>
                                </div>
                                <a class="linkProduk" href=""><span class="edit-icon"><i class="fas fa-edit"></i>
                                        Sunting</span></a>
                                <a class="linkProduk" href=""><span class="delete-icon"><i class="fas fa-trash"></i>
                                        Hapus</span></a>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="relative d-flex align-items-center justify-content-between">
                    <div class="d-flex align-items-center justify-content-between uploadParent">
                        <div class="dropdown addData" id="dropdown" onclick="toggleDropdownUpload()">
                            <i class="fas fa-upload"></i> Tambah Data
                        </div>
                        <div class="dropdown-menu optionUpload" aria-labelledby="dropdownMenuButton"
                            id="dropdownMenuUpload">
                            <div>
                                <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#addAdmin" href="#"><i
                                        class="fas fa-user-secret me-2 my-2"></i>Tambah Admin</a>
                                <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#uploadProduct"
                                    href="#"><i class="fas fa-users me-2 my-2"></i>Tambah Pengguna</a>
                                <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#uploadProduct"
                                    href="#"><i class="fas fa-cart-plus me-2 my-2"></i>Tambah Produk</a>
                            </div>
                        </div>
                    </div>
                    <div class="dropdown" id="dropdown" onclick="toggleDropdown()">
                        <img class="image" src="../assets/image/uploads/1.jpg" alt="image">
                    </div>
                    <div class="dropdown-menu option" aria-labelledby="dropdownMenuButton" id="dropdownMenu">
                        <div class="d-flex align-items-center justify-content-between">
                            <img class="image-option" src="../assets/image/uploads/1.jpg" alt="image">
                            <div>
                                <p class="info fw-bolder">zonaDeveloper</p>
                                <p class="info role fw-semibold">Super Admin</p>
                            </div>
                        </div>
                        <hr>
                        <a class="dropdown-item" href="#"><i class="fas fa-user me-2 my-2"></i>Profil Saya</a>
                        <a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt me-2 my-2"></i>Keluar</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- NAVBAR END-->

    <section class="container-fluid mainWebsite">
        <section class="row">
            <!-- SIDEBAR START -->
            <aside class="col-md-2 d-none d-md-block" id="sidebar">
                <div class="sidebar-sticky sidebar-heading d-flex flex-column align-content-center flex-wrap">
                    <img class="sidebarImage" src="../assets/image/uploads/1.jpg" alt="imageAdmin">
                    <div class="parentTextSidebar fw-medium">
                        <p>Super Admin</p>
                        <p class="textAdmin">zonaDeveloper</p>
                    </div>
                </div>
                <ul class="list-unstyled components listSidebar">
                    <a href="../../../public/index.html">
                        <li class="liSidebar">
                            <span class="textSidebar"><i class="fas fa-home me-2 my-2"></i>Beranda</span>
                        </li>
                    </a>
                    <a href="data.html">
                        <li class="liSidebar active">
                            <span class="textSidebar"><i class="fas fa-database me-2 my-2"></i>Kumpulan Data</span>
                        </li>
                    </a>
                    <a href="analitic.html">
                        <li class="liSidebar">
                            <span class="textSidebar"><i class="fas fa-chart-bar me-2 my-2"></i>Analitik</span>
                        </li>
                    </a>
                </ul>
                <hr class="hrSidebar">
                <ul class="list-unstyled components listSidebar">
                    <li class="liSidebar">
                        <a class="textSidebar" href="#"><i class="fas fa-envelope-open-text me-2 my-2"></i>Kirim
                            Masukan</a>
                    </li>
                </ul>
            </aside>
            <!-- SIDEBAR END -->

            <div class="container-fluid">
                <!-- MAIN START -->
                <main class="col-md-9 ml-sm-auto col-lg-10 px-4">
                    <div class="d-flex justify-content-between align-items-center text-center">
                        <h1 class="breadcrumb">Kumpulan Data</h1>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="row">
                                <div class="menu col-2">
                                    <p class="fw-semibold dataAdmin active">Admin</p>
                                </div>
                                <div class="menu col-2">
                                    <p class="fw-semibold dataAdmin">Pengguna</p>
                                </div>
                                <div class="menu col-2">
                                    <p class="fw-semibold dataAdmin">Produk</p>
                                </div>
                                <div class="menu col-2">
                                    <p class="fw-semibold dataAdmin">Transaksi</p>
                                </div>
                            </div>
                        </div>
                        <hr class="hrData">
                        <div class="row" style="position: relative;">
                            <div class="col-1">
                                <i class="bx bx-filter iconFilter"></i>
                            </div>
                            <div class="col-10 mb-3">
                                <input id="filterInput" class="filterInput" type="text" placeholder="Filter Data">
                            </div>
                            <div id="dropdownFilter" class="dropdownContentFilter row">
                                <div class="col listDropdownFilter">
                                    <span>Nama Pengguna</span>
                                </div>
                                <div class="col listDropdownFilter">
                                    <span>Nama Depan</span>
                                </div>
                                <div class="col listDropdownFilter">
                                    <span>Nama Belakang</span>
                                </div>
                                <div class="col listDropdownFilter">
                                    <span>Email</span>
                                </div>
                            </div>
                        </div>
                        <hr class="hrData">
                        <div class="row">
                            <div class="col">
                                <!-- ADMIN TABLE START -->
                                <table class="tableData adminTable">
                                    <div id="actions" style="display: none;">
                                        <button class="btn btnAction" onclick="hapus()"><i class="fas fa-trash "></i>
                                            Hapus</button>
                                        <button class="btn btnAction" onclick="edit()"> <i class="fas fa-edit"></i>
                                            Sunting</button>
                                    </div>
                                    <thead>
                                        <tr>
                                            <th class="text-center">
                                                <input class="checkBoxData" type="checkbox">
                                            </th>
                                            <th class="text-center">No</th>
                                            <th class="text-center" data-field="data">
                                                Admin
                                            </th>
                                            <th class="text-center" data-field="data2">
                                                Email Admin
                                            </th>
                                            <th class="text-center" data-field="data3">
                                                Peran Admin
                                            </th>
                                            <th class="text-center" data-field="data4">
                                                No Telp
                                            </th>
                                            <th class="text-center" data-field="data5">
                                                Status Verifikasi
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="tbodyData">
                                        <tr>
                                            <td class="text-center">
                                                <input class="checkBoxData" type="checkbox">
                                            </td>
                                            <td class="text-center">1</td>
                                            <td class="text-center flex-wrap d-flex justify-content-evenly gap-2">
                                                <div>
                                                    <img class="imageData" src="../assets/image/uploads/1.jpg"
                                                        alt="Foto Admin">
                                                </div>
                                                <div class="deskriptorContainer">
                                                    <p class="fw-semibold m-auto">zonaDeveloper</p>
                                                    <p class="fw-semibold deskriptorSmall m-auto">Naufal FIFA
                                                    <div class="iconContainerData">
                                                        <a class="linkData" data-bs-toggle="modal"
                                                            data-bs-target="#editAdmin" href="">
                                                            <span class="">
                                                                <i class=" fas fa-edit"></i>
                                                            </span>
                                                        </a>
                                                        <a class="linkData iconDataRight" href="">
                                                            <span class="">
                                                                <i class="fas fa-trash"></i>
                                                            </span>
                                                        </a>
                                                    </div>
                                                    </p>
                                                </div>
                                            </td>
                                            <td class="text-center">Naufal@gmail.com</td>
                                            <td class="text-center">Super Admin</td>
                                            <td class="text-center">+62 812-3456-789</td>
                                            <td class="text-center">
                                                <span class="badge text-bg-success">Terverifikasi</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <!-- ADMIN TABLE END -->

                                <!-- USER TABLE START -->
                                <table class="tableData userTable">
                                    <div id="actions" style="display: none;">
                                        <button class="btn btnAction" onclick="hapus()"><i class="fas fa-trash "></i>
                                            Hapus</button>
                                        <button class="btn btnAction" onclick="edit()"> <i class="fas fa-edit"></i>
                                            Sunting</button>
                                    </div>
                                    <thead>
                                        <tr>
                                            <th class="text-center">
                                                <input class="checkBoxData" type="checkbox">
                                            </th>
                                            <th class="text-center">No</th>
                                            <th class="text-center" data-field="data">
                                                Pengguna
                                            </th>
                                            <th class="text-center" data-field="data2">
                                                Email Pengguna
                                            </th>
                                            <th class="text-center" data-field="data3">
                                                Jenis Kelamin
                                            </th>
                                            <th class="text-center" data-field="data4">
                                                No Telp
                                            </th>
                                            <th class="text-center" data-field="data5">
                                                Status Verifikasi
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="tbodyData">
                                        <tr>
                                            <td class="text-center">
                                                <input class="checkBoxData" type="checkbox">
                                            </td>
                                            <td class="text-center">1</td>
                                            <td class="text-center flex-wrap d-flex justify-content-evenly gap-2">
                                                <div>
                                                    <img class="imageData" src="../assets/image/uploads/2.jpg"
                                                        alt="Foto Admin">
                                                </div>
                                                <div class="deskriptorContainer">
                                                    <p class="fw-semibold m-auto">zonaNyaman</p>
                                                    <p class="fw-semibold deskriptorSmall m-auto">Ahsan Ghifari
                                                    <div class="iconContainerData">
                                                        <a class="linkData" data-bs-toggle="modal"
                                                            data-bs-target="#editAdmin" href="">
                                                            <span class="">
                                                                <i class=" fas fa-edit"></i>
                                                            </span>
                                                        </a>
                                                        <a class="linkData iconDataRight" href="">
                                                            <span class="">
                                                                <i class="fas fa-trash"></i>
                                                            </span>
                                                        </a>
                                                    </div>
                                                    </p>
                                                </div>
                                            </td>
                                            <td class="text-center">ahsan@gmail.com</td>
                                            <td class="text-center">Pria</td>
                                            <td class="text-center">+62 812-3456-789</td>
                                            <td class="text-center">
                                                <span class="badge text-bg-success">Terverifikasi</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <!-- USER TABLE END -->

                                <!-- PRODUCT TABLE START -->
                                <table class="tableData productTabel">
                                    <div id="actions" style="display: none;">
                                        <button class="btn btnAction" onclick="hapus()"><i class="fas fa-trash "></i>
                                            Hapus</button>
                                        <button class="btn btnAction" onclick="edit()"> <i class="fas fa-edit"></i>
                                            Sunting</button>
                                    </div>
                                    <thead>
                                        <tr>
                                            <th class="text-center">
                                                <input class="checkBoxData" type="checkbox">
                                            </th>
                                            <th class="text-center">No</th>
                                            <th class="text-center" data-field="data">
                                                Produk
                                            </th>
                                            <th class="text-center" data-field="data2">
                                                Harga Produk
                                            </th>
                                            <th class="text-center" data-field="data3">
                                                Stok Produk
                                            </th>
                                            <th class="text-center" data-field="data4">
                                                Pemilik Produk
                                            </th>
                                            <th class="text-center" data-field="data5">
                                                Status Produk
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="tbodyData">
                                        <tr>
                                            <td class="text-center">
                                                <input class="checkBoxData" type="checkbox">
                                            </td>
                                            <td class="text-center">1</td>
                                            <td class="text-center flex-wrap d-flex justify-content-evenly gap-2">
                                                <div>
                                                    <img class="imageData" src="../assets/image/uploads/2.png"
                                                        alt="Foto Admin">
                                                </div>
                                                <div class="deskriptorContainer">
                                                    <p class="fw-semibold m-auto">Seismon</p>
                                                    <p class="fw-semibold deskriptorSmall m-auto">Lorem, ipsum...
                                                    <div class="iconContainerData">
                                                        <a class="linkData" data-bs-toggle="modal"
                                                            data-bs-target="#editAdmin" href="">
                                                            <span class="">
                                                                <i class=" fas fa-edit"></i>
                                                            </span>
                                                        </a>
                                                        <a class="linkData iconDataRight" href="">
                                                            <span class="">
                                                                <i class="fas fa-trash"></i>
                                                            </span>
                                                        </a>
                                                    </div>
                                                    </p>
                                                </div>
                                            </td>
                                            <td class="text-center">Rp 10.000</td>
                                            <td class="text-center">20</td>
                                            <td class="text-center">Instansi A</td>
                                            <td class="text-center">
                                                <span class="badge text-bg-success">Tersedia</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <!-- PRODUCT TABLE END -->

                                <!-- TRANSACTION TABLE START -->
                                <table class="tableData transactionTable">
                                    <div id="actions" style="display: none;">
                                        <button class="btn btnAction" onclick="hapus()"><i class="fas fa-trash "></i>
                                            Hapus</button>
                                        <button class="btn btnAction" onclick="edit()"> <i class="fas fa-edit"></i>
                                            Sunting</button>
                                    </div>
                                    <thead>
                                        <tr>
                                            <th class="text-center">
                                                <input class="checkBoxData" type="checkbox">
                                            </th>
                                            <th class="text-center">No</th>
                                            <th class="text-center" data-field="data">
                                                Produk
                                            </th>
                                            <th class="text-center" data-field="data2">
                                                Pengguna
                                            </th>
                                            <th class="text-center" data-field="data3">
                                                Jumlah Produk
                                            </th>
                                            <th class="text-center" data-field="data4">
                                                Tanggal Pembelian
                                            </th>
                                            <th class="text-center" data-field="data5">
                                                Status Transaksi
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="tbodyData">
                                        <tr>
                                            <td class="text-center">
                                                <input class="checkBoxData" type="checkbox">
                                            </td>
                                            <td class="text-center">1</td>
                                            <td class="text-center flex-wrap d-flex justify-content-evenly gap-2">
                                                <div>
                                                    <img class="imageData" src="../assets/image/uploads/2.png"
                                                        alt="Foto Admin">
                                                </div>
                                                <div class="deskriptorContainer">
                                                    <p class="fw-semibold m-auto">Seismon</p>
                                                    <p class="fw-semibold deskriptorSmall m-auto">Lorem, ipsum...
                                                    <div class="iconContainerData">
                                                        <a class="linkData" data-bs-toggle="modal"
                                                            data-bs-target="#editAdmin" href="">
                                                            <span class="">
                                                                <i class=" fas fa-edit"></i>
                                                            </span>
                                                        </a>
                                                        <a class="linkData iconDataRight" href="">
                                                            <span class="">
                                                                <i class="fas fa-trash"></i>
                                                            </span>
                                                        </a>
                                                    </div>
                                                    </p>
                                                </div>
                                            </td>
                                            <td class="text-center">Ahsan Ghifari</td>
                                            <td class="text-center">10</td>
                                            <td class="text-center">10/09/2024</td>
                                            <td class="text-center">
                                                <span class="badge text-bg-danger">Belum Di Setujui</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <!-- TRANSACTION TABLE END -->
                            </div>
                        </div>
                        <footer
                            class="d-flex flex-wrap justify-content-between align-items-center py-4 my-4 mt-5 border-top">
                            <div class="col-4 d-flex align-items-center">
                                <span class="mb-3 mb-md-0 textFooter">Dibuat Oleh Sangar ©
                                    <script>document.write(new Date().getFullYear())</script> PTSP, BMKG
                                </span>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="textFooter iconFooter"><i class='bx bxl-instagram'></i></div>
                                </div>
                                <div class="col-4">
                                    <div class="textFooter iconFooter"><i class='bx bxl-instagram'></i></div>
                                </div>
                                <div class="col-4">
                                    <div class="textFooter iconFooter"><i class='bx bxl-instagram'></i></div>
                                </div>
                            </div>
                        </footer>
                </main>
                <!-- MAIN END -->
            </div>
        </section>
    </section>


    <!-- MODAL UPLOAD PRODUCT START -->
    <div class="modal fade" id="editAdmin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Sunting Admin</h1>
                    <div class="modalClose" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </div>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="fotoAddAdmin" class="form-label">Foto</label>
                            <input type="file" class="form-control" id="fotoAddAdmin">
                        </div>
                        <div class="mb-3">
                            <label for="frontNameAddAdmin" class="form-label">Nama Depan</label>
                            <input type="text" class="form-control" id="frontNameAddAdmin">
                        </div>
                        <button type="submit" class="btn btn-success btnUpload">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- MODAL UPLOAD PRODUCT END -->

    <!-- MODAL UPLOAD PRODUCT START -->
    <div class="modal fade" id="addAdmin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Admin</h1>
                    <div class="modalClose" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </div>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="fotoAdd" class="form-label">Foto</label>
                            <input type="file" class="form-control" id="fotoAdd">
                        </div>
                        <div class="mb-3">
                            <label for="frontNameAddAdmin" class="form-label">Nama Depan</label>
                            <input type="text" class="form-control inputData" placeholder="Masukan Nama Depan Admin"
                                id="frontNameAddAdmin">
                        </div>
                        <div class="mb-3">
                            <label for="backNameAddAdmin" class="form-label">Nama Belakang</label>
                            <input type="text" class="form-control inputData" placeholder="Masukan Nama Belakang Admin"
                                id="backNameAddAdmin">
                        </div>
                        <div class="mb-3">
                            <label for="userNameAddAdmin" class="form-label">Nama Pengguna</label>
                            <input type="text" class="form-control inputData" placeholder="Masukan Nama Pengguna Admin"
                                id="userNameAddAdmin">
                        </div>
                        <div class="mb-3">
                            <label for="emailAddAdmin" class="form-label">Email</label>
                            <input type="email" class="form-control inputData" placeholder="Masukan Email Admin"
                                id="emailAddAdmin">
                        </div>
                        <div class="mb-3">
                            <label for="numberAddAdmin" class="form-label">Nomor Telepon</label>
                            <div class="input-group">
                                <span class="input-group-text spanNumberData">+62</span>
                                <input type="number" placeholder="Masukan Nomor Telepon Admin"
                                    class="form-control inputData" id="numberAddAdmin">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="ganderAddAdmin" class="form-label">Jenis Kelamin</label>
                            <select name="" id="ganderAddAdmin" class="form-control inputData">
                                <option value="" selected>Pilih Jenis Kelamin Anda</option>
                                <option value="Pria">Pria</option>
                                <option value="Wanita">Wanita</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="roleAddAdmin" class="form-label">Peran Admin</label>
                            <select name="" id="roleAddAdmin" class="form-control inputData">
                                <option value="" selected>Pilih Peran Admin</option>
                                <option value="Super Admin">Super Admin</option>
                                <option value="Instansi A">Instansi A</option>
                                <option value="Instansi B">Instansi B</option>
                                <option value="Instansi C">Instansi C</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="addressAddAdmin" class="form-label">Alamat Admin</label>
                            <textarea name="" placeholder="Masukan Alamat Admin"
                                class="form-control inputData addressAddAdmin" id="addressAddAdmin"></textarea>
                        </div>
                        <button type="submit" class="btn btnUpload">Kirim</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- MODAL UPLOAD PRODUCT END -->

    <!-- CDN JQUERY -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
    <!-- OUR JS -->
    <script src="../assets/our/js/data.js"></script>
    <script src="../assets/our/js/index.js"></script>
    <!-- BOOTSTRAP JS -->
    <script src="../assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
</body>

</html>