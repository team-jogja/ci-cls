const flashdata = $('.flash-data').data('flashdata');

if (flashdata) {
    Swal.fire(
        'Data Mahasiswa',
        'Berhasil ' + flashdata,
        'success'
    )
}

// tombol-hapus
$('.tombol-hapus').on('click', function(e) {
    e.preventDefault();
    const href = $(this).attr('href');

    Swal.fire({
        title: 'Apakah anda yakin?',
        text: "Data mahasiswa akan dihapus!",
        type: 'warning',
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!',
        showCancelButton: true
    }).then((result) => {
        if (result.value) {
            document.location.href = href;
        }
    })
});