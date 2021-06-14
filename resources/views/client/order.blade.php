@extends('layouts.app')

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
   <article class="content dashboard-page">

       <section class="section">
           <div class="row " >
               <div class="col-md-12 ">
                   <div class="card sameheight-item stats" data-exclude="xs">
                       <div class="card-block">
                           <div class="title-block">
                               <h4 class="title"> Stats </h4>
                           </div>
                           <div class="row row-sm stats-container">
                               <div class="col-4 ">
                                   <div class="stat-icon">
                                       <i class="fa fa-rocket"></i>
                                   </div>
                                   <div class="stat">
                                       <div class="value"> {{$Doneorder}} </div>
                                       <div class="name"> Done </div>
                                   </div>
                                   <div class="progress stat-progress">
                                       <div class="progress-bar" style="width: 100%;"></div>
                                   </div>
                               </div>
                               <div class="col-4 ">
                                   <div class="stat-icon">
                                       <i class="fa  fa-bell-o"></i>
                                   </div>
                                   <div class="stat">
                                       <div class="value"> {{$Activeorder}} </div>
                                       <div class="name"> ACTIVE  </div>
                                   </div>
                                   <div class="progress stat-progress">
                                       <div class="progress-bar" style="width: 100%;"></div>
                                   </div>
                               </div>
                               <div class="col-4">
                                   <div class="stat-icon">
                                       <i class="fa fa-line-chart"></i>
                                   </div>
                                   <div class="stat">
                                       <div class="value"> {{$Cancelledorder}} </div>
                                       <div class="name"> CANCELLED </div>
                                   </div>
                                   <div class="progress stat-progress">
                                       <div class="progress-bar" style="width: 100%;"></div>
                                   </div>
                               </div>

                               <div class="col-4">
                                   <div class="stat-icon">
                                       <i class="fa fa-users"></i>
                                   </div>
                                   <div class="stat">
                                       <div class="value"> {{$Revisionorder}} </div>
                                       <div class="name">REVISION </div>
                                   </div>
                                   <div class="progress stat-progress">
                                       <div class="progress-bar" style="width: 100%;"></div>
                                   </div>
                               </div>
                               <div class="col-4">
                                   <div class="stat-icon">
                                       <i class="fa fa-users"></i>
                                   </div>
                                   <div class="stat">
                                       <div class="value"> {{$OnHoldorder}} </div>
                                       <div class="name">ON HOLD </div>
                                   </div>
                                   <div class="progress stat-progress">
                                       <div class="progress-bar" style="width: 100%;"></div>
                                   </div>
                               </div>
                               <div class="col-4">
                                   <div class="stat-icon">
                                       <i class="fa fa-users"></i>
                                   </div>
                                   <div class="stat">
                                       <div class="value"> {{$overallorder}} </div>
                                       <div class="name">OVERALL</div>
                                   </div>
                                   <div class="progress stat-progress">
                                       <div class="progress-bar" style="width: 100%;"></div>
                                   </div>
                               </div>

                           </div>
                       </div>
                   </div>
               </div>

           </div>
       </section>
       <section class="section">
           <div class="row">
               <div class="col-md-12">
                   <div class="card">
                       <div class="card-block">
                         <div class="card-title-block">
                          <!--  <select class="btn btn-primary btn-sm">
                             <option>Filter By</option>
                             <option>Active</option>
                             <option>On Hold</option>
                             <option>Done</option>
                             <option>Revision</option>
                             <option>Cancelled</option>
                             <option>All Order</option>
                           </select> -->
                           <a class="btn btn-primary btn-sm" style="float:right;" href="{{route('create.clientOrder')}}" >Create Order</a>
                         </div>
                         <div class="card-title-block">
                           <h3 class="title"> All Order </h3>
                               <form style="float: right;" role="search">

                           <input type="text" name="search" id="search" style="float:right;" placeholder="Search with Order Code" ></form>
                         </div>
                           <section class="example">
                               <div class="table-responsive">
                                   <table class="table table-striped table-bordered table-hover">
                                       <thead>
                                           <tr>
                                               <th>Order Code</th>
                                               <th>Order Title</th>    
                                               <th>Status</th>
                                               <th>Papers</th>
                                           </tr>
                                       </thead>
                                       <tbody>
                                        @foreach($getorder as $getorders)
                                           <tr>
                                              
                                                <td>{{$getorders->ocode}}</td>
                                               <td><a  title="{{$getorders->progress}} Complete" href="{{route('view.userorder',[$getorders->ocode])}}">{{$getorders->otitle}}</a></td>
                                              
                                              
                                              
              @if($getorders->status == "Active")
              <td><span class="badge badge-info">{{$getorders->status }}</span></td>
              @endif
              @if($getorders->status == "On Hold")
              <td><span class="badge badge-warning">{{$getorders->status }}</span></td>
              @endif
              @if($getorders->status == "Done")
              <td><span class="badge badge-success">{{$getorders->status }}</span></td>
              @endif
              @if($getorders->status == "Revision")
              <td><span class="badge badge-secondary">{{$getorders->status }}</span></td>
              @endif
              @if($getorders->status == "Cancelled")
              <td><span class="badge badge-danger">{{$getorders->status }}</span></td>
              @endif
                                               
                                               <td>{{$getorders->Numberofpages}}</td>
                                           </tr>
                                           @endforeach
                                      
                                       </tbody>
                                   </table>
                         {{$getorder->links()}}

                               </div>
                           </section>
                       </div>
                   </div>
               </div>
           </div>
       </section>
   </article>
   <script>
$(document).ready(function(){

 fetch_customer_data();

 function fetch_customer_data(query = '')
 {
  $.ajax({
   url:"{{ route('clientordersearch') }}",
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

 $(document).on('keyup', '#search', function(){
  var query = $(this).val();
  fetch_customer_data(query);
 });
});
$('#popoverData').popover();
$('#popoverOption').popover({ trigger: "hover" });
</script>
   @endsection
