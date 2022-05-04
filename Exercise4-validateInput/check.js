function validate() {
    var u = document.getElementById("username").value;
    var p1 = document.getElementById("password").value;
    var p2 = document.getElementById("password-repeat").value;
    var phone = document.getElementById("phonenumber").value;
    var email = document.getElementById("email").value;
     
    if(u== "") {
        alert("Vui lòng nhập tên!");
        return false;
    }
    if(email == "") {
        alert("Vui lòng nhập email");
        return false;
    }
    if(phone == "") {
        alert("Vui lòng nhập số điện thoại");
        return false
    }
    if(p1 == "") {
        alert("Vui lòng nhập mật khẩu!");
        return false;
    }
    if(p2 == "") {
        alert("Vui lòng xác minh mật khẩu!");
        return false;
    }
    if(p2 != p1) {
        alert("Xác nhận mật khẩu chưa đúng!");
        return false;
    }

    alert("Đăng kí thành công!");
 
    return true;
}