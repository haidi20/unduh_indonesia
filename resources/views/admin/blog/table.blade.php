<div class="row">
  <div class="col-md-12">
    <table class="table table-bordered">
      <thead>
        <tr>
          <td>No.</td>
          <td>Judul</td>
          <td>Isi</td>
          <td>Action</td>
        </tr>
      </thead>
      <tbody>
        @forelse ($blog as $index => $item)
          <tr>
            <td>{{$index + 1}}</td>
            <td>{{$item->judul}}</td>
            <td>{{$item->isi}}</td>
            <td>
              <a href="{{route('blog.edit',$item->id)}}" class="btn btn-primary btn-xs">
                <i class="glyphicon glyphicon-pencil"></i>
              </a>
              <a href="{{route('blog.destroy',$item->id)}}" class="btn btn-danger btn-xs"
                data-confirm="yakin ?" data-method="DELETE">
                <i class="glyphicon glyphicon-trash"></i>
              </a>
            </td>
          </tr>
        @empty

        @endforelse
      </tbody>
    </table>
  </div>
</div>
