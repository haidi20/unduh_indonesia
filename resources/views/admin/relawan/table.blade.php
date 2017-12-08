<div class="row">
  <div class="col-md-12">
    <table class="table table-bordered">
      <thead>
        <tr align="center">
          <td>No.</td>
          <td>Nama</td>
          <td>Email</td>
          <td>Nomor Handphone</td>
          <td>Alamat</td>
          <td>Action</td>
        </tr>
      </thead>
        @forelse ($relawan as $index => $item)
          <tr>
            <td width="30px">{{$index + 1}}</td>
            <td>{{$item->nama}}</td>
            <td>{{$item->email}}</td>
            <td>{{$item->hp}}</td>
            <td>{{$item->alamat}}</td>
            <td align="center">
              <a href="{{route('relawan.edit',$item->id)}}" class="btn btn-primary btn-xs" title="Edit Data">
                <i class="glyphicon glyphicon-pencil"></i>
              </a>
              <a href="{{route('relawan.destroy',$item->id)}}"
                data-method="DELETE" data-confirm="Anda yakin akan menghapus data ini?"
                class="btn btn-xs btn-danger" title="Hapus Data">
                <i class="glyphicon glyphicon-trash"></i>
              </a>
              {{-- <a href="{{ route('hauling.edit', $item->id) }}"
                class="btn btn-xs btn-outline-secondary" title="Edit Data">
                <i class="fa fa-pencil"></i>
              </a>
              <a href="{{route('hauling.destroy',$item->id)}}"
                data-method="DELETE" data-confirm="Anda yakin akan menghapus data ini?"
                class="btn btn-xs btn-outline-danger" title="Hapus Data">
                <i class="fa fa-trash-o"></i>
              </a> --}}
            </td>
          </tr>
        @empty
          <tr align="center">
            <td colspan="6">Data Tidak Ada</td>
          </tr>
        @endforelse
    </table>
  </div>
</div>
