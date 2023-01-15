<!DOCTYPE html>
<html>
<head>
  <title>SERTIFIKAT {{ strtoupper($siswa->sertifikat)}} {{$siswa->no_sertifikat}}</title>
  <style type="text/css">
    /*PAGE BREAK*/
    hr {
      page-break-after: always;
      border: 0;
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
      width: 25%;
    }

    .kanan {
      width: 70%;
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

    .pagedepan {
      background-image: url(border/A4/pinewood-derby-certificate-border-template-word-for-templates-design-editable-designs-flyers-flyer-with-bor.jpg);
      /*border: 2px solid black;*/
      padding: 25px;
      background-position: top left;
      background-repeat: no-repeat;
    }

  </style>

</head>
<body>

<!-- page depan -->
<div class="pagedepan">
  <br><br><br><br>
  
  <p align="center"><strong>SERTIFIKAT <br><u>{{strtoupper($siswa->sertifikat)}}</u></strong><br>Nomor:423.4/{{$siswa->no_sertifikat}}/BPSDM/I/?</p>
  <p align="center">BADAN PENGEMBANGAN SUMBER DAYA MANUSIA<BR>PROVINSI KALIMANTAN TIMUR<BR>menerangkan bahwa :</p>
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
      <td colspan="2">Telah mengikuti {{$siswa->sertifikat}} mulai tanggal <strong><i>{{ date('d F Y' , strtotime($siswa->tgl_masuk))}}</i></strong> sampai dengan tanggal <strong><i>{{ date('d F Y' , strtotime($siswa->tgl_selesai))}}</i></strong> dengan hasil</td>
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
      <br><br><br><br><p><table align="right"><tr><td class="boxed" width="50"><p align="center">Foto<br>Warna<br>4x6</p></td></tr></table></p>
    </div>
    <div class="kolum kanan">
      <!-- ttd -->
      <p align="center">Samarinda, {{ date('d F Y' , strtotime($siswa->created_at))}}
        <br>Kepala<br>Badan Pengembangan Sumber Daya Manusia<br>Provinsi Kalimantan Timur,<br><br><br><br><br><br><u>Prof. Dr. H. Dwi Nugroho Hidayanto, M.Pd</u><br>Pembina Utama<br>NIP. 19600216 198511 1 001</td>
      </p>    
    </div>
  </div><br>
<p style="margin: 1em 1em 1em 5%; ">Daftar nilai dibalik halaman</p><br> 
</div>




<!-- Page belakang -->
<hr>

<p align="center"><strong>DAFTAR NILAI<br>{{ strtoupper($siswa->sertifikat)}}</strong></p>

<table width=80% align=center>
    <tr>
      <td></td>
      <td width="30%">Nama</td>
      <td>: {{ strtoupper($siswa->nama)}} </td>
    </tr>    

    <tr>
      <td></td>
      <td>@if($siswa->status == 'Siswa') NISN @elseif($siswa->status == 'Mahasiswa') NIM @endif</td>
      <td>: {{$siswa->no_induk}}</td>
    </tr>    

    <tr>
      <td width="40"></td>
      <td>Tempat Praktek</td>
      <td>: Badan Pengembangan Sumber Daya Manusia</td>
    </tr>

    <tr>
      <td width="40"></td>
      <td>Alamat</td>
      <td>: Jl.H.A.M.M.RIFADDIN SAMARINDA SEBRANG</td>
    </tr>

  </table>
  <br>

  <table bgcolor=black width=90% align=center>
    <tr bgcolor=white>
      <th align=center rowspan="2" width="7%"><strong>NO</strong></th>
      <th align=center rowspan="2" width="65%"><strong>KOMPONEN YANG DINILAI</strong></th>
      <th align=center colspan="2"><strong>NILAI</strong></th>
    </tr>
    <tr bgcolor=white>
      <th align="center"><strong>ANGKA</strong></th>
      <th align="center"><strong>HURUF</strong></th>
    </tr>

    <tr bgcolor=white>
      <td align=center><strong>I</strong>
        <ol>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
        </ol>
        <strong>II</strong>
        <ol>
          <br>
          <br>
          <br>
          <br>
          <br>
        </ol>
        <strong>III</strong>
        <ol>
          @foreach($nilai_keahlian as $nk)<br>@endforeach
          @if($j_data_nk == 0)
          <br><br><br>
          @endif
        </ol></td>

      <td>
        <strong>UMUM</strong>
        <ol>
          <li>Disiplin</li>
          <li>Kerjasama</li>
          <li>Kerajinan</li>
          <li>Tanggung Jawab</li>
          <li>Sikap</li>
          <li>Keselamatan & Kesehatan Kerja (K3)</li>
          <li>Kreatif dan Kesadaran Lingkungan</li>
        </ol>
        <strong>KOMPETENSI / KEMAMPUAN</strong>
        <ol>
          <li>Persiapan & Penggunaan Alat</li>
          <li>Analisa Kebutuhan Bahan</li>
          <li>Perawatan Pengamanan</li>
          <li>Metode dan Langkah Kerja</li>
          <li>Ketetapan Hasil Kerja</li>
        </ol>
        <strong>KOMPETENSI KEAHLIAN YG DITEMPUH</strong>
        <ol>
          @foreach($nilai_keahlian as $nk)
          <li>{{$nk->nama_komponen}}</li>
          @endforeach
        </ol>
        @if($j_data_nk ==0)
        <ol>
          <li>......</li>
          <li>......</li>
          <li>......</li>
          <li>......</li>
        </ol>
        @endif
      </td>
      <td align=center>
        <br>{{$nilai_umum->disiplin}}
        <br>{{$nilai_umum->kerjasama}}
        <br>{{$nilai_umum->kerajinan}}
        <br>{{$nilai_umum->tanggung_jawab}}
        <br>{{$nilai_umum->sikap}}
        <br>{{$nilai_umum->k3}}
        <br>{{$nilai_umum->kreatif_kl}}
        <br>
        <br><br>
        <br>{{$nilai_umum->persiapan}}
        <br>{{$nilai_umum->analisa}}
        <br>{{$nilai_umum->perawatan_p}}
        <br>{{$nilai_umum->metode_lk}}
        <br>{{$nilai_umum->ketetapan_h}}
        <br><br><br>
        @foreach($nilai_keahlian as $nk)<br>{{$nk->nilai}}@endforeach
        @if($j_data_nk ==0)
        .......<br>.......<br>.......<br>.......
        @endif
        

      </td>
      <td align=center>
        <br>@if ($nilai_umum->disiplin >= 85) A @elseif ($nilai_umum->disiplin >= 76 && $nilai_umum->disiplin <= 84 ) B @elseif ($nilai_umum->disiplin >= 70 && $nilai_umum->disiplin <= 75 ) C @elseif ($nilai_umum->disiplin <= 69 ) D @endif
        <br>@if ($nilai_umum->kerjasama >= 85) A @elseif ($nilai_umum->kerjasama >= 76 && $nilai_umum->kerjasama <= 84 ) B @elseif ($nilai_umum->kerjasama >= 70 && $nilai_umum->kerjasama <= 75 ) C @elseif ($nilai_umum->kerjasama <= 69 ) D @endif
        <br>@if ($nilai_umum->kerajinan >= 85) A @elseif ($nilai_umum->kerajinan >= 76 && $nilai_umum->kerajinan <= 84 ) B @elseif ($nilai_umum->kerajinan >= 70 && $nilai_umum->kerajinan <= 75 ) C @elseif ($nilai_umum->sikap <= 69 ) D @endif
        <br>@if ($nilai_umum->tanggung_jawab >= 85) A @elseif ($nilai_umum->tanggung_jawab >= 76 && $nilai_umum->tanggung_jawab <= 84 ) B @elseif ($nilai_umum->tanggung_jawab >= 70 && $nilai_umum->tanggung_jawab <= 75 ) C @elseif ($nilai_umum->tanggung_jawab <= 69 ) D @endif
        <br>@if ($nilai_umum->sikap >= 85) A @elseif ($nilai_umum->sikap >= 76 && $nilai_umum->sikap <= 84 ) B @elseif ($nilai_umum->sikap >= 70 && $nilai_umum->sikap <= 75 ) C @elseif ($nilai_umum->sikap <= 69 ) D @endif
        <br>@if ($nilai_umum->k3 >= 85) A @elseif ($nilai_umum->k3 >= 76 && $nilai_umum->k3 <= 84 ) B @elseif ($nilai_umum->k3 >= 70 && $nilai_umum->k3 <= 75 ) C @elseif ($nilai_umum->k3 <= 69 ) D @endif
        <br>@if ($nilai_umum->kreatif_kl >= 85) A @elseif ($nilai_umum->kreatif_kl >= 76 && $nilai_umum->kreatif_kl <= 84 ) B @elseif ($nilai_umum->kreatif_kl >= 70 && $nilai_umum->kreatif_kl <= 75 ) C @elseif ($nilai_umum->kreatif_kl <= 69 ) D @endif
        <br>
        <br><br>
        <br>@if ($nilai_umum->persiapan >= 85) A @elseif ($nilai_umum->persiapan >= 76 && $nilai_umum->persiapan <= 84 ) B @elseif ($nilai_umum->persiapan >= 70 && $nilai_umum->persiapan <= 75 ) C @elseif ($nilai_umum->persiapan <= 69 ) D @endif
        <br>@if ($nilai_umum->analisa >= 85) A @elseif ($nilai_umum->analisa >= 76 && $nilai_umum->analisa <= 84 ) B @elseif ($nilai_umum->analisa >= 70 && $nilai_umum->analisa <= 75 ) C @elseif ($nilai_umum->analisa <= 69 ) D @endif
        <br>@if ($nilai_umum->perawatan_p >= 85) A @elseif ($nilai_umum->perawatan_p >= 76 && $nilai_umum->perawatan_p <= 84 ) B @elseif ($nilai_umum->perawatan_p >= 70 && $nilai_umum->perawatan_p <= 75 ) C @elseif ($nilai_umum->perawatan_p <= 69 ) D @endif
        <br>@if ($nilai_umum->metode_lk >= 85) A @elseif ($nilai_umum->metode_lk >= 76 && $nilai_umum->metode_lk <= 84 ) B @elseif ($nilai_umum->metode_lk >= 70 && $nilai_umum->metode_lk <= 75 ) C @elseif ($nilai_umum->metode_lk <= 69 ) D @endif
        <br>@if ($nilai_umum->ketetapan_h >= 85) A @elseif ($nilai_umum->ketetapan_h >= 76 && $nilai_umum->ketetapan_h <= 84 ) B @elseif ($nilai_umum->ketetapan_h >= 70 && $nilai_umum->ketetapan_h <= 75 ) C @elseif ($nilai_umum->ketetapan_h <= 69 ) D @endif
        <br><br><br>
        @if($j_data_nk >= 1)<br>@endif
          @foreach($nilai_keahlian as $nk)@if($nk->nilai >= 85)A<br>
          @elseif($nk->nilai >= 76 && $nk->nilai <= 84 )B<br>
          @elseif($nk->nilai >= 70 && $nk->nilai <= 75 )C<br>
          @elseif($nk->nilai <= 69 )D<br>
          @endif
          @endforeach
        @if($j_data_nk ==0)
        .......<br>.......<br>.......<br>.......
        @endif
        
      </td>
      

    </tr>
    <tr bgcolor=white>
      <td></td>
      <td><strong>JUMLAH NILAI <br>NILAI RATA-RATA</strong></td>
      <td align=center>{{ $nilai_umum->disiplin+$nilai_umum->kerjasama+$nilai_umum->kerajinan+$nilai_umum->tanggung_jawab+$nilai_umum->sikap+$nilai_umum->k3+$nilai_umum->kreatif_kl+$nilai_umum->persiapan+$nilai_umum->analisa+$nilai_umum->perawatan_p+$nilai_umum->metode_lk+$nilai_umum->ketetapan_h+$j_nilai_nk}}<br>{{ number_format(($nilai_umum->disiplin+$nilai_umum->kerjasama+$nilai_umum->kerajinan+$nilai_umum->tanggung_jawab+$nilai_umum->sikap+$nilai_umum->k3+$nilai_umum->kreatif_kl+$nilai_umum->persiapan+$nilai_umum->analisa+$nilai_umum->perawatan_p+$nilai_umum->metode_lk+$nilai_umum->ketetapan_h+$j_nilai_nk)/(12+$j_data_nk), 2) }}</td>
      <td></td>
    </tr>

    <tr bgcolor=white>
      <td></td>
      <td colspan=3><strong>PREDIKAT / HASIL :  @if (number_format(($nilai_umum->disiplin+$nilai_umum->kerjasama+$nilai_umum->kerajinan+$nilai_umum->tanggung_jawab+$nilai_umum->sikap+$nilai_umum->k3+$nilai_umum->kreatif_kl+$nilai_umum->persiapan+$nilai_umum->analisa+$nilai_umum->perawatan_p+$nilai_umum->metode_lk+$nilai_umum->ketetapan_h+$j_nilai_nk)/(12+$j_data_nk), 2) >= 85.00) SANGAT MEMUASKAN
                    @elseif (number_format(($nilai_umum->disiplin+$nilai_umum->kerjasama+$nilai_umum->kerajinan+$nilai_umum->tanggung_jawab+$nilai_umum->sikap+$nilai_umum->k3+$nilai_umum->kreatif_kl+$nilai_umum->persiapan+$nilai_umum->analisa+$nilai_umum->perawatan_p+$nilai_umum->metode_lk+$nilai_umum->ketetapan_h+$j_nilai_nk)/(12+$j_data_nk), 2) >= 75.00 && number_format(($nilai_umum->disiplin+$nilai_umum->kerjasama+$nilai_umum->kerajinan+$nilai_umum->tanggung_jawab+$nilai_umum->sikap+$nilai_umum->k3+$nilai_umum->kreatif_kl+$nilai_umum->persiapan+$nilai_umum->analisa+$nilai_umum->perawatan_p+$nilai_umum->metode_lk+$nilai_umum->ketetapan_h+$j_nilai_nk)/(12+$j_data_nk), 2) <= 84.99) BAIK
                    @elseif (number_format(($nilai_umum->disiplin+$nilai_umum->kerjasama+$nilai_umum->kerajinan+$nilai_umum->tanggung_jawab+$nilai_umum->sikap+$nilai_umum->k3+$nilai_umum->kreatif_kl+$nilai_umum->persiapan+$nilai_umum->analisa+$nilai_umum->perawatan_p+$nilai_umum->metode_lk+$nilai_umum->ketetapan_h+$j_nilai_nk)/(12+$j_data_nk), 2) >= 70.00 && number_format(($nilai_umum->disiplin+$nilai_umum->kerjasama+$nilai_umum->kerajinan+$nilai_umum->tanggung_jawab+$nilai_umum->sikap+$nilai_umum->k3+$nilai_umum->kreatif_kl+$nilai_umum->persiapan+$nilai_umum->analisa+$nilai_umum->perawatan_p+$nilai_umum->metode_lk+$nilai_umum->ketetapan_h+$j_nilai_nk)/(12+$j_data_nk), 2) <= 74.99) CUKUP 
                    @elseif (number_format(($nilai_umum->disiplin+$nilai_umum->kerjasama+$nilai_umum->kerajinan+$nilai_umum->tanggung_jawab+$nilai_umum->sikap+$nilai_umum->k3+$nilai_umum->kreatif_kl+$nilai_umum->persiapan+$nilai_umum->analisa+$nilai_umum->perawatan_p+$nilai_umum->metode_lk+$nilai_umum->ketetapan_h+$j_nilai_nk)/(12+$j_data_nk), 2) <= 69.99) KURANG @endif</strong></td>
    </tr>
  </table>
  <br>
  <table width=90% align=center>
    <tr>
      <td width="60%"><strong>Keterangan Nilai Angka & Huruf</strong><br><br>85 S/D 100 &nbsp;&nbsp;&nbsp; A &nbsp; Sangat Memuaskan<br>75 S/D 84 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; B &nbsp; Baik<br>70 S/D 74 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; C &nbsp; Cukup<br>69 Kebawah &nbsp; D &nbsp; Kurang</td>
      <td></td>
      <td></td>
      <td align="center" width=30%>Samarinda, {{ date('d F Y' , strtotime($siswa->created_at))}}<br>Sekertaris<br><br><br><br><br><u><strong>Dr. Sudirman, M.Si</strong></u><br>Pembina Tk. I<br>NIP.19611231 199003 1 061</td>
    </tr>
  </table>


</body>
</html>