<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
    <script src="js/jquery-2.2.1.min.js"></script>
    <script src="js/fortknox.js"></script>
    <style>
        #mapContainer {
            background-image: url('assets/bg.jpg');
            background-size: 600px 450px;
            background-repeat: no-repeat;
            width: 600px;
            height: 450px;
            position: absolute;
        }

        .alarmIcon{
            position: absolute;
        }
    </style>
</head>
<body>
<div id="mapContainer">
    <img src="assets/led0.png" id="alarm1" class="alarmIcon" style="top: 56px;left:210px">
    <img src="assets/led0.png" id="alarm2" class="alarmIcon" style="top: 336px;left:240px">
    <img src="assets/led0.png" id="alarm3" class="alarmIcon" style="top: 236px;left:110px">
    <img src="assets/led0.png" id="alarm4" class="alarmIcon" style="top: 276px;left:510px">
</div>
</body>
</html>