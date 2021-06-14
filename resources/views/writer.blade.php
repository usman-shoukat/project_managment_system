@extends('layouts.writer')

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
                               <div class="col-md-6 ">
                                   <div class="stat-icon">
                                       <i class="fa fa-rocket"></i>
                                   </div>
                                   <div class="stat">
                                       <div class="value"> {{$order}} </div>
                                       <div class="name"> Assigned Orders </div>
                                   </div>
                                   <div class="progress stat-progress">
                                       <div class="progress-bar" style="width: 100%;"></div>
                                   </div>
                               </div>
                             
                               <div class="col-md-6">
                                   <div class="stat-icon">
                                       <i class="fa fa-line-chart"></i>
                                   </div>
                                   <div class="stat">
                                       <div class="value"> {{$availableorder}} </div>
                                       <div class="name">Available  Order <small>For You</small></div>
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
                             <h3 class="title">Available  Order</h3>
                         </div>
                         <ul class="nav nav-tabs pull-right" role="tablist">
                             <li class="nav-item">
                                 <a class="nav-link active" href="#order" role="tab" data-toggle="tab">Available  Orders</a>
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
                                                   <span>Complete Details</span>
                                               </div>
                                           </div>
                                           <div class="item-col item-col-header item-col-sales">
                                               <div>
                                                   <span>Order Title</span>
                                               </div>
                                           </div>
                                           <div class="item-col item-col-header item-col-stats">
                                               <div class="no-overflow">
                                                   <span>End Time</span>
                                               </div>
                                           </div>
                                           <div class="item-col item-col-header item-col-stats">
                                               <div class="no-overflow">
                                                   <span>Require Time</span>
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
                                            <p>{!! $ordergets->order->Description !!}</p>
                                              
                                               
                                           </div>
                                           <div class="item-col item-col-sales">

                                             <p>
                                               {{$ordergets->order->otitle}}
                                             </p>
                                           </div>
                                           <div class="item-col item-col-sales">
                                             <p>
                                               {{$ordergets->order->DeliveryDate}}
                                             </p>
                                           </div>
                                          
                                          <div class="item-col item-col-sales">
                                             <p><span class="badge badge-info">{{$ordergets->order->Urgency }}</span></div>
              
              
                                          

                                           <div class="item-col item-col-date">

                                             <p>
        <a class="btn btn-primary btn-sm" href="{{route('order.confirm',[$ordergets->order_code])}}">Accept</a>
                                             </p>
                                           </div>
                                       </div>
                                   </li>
                                   @endforeach

                               </ul>
                             </div>
{{$orderget->links()}}                            
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
    
   @endsection

 