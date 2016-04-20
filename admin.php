<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Admin</title>
    <script src="js/jquery-2.2.1.min.js"></script>
    <script src="js/admin.js"></script>
    <style>

    </style>
</head>
<body>
<form>
    <div id="alarm0">
        state:<input type="text" name="alarmState"><br>
        type: <input type="text" name="alarmType">
    </div>
    <div id="alarm1">
        state:<input type="text" name="alarmState"><br>
        type: <input type="text" name="alarmType">
    </div>
    <div id="alarm2">
        state:<input type="text" name="alarmState"><br>
        type: <input type="text" name="alarmType">
    </div>
    <div id="alarm3">
        state:<input type="text" name="alarmState"><br>
        type: <input type="text" name="alarmType">
    </div>
    <div id="alarm4">
        state:<input type="text" name="alarmState"><br>
        type: <input type="text" name="alarmType">
    </div>
</form>
<button id="sendButton" onclick="sendAlarms()">Valider</button>
</body>
</html>