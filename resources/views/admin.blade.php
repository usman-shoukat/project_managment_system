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
                               <div class="col-md-4 ">
                                   <div class="stat-icon">
                                       <i class="fa fa-rocket"></i>
                                   </div>
                                   <div class="stat">
                                       <div class="value"> {{$order}} </div>
                                       <div class="name"> Active Orders </div>
                                   </div>
                                   <div class="progress stat-progress">
                                       <div class="progress-bar" style="width: 100%;"></div>
                                   </div>
                               </div>
                             
                               <div class="col-md-4">
                                   <div class="stat-icon">
                                       <i class="fa fa-line-chart"></i>
                                   </div>
                                   <div class="stat">
                                       <div class="value"> {{$torder}} </div>
                                       <div class="name"> Total Orders</div>
                                   </div>
                                   <div class="progress stat-progress">
                                       <div class="progress-bar" style="width: 100%;"></div>
                                   </div>
                               </div>
                               <div class="col-md-4">
                                   <div class="stat-icon">
                                       <i class="fa fa-users"></i>
                                   </div>
                                   <div class="stat">
                                       <div class="value"> {{$user}} </div>
                                       <div class="name"> Total users </div>
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
    <!--    <section class="section">
           <div class="row " >
       <div class="col-12 ">
           <div class="card sameheight-item" data-exclude="xs" id="dashboard-history">
               <div class="card-header card-header-sm bordered">
                   <div class="header-block">
                       <h3 class="title"></h3>
                   </div>
                   <ul class="nav nav-tabs pull-right" role="tablist">
                      
                       <li class="nav-item">
                           <a class="nav-link active" href="#downloads" role="tab" data-toggle="tab">Recent Activities</a>
                       </li>
                   </ul>
               </div>
               <div class="card-block">
                   <div class="tab-content active">
                      
                       <div role="tabpanel active" class="tab-pane fade active" id="downloads">
                           <p class="title-description"> Number of downloads last 30 days </p>
                       </div>
                   </div>
               </div>
           </div>
       </div>
     </div>
   </section> -->
       <section class="section">
           <div class="row sameheight-container">
               <div class="col-xl-8">
                 <div class="card sameheight-item" data-exclude="xs" id="dashboard-history">
                     <div class="card-header card-header-sm bordered">
                         <div class="header-block">
                             <h3 class="title">Recent Order</h3>
                         </div>
                         <ul class="nav nav-tabs pull-right" role="tablist">
                             <li class="nav-item">
                                 <a class="nav-link active" href="#order" role="tab" data-toggle="tab">Recent Orders</a>
                             </li>

                         </ul>
                     </div>
                     <div class="card-block">
                         <div class="tab-content">
                             <div role="tabpanel" class="tab-pane active fade show" id="order">
                               <ul class="item-list striped">
                                   <li class="item item-list-header">
                                       <div class="item-row">
                                           <div class="item-col item-col-header fixed item-col-img xs"></div>
                                           <div class="item-col item-col-header item-col-title">
                                               <div>
                                                   <span>Require Time</span>
                                               </div>
                                           </div>
                                           <div class="item-col item-col-header item-col-sales">
                                               <div>
                                                   <span>Order Name</span>
                                               </div>
                                           </div>
                                           <div class="item-col item-col-header item-col-stats">
                                               <div class="no-overflow">
                                                   <span>Client Name</span>
                                               </div>
                                           </div>
                                           <div class="item-col item-col-header item-col-stats">
                                               <div class="no-overflow">
                                                   <span>Status</span>
                                               </div>
                                           </div>
                                           <div class="item-col item-col-header item-col-date">
                                               <div>
                                                   <span>Progress</span>
                                               </div>
                                           </div>
                                           <div class="item-col item-col-header item-col-date">
                                               <div>
                                                   <span>Options</span>
                                               </div>
                                           </div>
                                       </div>
                                   </li>
                                   @foreach($orderget as $ordergets)
                                   <li class="item">
                                       <div class="item-row">
                                           <div class="item-col  item-col-sales">
                                            <p>{{$ordergets->Urgency}}</p>
                                              
                                               
                                           </div>
                                           <div class="item-col item-col-sales">

                                             <p>
                                               {{$ordergets->otitle}}
                                             </p>
                                           </div>
                                           <div class="item-col item-col-sales">
                                             <p>
                                               {{$ordergets->client}}
                                             </p>
                                           </div>
                                            @if($ordergets->status == "Active")
               <div class="item-col item-col-sales">
                                             <p><span class="badge badge-info">{{$ordergets->status }}</span></div>
              @endif
              @if($ordergets->status == "On Hold")
               <div class="item-col item-col-sales">
                                             <p><span class="badge badge-warning">{{$ordergets->status }}</span></div>
              @endif
              @if($ordergets->status == "Done")
               <div class="item-col item-col-sales">
                                             <p><span class="badge badge-success">{{$ordergets->status }}</span></div>
              @endif
              @if($ordergets->status == "Revision")
               <div class="item-col item-col-sales">
                                             <p><span class="badge badge-secondary">{{$ordergets->status }}</span></div>
              @endif
              @if($ordergets->status == "Cancelled")
               <div class="item-col item-col-sales">
                                             <p><span class="badge badge-danger">{{$ordergets->status }}</span></div>
              @endif
                                          
                                           <div class="item-col item-col-date">

                                             <p>
                                                  <div class="progress">
    <div class="progress-bar " role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"  
    style="width:{{$ordergets->progress}}; background-color: green; "  title="{{$ordergets->progress}} Complete" data-toggle="popover" 
                    data-content="Computer Science Portal for Geeks" 
                    data-placement="bottom">{{$ordergets->progress}}
      <span class="sr-only">{{$ordergets->progress}} Complete</span>
    </div>
  </div>
                                               
                                             </p>
                                           </div>

                                           <div class="item-col item-col-date">

                                             <p>
                                               <a class="btn btn-primary btn-sm" href="{{route('view.order',[$ordergets->ocode])}}">See</a>
                                             </p>
                                           </div>
                                       </div>
                                   </li>
                                   @endforeach

                               </ul>
                             </div>
                            
                         </div>
                     </div>
                 </div>
               </div>
               <!-- <div class="col-xl-4">
                   <div class="card sameheight-item sales-breakdown" data-exclude="xs,sm,lg">
                       <div class="card-header">
                           <div class="header-block">
                               <h3 class="title"> Sales breakdown </h3>
                           </div>
                       </div>
                       <div class="card-block">
                           <div class="dashboard-sales-breakdown-chart" id="dashboard-sales-breakdown-chart"></div>
                       </div>
                   </div>
               </div> -->
           </div>
       </section>
   </article>
    <script>
// Set the date we're counting down to
 var php_var = "<?php echo $ordergets->DeliveryDate; ?>";
var countDownDate = new Date(php_var).getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();
    
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
    
  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // Output the result in an element with id="demo"
  document.getElementById("demo").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";
    
  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "Late Order";
  }
}, 1000);
</script>
   @endsection
