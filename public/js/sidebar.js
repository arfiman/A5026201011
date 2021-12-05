function sidebar_toggle(){
    if($("#mySidebar").css("display") == "block"){ // Jika Sidebar sedang ditampilkan
        $("#main").css("marginLeft", "0%");
        $("#openNav").html("&#9776"); // Ubah icon menjadi tiga garis
        $("#mySidebar").css("display", "none");
    } else {
        $("#main").css("marginLeft", "25%");
        $("#mySidebar").css("width", "25%");
        $("#openNav").html("&#9932"); // Ubah icon menjadi tanda silang
        $("#mySidebar").css("display", "block");
    }
}
