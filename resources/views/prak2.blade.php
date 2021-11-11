<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script>
        isvalid = [false, false, false, false, false, false, false];
        input = ["name", "address", "email", "password", "telephone", "course", "zipcode"];

        $(document).ready(function () {

            function isfilled(val, order){
                if(val == ""){
                    $("#fill"+input[order]).show();
                    $("#in"+input[order]).addClass("is-invalid");
                    return false;
                } else {
                    $("#fill"+input[order]).hide();
                    $("#in"+input[order]).removeClass("is-invalid");
                    return true;
                }
            }
            //On Change Validation
            //Validasi nama tidak boleh terdapat angka
            $("#inname").change(function () {
                name = $("#inname").val();
                if(!isfilled(name, 0)){
                    $("#warningname").hide();
                    return;
                }
                namePatt = new RegExp("[0-9]");
                if (namePatt.test(name)) {
                    $("#warningname").show();
                    $("#inname").addClass("is-invalid");
                    isvalid[0] = false;
                } else {
                    $("#warningname").hide();
                    $("#inname").removeClass("is-invalid");
                    isvalid[0] = true;
                }
            });
            //Validasi alamat
            $("#inaddress").change(function () {
                address = $("#inaddress").val();
                if(!isfilled(address, 1)){
                    return;
                }
            });
            //Validasi email harus terdapat @
            $("#inemail").change(function () {
                email = $("#inemail").val();
                if(!isfilled(email, 2)){
                    $("#warningemail").hide();
                    return;
                }
                if (email.search('@') == -1) {
                    $("#warningemail").show();
                    $("#inemail").addClass("is-invalid");
                    isvalid[2] = false;
                } else {
                    $("#warningemail").hide();
                    $("#inemail").removeClass("is-invalid");
                    isvalid[2] = true;
                }
            });
            //Validasi password harus memiliki panjang 8-16
            $("#inpassword").change(function () {
                password = $("#inpassword").val();
                if(!isfilled(password, 3)){
                    $("#warningpassword").hide();
                    return;
                }
                if (password.length < 8 || password.length > 16) {
                    $("#warningpassword").show();
                    $("#inpassword").addClass("is-invalid");
                    isvalid[3] = false;
                } else {
                    $("#warningpassword").hide();
                    $("#inpassword").removeClass("is-invalid");
                    isvalid[3] = true;
                }
            });
            //Validasi telepon harus terdiri dari angka minimum 7 digit
            $("#intelephone").change(function () {
                telephone = $("#intelephone").val();
                if(!isfilled(telephone, 4)){
                    $("#warningtelephone").hide();
                    return;
                }
                telephonePatt = new RegExp("^[0-9]{7,}$");
                if (!telephonePatt.test(telephone)) {
                    $("#warningtelephone").show();
                    $("#intelephone").addClass("is-invalid");
                    isvalid[4] = false;
                } else {
                    $("#warningtelephone").hide();
                    $("#intelephone").removeClass("is-invalid");
                    isvalid[4] = true;
                }
            });
            //Validasi course tidak boleh memilih ""
            $("#incourse").change(function () {
                course = $("#incourse").val();
                if(!isfilled(course, 5)){
                    return;
                }
            });
            //Validasi zipcode harus 6 digit angka
            $("#inzipcode").change(function () {
                zipcode = $("#inzipcode").val();
                if(!isfilled(zipcode, 6)){
                    $("#warningzipcode").hide();
                    return;
                }
                zipPatt = new RegExp("^[0-9]{6}$");
                if (!zipPatt.test(zipcode)) {
                    $("#warningzipcode").show();
                    $("#inzipcode").addClass("is-invalid");
                    isvalid[6] = false;
                } else {
                    $("#warningzipcode").hide();
                    $("#inzipcode").removeClass("is-invalid");
                    isvalid[6] = true;
                }
            });

            //Validasi on submit

            function isallfilled(){
                name = $("#inname").val();
                address = $("#inaddress").val();
                email = $("#inemail").val();
                password = $("#inpassword").val();
                telephone = $("#intelephone").val();
                course = $("#incourse").val();
                zipcode = $("#inzipcode").val();
                ret = true;
                values = [name, address, email, password, telephone, course, zipcode];
                for(i in values){
                    if(isfilled(values[i], i)){
                        ret = false;
                    }
                }
                return ret;
            }

            function isallvalid() {
                for (i in isvalid) {
                    if (isvalid[i] == false) {
                        return false;
                    }
                }
                return true;
            }

            $("form").submit(function ( event ) {
                if(!isallfilled() || !isallvalid()){
                    alert('canceled');
                    event.preventDefault();
                }
            });

        });
    </script>
    <title>Registration Form</title>
</head>

<body>
    <div class="container-fluid text-center">
        <div id="pagetitle" class="mb-5 mt-5">
            <h1>REGISTRATION FORM</h1>
        </div>
        <div class="row">
            <div class="col-md-3"></div>
            <div id="form" class="col-md-6">
                <form id="registrationform" action="https://my.its.ac.id/" autocomplete="off">
                    <div>
                        <div id="name" class="mb-3">
                            <label for="inname" class="form-label">Nama</label><br>
                            <input type="text" id="inname" class="form-control">
                            <div id="warningname" class="form-text text-danger collapse">
                                <p class="">Nama tidak boleh terdapat angka</p>
                            </div>
                            <div id="fillname" class="form-text text-danger collapse">
                                <p>Nama tidak boleh kosong</p>
                            </div>
                        </div>
                        <div id="address" class="mb-3">
                            <label for="inaddress" class="form-label">Alamat</label><br>
                            <input type="text" id="inaddress" class="form-control">
                            <div id="filladdress" class="form-text text-danger collapse">
                                <p>Alamat tidak boleh kosong</p>
                            </div>
                        </div>
                        <div id="email" class="mb-3">
                            <label for="inemail" class="form-label">Alamat Email</label><br>
                            <input type="text" id="inemail" class="form-control">
                            <div id="warningemail" class="form-text text-danger collapse">
                                <p class="">Mohon masukkan email yang valid</p>
                            </div>
                            <div id="fillemail" class="form-text text-danger collapse">
                                <p>Alamat Email tidak boleh kosong</p>
                            </div>
                        </div>
                        <div id="password" class="mb-3">
                            <label for="inpassword" class="form-label">Password</label><br>
                            <input type="password" id="inpassword" class="form-control">
                            <div id="warningpassword" class="form-text text-danger collapse">
                                <p class="">Panjang password harus diantara 8-16</p>
                            </div>
                            <div id="fillpassword" class="form-text text-danger collapse">
                                <p>Password tidak boleh kosong</p>
                            </div>
                        </div>
                        <div id="telephone" class="mb-3">
                            <label for="intelephone" class="form-label">Telepon</label><br>
                            <input type="text" id="intelephone" class="form-control">
                            <div id="warningtelephone" class="form-text text-danger collapse">
                                <p class="">Harus terdiri dari angka dan minimal 7 digit</p>
                            </div>
                            <div id="filltelephone" class="form-text text-danger collapse">
                                <p>Telepon tidak boleh kosong</p>
                            </div>
                        </div>
                        <div id="course" class="mb-3">
                            <label for="incourse" class="form-label">Pilih Course</label><br>
                            <select name="incourse" id="incourse" class="form-select">
                                <option value=""></option>
                                <option value="BTECH">BTECH</option>
                                <option value="BBA">BBA</option>
                                <option value="BCA">BCA</option>
                                <option value="B.COM">B.COM</option>
                                <option value="GEEKFORGEEKS">GEEKFORGEEKS</option>
                                <option value=""></option>
                            </select>
                            <div id="fillcourse" class="form-text text-danger collapse">
                                <p class="">Mohon pilih salah satu course</p>
                            </div>
                        </div>
                        <div id="zipcode" class="mb-3">
                            <label for="inzipcode" class="form-label">Kode pos</label><br>
                            <input type="text" id="inzipcode" class="form-control">
                            <div id="warningzipcode" class="form-text text-danger collapse">
                                <p class="">Harus berisi 6 digit angka</p>
                            </div>
                            <div id="fillzipcode" class="form-text text-danger collapse">
                                <p>Kode pos tidak boleh kosong</p>
                            </div>
                        </div>
                    </div>
                    <div id="buttons" class="mb-3 mt-5">
                        <button id="sendform" type="submit" class="btn btn-primary">Send</button>
                        <button type="reset" class="btn btn-secondary">Reset</button>
                    </div>
                </form>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</body>

</html>
