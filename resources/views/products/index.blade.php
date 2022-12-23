<!doctype html>
<html lang="en">

   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>My App</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
         integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
   </head>

   <body>
      <div id="app">
         <div class="main-wrapper">
               <div class="main-content">
                  <div class="container">
                     <div class="card mt-5">
                           <div class="card-header">
                              <h3>List Product</h3>
                           </div>
                           <div class="card-body">
                              @if (session('success'))
                                 <div class="alert alert-success">{{ session('success') }}</div>
                              @endif

                              @if (session('error'))
                                 <div class="alert alert-danger">{{ session('error') }}</div>
                              @endif
                              <p>
                                 <a class="btn btn-primary" href="{{ route('products.create') }}">New Product</a>
                              </p>
                              <table class="table table-striped table-bordered">
                                 <thead>
                                       <tr>
                                          <th>Image</th>
                                          <th>ID</th>
                                          <th>SKU</th>
                                          <th>Name</th>
                                          <th>Price</th>
                                          <th>Stock</th>
                                       </tr>
                                 </thead>
                                 <tbody>
                                       @forelse ($products as $product)
                                          <tr>
                                             <td><img src="{{ asset($product->image) }}" class="img-thumbnail"
                                                      style="width:200px" /></td>
                                             <td>{{ $product->id }}</td>
                                             <td>{{ $product->sku }}</td>
                                             <td>{{ $product->name }}</td>
                                             <td>{{ $product->price }}</td>
                                             <td>{{ $product->stock }}</td>
                                          </tr>
                                       @empty
                                          <tr>
                                             <td colspan="6">
                                                   No record found!
                                             </td>
                                          </tr>
                                       @endforelse
                                 </tbody>
                              </table>
                           </div>
                     </div>
                  </div>
               </div>
         </div>
      </div>
   </body>

</html>
