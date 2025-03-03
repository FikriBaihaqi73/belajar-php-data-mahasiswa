$(document).ready(function () {
    // menghilangkan tombol cari
    $('#tombol-cari').hide();

    // event ketika ditulis
    $('#keyword').on('keyup', function() {
        // munculkan icon login
        $('.loding').show();

        // // ajax menggunakan load
        // $('#container').load('ajax/mahasiswa.php?keyword=' + $('#keyword').val());

        // $.get()
        $.get('ajax/mahasiswa.php?keyword=' + $('#keyword').val(), function(data) {
            
            $('#container').html(data);
            $('.loding').hide();
        })
    });

});
