<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>
    <style>
        div{
            padding:5px;
        }
    </style>
</head>
<body>
    <center>
    <form action="{{ url("/penduduks") }}"method="POST">
    @csrf
        <div>
            <label for="nama" style="margin-right:10px">Nama :</label>
            <input type="text", name="nama">
        </div>

        <div>
            <label for="Nokk" style="margin-right:5px">No KK :</label>
            <input type="text", name="Nokk">
        </div>

        <div>
            <label for="NIK" style="margin-right:25px">NIK :</label>
            <input type="text", name="NIK">
        </div>

        <div>
            <label for="nohp" style="margin-right:13px">No hp :</label>
            <input type="text", name="NoHP">
        </div>
        <input type="submit" value="Tambah">
    </form>
    </center>
</body>
</html>