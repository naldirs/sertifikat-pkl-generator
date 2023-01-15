<!DOCTYPE html>
<html>
<head>
  <title>SERTIFIKAT {{ strtoupper($siswa->sertifikat)}} {{$siswa->no_sertifikat}}</title>
  <style type="text/css">
    @page { margin: 0in; }
    body {
    font-family: Denk One, sans-serif;
    background-image: url(border/F4/fullpage/blue-border-certificate-page-book-border-frame-border-certificate-page-book-frames-flower-style-vintages-112791771.jpg);
    background-position: top left;
    background-repeat: no-repeat;
    background-size: 100%;
    padding: 80px 20px 20px 20px;
    width:100%;
    height:100%;
  }

  * {
      box-sizing: border-box;
    }

    /* Create two unequal columns that floats next to each other */
    .kolum {
      float: left;
      padding: 10px;
    }
    .kiri {
      width: 30%;
    }

    .kanan {
      width: 65%;
    }

    /* Clear floats after the columns */
    .row:after {
      content: "";
      display: table;
      clear: both;
    }
    .boxed {
      border: 1px solid black ;
    }


  </style>
</head>
<body>
  <p align="center"><font size="14"><strong>SERTIFIKAT <br><u>{{strtoupper($siswa->sertifikat)}}</u></strong></font><br>Nomor:423.4/{{$siswa->no_sertifikat}}/BPSDM/I/{{date('Y' , strtotime($siswa->tgl_masuk))}}</p><br>
  <p align="center">BADAN PENGEMBANGAN SUMBER DAYA MANUSIA<BR>PROVINSI KALIMANTAN TIMUR<BR>menerangkan bahwa :</p><br>
  <p align="center"><strong><u>{{ strtoupper($siswa->nama)}}</u></strong></p>

  <table width=80% align=center>
        
    <tr>
      <td colspan="2">@if($siswa->status == 'Siswa') Siswa @elseif($siswa->status == 'Mahasiswa') Mahasiswa @endif {{$siswa->asal_sklh}}</td>
    </tr>
    <tr>
      <td colspan="2" align="center"><br></td>
    </tr> 
    <tr>
      <td>@if($siswa->status == 'Siswa') Program Keahlian @elseif($siswa->status == 'Mahasiswa') Program Studi @endif</td>
      <td>: {{$siswa->program_keahlian}}</td>
    </tr>
    <tr>
      <td>@if($siswa->status == 'Siswa') Nomor Induk Siswa Nasional @elseif($siswa->status == 'Mahasiswa') Nomor Induk Mahasiswa @endif</td>
      <td>: {{$siswa->no_induk}}</td>
    </tr>
    <tr>
      <td colspan="2" align="center"><br></td>
    </tr> 
    
    <tr>
      <td colspan="2">Telah mengikuti {{$siswa->sertifikat}} mulai tanggal <strong><i>{{ tglIndo($siswa->tgl_masuk)}}</i></strong> sampai dengan tanggal <strong><i>{{ tglIndo($siswa->tgl_selesai)}}</i></strong> dengan hasil</td>
    </tr>
    <tr>
      <td colspan="2" align="center"><br></td>
    </tr> 
    
    <tr>
      <td colspan="2" align="center"><strong><u>@if (number_format(($nilai_umum->disiplin+$nilai_umum->kerjasama+$nilai_umum->kerajinan+$nilai_umum->tanggung_jawab+$nilai_umum->sikap+$nilai_umum->k3+$nilai_umum->kreatif_kl+$nilai_umum->persiapan+$nilai_umum->analisa+$nilai_umum->perawatan_p+$nilai_umum->metode_lk+$nilai_umum->ketetapan_h+$j_nilai_nk)/(12+$j_data_nk), 2) >= 85.00) SANGAT MEMUASKAN
                    @elseif (number_format(($nilai_umum->disiplin+$nilai_umum->kerjasama+$nilai_umum->kerajinan+$nilai_umum->tanggung_jawab+$nilai_umum->sikap+$nilai_umum->k3+$nilai_umum->kreatif_kl+$nilai_umum->persiapan+$nilai_umum->analisa+$nilai_umum->perawatan_p+$nilai_umum->metode_lk+$nilai_umum->ketetapan_h+$j_nilai_nk)/(12+$j_data_nk), 2) >= 75.00 && number_format(($nilai_umum->disiplin+$nilai_umum->kerjasama+$nilai_umum->kerajinan+$nilai_umum->tanggung_jawab+$nilai_umum->sikap+$nilai_umum->k3+$nilai_umum->kreatif_kl+$nilai_umum->persiapan+$nilai_umum->analisa+$nilai_umum->perawatan_p+$nilai_umum->metode_lk+$nilai_umum->ketetapan_h+$j_nilai_nk)/(12+$j_data_nk), 2) <= 84.99) BAIK
                    @elseif (number_format(($nilai_umum->disiplin+$nilai_umum->kerjasama+$nilai_umum->kerajinan+$nilai_umum->tanggung_jawab+$nilai_umum->sikap+$nilai_umum->k3+$nilai_umum->kreatif_kl+$nilai_umum->persiapan+$nilai_umum->analisa+$nilai_umum->perawatan_p+$nilai_umum->metode_lk+$nilai_umum->ketetapan_h+$j_nilai_nk)/(12+$j_data_nk), 2) >= 70.00 && number_format(($nilai_umum->disiplin+$nilai_umum->kerjasama+$nilai_umum->kerajinan+$nilai_umum->tanggung_jawab+$nilai_umum->sikap+$nilai_umum->k3+$nilai_umum->kreatif_kl+$nilai_umum->persiapan+$nilai_umum->analisa+$nilai_umum->perawatan_p+$nilai_umum->metode_lk+$nilai_umum->ketetapan_h+$j_nilai_nk)/(12+$j_data_nk), 2) <= 74.99) CUKUP 
                    @elseif (number_format(($nilai_umum->disiplin+$nilai_umum->kerjasama+$nilai_umum->kerajinan+$nilai_umum->tanggung_jawab+$nilai_umum->sikap+$nilai_umum->k3+$nilai_umum->kreatif_kl+$nilai_umum->persiapan+$nilai_umum->analisa+$nilai_umum->perawatan_p+$nilai_umum->metode_lk+$nilai_umum->ketetapan_h+$j_nilai_nk)/(12+$j_data_nk), 2) <= 69.99) KURANG @endif</u></strong></td>
      </tr> 
  
    <tr>
      <td colspan="2" align="center"><br></td>
    </tr> 
  
    
    <tr>
      <td colspan="2">Sertifikat ini diberikan sebagai surat penghargaan pengalaman kerja.</td>
    </tr> 
  

  </table>

  <br><br>
  <div class="row">
    <div class="kolum kiri">
      <br><br><br><br><p><table align="right"><tr><td class="boxed" width="70"><p align="center"><br>Foto<br>Warna<br><br>4x6</td></tr></table></p>
    </div>
    <div class="kolum kanan">
      <!-- ttd -->
      <p align="center">Samarinda, {{ tglIndo($siswa->created_at)}}
        <br>Kepala<br>Badan Pengembangan Sumber Daya Manusia<br>Provinsi Kalimantan Timur,<br><br><br><br><br><br><u>Prof. Dr. H. Dwi Nugroho Hidayanto, M.Pd</u><br>Pembina Utama<br>NIP. 19600216 198511 1 001</td>
      </p>    
    </div>
  </div><br><br>
<p style="margin: 1em 1em 1em 8%; ">Daftar nilai dibalik halaman</p><br><br>
</body>
</html>