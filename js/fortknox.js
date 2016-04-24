/**
 * Created by d.mouton on 01/03/2016.
 */


console.log('coucou');

var getAlarm = function ( type, state ) {
    return {
        type: type,
        state: state
    };
}

var getAlarms = function () {
    return [
        getAlarm(0, 0),
        getAlarm(0, 0),
        getAlarm(0, 1),
        getAlarm(0, 2)
    ];
}

var getAlarmsAjax = function () {
    $.ajax({
        url: "http://localhost/fortknox/Server.php?action=getAlarms"
    }).done(function ( data ) {
        if ( console && console.log ) {
            console.log("Sample of data:", data.slice(0, 100));
        }
        alarms = JSON.parse(data).message;
        updateAlarm();
    });
}

var updateAlarm = function ( ) {
    for ( var i = 0; i < alarms.length; i++ ) {
        $('#alarm' + (i+1)).attr("src", "assets/led" + alarms[i].state + '.png');
    }
}

var alarms = getAlarms();

$(document).ready(function () {
    updateAlarm();
    getAlarmsAjax();
    window.setInterval(getAlarmsAjax,1*1000);
});