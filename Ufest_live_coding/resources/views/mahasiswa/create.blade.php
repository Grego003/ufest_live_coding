<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>create mahasiswa</title>
</head>

<body style="display:flex;
flex-direction: column;
justify-content: center;
align-items: center; height: 100vh;">

    <h1>CREATE MAHASISWA </h1>
    <form action="/mahasiswa" method="post" enctype="multipart/form-data">
        @csrf
        NIM : <input type="text" name="nim"> <br />
        nama : <input type="text" name="nama"> <br />
        jurusan : <input type="text" name="jurusan"> <br />
        <button type="submit">submit</button>
    </form>
    <div style="margin-top:10px; display:flex;justify-content:space-between; width:200px;">
        <a href="{{ URL::route('mahasiswa.index') }}">Back</a>
    </div>

</body>

</html>
