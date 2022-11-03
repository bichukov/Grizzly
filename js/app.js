

$("body").on("submit", ".form", function (e) {
    e.preventDefault();
    var _phone = $(this).find("#codtel").val();
    let str = String(_phone);
    console.log(str.length);
        if ($('#codtel').val()[0] != '+' && $('#codtel').val() != '') {


            var b = '+';
            b = b.concat(_phone);
            console.log(b);
        }





    return false;

});

