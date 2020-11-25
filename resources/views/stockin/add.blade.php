@extends('adminpanel/homepage')

@section('content')


<!-- Main Content -->
<div class="main-content">
    <section class="section">
      <div class="section-body">
        <div class="row">
          <div class="col-12 ">
            <div class="card">
              <div class="card-header">
                <h4>Stock In</h4>
              </div>
              <div class="card-body">

              <form action="{{route('stockin.store')}}" method="post" enctype="multipart/form-data">
              @csrf


              <div class="form-group">
                <label>Category Name</label>
                <select name="category_id" id="category_id" class="form-control form-control-sm">
                  @foreach($stockcategories as $value)

                  <option value="{{ $value->id }}">{{ $value->name }}</option>

                  @endforeach
                </select>
              </div>

              <div class="form-group">
                <label>Product Name</label>
            
                  <select name="product_id" id="product_id" class="form-control form-control-sm">
                  @foreach($stockproducts as $value)

                  <option value="{{ $value->id }}">{{ $value->productname }}</option>

                  @endforeach
                  </select>
              </div>

              <div class="form-group">
                <label>Supplier Name</label>
                  <select name="supplier_id" id="supplier_id" class="form-control form-control-sm">
                  @foreach($stocksuppliers as $value)

                  <option value="{{ $value->id }}">{{ $value->name }}</option>

                  @endforeach
                  </select>
              </div>

              <div class="form-group">
                <label>Buying Price</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      $
                    </div>
                  </div>
                  <input type="text" class="form-control currency" name="buyingprice" id="buyingprice">
                </div>
              </div>
              
              <div class="form-group">
                <label>Selling Price</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      $
                    </div>
                  </div>
                  <input type="text" class="form-control currency" name="sellingprice" id="sellingprice">
                </div>
              </div>


              <div class="form-group">
                <label>Quantity</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      +
                    </div>
                  </div>
                  <input type="text" class="form-control" name="quantity" id="quantity">
                  
                </div>
              </div>           
              
              <div class="form-group">
                <label>Date</label>
                <input type="text" class="form-control datemask" placeholder="YYYY/MM/DD" name="date" id="date">
              </div>


              <div class="card-footer text-right">
                <button class="btn btn-primary mr-1" type="submit" name="submit">Insert</button>
                <a href="{{ route('stockin.index') }}"><button class="btn btn-danger btn-sm" type="button"><i class="fa fa-times"></i></button></a>
             
              </div>

              </form>
                
              
                
              </div>
            </div>

            
          </div>
          
        </div>
      </div>
    </section>
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

  
    <script>
      $('.date').datepicker({
        uilibrary: 'bootstrap4',
        format: 'yyyy-mm-dd'
      });
    </script>

@endsection