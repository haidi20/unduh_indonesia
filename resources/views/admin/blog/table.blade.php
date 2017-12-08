<div class="row">
  <div class="col-md-4 col-md-offset-4">
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
              <a href="{{route('blog.edit',$item->id)}}" class="btn btn-primary btn-md">
                <i class="glyphicon glyphicon-pencil"></i>
              </a>
              <a href="{{route('blog.destroy',$item->id)}}" class="btn btn-danger btn-md"></a>
            </td>
          </tr>
        @empty

        @endforelse
      </tbody>
    </table>
  </div>
</div>
