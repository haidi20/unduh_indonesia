@extends('_layouts.utama')

@section('tubuh')
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12 col-lg">
        <a href="#" class="thumbnail">
          <div class="w3-content w3-section">
            <img class="mySlides" src="{{asset('img/1.jpg')}}" style="width:100%">
            <img class="mySlides" src="{{asset('img/2.jpg')}}" style="width:100%">
            <img class="mySlides" src="{{asset('img/rico.jpg')}}" style="width:100%">
          </div>
          <!-- <img src="{{asset('img/1.jpg')}}" alt="Relawan"> -->
        </a>
      </div>
    </div>
  </div>
  <!-- Jumbotron -->
  <div class="container-fluid">
    <div class="jumbotron">
      <center><h1>Ayoo Jadi Relawan !!</h1></center>
      <p>Punya info tentang sekolah-sekolah pedalaman di Kalimantan Timur?
        Kamu punya informasi seputar sekolah-sekolah pedalaman di kaltim? jangan sungkan untuk berbagi informasi, karna dari informasi sederhana itulah hal-hal besar bisa terjadi.
        Yuk ikut berperan aktif dalam memajukan pendidikan Indonesia
        Call For Volunteer!!
        Unduh Indonesia ingin mengajak kamu yang ingin berkontribusi untuk mengembangkan potensi anak-anak Sekolah di pedalaman Kalimantan Timur sebagai relawan(Volunteer) .
        Ingin mengisi waktu luang dengan kegiatan bermanfaat dan produktif? tunggu apa lagi? Mari bergabung untuk memberikan pengaruh positif untuk anak2 dan masyarakat di Kaltim. .
      </p>
      <!-- <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p> -->
    </div>
    <!--  -->
    <div class="row">
      <div class="col-md-6">
        <div class="panel panel-default">
          <div class="panel-body">
            <h4>Keuntungan Menjadi Relawan</h4>
            <p>-Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
        </div>
      </div>
      <!-- input -->
      <div class="col-md-6">
        <div class="panel panel-default">
          <div class="panel-body">

            <label for="basic-url">Nama</label>
            <div class="input-group input-group">
              <span class="input-group-addon" id="sizing-addon3"></span>
              <input type="text" class="form-control" placeholder="Masukkan Nama" aria-describedby="sizing-addon3">
              </div>
              <label for="basic-url">Email</label>
              <div class="input-group input-group">
                <span class="input-group-addon" id="sizing-addon3"></span>
                <input type="text" class="form-control" placeholder="example@example.com" aria-describedby="sizing-addon3">
                </div>
                <label for="basic-url">No.Telp</label>
                <div class="input-group input-group">
                  <span class="input-group-addon" id="sizing-addon3"></span>
                  <input type="text" class="form-control" placeholder="08xx xxxx xxxx" aria-describedby="sizing-addon3">
                  </div>
                  <label for="basic-url">Alamat</label>
                  <div class="input-group input-group">
                    <span class="input-group-addon" id="sizing-addon3"></span>
                    <input type="text" class="form-control" placeholder="Masukkan Alamat" aria-describedby="sizing-addon3">
                  </div>
                  <!-- button -->
                  <div class="">
                      <button type="button" class="btn btn-success " data-toggle="" aria-haspopup="true" aria-expanded="false">
                        Gabung
                      </button>
                  </div>
          </div>
        </div>
      </div>
      <!-- Jumlah Relawan -->
      <div class="col-lg-12">
        <div class="panel panel-default">
          <div class="panel-body">
            <div class="row">
              <div class="col-md-4">
                <center>
                  <h3>Jumlah Relawan</h3>
                  <h1>20</h1>
                </center>
              </div>
              <div class="col-md-4">
                <center>
                  <h3>Jumlah Donatur</h3>
                  <h1>20</h1>
                </center>
              </div>
              <div class="col-md-4">
                <center>
                  <h3>Jumlah Kunjungan</h3>
                  <h1>20</h1>
                </center>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
<!-- testimoni -->
<div class="container-fluid">
<div class="row">
<div class="col-md-6">
  <!-- relawan 1 -->
  <div class="row">
    <div class="col-md-12 col-md-12">
      <div class="thumbnail">
        <img src="" alt="">
        <div class="caption">
          <h3>Testimoni Relawan</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <!-- <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p> -->
        </div>
      </div>
    </div>
  </div>
</div>
<div class="col-md-6">
  <!-- relawan 2 -->
  <div class="row">
    <div class="col-md-12 col-md-12">
      <div class="thumbnail">
        <img src="" alt="">
        <div class="caption">
          <h3>Testimoni Relawan</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <!-- <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p> -->
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
<!--  -->
<section>
	<div class="container">
     <hr>
		<div class="row">
			<div class="col-md-12 text-center">
				<span id="hubungi_kami">Hubungi Kami</span>
			</div>
		</div><br>
		<div class="row">
			<div class="col-xs-12">
			<br><br>
					<table id="footer" width="100%" align="center">
						<tr>
							<td align="center" width="20%"><img src="img/icon/phone.png"></td>
							<td align="center" width="20%"><img src="img/icon/mail.png"></td>
							<td align="center" width="20%"><img src="img/icon/location.png"></td>
							<td align="center" width="20%"><img src="img/icon/fb.png"></td>
							<td align="center" width="20%"><img src="img/icon/ig.png"></td>
						</tr>
						<tr>
							<td align="center" colspan="5"> <hr> </td>
						</tr>
						<tr>
							<td align="center"><p>+62 0541 12345</p></td>
							<td align="center"><p>admin@unduhindonesia.org</p></td>
							<td align="center"><p> Jl Ciptomangkusumo <br>Samarinda, Kalimantan Timur </p></td>
							<td align="center"><p>UnduhIndonesia</p></td>
							<td align="center"> <p>UnduhIndonesia</p></td>
						</tr>
					</table>
			</div>
		</div>
	</div>
</section>
<!-- akhir footer baru -->
<!-- slideshow -->
<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}
    x[myIndex-1].style.display = "block";
    setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>

@endsection
