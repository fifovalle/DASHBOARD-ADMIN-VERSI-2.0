$(document).ready(function () {
  $(".menu p").click(function () {
    $(".menu p").removeClass("active");
    $(this).addClass("active");
    let menuText = $(this).text();

    menuText === "Akun"
      ? ($(".dataAccount").show(),
        $(".dataEditAccount, .dataDeleteAccount").hide())
      : menuText === "Sunting"
      ? ($(".dataEditAccount").show(),
        $(".dataAccount, .dataDeleteAccount").hide())
      : ($(".dataDeleteAccount").show(),
        $(".dataAccount, .dataEditAccount").hide());
  });
});

document.getElementById("unggahFoto").addEventListener("change", function () {
  let file = this.files[0];
  let reader = new FileReader();

  reader.onload = function (e) {
    let imageSrc = e.target.result;
    let label = document.querySelector(".upload-icon");
    label.innerHTML =
      '<img class="img-fluid" src="' + imageSrc + '" alt="Uploaded Image">';
  };

  reader.readAsDataURL(file);
});
