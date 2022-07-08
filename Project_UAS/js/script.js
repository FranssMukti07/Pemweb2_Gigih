// buat event pada saat link di klik
$('.page-scroll').on('click', function () {

    // ambil isi href
    var tujuan = $(this).attr('href');

    // tangkap elemen yang bersangkutan
    var elemenTujuan = $(tujuan);
    console.log(elemenTujuan);

}
);  // end of click function



$(document).ready(function () {
    $('#goRight').on('click', function () {
        $('#slideBox').animate({
            'marginLeft': '0'
        });
        $('.topLayer').animate({
            'marginLeft': '100%'
        });
    });
    $('#goLeft').on('click', function () {
        $('#slideBox').animate({
            'marginLeft': '50%'
        });
        $('.topLayer').animate({
            'marginLeft': '0'
        });
    });
});
