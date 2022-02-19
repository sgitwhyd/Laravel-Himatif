<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ $user->username }}</title>
</head>
<style>
  tr td {
    border: 1px solid #000;
    text-align: left;
    padding: 4px;
  }

  .table {
    border-collapse: collapse;
    margin: 0 auto;
  }
</style>
<body>

  <div class="">
    <table class="table">
      <tbody>
        <tr>
          <td>Nama Lengkap</td>
          <td>{{ $user->data->nama_lengkap }}</td>
        </tr>
        <tr>
          <td>Nama Panggilan</td>
          <td>{{ $user->data->nama_panggilan }}</td>
        </tr>
        <tr>
          <td>NIM</td>
          <td>{{ $user->data->nim }}</td>
        </tr>
        <tr>
          <td>Tempat, tanggal lahir</td>
          <td>{{ $user->data->tanggal_lahir }}</td>
        </tr>
        <tr>
          <td>NIM</td>
          <td>{{ $user->data->nim }}</td>
        </tr>
        <tr>
          <td>Alamat</td>
          <td>{{ $user->data->alamat }}</td>
        </tr>
        <tr>
          <td>No telp/Whatsapp</td>
          <td>{{ $user->data->no_hp }}</td>
        </tr>
        <tr>
          <td>Email</td>
          <td>{{ $user->email }}</td>
        </tr>
        <tr>
          <td>Asal Sekolah</td>
          <td>{{ $user->data->asal_sekolah }}</td>
        </tr>
        <tr>
          <td>Motto Hidup</td>
          <td>{{ $user->data->motto }}</td>
        </tr>
        <tr>
          <td>Motivasi</td>
          <td>
            {{ $user->data->motivasi }}
          </td>
        </tr>
      </tbody>
    </table>


    <img src="{{ 'storage/' . $user->data->user_image }}" alt="">
  </div>
  <script type="text/javascript">
    window.onload = function() {
      this.window.print();
    }
  </script>
</body>
</html>