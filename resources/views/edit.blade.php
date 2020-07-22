<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>
    <style>
        div{
            padding:5px;
        }
    </style>
</head>
<body>
    <center>
    <form action="{{ url("/penduduks/{$penduduk->id}") }}"method="POST">
    @method('PATCH')
    @csrf
        <div>
            <label for="nama" style="margin-right:10px">Nama :</label>
        <input value="{{$penduduk->name}}" type="text", name="nama">
        </div>

        <div>
            <label for="Nokk" style="margin-right:5px">No KK :</label>
        <input value="{{$penduduk->no_kk}}" type="text", name="Nokk">
        </div>

        <div>
            <label for="NIK" style="margin-right:25px">NIK :</label>
        <input value="{{$penduduk->NIK}}" type="text", name="NIK">
        </div>

        <div>
            <label for="nohp" style="margin-right:13px">No hp :</label>
        <input value="{{$penduduk->nohp}}" type="text", name="NoHP">
        </div>
        <input type="submit" value="Simpan">
    </form>
    </center>
</body>
</html>