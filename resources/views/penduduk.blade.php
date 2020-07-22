<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Penduduk</title>
    <style>
        button{
            color:blueviolet;
            text-decoration:underline;
        }
        .tambah{
            margin-left:410px;
            font-size:1.6em;
        }
    </style>
</head>
<body>
<center>

    {{-- This is Index --}}

    <h1>Data Penduduk</h1>

    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>No KK</th>
            <th>NIK</th>
            <th>No hp</th>
            <th colspan="2">Pilihan</th>
        </tr>
            @foreach ($penduduks as $penduduk)
        <tr>
        <td>{{$penduduk->id}}</td>
        <td>{{$penduduk->name}}</td>
        <td>{{$penduduk->no_kk}}</td>
        <td>{{$penduduk->NIK}}</td>
        <td>{{$penduduk->nohp}}</td>
        <td><a href="{{url("penduduks/{$penduduk->id}/edit")}}">
            <button>Edit</button></a></td>
        <td>
        <form action="{{ url("penduduks/{$penduduk->id}") }}" method="POST">
                @csrf
                @method('DELETE')
                <button>Hapus</button>
            </form>
        </td>
        </tr>
            @endforeach
    </table>
    <br>
    <a class="tambah" href="{{ url("penduduks/create") }}">Tambah data</a>
</center>
</body>
</html>