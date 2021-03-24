$(document).ready(function () {
    if (document.getElementById('mahasiswa')) {
        let nama = $('#mahasiswa').data('nama') // Data Mahasiswa
        let success = $('#mahasiswa').data('success') // Berhasil Ditambahkan!
        Swal.fire(
            nama,
            success,
            'success'
        )
    }
});