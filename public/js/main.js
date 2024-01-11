// //    //Disable f12
// $(document).keydown(function (event) {
//     if (event.keyCode == 123) {
//         return false;
//     }
//     else if (event.ctrlKey && event.shiftKey && event.keyCode == 73) {
//         return false;  //Disable from ctrl+shift+i
//     }
// });

//Disable right-click in div
$('div').bind("contextmenu", function (e) {
    e.preventDefault();
});

//Disable right-click in div
$('div').bind("contextmenu", function (e) {
    e.preventDefault();
});

$(function(){
    if(window.location.href.includes('manage-users')) {
        $(".sidebar li[target]").removeClass('main-nav-active');
        $(".sidebar li[target=4]").addClass('main-nav-active');
    }else if(window.location.href.includes('receiving') || window.location.href.includes('putaway')){
        $(".sidebar li[target]").removeClass('main-nav-active');
        $(".sidebar li[target=1]").addClass('main-nav-active');
    }else if(window.location.href == "http://localhost/Glacier-WMS/"){
        $(".sidebar li[target]").removeClass('main-nav-active');
        $(".sidebar li[target=0]").addClass('main-nav-active');
    }
    windowresize($(document).width());
    windowheight($(document).height());
});


const body = document.querySelector('body'),
      sidebar = body.querySelector('nav'),
      toggle = body.querySelector(".toggle"),
      modeSwitch = body.querySelector(".toggle-switch"),
      modeText = body.querySelector(".mode-text");


if(sessionStorage.getItem('mode') == 'dark'){
    $('body').attr('class','dark');
    modeText.innerText = "Light mode";
}else{
    $('body').removeAttr('class');
    modeText.innerText = "Dark mode";
}
// windowresize($(document).width());
// windowheight($(document).height());
$(window).resize(function(){
    windowresize($(document).width());
    windowheight($(document).height());
});


$('body').on('click','li[id=main-nav]',function(){
    $("i#chevArrow").css(
        'transform','rotate(0deg)'
    );
    $("li[id=main-nav]").removeClass("main-nav-active")
    for(var x=1; x<=9; x++){
        $('#sub-nav'+x).slideUp();
    }
    var target = $(this).attr('target');

    if($(this).attr('data-bool') == "1"){
        if($('#sub-nav'+target).css('display') == 'none'){
            $('#sub-nav'+target).slideDown();
    
            $(this).find("i.bx-chevron-right").css(
                'transform','rotate(90deg)'
            );
        }else{
            $('#sub-nav'+target).slideUp();
    
            $(this).find("i.bx-chevron-right").css(
                'transform','rotate(0deg)'
            );
        }
    }

    $(this).addClass('main-nav-active');
    
});
// SIDEBAR END
// NAV BAR START
$('#show-nav-details').click(()=>{
    $('.nav-settings').slideToggle(0);
});
// NAV BAR END


// LOG OUT USER FOR INACTIVITY
var previous = 0;

document.addEventListener("mousemove", function(evt) {
 if(previous > 0) return;
 previous++;
});
$('body').on('mousemove',()=>{
    previous++;
});
document.addEventListener("click", function(evt) {
  if(previous > 0) return;
  previous++;
});

window.addEventListener("scroll", function(evt) {
  if(previous > 0) return;
  previous++;
});

var timer = 0;
setInterval(function(){
    if(previous > 0 ){
        timer = 0;
    }else{
    
        if(timer == 300){
            if(confirm("It's been a long time since you don't see me, click 'OK' if you want to logout")){
                location.href = 'app/Controller/logout.php';
            }else{
                location.reload();
                
            }
            timer = 0;
        }
    }
    timer++;
    previous = 0;
    // console.log(timer);
},1000); 

$(document).on('select2:open', () => {
    document.querySelector('.select2-search__field').focus();
});




toggle.addEventListener("click" , () =>{
    sidebaropenfunction();
    if($('.sidebar').attr('class') == 'sidebar close'){
        sessionStorage.setItem("status", "open");
        $('.home').css('width','calc(100% - 78px)');
        $('li[id=main-nav]').attr('data-bool','0');
        for(var x=1; x<=9; x++){
            $('#sub-nav'+x).slideUp();
        }
        $('i#chevArrow').hide();
        $('#manageUser').css('padding-left', '10px');
    }else{
        sessionStorage.setItem("status", "close");
        $('.home').css('width','calc(100% - 250px)');
        $('li[id=main-nav]').attr('data-bool','1');
        $('i#chevArrow').show();
        $('#manageUser').css('padding-left', '0');
    }
});


modeSwitch.addEventListener("click" , () =>{
    
    body.classList.toggle("dark");
    // console.log(sessionStorage.getItem('mode'));
    if(body.classList.contains("dark")){
        sessionStorage.setItem("mode", "dark");
        modeText.innerText = "Light mode";

        $(".select2-container--disabled .select2-selection, .select2-container--disabled .select2-selection__rendered, .select2-container--disabled .select2-selection__arrow").attr('style', '');
                
        setTimeout(() => {
            $(".select2-container--disabled .select2-selection, .select2-container--disabled .select2-selection__rendered, .select2-container--disabled .select2-selection__arrow").attr('style', 'background-color:#5b5c5d !important;');
            
            $("#AR table .text-td").attr('style', 'color : #ffffff !important;');

            $("#putaway_tbl_tbody .table-warning td, #putaway_tbl_tbody .table-warning td").attr('style', 'color : #242526 !important;');
            $("#putaway_tbl_tbody .table-success td").attr('style', 'color : #ffffff !important;');
        }, 100);
    }else{
        sessionStorage.setItem("mode", "light");
        modeText.innerText = "Dark mode";
        
        $(".select2-container--disabled .select2-selection, .select2-container--disabled .select2-selection__rendered, .select2-container--disabled .select2-selection__arrow").attr('style', '');

        $("#AR table .text-td, #putaway_tbl_tbody .table-success td").attr('style', 'color : #000000 !important;');
        $("#putaway_tbl_tbody .table-warning td, #putaway_tbl_tbody .table-warning td").attr('style', 'color : #000000 !important;');
    }
});


function sidebaropenfunction(){
    if(sessionStorage.getItem("status")=="open"){
        $('.sidebar').removeClass('close');
    }else{
        $('.sidebar').addClass('close');
    }
}


function windowresize(width){
    sublink_hover();
    if((width >0 && width <= 600)){
        if($('.sidebar').attr('class') == 'sidebar close'){
            $('.sidebar').css('left','-100px');
            $('.home').css('width','calc(100% - 0px)');
            $('i#chevArrow').hide();
            $('li[id=main-nav]').attr('data-bool','0');
        }else{
            $('li[id=main-nav]').attr('data-bool','1');
            $('i#chevArrow').show();
        }
        $('#nav-menu').click(function(){
            for(var x=1; x<=9; x++)$('#sub-nav-hover'+x).slideUp(0);
            if($('.sidebar').css('left') == '0px'){
                $(this).css('left','0px');
                $('.sidebar').css('left','-100px');
                $('.home').css('width','calc(100% - 0px)');
            }else{
                $(this).css('left','80px');
                $('.sidebar').css('left','0px');
                $('.home').css('width','calc(100% - 0px)');
            }
        });
    }
    else if((width > 599 && width <= 800)){
        for(var x=1; x<=9; x++){
            $('#sub-nav'+x).slideUp();
        }
        if($('.sidebar').attr('class') == 'sidebar close'){
            $('.sidebar').css('left','0px');
            $('.home').css('width','calc(100% - 78px)');
            $('i#chevArrow').hide();
            $('li[id=main-nav]').attr('data-bool','0');
        }else{
            $('li[id=main-nav]').attr('data-bool','1');
            $('i#chevArrow').show();
        }
    }
    else{
        $('#nav-menu').css('left','0px');
        $("i#chevArrow").css(
            'transform','rotate(0deg)'
        );
        if($('.sidebar').attr('class') == 'sidebar close'){
            $('li[id=main-nav]').attr('data-bool','0');
            $('.home').css('width','calc(100% - 78px)');
            $('.sidebar').css('left','0px');
            $('i#chevArrow').hide();
        }else{
            // $('.home').css('width','calc(100% - 250px)');
            // $('.sidebar').css('left','0px');
            $('li[id=main-nav]').attr('data-bool','1');
            $('i#chevArrow').show();
        }
    }
}


function windowheight(height){
    if(height <= 800){
        $('#sub-nav-hover7').css('top','40px');
    }else{
        $('#sub-nav-hover4').css('top','340px');
    }
}


function sublink_hover(){
    $('body').on('mouseenter','li[id=main-nav]',function(){
        for(var x=1; x<=9; x++){
            $('#sub-nav-hover'+x).hide();
        }
        var target = $(this).attr('target');
        if($(this).attr('data-bool') == "0"){
            if($('#sub-nav-hover'+target).css('display') == 'none'){
                let pos = $(this).offset();
                $('#sub-nav-hover'+target).show();
                if(parseInt(pos.top) >= 520)$('#sub-nav-hover'+target).css('top',parseInt(pos.top)-190);
                else $('#sub-nav-hover'+target).css('top',parseInt(pos.top));
            }else $('#sub-nav-hover'+target).hide();
        }
    }).on('mouseleave','ul[class=sublink-hover]',function(){
        for(var x=1; x<=9; x++){
            $('#sub-nav-hover'+x).hide();
        }
    });
}


// ==== RETURNS NUMBERS ONLY START ==== //
function numberonly(evnt){
    var ASCIICode = (evnt.which) ? evnt.which : evnt.keyCode
    if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57))return false;
    else return true;
}
// ==== RETURNS NUMBERS ONLY END ==== //


// CONVERT FORM START 
function convert_form_data_to_object(form){
    var arr={};
    for(var x=0; x<form.length; x++){
        arr[form[x].name] = form[x].value.trim();
    }
    return arr;
}
// CONVERT FORM END 


// GET CURRENT DATE START
function getCurrentDate(){
    var d = new Date();
    var month = d.getMonth()+1;
    var day = d.getDate();

    var output = d.getFullYear() + '-' +
        (month<10 ? '0' : '') + month + '-' +
        (day<10 ? '0' : '') + day;
    return Date.parse(output);
}
//GET CURRENT DATE END


//toasters
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


//location reload toasters
function toasts_info_reload(message) {
    iziToast.info({
        title: 'WMS Notification',
        message: message,
        position: 'topRight',
        timeout: '1500',
        onClosed: function(instance, toast, closedBy) {
            location.reload();
        }

    });
}


function toasts_warning_reload(message) {
    iziToast.warning({
        title: 'WMS Notification',
        message: message,
        position: 'topRight',
        timeout: '1500',
        onClosed: function(instance, toast, closedBy) {
            location.reload();
        }
    });
}


function toasts_success_reload(message) {
    iziToast.success({
        title: 'WMS Notification',
        message: message,
        position: 'topRight',
        timeout: '1000',
        onClosed: function(instance, toast, closedBy) {
            location.reload();
        }
    });
}


function toasts_error_reload(message) {
    iziToast.error({
        title: 'WMS Notification',
        message: message,
        position: 'topRight',
        timeout: '1500',
        onClosed: function(instance, toast, closedBy) {
            location.reload();
        }
    });
}


function toasts_print_issuance(message) 
{
    iziToast.success({
        title: 'WMS Notification',
        message: message,
        position: 'topRight',
        timeout: '1500',
        onClosing: function(instance, toast, closedBy) 
        {
            
        },
        onClosed: function(instance, toast, closedBy) 
        {
            // var OBD = $('#obd_obd').val();
            // window.open("tcpdf/Gpaq/printswstcpdf.php?obd=" + OBD, "_blank");
        }
    });
}



function ReplaceNumberWithCommas(number) {
    //Seperates the components of the number
    var n= number.toString().split(".");

    if(n.length == 1){
        n.push('000');
    }

    //Comma-fies the first part
    n[0] = n[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    //Combines the two sections
    return n.join(".");
}



// CUSTOMIZE MODAL START //
var text = "Loading....";
var textstored = "";
var delaytime=100,count=0,x=0;
// function modal
function show_customize_modal(element){
    count=0,delaytime=100;
    var tag = $(element);
    tag.show();
    if(count == 10){
        $('#loading-text').text("Loading....");
    }else{
        while(count < 10){
            textstored="";
            if(x == 0){
                for(x; x<text.length; x++){
                    delaytext(delaytime,x);
                }
            }
            count++;
        }
    }
}


function show_page_loader(){
    $("#pageLoader").show();
}


function hide_page_loader(){
    $("#outbound_ordering").show();
    $("#pageLoader").hide();
}


function hide_customize_modal(element){
    x = 0;
    var tag = $(element);
    tag.hide();
    text = "Loading....";
}


function delaytext(time,indexx){
    setTimeout(()=>{
        if(textstored.length == text.length){
            $('#loading-text').text("");
            textstored = "";
        }else{
            $('#loading-text').text(textstored);
        }
        textstored+=text[indexx];
    },time);
    delaytime +=100;
}

// CUSTOMIZE MODAL END //


// === RETURN FILE EXTENSION START === //
function getFileExtension(filename){
    const extension = filename.split('.').pop();
    return extension;
}
// === RETURN FILE EXTENSION END === //


// === SHOW ALL PASSWORD FIELD FROM CHANGE PASSWORD FORM START === //
function showallpasswordfield(id){
    if ($('input#'+id).is(':checked')) {
        $('#changepasswordnewpassword').attr('type','text');
        $('#changepasswordconfirmpassword').attr('type','text');
    }else{
        $('#changepasswordnewpassword').attr('type','password');
        $('#changepasswordconfirmpassword').attr('type','password');
    }
}
// === SHOW ALL PASSWORD FIELD FROM CHANGE PASSWORD FORM END === //


function ChangePasswordForm(e,ChangePasswordForm){
    e.preventDefault();
    let form = convert_form_data_to_object($(ChangePasswordForm).serializeArray());
    var lowerCaseLetters = /[a-z]/g,upperCaseLetters = /[A-Z]/g,numbers = /[0-9]/g;
    if(form.old == "" )toasts_error("Old Password is required!!!");
    else if(form.new == "")toasts_error("New Password is required!!!");
    else if(!form.new.match(lowerCaseLetters))toasts_error("Need atleast once lowercase letter!!!");
    else if(!form.new.match(upperCaseLetters))toasts_error("Need atleast once capital(uppercase) letter!!!");
    else if(!form.new.match(numbers))toasts_error("Need atleast one number!!!");
    else if(form.new <=9)toasts_error("New Password is needed to be 8 character!!!");
    else if(form.confirm == "")toasts_error("Confirm Password is required!!!");
    else if(form.confirm != form.new)toasts_error("Invalid Confirm Password!!!");
    else{
        $.post('app/Controller/ajax_maintenance.php',{function:"ChangePassword",arrform:form},
        function(data){
            if(data == 1){
                toasts_success("Success To Change The Password!!!");
                $('#WMS_ChangePassword').modal('hide'); 
            }else{
                toasts_error("Failed To Change The Password!!!");
            } 
        })
        // SUCCESS CODE AREA
    }
}


function show_tableloader(targettable){
    $('#'+targettable).find('.tabulator-tableholder').append('<div id="tableloader"><div id="tableloader-box" class="text-center"><div class="position-relative" id="tableloader-loaderbox"><div id="edgeloader"></div><img src="assets/img/tableloader.gif" alt=""></div><h1 class="fs-6 pt-2" id="loader-text">Loading Data...</h1></div</div>');
}


function hide_tableloader(){
    $('div[id=tableloader]').remove();
}


function randomcolor(num){
    let arrcolor = ['#FFE4C4','#FBE7A1','#AAF0D1','#EDDA74','#C0C0C0','#98AFC7','#A0CFEC','#B4CFEC','#ADDFFF','#C2DFFF','#C6DEFF','#B0CFDE','#D5D6EA','#E3E4FA','#7FFFD4','#36F57F','#00FA9A','#ADFF2F','#E2F516','#CCFB5D','#64E986','#6AFB92','#C2E5D3','#FFDAB9'];
    return arrcolor[num];
}

function filteredNumber(e)
{
    if (e.which == 101 )return false;
    else return true;
}


// HEX TO RGB FUNCTION START //
function hex2rgb(hex, opacity) {
    var h=hex.replace('#', '');
    h =  h.match(new RegExp('(.{'+h.length/3+'})', 'g'));

    for(var i=0; i<h.length; i++)
        h[i] = parseInt(h[i].length==1? h[i]+h[i]:h[i], 16);

    if (typeof opacity != 'undefined')  h.push(opacity);

    return 'rgba('+h.join(',')+')';
}
// HEX TO RGB FUNCTION END //



// CUSTOM TOOLTIP FUNCTION START //
function customTooltip(target,type){
    if(type == "show"){
        $(target).slideDown(200);
    }else{
        $(target).slideUp(0);
    }
    
}
// CUSTOM TOOLTIP FUNCTION END //


// TABULATOR WEIGHT CONVERTER START //
function TabulatorWeightConvert(cellValue,row){
    let nf = new Intl.NumberFormat('en-US'),
    num = parseFloat(cellValue).toFixed(3),
    withcomma = nf.format(num),
    index = withcomma.indexOf('.');
    if(index == -1){
        withcomma +=".000";
    }else{
        let strarr = withcomma.split(".");
        if(strarr[1].length == 1){
            withcomma+="00";
        }else if(strarr[1].length == 2){
            withcomma+="0";
        }
    }
    row.weight = num;
    return withcomma;
}
// TABULATOR WEIGHT CONVERTER END //



// TABLE SHOW AND HIDE FUNCTION START //
function inventoryreportTableShow(content,target){
    if($(target).css('display') == 'block'){
        $(content).html('<i class="bx bxs-show"></i> Show Table');
        $(target).slideUp(200);
    }else{
        $(content).html('<i class="bx bxs-low-vision"></i> Hide Table');
        $(target).slideDown(200);
    }
}
// TABLE SHOW AND HIDE FUNCTION END //



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



// TABULATOR HEADER MENU TABLE START //
function tabulatorHeaderMenu(){
    var menu = [];
    let content = this;
    var columns = content.getColumns();
    columns.splice(0,1);
    let icon = document.createElement("i");
    icon.classList.add("bx")
    icon.classList.add("bxs-show");
    let label = document.createElement("span");
    let title = document.createElement("span");
    title.textContent = " View All";
    label.appendChild(icon);
    label.appendChild(title);
        menu.push({
            label: label,
            action:function(e){
                for(let key in columns){
                    content.showColumn(columns[key]._column.field);
                }
            }
        });
    for(let column of columns)
    {
        let icon = document.createElement("i");
        icon.classList.add("bx");
        icon.classList.add(column.isVisible() ? "bxs-check-square" : "bxs-checkbox");
        let label = document.createElement("span");
        let title = document.createElement("span");
        title.textContent = " " + column.getDefinition().title;
        label.appendChild(icon);
        label.appendChild(title);
        menu.push({
            label:label,
            action:function(e){
                e.stopPropagation();
                column.toggle();
                if(column.isVisible()){
                    icon.classList.remove("bxs-checkbox");
                    icon.classList.add("bxs-check-square");
                }else{
                    icon.classList.remove("bxs-check-square");
                    icon.classList.add("bxs-checkbox");
                }
            }
        });
    }
    return menu;
}
// TABULATOR HEADER MENU TABLE END //

