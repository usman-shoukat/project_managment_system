
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
              <h1 class="title">Admin Record</h1>
          </div>

          <section class="section">
              <div class="row">
                  <div class="col-md-12">
                      <div class="card">
                          <div class="card-block">
                              <div class="card-title-block">
                                <h3 class="title"><a style="color: white;" data-toggle="modal" data-target="#exampleModal" class="btn btn-primary btn-sm"> Add new </a>
       </h3>
           <form style="float: right;" role="search">
               <div class="input-container">
       <input type="text" name="search" id="adminsearch" class="form-control" placeholder="Search Admin Data" />
                   <div class="underline"></div>
               </div>
           </form>
                              </div>

                              <section class="example">
                                  <div class="table-responsive">
                                      <table class="table table-striped table-bordered table-hover">
                                          <thead>
                                              <tr>

                                                  <th>User Name</th>
                                                  <th>Email</th>
                                                  <th>Mobile Phone</th>
                                                  <th>Action</th>
                                              </tr>
                                          </thead>
                                          <tbody>
                                         @foreach ($getadmin as $getadmins)
                                              <tr>
                                                  <td>{{$getadmins->username}}</td>
                                                  <td>{{$getadmins->email}}</td>
                                                  <td>{{$getadmins->phone}}</td>
       <td><a href="{{route('del.admin',[$getadmins->id])}}" style="color: white;"
         class="btn btn-primary btn-sm"><i class="fa fa-trash"></i></a>
         @if($getadmins->ban == 1)
           <a href="{{route('unban.admin',[$getadmins->id])}}" style="color: white;"
             class="btn btn-primary btn-sm"><i class="fa fa-rss"></i></a>
         @else
         <a href="{{route('ban.admin',[$getadmins->id])}}" style="color: white;"
           class="btn btn-primary btn-sm"><i class="fa fa-ban"></i></a>
           @endif
           <a href="{{route('edit.admin.page',[$getadmins->id])}}" style="color: white;"
             class="btn btn-primary btn-sm"><i  class="fa fa-edit"></i></a>
           </td>

                                    @endforeach

                                              </tr>
                                          </tbody>
                                      </table>
                                      {{$getadmin->links()}}

                                  </div>
                              </section>
                          </div>
                      </div>
                  </div>
              </div>
          </section>
      </article>

   <!-- Modal -->
   <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog" role="document">
       <div class="modal-content">
         <div class="modal-header">
           <h5 class="modal-title" id="exampleModalLabel">Add Admin</h5>
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
                         <form method="post" enctype="multipart/form-data" required action="{{route('admin.store')}}">
                           @csrf

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
      url:"{{ route('admin.search') }}",
      method:'GET',
      data:{query:query},
      dataType:'json',
      success:function(data)
      {
       $('tbody').html(data.table_data);
       $('#total_records').text(data.total_data);
      }
     })
    }

    $(document).on('keyup', '#adminsearch', function(){
     var query = $(this).val();
     fetch_customer_data(query);
    });
   });
   </script>


   @endsection
