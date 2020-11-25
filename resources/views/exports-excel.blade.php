<table class="table table-striped table-bordered">
    <thead>
     <tr>
      <th>Categories</th>
      <th>Products</th>
      <th>Suppliers</th>
      <th>Chalan</th>
      <th>Initial Stock</th>
      <th>Current Stock</th>
      <th>Buying Price</th>
      <th>Selling Price</th>
      <th>Entry Date</th>
     </tr>
    </thead>
    <tbody>
     @foreach ($stockdata as $value)
 <tr>
  <td>{{App\Category::find($value->category_id)->name}}</td>
  <td>{{App\Product::find($value->product_id)->productname}}</td>
  <td>{{App\Supplier::find($value->supplier_id)->name}}</td>
  <td>{{$value->date}}</td>
  <td>{{$value->quantity}}</td>
  <td>{{$value->quantity}}</td>
  <td>{{$value->buyingprice}}</td>
  <td>{{$value->sellingprice}}</td>
  <td>{{$value->created_at}}</td> 
   
 </tr>
 @endforeach

    </tbody>
   </table>