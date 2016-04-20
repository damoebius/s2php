var getAlarmsAjax = function () {
    $.ajax({
        url: "http://localhost/fortknox/Server.php?action=getAlarms"
    }).done(function ( data ) {
        updateAlarm(JSON.parse(data).message);
    });
}

var updateAlarm = function ( alarms ) {
    for ( var i = 0; i < alarms.length; i++ ) {
        $('#alarm' + i).find('input')[0].value = alarms[i].state;
        $('#alarm' + i).find('input')[1].value = alarms[i].type;
    }
    this.alarms = alarms;
}

var sendAlarms = function (){
    console.log('sending alarms ' + this.alarms);
    for ( var i = 0; i < this.alarms.length; i++ ) {
        this.alarms[i].state = $('#alarm' + i).find('input')[0].value;
        this.alarms[i].type = $('#alarm' + i).find('input')[1].value;
    }
    $.ajax({
        url: "http://localhost/fortknox/Server.php?action=updateAlarms",
        type:'POST',
        data: JSON.stringify(this.alarms),
        contentType: "application/json; charset=utf-8",
        dataType: "json"
    }).done(function ( data ) {
        console.log(data.message);
    });
}

$(document).ready(function () {
    getAlarmsAjax();
});