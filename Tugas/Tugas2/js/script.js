$(document).ready(function () {
    if (document.getElementById('mahasiswa')) {
        let nama = $('#mahasiswa').data('nama')
        let success = $('#mahasiswa').data('success')
        Swal.fire(
            nama,
            success,
            'success'
        )
    }
});