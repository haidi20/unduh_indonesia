@extends('_layouts.utama')

@section('tubuh')

<div class="container-fluid">
  <div class="row">
    <div class="col-lg-12 col-lg">
      <a href="#" class="thumbnail">
        <img src='../img/1.jpg' alt="Relawan">
      </a>
    </div>
  </div>
</div>
	</nav>

  <section class="berita" id="">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="">
					<span id="berita">Berita</span>
					<!-- <hr width="200px" align="left"> -->
				</div>
			</div>
		</div>
		<br>

    @foreach ($blog as $index => $item)
      <div class="row">
  			<div class="col-md-2 alert-danger">
  				<img src="img/berita/berita_1.jpg">
  			</div>
  			<div class="col-md-offset-1 col-md-9 alert-warning">
  				<h1>{{$item->judul}}</h1>
  				<p>{{$item->isi}}</p>
  			</div>
  		</div>
    @endforeach
		{{-- <br>
		<div class="row">
			<div class="col-md-2 alert-danger">
				<img src="img/berita/berita_3.JPG">
			</div>
			<div class="col-md-offset-1 col-md-9 alert-warning">
				<h1>Judul berita</h1>

				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. An hoc usque quaque, aliter in vita? Nam quid possumus facere melius? Huius, Lyco, oratione locuples, rebus ipsis ielunior. Tu enim ista lenius, hic Stoicorum more nos vexat. Duo Reges: constructio interrete. Quantum Aristoxeni ingenium consumptum videmus in musicis? Polemoni et iam ante Aristoteli ea prima visa sunt, quae paulo ante dixi.</p>
			</div>
		</div>

		<br>

		<div class="row">
			<div class="col-md-2 alert-danger">
				<img src="img/berita/berita_2.jpeg">
			</div>
			<div class="col-md-offset-1 col-md-9 alert-warning">
				<h1>Judul berita</h1>

				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. An hoc usque quaque, aliter in vita? Nam quid possumus facere melius? Huius, Lyco, oratione locuples, rebus ipsis ielunior. Tu enim ista lenius, hic Stoicorum more nos vexat. Duo Reges: constructio interrete. Quantum Aristoxeni ingenium consumptum videmus in musicis? Polemoni et iam ante Aristoteli ea prima visa sunt, quae paulo ante dixi.</p>
			</div>
		</div> --}}
	</div>
  </section>
  <br><br>
  <section style="background-color:white;" class="pengurus" id="pengurus">
	<div class="row">
		<div class="col-md-12">
			<div class="text-center">
				<span id="berita">Pengurus</span>
			</div>
		</div>
	</div>
	<div class="row"><br>
		<div style="padding-bottom:10px;"class="row">
			<div class="col-md-offset-2 col-md-3 text-center" >
				<img src="img/berita/berita_1.jpg">
				<br><br>
				<p>SEKRETARIS</p>
			</div>
			<div class="col-md-3 text-center">
					<img src="img/berita/berita_1.jpg">
					<br><br>
					KETUA
			</div>

			<div class="col-md-3 text-center">
					<img src="img/berita/berita_1.jpg">
					<br><br>
					WAKIL KETUA
			</div>
		</div>
	</div>	
  </section>

  <br><br><br>


  <section class="visible-lg-block">
	<div class="container-fluid">
	 <div>
		<div class="row">
			<div class="col-md-3" >
				<img id="relawan_b" src="img/donasi.jpg">
			</div>
			<div class="col-md-9 text-justify" id="relawan_a">
				<b id="hubungi_kami">Unduh Indonesia</b> ingin mengajak kamu yang ingin berkontribusi untuk mengembangkan potensi anak-anak Sekolah di pedalaman Kalimantan Timur sebagai relawan. Ingin mengisi waktu luang dengan kegiatan bermanfaat dan produktif? tunggu apa lagi? Mari bergabung untuk memberikan pengaruh positif untuk anak-anak dan masyarakat di Kaltim.
			</div>
		</div>
	 </div>
		<br><br>
<<<<<<< HEAD


	 <div >

		 <div id="donasi_a">
=======
	 <div>
>>>>>>> b7117e19e32bf1d60fb2caab7ad45114c78f11cb
			<div class="row">
				<div class="col-md-9 text-justify" id="donasi_a">
					"Sebaik-baiknya manusia ialah dia yang bermanfaat bagi orang banyak". Sudahkah kamu bermanfaat bagi orang lain?   Yuk berdonasi untuk keperluan pendidikan/sarana adik2 di desa/ sekolah di pedalaman Kalimantan timur. Ayo jadikan donasi ini menjadi kebiasaan dalam hidup kita.
				</div>
				<div class="col-md-3" >
					<img id="donasi_b" src="img/donasi.jpg">
				</div>
			</div>
	 </div>
		<br><br>
	 <div >
		<div class="row">
			<div class="col-md-3" >
				<img id="kunjungan_b" src="img/donasi.jpg">
			</div>
			<div class="col-md-9 text-justify" id="kunjungan_a">
				Kamu punya informasi seputar sekolah-sekolah pedalaman di kaltim? jangan sungkan untuk berbagi informasi, karna dari informasi sederhana itulah hal-hal besar bisa terjadi.
			</div>
		</div>
	 </div>
<<<<<<< HEAD

=======
>>>>>>> b7117e19e32bf1d60fb2caab7ad45114c78f11cb
	</div>
  </section>

  <br><br>

  <section>
	<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					&nbsp;&nbsp;&nbsp;&nbsp; <span id="hubungi_kami">Kritik/Saran</span>
				</div>
			</div><br><br>
			<div class="row">
				<div class="col-xs-offset-1 col-xs-1">
					<label for="nama">Nama</label>
				</div>
				<div class="col-xs-offset-1 col-xs-8">
					<input name="nama" type="text" class="form-control" id="nama" placeholder="Nama">
				</div>
			</div><br>

			<div class="row">
				<div class="col-xs-offset-1 col-xs-1">
					<label for="email">Email</label>
				</div>
				<div class="col-xs-offset-1 col-xs-8">
					<input name="email" type="email" class="form-control" id="email" placeholder="Email">
				</div>
			</div><br>
			<div class="row">
				<div class="col-xs-offset-1 col-xs-1">
					<label for="pesan">Pesan</label>
				</div>
				<div class="col-xs-offset-1 col-xs-8">
					<textarea id="pesan" name="pesan" class="form-control" rows="3" placeholder="Masukkan Pesan Anda"></textarea>
				</div>
			</div><br><br><br>
			<div class="row">
				<div class=" col-xs-offset-4 col-xs-4 center">
					<button type="button" class="btn btn-primary">Kirim Kritik/Saran</button>
				</div>
			</div><br>
	</div>
<<<<<<< HEAD
  </section>

  <br><br><br>

<!-- bagian footer baru -->
  <section style="background-color:">
=======
  </section><br><br><br>
  <section>
>>>>>>> b7117e19e32bf1d60fb2caab7ad45114c78f11cb
	<div class="container">
    <hr>
		<div class="row">
			<div class="col-md-12 text-center">
				&nbsp;&nbsp;&nbsp;&nbsp; <span style="float:left" id="hubungi_kami">Hubungi Kami</span>
			</div>
		</div><br>
		<div class="row">
			<div class="col-md-6">
			<br><br>
					<table id="footer" width="100%" align="center">
						<tr>
							<td align="center" width="30%"><img src="img/icon/phone.png"></td>
							<td align="center" width="30%"><img src="img/icon/mail.png"></td>
							<td align="center" width="30%"><img src="img/icon/location.png"></td>
						</tr>
						<tr>
							<td align="center" colspan="3"> <hr> </td>
						</tr>
						<tr>
							<td align="center"><p>+62 0541 12345</p></td>
							<td align="center"><p>admin@unduhindonesia.org</p></td>
							<td align="center"><p> Jl Ciptomangkusumo <br>Samarinda, Kalimantan Timur </p></td>
						</tr>
					</table>
			</div>
			<div class="col-md-1 center text-center visible-lg-block">
				<!-- <center><div style="width: 0px; height: 200px; border: 1px #000 solid;"></div><center> -->
			</div>
			<div class="col-md-5">
					<br><br>
					<table id="footer" width="100%" align="center">
						<tr>
							<td align="center" width="50%"><img src="img/icon/fb.png"></td>
							<td align="center" width="50%"><img src="img/icon/ig.png"></td>
						</tr>
						<tr>
							<td align="center" colspan="3"> <hr> </td>
						</tr>
						<tr>
							<td align="center"><p>UnduhIndonesia</p></td>
							<td align="center"> <p>UnduhIndonesia</p></td>
						</tr>
					</table>
			</div>
		</div>
	</div>
<<<<<<< HEAD
  </section>
  <!-- akhir footer baru -->

=======
  </section><br><br><br>
    <footer class="text-center">
		<b>Copyright @2017 <br> Unduh Indonesia</b>
	</footer>
>>>>>>> b7117e19e32bf1d60fb2caab7ad45114c78f11cb



<script>
$(window).scroll(function ()
{
	var wScroll = $(this).scrollTop();
<<<<<<< HEAD



=======
	
>>>>>>> b7117e19e32bf1d60fb2caab7ad45114c78f11cb
	if(wScroll > 1508 && wScroll < 1699)
	{
		$("#relawan_a").fadeIn(3000);
		$("#relawan_b").animate({"width" : "100%"},2500);
	}

	if (wScroll > 1700)
	{
		$("#donasi_a").fadeIn(3000);
		$("#donasi_b").animate({"width" : "100%"},2500);
	}

	if (wScroll > 1900)
	{
		$("#kunjungan_a").fadeIn(3000);
		$("#kunjungan_b").animate({"width" : "100%"},2500);
	}
})

</script>

@endsection
