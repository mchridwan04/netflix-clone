@extends('dashboard.banner.app')
@section('content')
   <div class="row">
      <div class="col-lg-12 margin-tb">
            <div class="pull-left">
               <h2></h2>
            </div>
            <div class="pull-right">
               <a class="btn btn-success" href="{{ route('banner.create') }}"> Create New Banner</a>
            </div>
      </div>
   </div>
   @if ($message = Session::get('success'))
      <div class="alert alert-success">
            <p>{{ $message }}</p>
      </div>
   @endif
   <table class="table table-bordered">
      <tr>
            <th>No</th>
            <th>Image</th>
            <th>Name</th>
            <th>Details</th>
            <th width="280px">Action</th>
      </tr>
      @foreach ($banners as $banner)
            <tr>
               <td>{{ ++$i }}</td>
               <td><img src="/images/{{ $banner->image }}" width="100px"></td>
               <td>{{ $banner->name }}</td>
               <td>{{ $banner->detail }}</td>
               <td>
                  <form action="{{ route('banner.destroy', $banner->id) }}" method="POST">
                        <a class="btn btn-info" href="{{ route('banner.show', $banner->id) }}">Show</a>
                        <a class="btn btn-primary" href="{{ route('banner.edit', $banner->id) }}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                  </form>
               </td>
            </tr>
      @endforeach
   </table>
@endsection
