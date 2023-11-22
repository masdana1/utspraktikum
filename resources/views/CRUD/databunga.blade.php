<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TokoBunga | SetData</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <h1 class="text-center mb-4">Data TokoBunga</h1>

      <div class="row mb-2">
        <div class="col-md-6">
          <a href="/tambahdata" type="button" class="btn btn-secondary">Tambah + </a>
        </div>
      </div>

      <div class="row">
        <table class="table table-bordered border-black">
          <thead>
            <tr class="table-warning">
              <th scope="col">#</th>
              <th scope="col">Nama</th>
              <th scope="col">Jenis Tanaman</th>
              <th scope="col">Harga</th>
              <th scope="col">Action</th>
            </tr> 
          </thead>
          <tbody>
            @php
                $no=1;
            @endphp
            @foreach ($data as $row)
            <tr>
              <th scope="row">{{ $no++ }}</th>
              <td>{{ $row->nama }}</td>
              <td>{{ str_replace(' ', ' - ', ucwords($row->jenistanaman)) }}</td>
              <td>{{ $row->harga }}</td>
              <td>
                <a href="/delete/{{ $row->id }}" class="btn btn-danger">Delete</a>
                <a href="/tampildata/{{ $row->id }}" class="btn btn-primary">Edit</a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
