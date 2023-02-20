<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index Mahasiswa</title>
</head>

<body style="display:flex;
flex-direction: column;
justify-content: center;
 align-items: center; height: 100vh;">

    <div class="list-mahasiswa">
        <table border="1" class="table">
            <thead class="table-light">
                <caption>Data Mahasiswa</caption>
                <tr>
                    <th>Nama</th>
                    <th>NIM</th>
                    <th>Jurusan</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach ($mahasiswa as $mhs)
                    <tr class="table-primary">
                        <td scope="row">{{ $mhs->nama }}</td>
                        <td scope="row">{{ $mhs->nim }}</td>
                        <td scope="row">{{ $mhs->jurusan }}</td>
                @endforeach
                </tr>
            </tbody>
            <tfoot>
            </tfoot>
        </table>
        <a href="{{ URL::route('mahasiswa.create') }}">Insert Mahasiswa</a>
    </div>

</body>

</html>
