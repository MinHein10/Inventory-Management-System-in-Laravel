@extends('adminpanel/homepage')

@section('content')







<!-- Main Content -->
<div class="main-content">

  <form action="{{route('stockout.store')}}" method="post" enctype="multipart/form-data"}}>
    @csrf
    <h5 class="text-center">Create Invoice</h5>
    <div class="card-body">
      <table class="table table-striped" id="sortable-table">
        <thead class="text-center">
          <tr>
            <th >
              <i class="fas fa-th"></i>
            </th>
            <th >
              <i class="fas fa-th"></i>
            </th>
            <th >
              <i class="fas fa-th"></i>
            </th>
            <th >
              <i class="fas fa-th"></i>
            </th>
            <th >
              <i class="fas fa-th"></i>
            </th>
            <th >
              <i class="fas fa-th"></i>
            </th>
            <th >
              <i class="fas fa-th"></i>
            </th>
            <th >
              <i class="fas fa-th"></i>
            </th>
          
          </tr>
        </thead>
    
          <tbody class="text-center">
    
            
            
            <td>
              <a href=""><button class="btn btn-red btn-sm"><i class="material-icons">delete</i></button></a> 
              <button type="submit" name="submit" class="btn btn-red btn-sm"><i class="fa fa-plus">Add</i></button>
              
            </td>
            <td>
              <div class="form-group">
                <label>Invoice No</label>
              <input type="text" name="invoice_no" id="invoice_no" class="form-control form-control-sm" value="{{$invoice_no}}" readonly >
              </div>
            </td>
            <td>
              <div class="form-group">
                <label for="">Date</label>
              <input type="text" name="date" id="date" value="{{$date}}" class="form-control form-control-sm" placeholder="YYYY/MM/DD">
            </div>
            </td>
          
            <td>
              <div class="form-group">
                <label>Category Name</label>
                <select name="category_id" id="category_id" class="form-control form-control-sm">
                  @foreach($categories as $value)
    
                  <option value="{{ $value->id }}">{{$value->name}}</option>
    
                  @endforeach
                  <option value="">Select Category</option>
                </select>
              </div>
            </td>
            
            <td>
              <div class="form-group">
                <label>Product Name</label>
                <select name="product_id" id="product_id" class="form-control form-control-sm">
                  @foreach($salestock as $value)
    
                  <option value="{{ $value->product_id }}">{{App\Product::find($value->product_id)->productname}}</option>
    
                  @endforeach
                  <option value="">Select Product</option>
                </select>
              </div>
            </td>
    
            <td>
              <div class="form-group">
                <label>Stock (Pcs/Kg) </label>
              <input type="text" name="current_stock_qty" id="current_stock_qty" class="form-control form-control-sm" readonly>
              </div>
            </td>
    
            <td>
              <div class="form-group">
                <label>Selling Price </label>
              <input type="text" name="selling_price" id="selling_price" class="form-control form-control-sm" readonly>
              </div>
            </td>
    
    
            <td>
              <div class="form-group">
                <label>Buying Quantity</label>
              <input type="text" name="buying_qty" id="buying_qty" class="form-control form-control-sm">
              </div>
            </td>


            
              
            
          </tbody>
          
      </table>
    </div>

    <div class="card-body">

      
        <div class="form-row">
          <div class="form-group col-md-6">
            <label>Description</label>
            <textarea placeholder="Write Description" name="description" id="description" class="form-control" cols="30" rows="10"></textarea>
          </div>
          <div class="form-group col-md-6">
            <label for="">Paid Status</label>
            <select name="paid_status" id="paid_status" class="form-control">
              <option value="">Select Status</option>
              <option value="full_paid">Full Paid</option>
              <option value="full_due">Full Due</option>
              <option value="partical_paid">Partical Paid</option>
            </select>
            <input type="text" name="paid_amount" id="paid_amount" class="form-control paid_amount" placeholder="Enter Paid Amount" style="display: none;">
        </div>
        </div>

        <div class="form-row">
          <div class="form-group col-md-6">
            <label>Customer Name</label>
            
                  <select name="customer_id" id="customer_id" class="form-control form-control-sm">
                    
                    @foreach($customers as $customer)

                    <option value="{{ $customer->id }}">{{ $customer->name }} ( Ph : 09-{{ $customer->phone }}, Address : {{ $customer->address }} )</option>
  
                    @endforeach
                    <option value="0">New Customer</option>

                  </select>
          </div>
        </div>

        <div class="form-row new_customer" style="display: none;">
          <div class="form-group col-md-3">
            <input type="text" name="name" id="name" class="form-control form-control-sm" placeholder="Write Customer Name">
          </div>
          <div class="form-group col-md-3">
            <input type="text" name="email" id="email" class="form-control form-control-sm" placeholder="Write Customer Email Address">
          </div>
          <div class="form-group col-md-3">
            <input type="text" name="phone" id="phone" class="form-control form-control-sm" placeholder="Write Customer Ph No">
          </div>
          <div class="form-group col-md-3">
            <input type="text" name="address" id="address" class="form-control form-control-sm" placeholder="Write Customer Address">
          </div>
          
        </div>
      

      
      </div>
  
  </form>

  



  
    
    <div class="settingSidebar">
      <a href="javascript:void(0)" class="settingPanelToggle"> <i class="fa fa-spin fa-cog"></i>
      </a>
      <div class="settingSidebar-body ps-container ps-theme-default">
        <div class=" fade show active">
          <div class="setting-panel-header">Setting Panel
          </div>
          <div class="p-15 border-bottom">
            <h6 class="font-medium m-b-10">Select Layout</h6>
            <div class="selectgroup layout-color w-50">
              <label class="selectgroup-item">
                <input type="radio" name="value" value="1" class="selectgroup-input-radio select-layout" checked>
                <span class="selectgroup-button">Light</span>
              </label>
              <label class="selectgroup-item">
                <input type="radio" name="value" value="2" class="selectgroup-input-radio select-layout">
                <span class="selectgroup-button">Dark</span>
              </label>
            </div>
          </div>
          <div class="p-15 border-bottom">
            <h6 class="font-medium m-b-10">Sidebar Color</h6>
            <div class="selectgroup selectgroup-pills sidebar-color">
              <label class="selectgroup-item">
                <input type="radio" name="icon-input" value="1" class="selectgroup-input select-sidebar">
                <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                  data-original-title="Light Sidebar"><i class="fas fa-sun"></i></span>
              </label>
              <label class="selectgroup-item">
                <input type="radio" name="icon-input" value="2" class="selectgroup-input select-sidebar" checked>
                <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                  data-original-title="Dark Sidebar"><i class="fas fa-moon"></i></span>
              </label>
            </div>
          </div>
          <div class="p-15 border-bottom">
            <h6 class="font-medium m-b-10">Color Theme</h6>
            <div class="theme-setting-options">
              <ul class="choose-theme list-unstyled mb-0">
                <li title="white" class="active">
                  <div class="white"></div>
                </li>
                <li title="cyan">
                  <div class="cyan"></div>
                </li>
                <li title="black">
                  <div class="black"></div>
                </li>
                <li title="purple">
                  <div class="purple"></div>
                </li>
                <li title="orange">
                  <div class="orange"></div>
                </li>
                <li title="green">
                  <div class="green"></div>
                </li>
                <li title="red">
                  <div class="red"></div>
                </li>
              </ul>
            </div>
          </div>
          <div class="p-15 border-bottom">
            <div class="theme-setting-options">
              <label class="m-b-0">
                <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                  id="mini_sidebar_setting">
                <span class="custom-switch-indicator"></span>
                <span class="control-label p-l-10">Mini Sidebar</span>
              </label>
            </div>
          </div>
          <div class="p-15 border-bottom">
            <div class="theme-setting-options">
              <label class="m-b-0">
                <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                  id="sticky_header_setting">
                <span class="custom-switch-indicator"></span>
                <span class="control-label p-l-10">Sticky Header</span>
              </label>
            </div>
          </div>
          <div class="mt-4 mb-4 p-3 align-center rt-sidebar-last-ele">
            <a href="#" class="btn btn-icon icon-left btn-primary btn-restore-theme">
              <i class="fas fa-undo"></i> Restore Default
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>

  {{-- <script type="text/javascript">
    $(function(){
      $(document).on('change','#supplier_id',function(){
          var supplier_id = $(this).val();
          $.ajax({
            url: "{{route('get-category')}}",
            type: "GET",
            data:{supplier_id:supplier_id},
            success:function(data){
              var html = '<option value="">Select Category</option>';
              $.each(data,function(key,v){
                  html += '<option value="'+v.category_id+'"> '+v.category.name+' </option>';
              });
              $('#category_id').html(html);
            }
          });
      });
    });
  </script> --}}
  <script>
    $('#date').datepicker({
        uiLibrary: 'boostrap4',
        format: "YYYY/MM/DD",
        autoclose: true
    });
</script>

<script type="text/javascript">
  $(function(){
    $(document).on('change','#product_id',function(){
      var product_id = $(this).val();
      $.ajax({
        url:"{{route('stockout.store')}}",
        type:"GET",
        data:{product_id:product_id},
        success:function(data){
          $('#current_stock_qty').val(data);
        }
      });
      $.ajax({
        url:"{{route('check-product-stock')}}",
        type:"GET",
        data:{product_id:product_id},
        success:function(data){
          $('#current_stock_qty').val(data);
        }
      });
    });
  });
</script>
<script type="text/javascript">
  $(function(){
    $(document).on('change','#product_id',function(){
      var product_id = $(this).val();
      $.ajax({
        url:"{{route('stockout.store')}}",
        type:"GET",
        data:{product_id:product_id},
        success:function(data){
          $('#selling_price').val(data);
        }
      });
      $.ajax({
        url:"{{route('check-product-price')}}",
        type:"GET",
        data:{product_id:product_id},
        success:function(data){
          $('#selling_price').val(data);
        }
      });
    });
  });
</script>

{{-- Paid Status --}}
<script type="text/javascript">
  $(document).on('change','#paid_status',function(){
    var paid_status = $(this).val();
    if(paid_status=='partical_paid'){
      $('.paid_amount').show();
    }else{
      $('.paid_amount').hide();
    }
  });
</script>

{{-- Customer Insert --}}
<script type="text/javascript">
  $(document).on('change','#customer_id',function(){
    var customer_id = $(this).val();
    if(customer_id=='0'){
      $('.new_customer').show();
    }else{
      $('.new_customer').hide();
    }
  });
</script>

    {{-- <script type="text/javascript">
        $(function(){
            $(document).on('change','#category_id',function(){
              var category_id = $(this).val();
              $.ajax({
                url : "{{route('default.getproduct')}}",
                type:"GET",
                data:{category_id:category_id},
                success:function(data){
                  var html = '<option value="">Select Product</option>';
                  $.each(data,function(key,v)){
                    html += '<option value="'+v.id+'">'+v.name+'</option>';
                  });
                  $('#product_id').html(html);
                }
              });
            });
        });
    </script> --}}
@endsection