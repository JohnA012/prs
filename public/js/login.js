var checked = 0;

$('#sbu_warehouse').select2();
$('#sm-sbu_warehouse').select2();
$('body').on('click','input[id=showpass]',function(){
    if(checked <=0){
        $('input[id=password]').attr('type','text');
        $('input[id=showpass]').prop('checked',true);
    }else{
        $('input[id=password]').attr('type','password');
        $('input[id=showpass]').prop('checked',false );
    }
    checked = $("input[id=showpass]:checked").length;

});

// CONVERT FORM START 
function convert_form_data_to_object(form){
    var arr={};
    for(var x=0; x<form.length; x++){
        arr[form[x].name] = form[x].value;
    }
    return arr;
}
// CONVERT FORM END 


//normal toasters
function toasts_info(message) {
    iziToast.info({
        title: 'WMS Notification',
        message: message,
        position: 'topRight',
        timeout: '2500'
    });
}

function toasts_warning(message) {
    iziToast.warning({
        title: 'WMS Notification',
        message: message,
        position: 'topRight',
        timeout: '2500'
    });
}

function toasts_success(message) {
    iziToast.success({
        title: 'WMS Notification',
        message: message,
        position: 'topRight',
        timeout: '2500'
    });
}

function toasts_error(message) {
    iziToast.error({
        title: 'WMS Notification',
        message: message,
        position: 'topRight',
        timeout: '2500'
    });
}

function toasts_error(message) {
    iziToast.error({
        title: 'WMS Notification',
        message: message,
        position: 'topRight',
        timeout: '2500'
    });
}
//normal toasters

// DATE TIME FUNCTIONS
const month = ["January","February","March","April","May","June","July","August","September","October","November","December"],
day = ["Sunday","Monday","Tueday","Wednesday","Thursday","Friday","Saturday"];
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
    console.log(time)
}

window.livewire.on('failed', (error)=>{
    toasts_warning(error);
});


setTimeout(() => {
    $('#logout_alert').fadeOut();
}, 1500);