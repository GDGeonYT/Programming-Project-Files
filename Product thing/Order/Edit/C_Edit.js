$(document).ready(function(){
    $('#C_ID').val(localStorage.getItem('C_ID_Data'));
    $('#C_Name').val(localStorage.getItem('C_Name_Data'));
    $('#C_Gender').val(localStorage.getItem('C_Gender_Data'));
    $('#C_Birthday').val(localStorage.getItem('C_Birthday_Data'));
    $('#C_Address').val(localStorage.getItem('C_Address_Data'));
})