<x-app-layout>
   {{-- Import Header --}}
   <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
         {{ __('Dashboard - Banner') }}
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
      <a href="{{ route('banner.create') }}">
         <button class="btn  bg-white text-black ml-5 mt-2">Add Banner</button>
      </a>

      <table class="table w-full">
         <!-- head -->
         <thead>
               <tr>
                  <th></th>
                  <th>Title</th>
                  <th>Description</th>
                  <th>Action</th>
               </tr>
         </thead>
         <tbody>
               <!-- row 1 -->
               @foreach ($banners as $banner)
                  <tr>
                     <td></td>
                     <td>
                           <div class="flex items-center space-x-4">
                              <div class="avatar">
                                 <div class="w-20">
                                       <img src="/images/{{ $banner->image }}" alt="Avatar Tailwind CSS Component" />
                                 </div>
                              </div>
                              <div>
                                 <div class="font-bold">{{ $banner->name }}</div>
                                 <div class="text-sm opacity-50">United States</div>
                              </div>
                           </div>
                     </td>
                     <td>Purple</td>
                     <th>
                           <form action="{{ route('banner.destroy', $banner->id) }}" method="POST">
                              <a class="btn btn-info" href="{{ route('banner.show', $banner->id) }}">Show</a>
                              <a class="btn btn-primary" href="{{ route('banner.edit', $banner->id) }}">Edit</a>
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
