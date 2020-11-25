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
                  <h4>All of the Products in Inventory Management System</h4>
                  
                </div>
                <div class="card-body">
                <a href="{{route('products.create')}}"><button class="btn btn-primary btn-sm float-right"><i class="fa fa-plus"></i></button></a>
                    <br><br>
                    <div class="table-responsive">
                    <table class="table table-striped" id="table-2">
                      <thead>
                        <tr class="text-center">
                          <th>#</th>
                          <th>Product Name</th>
                          <th>Category Name</th>
                          <th>Images</th>
                          <th>Description</th>
                          <th>Created At</th>
                          <th>Action (Update)</th>
                          <th>Action (Delete)</th>
                        </tr>
                      </thead>
                      <tbody>
                        
                        @foreach ($products as $item)
                            
                        
                        <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$item->productname}}</td>
                        {{-- <td>{{$item->category_id}}</td> --}}
                        <td>{{App\Category::find($item->category_id)->name}}</td>
                        {{-- <td>{{ App\Model\Blog::find($value->id)->category->name }}</td> --}}
                          <td>
                          <a href="{{asset('uploads/'.$item->images)}}" target="blank">
                          <img alt="{{$item->images}}" src="{{asset('uploads/'.$item->images)}}" title="{{$item->images}}" style="width: 200px;">
                          </a>
                          </td>

                        <td class="text-justify">{{$item->details}}</td>
                        <td>{{$item->created_at->diffforHumans()}}</td>
                        <td><a href="{{route('products.edit',$item->id)}}" class="btn btn-icon btn-primary"><i class="far fa-edit"></i></a></td>
                        {{-- <a href="#" class="btn btn-icon btn-primary"><i class="far fa-edit"></i></a> --}}
                        <td>
                            
                          <form action="{{route('products.destroy',$item->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                          <button type="submit" name="submit" class="btn btn-primary" >Remove</button>
                          </form>
                          
                          </td>
                        
                        </tr>

                        @endforeach
                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>


          
        </div>
      </section>
    <!-- Setting Sidebar -->
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
    <!-- Setting Sidebar -->
  </div>
  <!-- Main Content -->
    
@endsection