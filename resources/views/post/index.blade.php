@extends('app')
   @section('content')
      @if (session('success'))
         <p class="alert alert-success">{{ session('success') }}</p>
      @endif
      <div class="card">
         <div class="card-header">
               <form class="row row-cols-lg-auto g-1">
                  <div class="col">
                     <input class="form-control" type="text" name="q" value="{{ $q }}"
                           placeholder="Search here..." />
                  </div>
                  <div class="col">
                     <button class="btn btn-success">Refresh</button>
                  </div>
                  <div class="col">
                     <a class="btn btn-primary" href="{{ route('post.create') }}">Add</a>
                  </div>
               </form>
         </div>
         <div class="card-body p-0 table-responsive">
               <table class="table table-bordered table-striped table-hover mb-0">
                  <thead>
                     <tr>
                           <th>ID</th>
                           <th>Title</th>
                           <th>Image</th>
                           <th>Action</th>
                     </tr>
                  </thead>
                  @foreach ($posts as $key => $post)
                     <tr>
                           <td>{{ $key + 1 }}</td>
                           <td>{{ $post->title }}</td>
                           <td>
                              <img src="{{ $post->image() }}" height="75" />
                           </td>
                           <td class="text-nowrap">
                              {{-- <a class="btn btn-sm btn-info" href="{{ route('post.show', $post) }}">Show</a> --}}
                              <a class="btn btn-sm btn-warning" href="{{ route('post.edit', $post) }}">Edit</a>
                              <form method="POST" action="{{ route('post.destroy', $post) }}" style="display: inline-block;">
                                 @csrf
                                 @method('DELETE')
                                 <button class="btn btn-sm btn-danger"
                                       onclick="return confirm('Hapus Data?')">Delete</button>
                              </form>
                           </td>
                     </tr>
                  @endforeach
               </table>
         </div>
      </div>
   @endsection
