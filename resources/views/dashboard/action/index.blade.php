{{-- @extends('dashboard.action.app')
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
                     <a class="btn btn-primary" href="{{ route('action.create') }}">Add</a>
                  </div>
               </form>
         </div>
         <div class="card-body p-0 table-responsive">
               <table class="table table-bordered table-striped table-hover mb-0">
                  <thead>
                     <tr>
                           <th>#</th>
                           <th>Title</th>
                           <th>Image</th>
                           <th>Action</th>
                     </tr>
                  </thead>
                  @foreach ($action as $key => $actions)
                     <tr>
                           <td>{{ $key + 1 }}</td>
                           <td>{{ $actions->title }}</td>
                           <td>
                              <img src="{{ $actions->image() }}" height="75" />
                           </td>
                           <td class="text-nowrap">
                              <a class="btn btn-sm btn-info" href="{{ route('action.show', $actions) }}">Show</a>
                              <a class="btn btn-sm btn-warning" href="{{ route('action.edit', $actions) }}">Edit</a>
                              <form method="POST" action="{{ route('action.destroy', $actions) }}" style="display: inline-block;">
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
@endsection --}}

<x-app-layout>
   {{-- Import Header --}}
   <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
         {{ __('Dashboard - Movie Action') }}
      </h2>
   </x-slot>

   {{-- Show Notif --}}
   @if ($message = Session::get('success'))
      <div class="alert shadow-lg m-2">
         <div>
               <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                  class="stroke-info flex-shrink-0 w-6 h-6">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                     d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
               </svg>
               <div>
                  <h3 class="font-bold">New message!</h3>
                  <div class="text-xs">{{ $message }}</div>
               </div>
         </div>
      </div>
   @endif

   {{-- Section Content --}}
   <div class="overflow-x-auto w-full">
      <a href="{{ route('action.create') }}">
         <button class="btn bg-white text-black ml-5 mt-2">Add Movie Action</button>
      </a>

      <table class="table w-full">
         <!-- head -->
         <thead>
               <tr>
                  <th></th>
                  <th>ID</th>
                  <th>Title</th>
                  <th>Action</th>
               </tr>
         </thead>
         <tbody>
               <!-- row 1 -->
               @foreach ($action as $key => $actions)
                  <tr>
                     <td></td>
                     <td>{{ $key + 1 }}</td>
                     <td>
                           <div class="flex items-center space-x-4">
                              <div class="avatar">
                                 <div class="w-20">
                                       <img src="{{ $actions->image() }}" alt="{{ $actions->title }}" />
                                 </div>
                              </div>
                              <div>
                                 <div class="font-bold">{{ $actions->title }}</div>
                                 <div class="text-sm opacity-50">Movie Romance</div>
                              </div>
                           </div>
                     </td>
                     <th>
                           <form action="{{ route('action.destroy', $actions->id) }}" method="POST">
                              {{-- <a class="btn btn-info" href="{{ route('romance.show', $romances->id) }}">Show</a> --}}
                              <a class="btn btn-primary" href="{{ route('action.edit', $actions->id) }}">Edit</a>
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="btn btn-danger">Delete</button>
                           </form>
                     </th>
                  </tr>
               @endforeach
         </tbody>
      </table>
   </div>
</x-app-layout>
