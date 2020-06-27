//phone key pad
function number_write(x) {
    Appery("lbl_message").html("<font>Enter your mobile number here</font>");
    var phone_no = Appery('mobiletextinput_phone_no');
    length = phone_no.val().length;
    
    if (length == 9) {
        return;
    }
    phone_no.val(phone_no.val() + x);
}

function number_clear() {
    var phone_no = Appery('mobiletextinput_phone_no');
    phone_no.val('');
}

function number_c() {
    var phone_no = Appery('mobiletextinput_phone_no');
    var num = phone_no.val();
    length = phone_no.val().length;
    
    if (length >=1) {
        phone_no.val(num.substr(0, num.length - 1));
    }
}
