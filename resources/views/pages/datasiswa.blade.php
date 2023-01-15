@extends('content')

@section('titlehead', 'Data nilai siswa')

@section('title')
<b>Data</b> Nilai Siswa
@endsection

@section('shortcut')
<li><a href="{{route('home')}}"><i class="fa fa-list-ul"></i> Daftar Siswa</a></li>
<li class="active">Data Siswa</li>
@endsection

@section('daftarsiswa','active')

@section('kontent')
    <div class="row">
      
        <div class="col-xs-12">
          @include('pesan')
          @if(empty($nilai_umum))
              <div class="alert alert-warning alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-ban"></i> Warning!</h4>
                Nilai siswa belum ada
              </div>
          @endif
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Sertifikat {{$siswa->sertifikat}}</h3>
            </div>

            <!-- /.box-header -->
            <div class="box-body">
              <blockquote>
                 <table width=100%>                    
                  <tr>
                    <td><strong>Nama :</strong></td>
                    <td><strong>Tanggal Masuk s/d Selesai :</strong></td>               
                  </tr>
                  <tr>
                    <td> {{$siswa->nama}}</td>
                    <td> {{ tglIndo($siswa->tgl_masuk)}} <strong>s/d</strong> {{ tglIndo($siswa->tgl_selesai)}}</td>
                  </tr>
                  <tr>
                    <td><strong>@if($siswa->status == 'Siswa') Nomor Induk Siswa Nasional : @elseif($siswa->status == 'Mahasiswa') Nomor Induk Mahasiswa : @endif</strong></td>
                    <td><strong>Tempat, Tanggal Lahir :</strong></td>
                  </tr>
                  <tr>
                    <td> {{$siswa->no_induk}}</td>
                    <td> {{$siswa->tmpt_lahir}}, {{ tglIndo($siswa->tgl_lahir)}}</td>
                  </tr>
                  <tr>
                    <td><strong>@if($siswa->status == 'Siswa') Program Keahlian : @elseif($siswa->status == 'Mahasiswa') Program Studi : @endif</strong></td>
                    <td><strong>Nomor Setifikat :</strong></td>
                  </tr>
                  <tr>
                    <td> {{$siswa->program_keahlian}}</td>   
                    <td> 423.4/<strong>{{$siswa->no_sertifikat}}</strong>/BPSDM/I/{{date('Y' , strtotime($siswa->tgl_masuk))}}</td>                 
                  </tr>
                  <tr>
                    <td><strong>@if($siswa->status == 'Siswa') Sekolah : @elseif($siswa->status == 'Mahasiswa') Universitas : @endif</strong></td>          
                  </tr>                
                  <tr>
                    <td> {{$siswa->asal_sklh}}</td>   
                  </tr>
                </table>
              </blockquote>
             

              @isset($nilai_umum)
              <table class="table table-bordered">
                <tr>
                  <th style="width: 10px" rowspan="2">NO</th>
                  <th style="width: 140" rowspan="2"><center>KOMPONEN YANG DINILAI</center></th>
                  <th colspan="2"><center>NILAI</center></th>
                </tr>
                <tr>
                  <th><center>ANGKA</center></th>
                  <th><center>HURUF</center></th>
                </tr>

                <tr>
                  <th>I</th>
                  <th>UMUM
                    <div class="pull-right box-tools"><a class="btn btn-success btn-sm btn-sm" data-id="{{$nilai_umum->id}}" data-disiplin="{{$nilai_umum->disiplin}}" data-kerjasama="{{$nilai_umum->kerjasama}}" data-kerajinan="{{$nilai_umum->kerajinan}}" data-tanggung_jawab="{{$nilai_umum->tanggung_jawab}}" data-sikap="{{$nilai_umum->sikap}}" data-k3="{{$nilai_umum->k3}}" data-kreatif_kl="{{$nilai_umum->kreatif_kl}}" data-persiapan="{{$nilai_umum->persiapan}}" data-analisa="{{$nilai_umum->analisa}}" data-perawatan_p="{{$nilai_umum->perawatan_p}}" data-metode_lk="{{$nilai_umum->metode_lk}}" data-ketetapan_h="{{$nilai_umum->ketetapan_h}}" data-toggle="modal" data-target="#editnilaiumum"  role="button"><i class="fa fa-edit"></i></a></div></th>
                  <td></td>
                  <td></td>
                </tr>
                

                <tr>
                  <td></td>
                  <td>1. Disiplin</td>
                  <td><center>{{$nilai_umum->disiplin}}</center></td>
                  <td><center>@if ($nilai_umum->disiplin >= 85) A @elseif ($nilai_umum->disiplin >= 76 && $nilai_umum->disiplin <= 84 ) B @elseif ($nilai_umum->disiplin >= 70 && $nilai_umum->disiplin <= 75 ) C @elseif ($nilai_umum->disiplin <= 69 ) D @endif</center></td>
                </tr>

                <tr>
                  <td></td>
                  <td>2. Kerjasama</td>
                  <td><center>{{$nilai_umum->kerjasama}}</center></td>
                  <td><center>@if ($nilai_umum->kerjasama >= 85) A @elseif ($nilai_umum->kerjasama >= 76 && $nilai_umum->kerjasama <= 84 ) B @elseif ($nilai_umum->kerjasama >= 70 && $nilai_umum->kerjasama <= 75 ) C @elseif ($nilai_umum->kerjasama <= 69 ) D @endif</center></td>
                </tr>


                <tr>
                  <td></td>
                  <td>3. Kerajinan</td>
                  <td><center>{{$nilai_umum->kerajinan}}</center></td>
                  <td><center>@if ($nilai_umum->kerajinan >= 85) A @elseif ($nilai_umum->kerajinan >= 76 && $nilai_umum->kerajinan <= 84 ) B @elseif ($nilai_umum->kerajinan >= 70 && $nilai_umum->kerajinan <= 75 ) C @elseif ($nilai_umum->sikap <= 69 ) D @endif</center></td>
                </tr>

                <tr>
                  <td></td>
                  <td>4. Tanggung Jawab</td>
                  <td><center>{{$nilai_umum->tanggung_jawab}}</center></td>
                  <td><center>@if ($nilai_umum->tanggung_jawab >= 85) A @elseif ($nilai_umum->tanggung_jawab >= 76 && $nilai_umum->tanggung_jawab <= 84 ) B @elseif ($nilai_umum->tanggung_jawab >= 70 && $nilai_umum->tanggung_jawab <= 75 ) C @elseif ($nilai_umum->tanggung_jawab <= 69 ) D @endif</center></td>
                </tr>


                <tr>
                  <td></td>
                  <td>5. Sikap</td>
                  <td><center>{{$nilai_umum->sikap}}</center></td>
                  <td><center>@if ($nilai_umum->sikap >= 85) A @elseif ($nilai_umum->sikap >= 76 && $nilai_umum->sikap <= 84 ) B @elseif ($nilai_umum->sikap >= 70 && $nilai_umum->sikap <= 75 ) C @elseif ($nilai_umum->sikap <= 69 ) D @endif</center></td>
                </tr>

                <tr>
                  <td></td>
                  <td>6. Keselamatan & Kesehatan Kerja (K3)</td>
                  <td><center>{{$nilai_umum->k3}}</center></td>
                  <td><center>@if ($nilai_umum->k3 >= 85) A @elseif ($nilai_umum->k3 >= 76 && $nilai_umum->k3 <= 84 ) B @elseif ($nilai_umum->k3 >= 70 && $nilai_umum->k3 <= 75 ) C @elseif ($nilai_umum->k3 <= 69 ) D @endif</center></td>
                </tr>

                <tr>
                  <td></td>
                  <td>7. Kreatif dan Kesadaran Lingkungan</td>
                  <td><center>{{$nilai_umum->kreatif_kl}}</center></td>
                  <td><center>@if ($nilai_umum->kreatif_kl >= 85) A @elseif ($nilai_umum->kreatif_kl >= 76 && $nilai_umum->kreatif_kl <= 84 ) B @elseif ($nilai_umum->kreatif_kl >= 70 && $nilai_umum->kreatif_kl <= 75 ) C @elseif ($nilai_umum->kreatif_kl <= 69 ) D @endif</center></td>
                </tr>


                <tr>
                  <th>II</th>
                  <th>KOMPETENSI / KEMAMPUAN</th>
                  <td></td>
                  <td></td>
                </tr>

                <tr>
                  <td></td>
                  <td>1. Persiapan & Penggunaan Alat</td>
                  <td><center>{{$nilai_umum->persiapan}}</center></td>
                  <td><center>@if ($nilai_umum->persiapan >= 85) A @elseif ($nilai_umum->persiapan >= 76 && $nilai_umum->persiapan <= 84 ) B @elseif ($nilai_umum->persiapan >= 70 && $nilai_umum->persiapan <= 75 ) C @elseif ($nilai_umum->persiapan <= 69 ) D @endif</center></td>
                </tr>

                <tr>
                  <td></td>
                  <td>2. Analisa Kebutuhan Bahan</td>
                  <td><center>{{$nilai_umum->analisa}}</center></td>
                  <td><center>@if ($nilai_umum->analisa >= 85) A @elseif ($nilai_umum->analisa >= 76 && $nilai_umum->analisa <= 84 ) B @elseif ($nilai_umum->analisa >= 70 && $nilai_umum->analisa <= 75 ) C @elseif ($nilai_umum->analisa <= 69 ) D @endif</center></td>
                </tr>

                <tr>
                  <td></td>
                  <td>3. Perawatan Pengamanan</td>
                  <td><center>{{$nilai_umum->perawatan_p}}</center></td>
                  <td><center>@if ($nilai_umum->perawatan_p >= 85) A @elseif ($nilai_umum->perawatan_p >= 76 && $nilai_umum->perawatan_p <= 84 ) B @elseif ($nilai_umum->perawatan_p >= 70 && $nilai_umum->perawatan_p <= 75 ) C @elseif ($nilai_umum->perawatan_p <= 69 ) D @endif</center></td>
                </tr>

                <tr>
                  <td></td>
                  <td>4. Metode dan Langkah Kerja</td>
                  <td><center>{{$nilai_umum->metode_lk}}</center></td>
                  <td><center>@if ($nilai_umum->metode_lk >= 85) A @elseif ($nilai_umum->metode_lk >= 76 && $nilai_umum->metode_lk <= 84 ) B @elseif ($nilai_umum->metode_lk >= 70 && $nilai_umum->metode_lk <= 75 ) C @elseif ($nilai_umum->metode_lk <= 69 ) D @endif</center></td>
                </tr>

                <tr>
                  <td></td>
                  <td>5. Ketetapan Hasil Kerja</td>
                  <td><center>{{$nilai_umum->ketetapan_h}}</center></td>
                  <td><center>@if ($nilai_umum->ketetapan_h >= 85) A @elseif ($nilai_umum->ketetapan_h >= 76 && $nilai_umum->ketetapan_h <= 84 ) B @elseif ($nilai_umum->ketetapan_h >= 70 && $nilai_umum->ketetapan_h <= 75 ) C @elseif ($nilai_umum->ketetapan_h <= 69 ) D @endif</center></td>
                </tr>
                
                
                <tr>
                  <th>III</th>
                  <th>KOMPETENSI KEAHLIAN YG DITEMPUH 
                    <div class="pull-right box-tools">
                      <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#tambahnilaikeahlian"><i class="fa fa-plus"></i></button>
                    </div>
                    </th>
                  <td></td>
                  <td></td>
                </tr>
                @foreach($nilai_keahlian as $nk)
                <tr>
                
                  <td></td>
                  <td>{{$nk->nama_komponen}} 
                    <div class="pull-right box-tools">
                      <a class="btn btn-danger btn-sm" onclick="return confirm('Hapus nilai {{$nk->nama_komponen}}?')" href="{{ route('delete.nilai.keahlian', $nk->id)}}" role="button"><i class="fa fa-eraser"></i></a>
                      <a class="btn btn-success btn-sm" data-id="{{$nk->id}}" data-nama_k="{{$nk->nama_komponen}}" data-nilai="{{$nk->nilai}}" data-toggle="modal" data-target="#editnilaikeahlian" role="button"><i class="fa fa-edit"></i></a>
                    </div></td>
                  <td><center>{{$nk->nilai}}</center></td>
                  <td><center>@if ($nk->nilai >= 85) A @elseif ($nk->nilai >= 76 && $nk->nilai <= 84 ) B @elseif ($nk->nilai >= 70 && $nk->nilai <= 75 ) C @elseif ($nk->nilai <= 69 ) D @endif</center></td>
                
                </tr>
                @endforeach

  
                <tr>
                  <th></th>
                  <th>JUMLAH NILAI</th>
                  <td><center>{{ $nilai_umum->disiplin+$nilai_umum->kerjasama+$nilai_umum->kerajinan+$nilai_umum->tanggung_jawab+$nilai_umum->sikap+$nilai_umum->k3+$nilai_umum->kreatif_kl+$nilai_umum->persiapan+$nilai_umum->analisa+$nilai_umum->perawatan_p+$nilai_umum->metode_lk+$nilai_umum->ketetapan_h+$j_nilai_nk}}</center></td>
                  <td></td>
                </tr>
                <tr>
                  <th></th>
                  <th>NILAI RATA-RATA</th>
                  <td><center>{{ number_format(($nilai_umum->disiplin+$nilai_umum->kerjasama+$nilai_umum->kerajinan+$nilai_umum->tanggung_jawab+$nilai_umum->sikap+$nilai_umum->k3+$nilai_umum->kreatif_kl+$nilai_umum->persiapan+$nilai_umum->analisa+$nilai_umum->perawatan_p+$nilai_umum->metode_lk+$nilai_umum->ketetapan_h+$j_nilai_nk)/(12+$j_data_nk), 2) }}</center></td>
                  <td></td>
                </tr>
                <tr>
                  <th></th>
                  <th>PREDIKAT / HASIL : @if (number_format(($nilai_umum->disiplin+$nilai_umum->kerjasama+$nilai_umum->kerajinan+$nilai_umum->tanggung_jawab+$nilai_umum->sikap+$nilai_umum->k3+$nilai_umum->kreatif_kl+$nilai_umum->persiapan+$nilai_umum->analisa+$nilai_umum->perawatan_p+$nilai_umum->metode_lk+$nilai_umum->ketetapan_h+$j_nilai_nk)/(12+$j_data_nk), 2) >= 85.00) SANGAT MEMUASKAN
                    @elseif (number_format(($nilai_umum->disiplin+$nilai_umum->kerjasama+$nilai_umum->kerajinan+$nilai_umum->tanggung_jawab+$nilai_umum->sikap+$nilai_umum->k3+$nilai_umum->kreatif_kl+$nilai_umum->persiapan+$nilai_umum->analisa+$nilai_umum->perawatan_p+$nilai_umum->metode_lk+$nilai_umum->ketetapan_h+$j_nilai_nk)/(12+$j_data_nk), 2) >= 75.00 && number_format(($nilai_umum->disiplin+$nilai_umum->kerjasama+$nilai_umum->kerajinan+$nilai_umum->tanggung_jawab+$nilai_umum->sikap+$nilai_umum->k3+$nilai_umum->kreatif_kl+$nilai_umum->persiapan+$nilai_umum->analisa+$nilai_umum->perawatan_p+$nilai_umum->metode_lk+$nilai_umum->ketetapan_h+$j_nilai_nk)/(12+$j_data_nk), 2) <= 84.99) BAIK
                    @elseif (number_format(($nilai_umum->disiplin+$nilai_umum->kerjasama+$nilai_umum->kerajinan+$nilai_umum->tanggung_jawab+$nilai_umum->sikap+$nilai_umum->k3+$nilai_umum->kreatif_kl+$nilai_umum->persiapan+$nilai_umum->analisa+$nilai_umum->perawatan_p+$nilai_umum->metode_lk+$nilai_umum->ketetapan_h+$j_nilai_nk)/(12+$j_data_nk), 2) >= 70.00 && number_format(($nilai_umum->disiplin+$nilai_umum->kerjasama+$nilai_umum->kerajinan+$nilai_umum->tanggung_jawab+$nilai_umum->sikap+$nilai_umum->k3+$nilai_umum->kreatif_kl+$nilai_umum->persiapan+$nilai_umum->analisa+$nilai_umum->perawatan_p+$nilai_umum->metode_lk+$nilai_umum->ketetapan_h+$j_nilai_nk)/(12+$j_data_nk), 2) <= 74.99) CUKUP 
                    @elseif (number_format(($nilai_umum->disiplin+$nilai_umum->kerjasama+$nilai_umum->kerajinan+$nilai_umum->tanggung_jawab+$nilai_umum->sikap+$nilai_umum->k3+$nilai_umum->kreatif_kl+$nilai_umum->persiapan+$nilai_umum->analisa+$nilai_umum->perawatan_p+$nilai_umum->metode_lk+$nilai_umum->ketetapan_h+$j_nilai_nk)/(12+$j_data_nk), 2) <= 69.99) KURANG @endif </th>
                  <td></td>
                  <td></td>
                </tr>

         
                @endisset
                
                
              </table>

              
            </div>

            <!-- /.box-body -->
            @isset($nilai_umum)

            <div class="box-footer">
              <a class="btn btn-primary btn-flat" href="{{ route('edit.siswa', $siswa->id)}}" role="button">Edit</a>
              <a class="btn btn-warning btn-flat" href="{{ route('cetak', $siswa->id)}}" role="button">Cetak</a>
             </div>
                       
            @else
            <div class="box-footer">
              <a class="btn btn-primary btn-flat" href="{{ route('edit.siswa', $siswa->id)}}" role="button">Edit</a>
              <a class="btn btn-success btn-flat" href="{{ route('tambah.nilai.umum', $siswa->id)}}" role="button">Tambahkan</a>
            </div>
            @endisset

            
            
          </div>
        </div>
        @include('modals.modalsnilaikeahlian') 
        @include('modals.modalsnilaiumum')      
      </div>

    @endsection

@section('script')
<script>
  $('#editnilaikeahlian').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget)
    var komponen = button.data('nama_k')
    var nilai = button.data('nilai')
    var id = button.data('id')
    var modal = $(this)
    modal.find('.modal-dialog #nama_komponen').val(komponen)
    modal.find('.modal-dialog #nilai').val(nilai)
    modal.find('.modal-dialog #id_nilaikeahlian').val(id)
  })


  $('#editnilaiumum').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget)
    var disiplin = button.data('disiplin')
    var kerjasama = button.data('kerjasama')
    var kerajinan = button.data('kerajinan')
    var tanggung_jawab = button.data('tanggung_jawab')
    var sikap = button.data('sikap')
    var k3 = button.data('k3')
    var kreatif_kl = button.data('kreatif_kl')
    var persiapan = button.data('persiapan')
    var analisa = button.data('analisa')
    var perawatan_p = button.data('perawatan_p')
    var metode_lk = button.data('metode_lk')
    var ketetapan_h = button.data('ketetapan_h')
   
    var id = button.data('id')
    var modal = $(this)
    modal.find('.modal-dialog #id_nilaikeahlian').val(id)
    modal.find('.modal-dialog #disiplin').val(disiplin)
    modal.find('.modal-dialog #kerjasama').val(kerjasama)
    modal.find('.modal-dialog #kerajinan').val(kerajinan)
    modal.find('.modal-dialog #tanggung_jawab').val(tanggung_jawab)
    modal.find('.modal-dialog #sikap').val(sikap)
    modal.find('.modal-dialog #k3').val(k3)
    modal.find('.modal-dialog #kreatif_kl').val(kreatif_kl)
    modal.find('.modal-dialog #persiapan').val(persiapan)
    modal.find('.modal-dialog #analisa').val(analisa)
    modal.find('.modal-dialog #perawatan_p').val(perawatan_p)
    modal.find('.modal-dialog #metode_lk').val(metode_lk)
    modal.find('.modal-dialog #ketetapan_h').val(ketetapan_h)
  })
</script>
@endsection

