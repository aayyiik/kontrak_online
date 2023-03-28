<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <style>
        /* table,
   th,
   td {
      border: 1px solid black;
      border-collapse: collapse;
      text-align: center;
   } */

   body{
       margin: 40px;
   }
   .line-tittle{
       border: 0;
       border-style:inset;
       border-top: 1px solid #000;
   }
    </style>
   
   <table style="width: 100%">
    <tr>
        <td align="center">
            <span style="line-height: 2; font-weight: bold; " > Rincian Aktivitas Tenaga Honorer/Tenaga Operasional/Tenaga Keamanan
            <br> Kegiatan Penyediaan Barang dan Jasa Perkantoran Perangkat daerah
            <br> Bagian Administrasi Pembangunan
        </span>
        </td>
    </tr>
   </table>

   <hr class="line-tittle">
   <p> Nama rekanan : {{$nama_rekanan}}</p>
   <p> Nama pengadaan : {{$nama_pengadaan}}</p>
   <p>           Berdasarkan Surat Perintah Kerja Nomor {{ $no_kontrak_dof }} Tanggal 27 maret 2023</p>
   <p> Pekerjaan : {{ $nama_pekerjaan }}
       
    
       <script type="text/javascript">
    
        window.print();
        </script>
</body>
</html>

