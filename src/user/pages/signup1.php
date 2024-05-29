<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="icon" href="../../../src/admin/assets/image/logo/1.png">
    <link rel="stylesheet" href="../assets/css/signup1.css">
    <script src="../assets/js/javascript.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <!-- Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script>
    <!-- SWEETALERT -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <title>SignUp-PTSP BMKG Provinsi Bengkulu</title>
</head>

<body>
    <div class="container-fluid w-100 section1">
        <div class="row text-center">
            <div class="col-lg-6 text-center justify-content-center left-content">
                <div class="background">
                    <img class="img-desktop" src="../assets/img/submission-view.svg" alt="">
                    <img class="logo-perorangan" src="../assets/img/Logo-Perorangan.png" alt="">
                </div>
                <div class="custom-shape-divider-bottom-1709729084">
                    <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                        <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" class="shape-fill"></path>
                        <path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".5" class="shape-fill"></path>
                        <path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" class="shape-fill"></path>
                    </svg>
                </div>
                <form class="main-form" id="multiStepForm" method="post" action="../../../src/admin/config/sign-up1.php">
                    <h3 class="form-header fw-normal py-3 text-black margin-custom"><b>DAFTAR PERORANGAN</b></h3>
                    <!-- Form 1 -->
                    <div class="step" id="wizard-h-0" style="display: flex;">
                        <div class="row form">
                            <div class="col-md-12 p-0">
                                <div class="alert alert-info justify-content-center align-middle p-1 m-0">
                                    <b>DATA DIRI</b>
                                </div>
                            </div>
                            <div class="col-md-6 ps-0">
                                <div class="form-floating my-3">
                                    <input type="number" class="form-control" id="NPWP" name="NPWP_Pengguna" placeholder="123*****" value="<?= $_SESSION['NPWP'] ?? ''; ?>" autocomplete="off">
                                    <label for="floatingInput">NPWP</label>
                                </div>
                            </div>
                            <div class="col-md-6 pe-0">
                                <div class="form-floating my-3">
                                    <input type="number" class="form-control" id="NoIdentitas" name="No_Identitas_Pengguna" placeholder="123*****" value="<?= $_SESSION['No_Identitas'] ?? ''; ?>" autocomplete="off">
                                    <label for="floatingInput">No Identitas (KTP/SIM/KITAS/PASSPORT) <b>*</b> </label>
                                </div>
                            </div>
                            <div class="col-md-6 ps-0">
                                <div class="form-floating my-3">
                                    <input type="text" class="form-control" id="Pekerjaan" name="Pekerjaan_Pengguna" placeholder="Mengaja***" value="<?= $_SESSION['Pekerjaan'] ?? ''; ?>" autocomplete="off">
                                    <label for="floatingInput">Pekerjaan <b>*</b> </label>
                                </div>
                            </div>
                            <div class="col-md-6 pe-0">
                                <div class="form-floating my-3">
                                    <input type="text" class="form-control" id="NamaDepan" name="Nama_Depan_Pengguna" placeholder="Ridwan***" value="<?= $_SESSION['Nama_Depan'] ?? ''; ?>" autocomplete="off">
                                    <label for="floatingInput">Nama Depan <b>*</b> </label>
                                </div>
                            </div>
                            <div class="col-md-6 ps-0">
                                <div class="form-floating my-3">
                                    <input type="text" class="form-control" id="NamaBelakang" name="Nama_Belakang_Pengguna" placeholder="Ridwan***" value="<?= $_SESSION['Nama_Belakang'] ?? ''; ?>" autocomplete="off">
                                    <label for="floatingInput">Nama Belakang <b>*</b> </label>
                                </div>
                            </div>
                            <div class="col-md-6 pe-0">
                                <div class="form-floating my-3">
                                    <input type="text" class="form-control" id="Pendidikan" name="Pendidikan_Terakhir_Pengguna" placeholder="Ridwan***" value="<?= $_SESSION['Pendidikan'] ?? ''; ?>" autocomplete="off">
                                    <label for="floatingInput">Pendidikan Terakhir <b>*</b> </label>
                                </div>
                            </div>
                            <div class="col-md-6 ps-0">
                                <div class="form-floating my-3">
                                    <select class="form-select" aria-label="Default select example" id="Jenis_Kelamin_Pengguna" name="Jenis_Kelamin_Pengguna" value="<?= $_SESSION['Jenis_Kelamin'] ?? ''; ?>" autocomplete="off">
                                        <option selected>Pilih Jenis Kelamin</option>
                                        <option value="1">Laki-laki</option>
                                        <option value="2">Perempuan</option>
                                    </select>
                                    <label for="floatingInput">Jenis Kelamin <b>*</b> </label>
                                </div>
                            </div>
                            <div class="col-md-6 pe-0 mt-4">
                                <button class="nextBtn pushable" type="button" onclick="nextStep(1)">
                                    <span class="shadow"></span>
                                    <span class="edge"></span>
                                    <span class="front">
                                        Selanjutnya
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- End Form 1 -->

                    <!-- Form 2 -->
                    <div class="step" id="wizard-h-1">
                        <div class="row form">
                            <div class="col-md-12 p-0">
                                <div class="alert alert-info justify-content-center align-middle p-1 m-0">
                                    <b>ALAMAT LENGKAP</b>
                                </div>
                            </div>
                            <div class="col-md-6 ps-0">
                                <div class="form-floating my-3">
                                    <input type="text" class="form-control" id="Alamat" name="Alamat_Pengguna" placeholder="Jl.****" value="<?= $_SESSION['Alamat'] ?? ''; ?>" autocomplete="off">
                                    <label for="floatingInput">Alamat <b>*</b></label>
                                </div>
                            </div>
                            <div class="col-md-6 pe-0">
                                <div class="input-group has-validation">
                                    <span class="input-group-text my-3">+62</span>
                                    <div class="form-floating my-3">
                                        <input type="number" class="form-control" id="NoTelepon" name="No_Telepon_Pengguna" placeholder="123*****" value="<?= $_SESSION['No_Telepon'] ?? ''; ?>" autocomplete="off">
                                        <label for="floatingInput">No Hp / No Telepon <b>*</b> </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 ps-0">
                                <div class="form-floating my-3">
                                    <input type="text" class="form-control" id="Provinsi" name="Provinsi" placeholder="Jawa ***" value="<?= $_SESSION['Provinsi'] ?? ''; ?>" autocomplete="off">
                                    <label for="floatingInput">Provinsi <b>*</b> </label>
                                </div>
                            </div>
                            <div class="col-md-6 pe-0">
                                <div class="form-floating my-3">
                                    <input type="text" class="form-control" id="KotaKab" name="Kota_Kabupaten" placeholder="Kab. ***" value="<?= $_SESSION['Kab/Kota'] ?? ''; ?>" autocomplete="off">
                                    <label for="floatingInput">Kabupaten/Kota <b>*</b> </label>
                                </div>
                            </div>
                            <div class="col-md-3 ps-0">
                                <button class="prevBtn pushable" type="button" onclick="prevStep(1)">
                                    <span class="shadow"></span>
                                    <span class="edge"></span>
                                    <span class="front">
                                        Sebelumnya
                                    </span>
                                </button>
                            </div>
                            <div class="col-md-6"></div>
                            <div class="col-md-3 pe-0">
                                <button class="nextBtn pushable" type="button" onclick="nextStep(2)">
                                    <span class="shadow"></span>
                                    <span class="edge"></span>
                                    <span class="front">
                                        Selanjutnya
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- End Form 2 -->

                    <!-- Form 3 -->
                    <div class="step" id="wizard-h-2">
                        <div class="row form">
                            <div class="col-md-12 p-0">
                                <div class="alert alert-info justify-content-center align-middle p-1 m-0">
                                    <b>DATA AKUN</b>
                                </div>
                            </div>
                            <div class="col-md-6 ps-0">
                                <div class="form-floating my-3">
                                    <input type="email" class="form-control" id="Email" name="Email_Pengguna" placeholder="***@example.com" value="<?= $_SESSION['Email'] ?? ''; ?>" autocomplete="off">
                                    <label for="floatingInput">Email <b>*</b></label>
                                </div>
                            </div>
                            <div class="col-md-6 pe-0">
                                <div class="form-floating my-3">
                                    <input type="text" class="form-control" id="Nama_Pengguna" name="Nama_Pengguna" placeholder="***sd**" value="<?= $_SESSION['Nama_Pengguna'] ?? ''; ?>" autocomplete="off">
                                    <label for="floatingInput">Nama Pengguna <b>*</b> </label>
                                </div>
                            </div>
                            <div class="col-md-6 ps-0">
                                <div class="form-floating my-3 position-relative">
                                    <input type="password" class="form-control" id="Kata_Sandi" name="Kata_Sandi" placeholder="*****" value="<?= $_SESSION['Kata_Sandi'] ?? ''; ?>" autocomplete="off" data-bs-toggle="popover" data-bs-trigger="focus" data-bs-placement="bottom" data-bs-html="true" data-bs-content="#password-popover-content">
                                    <label for="floatingInput">Kata Sandi <b>*</b> </label>
                                    <i class="bi bi-eye-slash eye-icon top-50 translate-middle-y" id="togglePassword1"></i>
                                </div>
                            </div>
                            <div id="password-popover-content" class="d-none">
                                <div class="popover-content">
                                    <div class="row px-5">
                                        <div class="col-md-12 text-danger min-length">
                                            <i class="bi bi-x fs-7">Minimal 8 karakter.</i>
                                        </div>
                                        <div class="col-md-12 text-danger has-upper-case">
                                            <i class="bi bi-x fs-7">Terdapat huruf besar.</i>
                                        </div>
                                        <div class="col-md-12 text-danger has-lower-case">
                                            <i class="bi bi-x fs-7">Terdapat huruf kecil.</i>
                                        </div>
                                        <div class="col-md-12 text-danger has-number">
                                            <i class="bi bi-x fs-7">Terdapat angka.</i>
                                        </div>
                                        <div class="col-md-12 text-danger has-symbol">
                                            <i class="bi bi-x fs-7">Terdapat simbol.</i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 pe-0">
                                <div class="form-floating my-3 position-relative">
                                    <input type="password" class="form-control" id="Konfirmasi_Kata_Sandi" name="Konfirmasi_Kata_Sandi" placeholder="*****" value="<?= $_SESSION['Konfirmasi_Kata_Sandi'] ?? ''; ?>" autocomplete="off" data-bs-toggle="popover2" data-bs-trigger="focus" data-bs-placement="bottom" data-bs-html="true" data-bs-content="#password-popover-content2">
                                    <label for="floatingInput">Konfirmasi Kata Sandi <b>*</b> </label>
                                    <i class="bi bi-eye-slash eye-icon top-50 translate-middle-y" id="togglePassword2"></i>
                                </div>
                            </div>
                            <div id="password-popover-content2" class="d-none">
                                <div class="popover-content2">
                                    <div class="row px-5">
                                        <div class="col-md-12 text-danger min-length2">
                                            <i class="bi bi-x fs-7">Minimal 8 karakter.</i>
                                        </div>
                                        <div class="col-md-12 text-danger has-upper-case2">
                                            <i class="bi bi-x fs-7">Terdapat huruf besar.</i>
                                        </div>
                                        <div class="col-md-12 text-danger has-lower-case2">
                                            <i class="bi bi-x fs-7">Terdapat huruf kecil.</i>
                                        </div>
                                        <div class="col-md-12 text-danger has-number2">
                                            <i class="bi bi-x fs-7">Terdapat angka.</i>
                                        </div>
                                        <div class="col-md-12 text-danger has-symbol2">
                                            <i class="bi bi-x fs-7">Terdapat simbol.</i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-9"></div>
                            <div class="col-md-3">
                                <button class="prevBtn pushable" type="button" onclick="prevStep(1)">
                                    <span class="shadow"></span>
                                    <span class="edge"></span>
                                    <span class="front">
                                        Sebelumnya
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- End Form 3 -->

                    <!-- Terms and Condition -->
                    <div class="row">
                        <div class="alert alert-info mt-3 p-4">
                            <p class="text-start">Ketentuan Pengguna Perseorangan :</p>
                            <ol class="list text-start">
                                <li> Username akun Anda adalah NPWP perseorangan, maka pastikan bahwa NPWP anda sudah
                                    benar dan masih berlaku.</li>
                                <li> Pengguna yang telah terdaftar pada Web PTSP BMKG akan tunduk dan patuh terhadap
                                    segala aturan yang berlaku.</li>
                                <li> Tidak menyalahgunakan akun terdaftar kepada pihak yang tidak berkepentingan dan
                                    memanfaatkannya untuk melakukan tindakan kriminal.</li>
                            </ol>
                        </div>
                    </div>
                    <!-- End Terms and Condition -->

                    <div class="form-check text-start my-4 mt-1">
                        <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Dengan ini saya menyetujui semua syarat dan ketentuan sebagai pengguna Web PTSP BMKG
                        </label>
                    </div>
                    <div class="d-flex justify-content-center">
                        <div class="pemuat" id="pemuat3"></div>
                        <button class="btn" type="submit" name="Daftar" onclick="handleSubmit(event)" id="Daftar">
                            <svg height="24" width="24" fill="#FFFFFF" viewBox="0 0 24 24" data-name="Layer 1" id="Layer_1" class="sparkle">
                                <path d="M10,21.236,6.755,14.745.264,11.5,6.755,8.255,10,1.764l3.245,6.491L19.736,11.5l-6.491,3.245ZM18,21l1.5,3L21,21l3-1.5L21,18l-1.5-3L18,18l-3,1.5ZM19.333,4.667,20.5,7l1.167-2.333L24,3.5,21.667,2.333,20.5,0,19.333,2.333,17,3.5Z"></path>
                            </svg>
                            <span class="text">Daftar</span>
                        </button>
                    </div>
                </form>
                <div class="text-start text-dark mt-4">
                    <p style="text-align: center;">Sudah Mendaftar, <a href="../pages/login.php" class="text-primary" style="text-decoration: none;">Login
                            Sekarang</a></p>
                </div>
                <p class="mt-4 mb-3 text-body-secondary">© PTSP BMKG Provinsi Bengkulu – 2024</p>
            </div>
            <div class="col-md-6 p-0 right-content">
            </div>
        </div>
    </div>
    <script src="../assets/js/sign-up.js"></script>
    <script src="../assets/js/toggle-signup.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            let popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'));
            let popoverList = popoverTriggerList.map(function(popoverTriggerEl) {
                return new bootstrap.Popover(popoverTriggerEl, {
                    content: function() {
                        return document.querySelector(popoverTriggerEl.getAttribute('data-bs-content')).innerHTML;
                    }
                });
            });

            const passwordInput = document.getElementById('Kata_Sandi');
            const passwordPopover = document.getElementById('password-popover-content');

            function checkPasswordCriteria(password) {
                return {
                    minLength: password.length >= 8,
                    hasUpperCase: /[A-Z]/.test(password),
                    hasLowerCase: /[a-z]/.test(password),
                    hasNumber: /[0-9]/.test(password),
                    hasSymbol: /[!@#$%^&*()_+\-=[\]{};':"\\|,.<>/?]/.test(password)
                };
            }

            function updatePasswordFeedback(closePopover) {
                const password = passwordInput.value;
                const popoverContent = passwordPopover.querySelector('.popover-content');

                const criteria = checkPasswordCriteria(password);

                const minLengthElement = popoverContent.querySelector('.min-length');
                const hasUpperCaseElement = popoverContent.querySelector('.has-upper-case');
                const hasLowerCaseElement = popoverContent.querySelector('.has-lower-case');
                const hasNumberElement = popoverContent.querySelector('.has-number');
                const hasSymbolElement = popoverContent.querySelector('.has-symbol');

                const ikon = minLengthElement.querySelector('.bi');
                const ikon2 = hasUpperCaseElement.querySelector('.bi');
                const ikon3 = hasLowerCaseElement.querySelector('.bi');
                const ikon4 = hasNumberElement.querySelector('.bi');
                const ikon5 = hasSymbolElement.querySelector('.bi');

                if (criteria.minLength) {
                    minLengthElement.classList.remove('text-danger');
                    minLengthElement.classList.add('text-success');
                    ikon.classList.remove('bi-x');
                    ikon.classList.add('bi-check');
                } else {
                    minLengthElement.classList.remove('text-success');
                    minLengthElement.classList.add('text-danger');
                    ikon.classList.remove('bi-check');
                    ikon.classList.add('bi-x');
                }

                if (criteria.hasUpperCase) {
                    hasUpperCaseElement.classList.remove('text-danger');
                    hasUpperCaseElement.classList.add('text-success');
                    ikon2.classList.remove('bi-x');
                    ikon2.classList.add('bi-check');
                } else {
                    hasUpperCaseElement.classList.remove('text-success');
                    hasUpperCaseElement.classList.add('text-danger');
                    ikon2.classList.remove('bi-check');
                    ikon2.classList.add('bi-x');
                }

                if (criteria.hasLowerCase) {
                    hasLowerCaseElement.classList.remove('text-danger');
                    hasLowerCaseElement.classList.add('text-success');
                    ikon3.classList.remove('bi-x');
                    ikon3.classList.add('bi-check');
                } else {
                    hasLowerCaseElement.classList.remove('text-success');
                    hasLowerCaseElement.classList.add('text-danger');
                    ikon3.classList.remove('bi-check');
                    ikon3.classList.add('bi-x');
                }

                if (criteria.hasNumber) {
                    hasNumberElement.classList.remove('text-danger');
                    hasNumberElement.classList.add('text-success');
                    ikon4.classList.remove('bi-x');
                    ikon4.classList.add('bi-check');
                } else {
                    hasNumberElement.classList.remove('text-success');
                    hasNumberElement.classList.add('text-danger');
                    ikon4.classList.remove('bi-check');
                    ikon4.classList.add('bi-x');
                }

                if (criteria.hasSymbol) {
                    hasSymbolElement.classList.remove('text-danger');
                    hasSymbolElement.classList.add('text-success');
                    ikon5.classList.remove('bi-x');
                    ikon5.classList.add('bi-check');
                } else {
                    hasSymbolElement.classList.remove('text-success');
                    hasSymbolElement.classList.add('text-danger');
                    ikon5.classList.remove('bi-check');
                    ikon5.classList.add('bi-x');
                }

                if (!closePopover) {
                    const popover = bootstrap.Popover.getInstance(passwordInput);
                    if (popover) {
                        popover.show();
                    }
                }
            }

            updatePasswordFeedback(true);

            passwordInput.addEventListener('input', function() {
                updatePasswordFeedback(false);
            });
        });

        document.addEventListener('DOMContentLoaded', function() {
            let popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover2"]'));
            let popoverList = popoverTriggerList.map(function(popoverTriggerEl) {
                return new bootstrap.Popover(popoverTriggerEl, {
                    content: function() {
                        return document.querySelector(popoverTriggerEl.getAttribute('data-bs-content')).innerHTML;
                    }
                });
            });

            const passwordInput = document.getElementById('Konfirmasi_Kata_Sandi');
            const passwordPopover = document.getElementById('password-popover-content2');

            function checkPasswordCriteria(password) {
                return {
                    minLength: password.length >= 8,
                    hasUpperCase: /[A-Z]/.test(password),
                    hasLowerCase: /[a-z]/.test(password),
                    hasNumber: /[0-9]/.test(password),
                    hasSymbol: /[!@#$%^&*()_+\-=[\]{};':"\\|,.<>/?]/.test(password)
                };
            }

            function updatePasswordFeedback(closePopover) {
                const password = passwordInput.value;
                const popoverContent = passwordPopover.querySelector('.popover-content2');

                const criteria = checkPasswordCriteria(password);

                const minLengthElement = popoverContent.querySelector('.min-length2');
                const hasUpperCaseElement = popoverContent.querySelector('.has-upper-case2');
                const hasLowerCaseElement = popoverContent.querySelector('.has-lower-case2');
                const hasNumberElement = popoverContent.querySelector('.has-number2');
                const hasSymbolElement = popoverContent.querySelector('.has-symbol2');

                const ikon = minLengthElement.querySelector('.bi');
                const ikon2 = hasUpperCaseElement.querySelector('.bi');
                const ikon3 = hasLowerCaseElement.querySelector('.bi');
                const ikon4 = hasNumberElement.querySelector('.bi');
                const ikon5 = hasSymbolElement.querySelector('.bi');

                if (criteria.minLength) {
                    minLengthElement.classList.remove('text-danger');
                    minLengthElement.classList.add('text-success');
                    ikon.classList.remove('bi-x');
                    ikon.classList.add('bi-check');
                } else {
                    minLengthElement.classList.remove('text-success');
                    minLengthElement.classList.add('text-danger');
                    ikon.classList.remove('bi-check');
                    ikon.classList.add('bi-x');
                }

                if (criteria.hasUpperCase) {
                    hasUpperCaseElement.classList.remove('text-danger');
                    hasUpperCaseElement.classList.add('text-success');
                    ikon2.classList.remove('bi-x');
                    ikon2.classList.add('bi-check');
                } else {
                    hasUpperCaseElement.classList.remove('text-success');
                    hasUpperCaseElement.classList.add('text-danger');
                    ikon2.classList.remove('bi-check');
                    ikon2.classList.add('bi-x');
                }

                if (criteria.hasLowerCase) {
                    hasLowerCaseElement.classList.remove('text-danger');
                    hasLowerCaseElement.classList.add('text-success');
                    ikon3.classList.remove('bi-x');
                    ikon3.classList.add('bi-check');
                } else {
                    hasLowerCaseElement.classList.remove('text-success');
                    hasLowerCaseElement.classList.add('text-danger');
                    ikon3.classList.remove('bi-check');
                    ikon3.classList.add('bi-x');
                }

                if (criteria.hasNumber) {
                    hasNumberElement.classList.remove('text-danger');
                    hasNumberElement.classList.add('text-success');
                    ikon4.classList.remove('bi-x');
                    ikon4.classList.add('bi-check');
                } else {
                    hasNumberElement.classList.remove('text-success');
                    hasNumberElement.classList.add('text-danger');
                    ikon4.classList.remove('bi-check');
                    ikon4.classList.add('bi-x');
                }

                if (criteria.hasSymbol) {
                    hasSymbolElement.classList.remove('text-danger');
                    hasSymbolElement.classList.add('text-success');
                    ikon5.classList.remove('bi-x');
                    ikon5.classList.add('bi-check');
                } else {
                    hasSymbolElement.classList.remove('text-success');
                    hasSymbolElement.classList.add('text-danger');
                    ikon5.classList.remove('bi-check');
                    ikon5.classList.add('bi-x');
                }

                if (!closePopover) {
                    const popover = bootstrap.Popover.getInstance(passwordInput);
                    if (popover) {
                        popover.show();
                    }
                }
            }

            updatePasswordFeedback(true);

            passwordInput.addEventListener('input', function() {
                updatePasswordFeedback(false);
            });
        });
    </script>
    <!-- ALERT -->
    <?php include '../../../src/admin/partials/utils/alert.php' ?>
</body>

</html>