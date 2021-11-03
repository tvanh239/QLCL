@extends('home')

@section('content')



        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Chỉnh sửa nhân viên</h3>

              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="" method="post">
                <div class="card-body">

                  <div class="form-group">
                    <label for="exampleInputEmail1">Name<span style="color:red;"> (*)</span></label>
                    <input class="form-control" name="name" value="{{$menu->name}}" id="name" pattern="[a-zA\s]{1,15}" placeholder="Enter name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address<span style="color:red;"> (*)</span></label>
                    <input type="email" name="email" value="{{$menu->email}}"  class="form-control" id="email" placeholder="Enter email">
                  </div>
                    <input hidden  type="password" name="password" value="0"  class="form-control" id="password" >
                  <div class="form-group">
                      <label >Quyền hạn </label>
                      <select class="form-control" name="is_admin" id="is_admin" value="{{$menu->is_admin}}">
                          <option value="2">Nhân Viên</option>
                          <option value="1">Admin</option>
                      </select>
                  </div>
                    <div class="form-group">
                        <label >Số điện thoại</label>
                        <input type="tel" name="sdt" class="form-control" id="sdt" value="{{$menu->sdt}}"  pattern="[Z0-9 ]{10}" placeholder="Enter sdt" onkeypress="return /[0-9]/i.test(event.key)">
                    </div>
                    <div class="form-group">
                        <label >Chức vụ</label>
                        <input name="chuc_vu" class="form-control" id="chuc_vu" placeholder="Enter chuc vu" value="{{$menu->chuc_vu}}">
                    </div>
                    <div class="form-group">
                        <label >Ngày làm việc</label> <br/>
                        <input class="datepicker" name="date_start" id="date_start" value="{!!date('d-m-Y', strtotime($menu->date_start));  !!}" data-date-format="dd-mm-yyyy" placeholder="dd-mm-yyyy" >
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                @csrf
              </form>
            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->


@endsection
