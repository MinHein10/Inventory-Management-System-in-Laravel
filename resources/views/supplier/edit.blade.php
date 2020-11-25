@extends('adminpanel/homepage')

@section('content')

<!-- Main Content -->
<div class="main-content">
    <section class="section">
      <div class="section-body">
        <div class="col-12">
          
            <div class="card">
                <div class="card-header">
                  <h4>Update Supplier Information of the Inventory Items</h4>
                </div>

              <form action="{{route('supplier.update',$updatesupplier->id)}}" method="post" enctype="multipart/form-data">
              @csrf
                @method('PUT')

              <div class="card-body">
                <div class="form-group">
                  <label>Supplier Name</label>
                <input type="text" class="form-control" value="{{$updatesupplier->name}}" name="name" id="name" placeholder="Enter Category Name . . .">
                </div>

                <div class="form-group">
                    <label>Email</label>
                <input type="email" class="form-control" value="{{$updatesupplier->email}}" name="email" id="email">
                  </div>
  
                
                  <div class="form-group">
                    <label>Phone</label>
                  <input type="text" value="{{$updatesupplier->phone}}" class="form-control" name="phone" id="phone">
                  </div>
                  <div class="form-group">
                    <label>Address</label>
                  <input type="text" value="{{$updatesupplier->address}}" class="form-control" name="address" id="address">
                  </div>
                  
                </div>
                
              </div>


              <div class="card-footer text-right">
                <button type="submit" name="submit" class="btn btn-primary btn-sm"><i class="fa fa-check"></i></button>
                <a href="{{ route('supplier.index') }}"><button class="btn btn-danger btn-sm" type="button"><i class="fa fa-times"></i></button></a>
                
            </div>


              </form>
                
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