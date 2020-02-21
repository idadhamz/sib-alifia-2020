<!DOCTYPE html>
<html>
<head>
  <title>Print Out Surat Izin Belajar</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body style="margin-top: 30px;">
  <!-- <p style="text-align: center;">
    <img src="../../assets/img/bpk-logo.jpg" style="width: 125px;height: 125px;">
  </p> -->
  <p style="text-align: center;line-height: 35px;font-size: 22px;font-weight: bold;text-transform: uppercase;">
    Badan Pemeriksa Keuangan <br>REPUBLIK INDONESIA
  </p>
  <p style="text-align: center;line-height: 25px;font-size: 16px;">
    Jl. Gatot Subroto No. 31 Jakarta Pusat 10210 Indonesia Telepon: (021) 25549000 Fax: (021) 57950288 
  </p>
  <hr style="margin: 20px 5%;border-color: black;border-style: double;" />
  @foreach($data_permohonan_surat_print as $row)
  <p style="text-align: center;">
    <span style="line-height: 35px;font-size: 22px;font-weight: bold;text-transform: uppercase;text-decoration: underline;"> SURAT IZIN BELAJAR </span><br> <span style="line-height: 35px;font-size: 18px;font-weight: bold;text-transform: uppercase;text-decoration: none;">No. {{ $row->no_surat }}/SIB/X.3/{{ date('m') }}/{{ date('Y') }}</span>
  </p>

  <div style="margin: 50px 5%;">
    <p style="margin: 2rem 0px;font-size: 16px;">Yang bertanda tangan di bawah ini memberikan izin kepada :</p>
    <table style="border-collapse:separate; border-spacing:10px;font-weight: bold;font-size: 16px;">
      <tbody>
        <tr>
          <td style="padding-right: 70px;">Nama</td>
          <td style="padding-right: 20px;">:</td>
          <td>{{$row->nama}}</td>
        </tr>
        <tr>
          <td style="padding-right: 70px;">NIP</td>
          <td style="padding-right: 20px;">:</td>
          <td>{{$row->nip}}</td>
        </tr>
        <tr>
          <td style="padding-right: 70px;">Pangkat</td>
          <td style="padding-right: 20px;">:</td>
          <td>{{$row->pangkat}}</td>
        </tr>
        <tr>
          <td style="padding-right: 70px;">Jabatan</td>
          <td style="padding-right: 20px;">:</td>
          <td>{{$row->jabatan}}</td>
        </tr>
        <tr>
          <td style="padding-right: 70px;">Unit Kerja</td>
          <td style="padding-right: 20px;">:</td>
          <td>{{$row->unit_kerja}}</td>
        </tr>
      </tbody>
    </table>
    <p style="margin: 2rem 0px;font-size: 16px;text-align: justify;"> 
      Untuk melanjutkan pendidikan melalui program beasiswa dari <b>PT Mandiri Sentosa Transport</b> program {{$row->beasiswa}} <b>tahun {{ date('Y') }} mulai {{ Carbon\Carbon::parse($row->tgl_selesai)->formatLocalized('%d/%m/%Y') }} sampai {{ Carbon\Carbon::parse($row->tgl_perp)->formatLocalized('%d/%m/%Y') }}</b> dengan catatan segala biaya dan fasiitas yang diperlukan selama pendidikan ditanggung oleh pemberi beasiswa/pihak sponsor.
    </p>
    <p style="margin: 2rem 0px;font-size: 16px;text-align: justify;"> 
      Demikian surat izin belajar ini dibuat agar dapat dipergunankan sebagaimana mestinya.
    </p>
    <p style="margin-top: 5rem;font-size: 16px;text-align: center;float: right;"> 
      <span><b>Jakarta, {{ date('d-m-Y') }}</b>
      <br>BADAN PEMERIKSA KEUANGAN 
      <br><span style="text-transform: uppercase;">{{$row->jabatan}}</span>
      <br>KEPALA BIRO SUMBER DAYA MANUSIA</span>
      <br>
      <br>
      <br>
      <b>
      <br>{{$row->name}}
      <br>{{$row->nip}}
      </b>
    </p>
  </div>
  @endforeach

</body>
</html>