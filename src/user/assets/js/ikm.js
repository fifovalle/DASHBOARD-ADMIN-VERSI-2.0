document.addEventListener('DOMContentLoaded', function () {
    var selanjutnyaBtn = document.getElementById('selanjutnya');

    // Menambahkan event listener untuk saat tombol "Selanjutnya" diklik
    selanjutnyaBtn.addEventListener('click', function () {
        document.getElementById('JenisLayanan').style.display = 'block';
        document.getElementById('DataDiri').style.display = 'none';
        document.getElementById('UnsurPelayanan').style.display = 'none';
        document.querySelector('.dot.step-two').classList.add('selected');
    });
});
document.addEventListener('DOMContentLoaded', function () {
    var selanjutnya1Btn = document.getElementById('selanjutnya1');
    // Menambahkan event listener untuk saat tombol "Selanjutnya" diklik
    selanjutnya1Btn.addEventListener('click', function () {
        document.getElementById('UnsurPelayanan').style.display = 'block';
        document.getElementById('DataDiri').style.display = 'none';
        document.getElementById('JenisLayanan').style.display = 'none';
        document.querySelector('.dot.step-two').classList.add('selected');
        document.querySelector('.dot.step-three').classList.add('selected');
    });
});
