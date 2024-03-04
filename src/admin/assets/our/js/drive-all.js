function tampilkanPanduan(halamanTautan) {
  const driver = window.driver.js.driver;

  let lastTourTime = localStorage.getItem(`${halamanTautan}_lastTourTime`);
  const currentTime = new Date().getTime();

  if (!lastTourTime || currentTime - lastTourTime > 60000) {
    const langkahLangkah =
      halamanTautan === "http://localhost/PTSP/src/admin/pages/login.php"
        ? [
            {
              element: "#formulirLoginForDrive",
              popover: {
                title: "Formulir Masuk",
                description: "Silahkan Masuk Dengan Mengisi Formulir Ini.",
              },
            },
            {
              element: "#inputNamaPenggunaForDrive",
              popover: {
                title: "Nama Pengguna Atau Email",
                description:
                  "Silahkan Masukkan Nama Pengguna Atau Email Anda Jika Terdaftar.",
              },
            },
            {
              element: "#inputKataSandiForDrive",
              popover: {
                title: "Kata Sandi",
                description:
                  "Silahkan Masukkan Kata Sandi Anda Jika Terdaftar.",
              },
            },
            {
              element: "#togglePassword",
              popover: {
                title: "Ikon Mata",
                description: "Untuk Mengubah Kata Sandi Menjadi Teks.",
              },
            },
            {
              element: "#forgorPassForDrive",
              popover: {
                title: "Lupa Kata Sandi",
                description: "Jika Anda Lupa Kata Sandi Silahkan Klik Disini.",
              },
            },
            {
              element: "#btnLoginForDrive",
              popover: {
                title: "Tombol Masuk",
                description:
                  "Jika Sudah Mengisi Semunya Silahkan Klik Tombol Disini Dan Mohon Menunggu Prosesnya.",
              },
            },
          ]
        : halamanTautan ===
          "http://localhost/PTSP/src/admin/pages/forgot-pass.php"
        ? [
            {
              element: "#formForgotForDrive",
              popover: {
                title: "Formulir Lupa Kata Sandi",
                description:
                  "Silahkan Isi Formulir Ini Untuk Mengatur Ulang Kata Sandi.",
              },
            },
            {
              element: "#emailForgotForDrive",
              popover: {
                title: "Email",
                description:
                  "Silahkan Masukkan Email Untuk Mengatur Ulang Kata Sandi.",
              },
            },
            {
              element: "#btnForgotForDrive",
              popover: {
                title: "Tombol Kirim",
                description:
                  "Jika Sudah Mengisi Semunya Silahkan Klik Tombol Disini Dan Mohon Menunggu Prosesnya.",
              },
            },
          ]
        : halamanTautan === "http://localhost/PTSP/public/"
        ? [
            {
              element: "#formSearchForDrive",
              popover: {
                title: "Formulir Pencarian",
                description: "Silahkan Pencarian Disini.",
              },
            },
            {
              element: "#addDataAllFormForDrive",
              popover: {
                title: "Tambah Data",
                description: "Klik Disini Untuk Menambahkan Data Baru.",
              },
            },
            {
              element: "#fotoNavbarAdminSessionForDrive",
              popover: {
                title: "Foto Anda",
                description: "Klik Disini Untuk Melihat Profil Anda.",
              },
            },
            {
              element: "#fotoSidebarAdminSessionForDrive",
              popover: {
                title: "Foto Anda",
                description: "Klik Disini Untuk Melihat Profil Anda.",
              },
            },
            {
              element: "#menuSidebarForDrive",
              popover: {
                title: "Menu",
                description:
                  "Klik Disini Untuk Melihat Halaman Yang Anda Inginkan.",
              },
            },
            {
              element: "#menuSidebarSendFeedbackForDrive",
              popover: {
                title: "Menu",
                description:
                  "Klik Disini Untuk Mengirimkan Masukan Kepada Developer Anda.",
              },
            },
            {
              element: "#iconAllInstansiForDrive",
              popover: {
                title: "Filter",
                description:
                  "Klik Disini Untuk Memfilter Sesuai Dengan Instansi Jika Anda Super Admin.",
              },
            },
            {
              element: "#caretIconForDrive",
              popover: {
                title: "Tombol Selengkapnya",
                description:
                  "Klik Disini Untuk Melihat Selengkapnya Data Dari Performa Profil.",
              },
            },
            {
              element: "#seeAnaliticForDrive1",
              popover: {
                title: "Tombol Lihat",
                description: "Klik Disini Untuk Melihat Data Analitik.",
              },
            },
            {
              element: "#seeAnaliticForDrive2",
              popover: {
                title: "Tombol Lihat",
                description: "Klik Disini Untuk Melihat Data Analitik.",
              },
            },
            {
              element: "#seeAnaliticForDrive3",
              popover: {
                title: "Tombol Lihat",
                description: "Klik Disini Untuk Melihat Data Analitik.",
              },
            },
          ]
        : [];

    const objekDrive = driver({
      nextBtnText: "Selanjutnya",
      prevBtnText: "Sebelumnya",
      doneBtnText: "Selesai",
      showProgress: false,
      steps: langkahLangkah,
    });

    Swal.fire({
      title: "Butuh Panduan?",
      text: "Apakah Anda ingin memulai panduan?",
      icon: "info",
      showCancelButton: true,
      confirmButtonText: "Ya, mulai!",
      cancelButtonText: "Tidak, terima kasih",
      reverseButtons: true,
    }).then((result) => {
      if (result.isConfirmed) {
        objekDrive.drive();
        localStorage.setItem(
          `${halamanTautan}_lastTourTime`,
          new Date().getTime()
        );
      } else {
        localStorage.setItem(
          `${halamanTautan}_lastTourTime`,
          new Date().getTime()
        );
      }
    });
  }
}

window.onload = function () {
  const currenthalamanTautan = window.location.href;
  tampilkanPanduan(currenthalamanTautan);
};