var t = new Date();
var y = t.getFullYear();
var m = t.getMonth();
var d = t.getDay();
var dt = t.getDate();
var month = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];
var day = ["Senin", "Selasa", "Rabu", "Kamis", "Jum'at", "Sabtu", "Minggu"];
var thisMonth = month[m];
var thisDay = day[d-1];
var minutes = t.getMinutes();
if (minutes < 10 ){
    minutes = "0"+ minutes
}
var time = t.getHours()+'.'+minutes;
var currentDateTime = thisDay+', '+dt+' '+thisMonth+' '+y+' '+time;
document.getElementById("currentDate").innerHTML = currentDateTime;