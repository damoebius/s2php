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
        url: "http://localhost/fortknox/Server.php"
    }).done(function ( data ) {
        if ( console && console.log ) {
            console.log("Sample of data:", data.slice(0, 100));
        }
        updateAlarm(JSON.parse(data));
    });
}

var updateAlarm = function ( alarms ) {
    for ( var i = 0; i < alarms.length; i++ ) {
        $('#alarm' + i).attr("src", "assets/led" + alarms[i].state + '.png');
        if(alarms[i].state == 2){
            $('#alarm' + i).animate({opacity: 0}, 1000);
            $('#alarm' + i).animate({opacity: 1}, 1000);
        }
    }
}

$(document).ready(function () {
    updateAlarm(getAlarms());
    getAlarmsAjax();
});