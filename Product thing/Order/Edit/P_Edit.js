$(document).ready(function(){
    $('#P_ID').val(localStorage.getItem('P_ID_Data'));
    $('#P_Name').val(localStorage.getItem('P_Name_Data'));
    $('#P_SKU').val(localStorage.getItem('P_SKU_Data'));
    $('#P_Type').val(localStorage.getItem('P_Type_Data'));
    $('#P_Brand').val(localStorage.getItem('P_Brand_Data'));
    $('#P_Price').val(localStorage.getItem('P_Price_Data'));
})