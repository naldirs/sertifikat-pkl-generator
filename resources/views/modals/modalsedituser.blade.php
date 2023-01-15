<div class="modal fade" id="edituser">
          <div class="modal-dialog">
            <div class="box box-info">
         
              <form method="POST" action="{{route('update.user')}}" enctype="multipart/form-data">
                {{ csrf_field() }}             

                <div class="box-header with-border">
                  <h3 class="box-title"><b>Edit</b> User</h3>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span></button>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <div class="row">
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                          <label for="input">Username</label>
                          <input id="name" type="text" class="form-control" name="name" value=""  autofocus>
                          @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                          @endif
                        </div>             
                    </div>         
                    <!-- /.col -->
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                          <label for="input">Email</label>
                          <input id="email" type="email" class="form-control" name="email" value="" >
                          @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </div>             
                    </div>
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                          <label for="input">Password</label>
                          <input id="password" type="password" class="form-control" name="password" >
                          @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                        </div>             
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                          <label for="input">Confirm Password</label>
                          <input id="password-confirm" type="password" class="form-control" name="password_confirmation" >
                        </div>             
                    </div>
                             
                    <!-- /.col -->
                  </div>
                  <!-- /.row -->
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                      <button type="submit" class="btn btn-info btn-flat">Simpan</button>
                </div>
 
              </form>
            </div>
            <!-- /.modal-content -->
          </div>
        <!-- /.modal-dialog -->
     </div>