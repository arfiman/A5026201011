<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function () {

            idlist = ["#judul", "#no", "#jenis", "#tanggal"];

            function showfillmessage(id) {
                $(id + "warning").hide();
                $(id + "fill").show();
            }

            function showwarningmessage(id) {
                $(id + "warning").show();
                $(id + "fill").hide();
            }

            function hideallmessage(id) {
                $(id + "warning").hide();
                $(id + "fill").hide();
            }

            function isfilled(id) {
                if ($(id).val() == "") {
                    showfillmessage(id)
                    return false;
                }
                else {
                    return true;
                }
            }

            function isvaliddate(val) {
                //cek format date
                console.log('cek format')
                dateformat = new RegExp("^[0-9]{1,2}\/[0-9]{1,2}\/[0-9]{4}$")
                if (!dateformat.test(val)) {
                    return false;
                }

                // Ubah val menjadi angka
                var parts = val.split("/");
                var day = parseInt(parts[0]);
                var month = parseInt(parts[1]);
                var year = parseInt(parts[2]);

                // Cek range bulan
                console.log("cek bulan")
                if (month < 1 || month > 12) {
                    return false;
                }

                var hariperbulan = [31, 29, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];

                console.log("cek hari")
                // cek range hari per bulan
                if((day > 0) && (day <= hariperbulan[month - 1])){
                    return true;
                } else {
                    return false;
                }
            }

            function isvalid(id) {
                val = $(id).val();

                if (id == "#judul") {
                    if (val.length < 10) {
                        showwarningmessage(id);
                        return false;
                    } else {
                        return true;
                    }
                }
                if (id == "#no") {
                    patt = new RegExp("^[0-9]{5}$");
                    if (!patt.test(val)) {
                        showwarningmessage(id);
                        return false;
                    } else {
                        return true;
                    }
                }
                if (id == "#jenis") {
                    return true;
                }
                if (id == "#tanggal") {
                    if (!isvaliddate(val)) {
                        showwarningmessage(id);
                        return false;
                    } else {
                        return true;
                    }
                }
                return false;
            }

            function onsubmitvalidation() {
                ret = true;

                for (i in idlist) {
                    if(!isfilled(idlist[i]) || !isvalid(idlist[i])){
                        ret = false;
                    } else {
                        hideallmessage(idlist[i]);
                    }
                }

                return ret;
            }

            $("form").submit(function (event) {
                if (!onsubmitvalidation()) {
                    event.preventDefault();
                }
            });
        });
    </script>
    <style>

    </style>
    <title>Form Peminjaman Buku</title>
</head>

<body>
    <div id="identitas" class="container-fluid">
        <p>Nama Lengkap: Muhammad Arif Nuriman</p>
        <p>Nama Panggilan: Arif</p>
        <p>NRP: 5026201011</p>
    </div>
    <div class="container-fluid text-center">
        <div class="mt-5 mb-5">
            <h1>Form Input Peminjaman Buku</h1>
        </div>
        <div>
            <form id="formpeminjaman" action="https://www.w3schools.com/" autocomplete="off">
                @csrf
                <div class="mt-3">
                    <label for="judul" class="form-label">Judul Buku : </label>
                    <input id="judul" type="text" class="form-control">
                    <div id="judulfill" class="form-text text-danger collapse">
                        <p>Judul buku harus terisi</p>
                    </div>
                    <div id="judulwarning" class="form-text text-danger collapse">
                        <p>Judul buku minimal terdapat 10 karakter</p>
                    </div>
                </div>
                <div class="mt-3">
                    <label for="no" class="form-label">Nomor Buku : </label>
                    <input id="no" type="text" class="form-control">
                    <div id="nofill" class="form-text text-danger collapse">
                        <p>Nomor buku harus terisi</p>
                    </div>
                    <div id="nowarning" class="form-text text-danger collapse">
                        <p>Nomor buku terdiri dari 5 digit angka</p>
                    </div>
                </div>
                <div class="mt-3">
                    <label for="jenis" class="form-label">Jenis peminjaman : </label>
                    <select name="jenis" id="jenis" class="form-select">
                        <option value=""></option>
                        <option value="Biasa">Biasa</option>
                        <option value="Kilat">Kilat</option>
                        <option value="Lama">Lama</option>
                    </select>
                    <div id="jenisfill" class="form-text text-danger collapse">
                        <p>Jenis peminjaman harus terisi</p>
                    </div>
                </div>
                <div class="mt-3">
                    <label for="tanggal" class="form-label">Tanggal peminjaman : </label>
                    <input id="tanggal" type="text" class="form-control" placeholder="dd/mm/yyyy">
                    <div id="tanggalfill" class="form-text text-danger collapse">
                        <p>Tanggal peminjaman harus terisi</p>
                    </div>
                    <div id="tanggalwarning" class="form-text text-danger collapse">
                        <p>Tanggal peminjaman harus berupa tanggal valid yang mengikuti format dd/mm/yyyy</p>
                    </div>
                </div>
                <div class="mt-5 mb-5">
                    <button id="saveform" type="submit" class="btn btn-primary">Simpan</button>
                    <button type="reset" class="btn btn-success">Reset</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
