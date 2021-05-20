@extends('layouts.admin')

   @section('content')

      <footer class="sidebar-footer">
          <ul class="sidebar-menu metismenu" id="customize-menu">
              <li>
                  <a href="http://portfolio.pxdollar.com/"> Develope By | MR. Usman </a>
              </li>
          </ul>
      </footer>
   </aside>
      <div class="sidebar-overlay" id="sidebar-overlay"></div>
      <div class="sidebar-mobile-menu-handle" id="sidebar-mobile-menu-handle"></div>
      <div class="mobile-menu-handle"></div>
      <article class="content responsive-tables-page">
          <div class="title-block">
              <h1 class="title"> User Record</h1>
          </div>
          <section class="section">
              <div class="row">
                  <div class="col-md-12">
                      <div class="card">
                          <div class="card-block">
                              <div class="card-title-block">
                                <h3 class="title"><a style="color: white;" data-toggle="modal" data-target="#exampleModal" class="btn btn-primary btn-sm"> Add New Writer & Clients </a>
       </h3>
           <form style="float: right;" role="search">
               <div class="input-container">
       <input type="text" name="search" id="usersearch" class="form-control" placeholder="Search User Data" />
                   <div class="underline"></div>
               </div>
           </form>
                              </div>

                              <section class="example">
                                  <div class="table-responsive">
                                      <table id="example" class="table table-striped table-bordered table-hover">
                                          <thead>
                                              <tr>

                                                  <th>User Name</th>
                                                  <th>Email</th>
                                                  <th>Role</th>
                                                  <th>Mobile Phone</th>
                                                  <th>Action</th>
                                              </tr>
                                          </thead>
                                          <tfoot>
                                             <tr>
                                                 <th>User Name</th>
                                                 <th>Email</th>
                                                 <th>Role</th>
                                                 <th>Mobile Phone</th>
                                                 <th>Action</th>
                                             </tr>
                                         </tfoot>
                                          <tbody>
                                         @foreach ($getuser as $getusers)
                                              <tr>
                                                  <td>{{$getusers->username}}</td>
                                                  <td>{{$getusers->email}}</td>
                                                  <td>{{$getusers->role}}</td>
                                                  <td>{{$getusers->phone}}</td>
       <td><a href="{{route('del.user',[$getusers->id])}}" style="color: white;"
         class="btn btn-primary btn-sm"><i class="fa fa-trash"></i></a>
         @if($getusers->ban == 1)
           <a href="{{route('unban.user',[$getusers->id])}}" style="color: white;"
             class="btn btn-primary btn-sm"><i class="fa fa-rss"></i></a>
         @else
         <a href="{{route('ban.user',[$getusers->id])}}" style="color: white;"
           class="btn btn-primary btn-sm"><i class="fa fa-ban"></i></a>
           @endif
           <a style="color: white;" href="{{route('edit.user.page',[$getusers->id])}}"
           class="btn btn-primary btn-sm"><i  class="fa fa-edit"></i></a></td>


                                    @endforeach

                                              </tr>
                                          </tbody>
                                      </table>
                                      {{$getuser->links()}}

                                  </div>
                              </section>
                          </div>
                      </div>
                  </div>
              </div>
          </section>

      </article>
<!-- <script>
$(document).ready(function() {
    $('#example').DataTable( {

        "ajax": "public/data/arrays.txt"
    } );
} );
</script> -->
      <!-- Modal -->
      <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Add Writer & Clients</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="card sameheight-item" data-exclude="xs" id="dashboard-history">
                  <div class="card-header card-header-sm bordered">
                      <div class="header-block">
                          <h3 class="title"></h3>
                      </div>
                      <ul class="nav nav-tabs pull-right" role="tablist">
                          <li class="nav-item">
                              <a class="nav-link active" href="#General" role="tab" data-toggle="tab">General</a>
                          </li>
                      </ul>
                  </div>
                  <div class="card-block">
                      <div class="tab-content">
                          <div role="tabpanel" class="tab-pane active fade show" id="General">
                                  <form method="post" enctype="multipart/form-data" required action="{{route('edit.user',[$getusers->id])}}">
                                    @csrf
                                                <div class="form-group has-success">
                                                    <label class="control-label">Role</label>
                                                    <select type="text" name="role" class="form-control underlined">
                                                      <option value="writer">Writer</option>
                                                      <option value="client">Client</option>
                                                    </select>
                                                </div>
                                                <div class="form-group has-success">
                                                    <label class="control-label">Full Name</label>
                                                    <input type="text" required name="fullname" id="fullname" class="form-control underlined">
                                                </div>
                                                <div class="form-group has-success">
                                                    <label class="control-label">Username</label>
                                                    <input type="text" required name="username" class="form-control underlined">
                                                </div>
                                                <div class="form-group has-success">
                                                    <label class="control-label">Email</label>
                                                    <input type="email" required name="email" class="form-control underlined">
                                                </div>
                                                <div class="form-group has-success">
                                                    <label class="control-label">phone</label>
                                                    <input type="text" required name="phone" class="form-control underlined">
                                                </div>
                                                <div class="form-group has-success">
                                                    <label class="control-label">Password</label>
                                                    <input type="password" required  name="password" class="form-control underlined">
                                                </div>
                                                <button type="submit" class="btn btn-primary" >Make</button>

                                               </form>


                                                </div>
                      </div>
                  </div>
              </div>

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
      <!-- Modal -->

      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Add Writer & Clients</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="card sameheight-item" data-exclude="xs" id="dashboard-history">
                  <div class="card-header card-header-sm bordered">
                      <div class="header-block">
                          <h3 class="title"></h3>
                      </div>
                      <ul class="nav nav-tabs pull-right" role="tablist">
                          <li class="nav-item">
                              <a class="nav-link active" href="#General" role="tab" data-toggle="tab">General</a>
                          </li>
                      </ul>
                  </div>
                  <div class="card-block">
                      <div class="tab-content">
                          <div role="tabpanel" class="tab-pane active fade show" id="General">
                                  <form method="post" enctype="multipart/form-data" required action="{{route('user.store')}}">
                                    @csrf
                                                <div class="form-group has-success">
                                                    <label class="control-label">Role</label>
                                                    <select type="text" name="role" class="form-control underlined">
                                                      <option value="writer">Writer</option>
                                                      <option value="client">Client</option>
                                                    </select>
                                                </div>
                                                <div class="form-group has-success">
                                                    <label class="control-label">Full Name</label>
                                                    <input type="text" required name="fullname" class="form-control underlined">
                                                </div>
                                                <div class="form-group has-success">
                                                    <label class="control-label">Username</label>
                                                    <input type="text" required name="username" class="form-control underlined">
                                                </div>
                                                <div class="form-group has-success">
                                                    <label class="control-label">Email</label>
                                                    <input type="email" required name="email" class="form-control underlined">
                                                </div>
                                                <div class="form-group has-success">
                                                    <label class="control-label">phone</label>
                                                    <input type="text" required name="phone" class="form-control underlined">
                                                </div>
                                                <div class="form-group has-success">
                                                    <label class="control-label">Password</label>
                                                    <input type="password" required  name="password" class="form-control underlined">
                                                </div>
                                                <button type="submit" class="btn btn-primary" >Make</button>

                                               </form>


                                                </div>
                      </div>
                  </div>
              </div>

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
      <!-- Modal -->

   <script>
   $(document).ready(function(){

    fetch_customer_data();

    function fetch_customer_data(query = '')
    {
     $.ajax({
      url:"{{ route('user.search') }}",
      method:'GET',
      data:{query:query},
      dataType:'json',
      success:function(data)
      {
       $('tbody').html(data.user_table_data);
       $('#total_records').text(data.total_data);
      }
     })
    }

    $(document).on('keyup', '#usersearch', function(){
     var query = $(this).val();
     fetch_customer_data(query);
    });
   });
   </script>
      @endsection
