@extends('adminpanel/homepage')

@section('content')

<!-- Main Content -->
<div class="main-content">
    <section class="section">
      <div class="section-body">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h4>Stock List</h4>
                <div class="card-header-action">
                  
                    <form>
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Search">
                      <div class="input-group-btn">
                        
                        <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                      </div>
                    </div>
                  </form>
                
                </div>
              </div>
              <div class="card-body p-0">
                <div class="table-responsive">
                    <br>
                    <div class="container">
                      <div class="text-center">
                        <a href="{{route('stockin.create')}}"><button class="btn btn-primary mr-1" ><i class="fa fa-plus">   New Stock</i></button></a>
                        <a href="{{ url('dynamic_pdf/pdf') }}"><button class="btn btn-primary mr-1" ><i class="fas fa-file-pdf">   Convert Into PDF</i></button></a>
                        <a href="{{ url('dynamic_excel/excel') }}"><button class="btn btn-primary mr-1" ><i class="fas fa-file-excel">   Export Into Excel</i></button></a>
                      </div>
                    
                    </div>
                    <br>
                  <table class="table table-striped" id="sortable-table">
                    <thead>
                      <tr>
                        <th class="text-center">
                          <i class="fas fa-th"></i>
                        </th>
                        <th>Action</th>
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
                    @foreach ($purchases as $value)
                    <tbody>
                        
                        <td>{{$loop->iteration}}</td>
                        <td>
                        <a href="{{route('stockin.edit',$value->id)}}"><button class="btn btn-red btn-sm" ><i class="material-icons">add</i></button></a><br>
                              <a href=""><button class="btn btn-red btn-sm"><i class="material-icons">edit</i></button></a><br>

                              <form action="{{route('stockin.destroy',$value->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-red btn-sm"><i class="material-icons">delete</i></button>
                              </form>
                              
                          
                            </td>
                          
                        <td>{{App\Category::find($value->category_id)->name}}</td>
                        <td>{{App\Product::find($value->product_id)->productname}}</td>
                        <td>{{App\Supplier::find($value->supplier_id)->name}}</td>
                        <td>{{$value->date}}</td>
                        <td>{{$value->quantity}}</td>
                        <td>{{$value->quantity}}</td>
                        <td>{{$value->buyingprice}}</td>
                        <td>{{$value->sellingprice}}</td>
                        <td>{{$value->created_at}}</td>
                        
                              
                        
                        
                    </tbody>
                    @endforeach
                  </table>
                </div>
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
  

@endsection
