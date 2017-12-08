<nav class="navbar navbar-default" style="background-color:#3498db">
 <div class="container-fluid">
   <div class="navbar-header">
     {{-- <a class="navbar-brand" href="#"><div class="header">Unduh Indonesia</div></a> --}}
   </div>
   <div id="navbar" class="navbar-collapse collapse">
     <ul class="nav navbar-nav putih">
       <li><a href="{{route('dashboard')}}"><div class="header">Dashboard</div></a></li>
       <li><a href="{{route('blog.index')}}"><div class="header">Blog</div></a></li>
       <li><a href="{{route('relawan.index')}}"><div class="header">Relawan</div></a></li>
       <li><a href="#"><div class="header">Kunjungan</div></a></li>
     </ul>
     <ul class="nav navbar-nav navbar-right">
       <li><a href="#"><div class="header">Keluar</div></a></li>
     </ul>
   </div>
 </div>
</nav>
