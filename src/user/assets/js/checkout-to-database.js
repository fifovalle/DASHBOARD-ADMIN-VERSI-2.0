document.getElementById("btnPesan").addEventListener("click", function () {
  let transaksiElements = document.querySelectorAll("[id^='jumlah_barang_']");
  let dataJumlah = {};
  transaksiElements.forEach(function (element) {
    let transaksiId = element.getAttribute("data-transaksi-id");
    let jumlahBarang = parseInt(element.textContent.trim());
    dataJumlah[transaksiId] = jumlahBarang;
  });
  let xhr = new XMLHttpRequest();
  xhr.open("POST", "../../../src/admin/config/update-transaction.php", true);
  xhr.setRequestHeader("Content-Type", "application/json");
  xhr.onreadystatechange = function () {
    if (xhr.readyState === 4 && xhr.status === 200) {
      let response = JSON.parse(xhr.responseText);
      response.forEach(function (res) {
        if (res.success) {
          Swal.fire({
            icon: "success",
            title: "Sukses",
            text: res.message,
            toast: true,
            position: "top-end",
            showConfirmButton: false,
            timer: 3000,
          }).then((result) => {
            setTimeout(function () {
              window.location.href = "ikm.php";
            }, 2000);
          });
        } else {
          Swal.fire({
            icon: "error",
            title: "Gagal",
            text: res.message,
            toast: true,
            position: "top-end",
            showConfirmButton: false,
            timer: 3000,
          });
        }
      });
    }
  };
  xhr.send(JSON.stringify(dataJumlah));
});
