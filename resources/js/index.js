$(document).keydown(function (event) {
    if (event.keyCode == 123) {
        return false;
    }
    else if (event.ctrlKey && event.shiftKey && event.keyCode == 73) {
        return false;  //Disable from ctrl+shift+i
    }
});


//Disable right-click in div
$('div').bind("contextmenu", function (e) {
    e.preventDefault();

});


//Disable f12
$(document).keydown(function (event) {
    if (event.keyCode == 123) {
        return false;
    }
    else if (event.ctrlKey && event.shiftKey && event.keyCode == 73) {
        return false;  //Disable from ctrl+shift+i
    }
});


//Disable right-click in div
$('div').bind("contextmenu", function (e) {
    e.preventDefault();
});


$(()=>{
    $("#sbu_warehouse").select2();
});


// DATE TIME FUNCTIONS
const month = ["January","February","March","April","May","June","July","August","September","October","November","December"],
day = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];
var d = new Date();
$('#greet').text(greet(d.getHours()));
$('h1[id=time]').text(gettime(d.getHours(),d.getMinutes(),d.getSeconds()));
$('h1[id=date]').text(day[d.getDay()]+", "+month[d.getMonth()]+" "+d.getDate()+", "+d.getFullYear());
setInterval(()=>{
    d = new Date();
    $('#greet').text(greet(d.getHours()));
    $('h1[id=time]').text(gettime(d.getHours(),d.getMinutes(),d.getSeconds()));
    $('h1[id=date]').text(day[d.getDay()]+", "+month[d.getMonth()]+" "+d.getDate()+", "+d.getFullYear());
},1000);


function toasts_warning(message) {
    iziToast.warning({
        title: 'WMS Notification',
        message: message,
        position: 'topRight',
        timeout: '2500'
    });
}


function get_sbu_warehouses(){
    $.ajax({
        type: 'POST',
        url: 'app/Controller/ajax_login.php',
        data: { 
            method : 'getSbuWarehouses'
        },
        dataType: 'text',
        success:function(result){ 
            $('#sbu_warehouse').empty();
            $('#sbu_warehouse').append('<option value ="" selected>Select Warehouse</option>');
            $('#sbu_warehouse').append(result);
        }
    });
}


function redirectToLogin(){
    var warehouse_id = $("#sbu_warehouse").val();

    if(warehouse_id == ""){
        toasts_warning("Please select warehouse!");
    }else{

        localStorage.setItem("warehouse_id", warehouse_id);
        window.location.href = '/WMS-Queuing/login.php';
    }
}


function gettime(h,m,s){
    if(h >= 0 && h<12){
        if(m <10)return h+":0"+m+":"+s+" am";
        else return h+":"+m+":"+s+" am";
    }
    else{
        if(m<10)return h%12+":0"+m+":"+s+" pm";
        else return h%12+":"+m+":"+s+" pm";
        
    } 
}


function greet(time){
    if(time >=1 && time <12)return "Good Morning";
    else if(time ==12 )return "Good Day";
    else if(time >=13 && time <=16)return "Good Afternoon";
    else return "Good Evening";
}