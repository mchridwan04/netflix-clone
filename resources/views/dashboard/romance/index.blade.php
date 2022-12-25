@extends('dashboard.romance.app')
@section('content')
   <div class="row">
      <div class="col-lg-12 margin-tb">
         <div class="pull-left">
               <h2></h2>
         </div>
         <div class="pull-right">
               <a class="btn btn-success" href="{{ route('romance.create') }}"> Create New Banner</a>
         </div>
      </div>
   </div>
   @if ($message = Session::get('success'))
      <div class="alert alert-success">
         <p>{{ $message }}</p>
      </div>
   @endif
   </div>
   <div class="card-body p-0 table-responsive">
      <table class="table table-bordered">
         <tr>
               <th>No</th>
               <th>Image</th>
               <th>Name</th>
               <th>Details</th>
               <th width="280px">Action</th>
         </tr>
         @foreach ($romance as $romances)
               <tr>
                  <td>{{ ++$i }}</td>
                  <td><img src="/images/{{ $romances->image }}" width="100px"></td>
                  <td>{{ $romances->name }}</td>
                  <td>{{ $romances->detail }}</td>
                  <td>
                     <form action="{{ route('romance.destroy', $romances->id) }}" method="POST">
                           <a class="btn btn-info" href="{{ route('romance.show', $romances->id) }}">Show</a>
                           <a class="btn btn-primary" href="{{ route('romance.edit', $romances->id) }}">Edit</a>
                           @csrf
                           @method('DELETE')
                           <button type="submit" class="btn btn-danger">Delete</button>
                     </form>
                  </td>
               </tr>
         @endforeach
      </table>
   </div>
@endsection
