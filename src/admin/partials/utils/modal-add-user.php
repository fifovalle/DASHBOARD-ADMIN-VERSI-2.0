<?php
// AKAR TAUTAN
$akarUrl = "http://localhost/PTSP/";
// HALAMAN SAAT DIBUKA
$halamanSaatIni = basename($_SERVER['PHP_SELF']);
?>
<div class="modal fade" id="addUser" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Pengguna</h1>
                <div class="modalClose" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fas fa-times"></i>
                </div>
            </div>
            <div class="modal-body">
                <form method="POST" action="<?php echo $akarUrl; ?>src/admin/config/add-user.php" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="fotoUser" class="form-label">Foto</label>
                        <input type="file" class="form-control" id="fotoUser" name="Foto_Pengguna" autocomplete="off">
                    </div>
                    <div class="mb-3">
                        <label for="frontNameUser" class="form-label">Nama Depan</label>
                        <input type="text" class="form-control inputData" placeholder="Masukan Nama Depan Pengguna" id="frontNameUser" name="Nama_Depan_Pengguna" autocomplete="off">
                    </div>
                    <div class="mb-3">
                        <label for="lastNameUser" class="form-label">Nama Belakang</label>
                        <input type="text" class="form-control inputData" placeholder="Masukan Nama Belakang Pengguna" id="lastNameUser" name="Nama_Belakang_Pengguna" autocomplete="off">
                    </div>
                    <div class="mb-3">
                        <label for="userNameUser" class="form-label">Nama Pengguna</label>
                        <input type="text" class="form-control inputData" placeholder="Masukan Nama Pengguna" id="userNameUser" name="Nama_Pengguna_Pengguna" autocomplete="off">
                    </div>
                    <div class="mb-3">
                        <label for="emailUser" class="form-label">Email</label>
                        <input type="email" class="form-control inputData" placeholder="Masukan Email Pengguna" id="emailUser" name="Email_Pengguna" autocomplete="off">
                    </div>
                    <div class="mb-3 parentPassword">
                        <label for="passwordUser" class="form-label">Kata Sandi</label>
                        <input type="password" class="form-control inputData" placeholder="&#x002A;&#x002A;&#x002A;&#x002A;&#x002A;&#x002A;&#x002A;&#x002A;" id="passwordUser" name="Password_Pengguna" autocomplete="off">
                        <i class="fas fa-eye iconInputContainer" id="togglePasswordUser"></i>
                    </div>
                    <div class="mb-3 parentConfirmPassword">
                        <label for="confirmPasswordUser" class="form-label">Konfirmasi Kata Sandi</label>
                        <input type="password" class="form-control inputData" placeholder="&#x002A;&#x002A;&#x002A;&#x002A;&#x002A;&#x002A;&#x002A;&#x002A;" id="confirmPasswordUser" name="Confirm_Password_Pengguna" autocomplete="off">
                        <i class="fas fa-eye iconInputContainer" id="toggleConfirmPasswordUser"></i>
                    </div>
                    <div class="mb-3">
                        <label for="numberUser" class="form-label">Nomor Telepon</label>
                        <div class="input-group">
                            <span class="input-group-text spanNumberData">+62</span>
                            <input type="number" placeholder="Masukan Nomor Telepon Pengguna" class="form-control inputData" id="numberUser" name="No_Telepon_Pengguna" autocomplete="off">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="genderUser" class="form-label">Jenis Kelamin</label>
                        <select name="Jenis_Kelamin_Pengguna" id="genderUser" class="form-control inputData">
                            <option value="" selected>Pilih Jenis Kelamin Pengguna</option>
                            <option value="Pria">Pria</option>
                            <option value="Wanita">Wanita</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="addressUser" class="form-label">Alamat Pengguna</label>
                        <textarea name="Alamat_Pengguna" placeholder="Masukan Alamat Pengguna" class="form-control inputData addressAddPengguna" id="addressUser" autocomplete="off"></textarea>
                    </div>
                    <button type="submit" class="btn btnUpload" name="Simpan">Kirim</button>
                </form>
            </div>
        </div>
    </div>
</div>