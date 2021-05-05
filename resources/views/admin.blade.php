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
           <div class="row sameheight-container">
               <div class="col col-12 col-sm-12 col-md-6 col-xl-5 stats-col">
                   <div class="card sameheight-item stats" data-exclude="xs">
                       <div class="card-block">
                           <div class="title-block">
                               <h4 class="title"> Stats </h4>
                           </div>
                           <div class="row row-sm stats-container">
                               <div class="col-12 col-sm-6 stat-col">
                                   <div class="stat-icon">
                                       <i class="fa fa-rocket"></i>
                                   </div>
                                   <div class="stat">
                                       <div class="value"> 5407 </div>
                                       <div class="name"> Orders </div>
                                   </div>
                                   <div class="progress stat-progress">
                                       <div class="progress-bar" style="width: 100%;"></div>
                                   </div>
                               </div>
                               <div class="col-12 col-sm-6 stat-col">
                                   <div class="stat-icon">
                                       <i class="fa  fa-bell-o"></i>
                                   </div>
                                   <div class="stat">
                                       <div class="value"> 78464 </div>
                                       <div class="name"> Notification </div>
                                   </div>
                                   <div class="progress stat-progress">
                                       <div class="progress-bar" style="width: 100%;"></div>
                                   </div>
                               </div>
                               <div class="col-12 col-sm-6  stat-col">
                                   <div class="stat-icon">
                                       <i class="fa fa-line-chart"></i>
                                   </div>
                                   <div class="stat">
                                       <div class="value"> 80 </div>
                                       <div class="name"> Total Orders</div>
                                   </div>
                                   <div class="progress stat-progress">
                                       <div class="progress-bar" style="width: 100%;"></div>
                                   </div>
                               </div>
                               <div class="col-12 col-sm-6  stat-col">
                                   <div class="stat-icon">
                                       <i class="fa fa-users"></i>
                                   </div>
                                   <div class="stat">
                                       <div class="value"> 359 </div>
                                       <div class="name"> Total users </div>
                                   </div>
                                   <div class="progress stat-progress">
                                       <div class="progress-bar" style="width: 100%;"></div>
                                   </div>
                               </div>
                               <div class="col-12 col-sm-6  stat-col">
                                   <div class="stat-icon">
                                       <i class="fa fa-list-alt"></i>
                                   </div>
                                   <div class="stat">
                                       <div class="value"> 59 </div>
                                       <div class="name"> Total Clients</div>
                                   </div>
                                   <div class="progress stat-progress">
                                       <div class="progress-bar" style="width: 100%;"></div>
                                   </div>
                               </div>
                               <div class="col-12 col-sm-6 stat-col">
                                   <div class="stat-icon">
                                       <i class="fa fa-dollar"></i>
                                   </div>
                                   <div class="stat">
                                       <div class="value"> 780 </div>
                                       <div class="name"> Total Writer </div>
                                   </div>
                                   <div class="progress stat-progress">
                                       <div class="progress-bar" style="width: 100%;"></div>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
               <div class="col col-12 col-sm-12 col-md-6 col-xl-7 history-col">
                   <div class="card sameheight-item" data-exclude="xs" id="dashboard-history">
                       <div class="card-header card-header-sm bordered">
                           <div class="header-block">
                               <h3 class="title"></h3>
                           </div>
                           <ul class="nav nav-tabs pull-right" role="tablist">
                               <li class="nav-item">
                                   <a class="nav-link active" href="#visits" role="tab" data-toggle="tab">Recent Tasks</a>
                               </li>
                               <li class="nav-item">
                                   <a class="nav-link" href="#downloads" role="tab" data-toggle="tab">Recent Activities</a>
                               </li>
                           </ul>
                       </div>
                       <div class="card-block">
                           <div class="tab-content">
                               <div role="tabpanel" class="tab-pane active fade show" id="visits">
                                   <p class="title-description"> Number of unique visits last 30 days </p>
                               </div>
                               <div role="tabpanel" class="tab-pane fade" id="downloads">
                                   <p class="title-description"> Number of downloads last 30 days </p>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </section>
       <section class="section">
           <div class="row sameheight-container">
               <div class="col-xl-8">
                 <div class="card sameheight-item" data-exclude="xs" id="dashboard-history">
                     <div class="card-header card-header-sm bordered">
                         <div class="header-block">
                             <h3 class="title">Recent Information</h3>
                         </div>
                         <ul class="nav nav-tabs pull-right" role="tablist">
                             <li class="nav-item">
                                 <a class="nav-link active" href="#order" role="tab" data-toggle="tab">Recent Orders</a>
                             </li>
                             <li class="nav-item">
                                 <a class="nav-link" href="#bug" role="tab" data-toggle="tab">Recent Bugs</a>
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
                                                   <span>Timer</span>
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
                                   <li class="item">
                                       <div class="item-row">
                                           <div class="item-col  item-col-sales">
                                               <p>
                                                 time
                                               </p>
                                           </div>
                                           <div class="item-col item-col-sales">

                                             <p>
                                               time
                                             </p>
                                           </div>
                                           <div class="item-col item-col-sales">
                                             <p>
                                               time
                                             </p>
                                           </div>
                                           <div class="item-col item-col-date">

                                             <p>
                                               time
                                             </p>
                                           </div>
                                           <div class="item-col item-col-date">

                                             <p>
                                               time
                                             </p>
                                           </div>
                                       </div>
                                   </li>

                               </ul>
                             </div>
                             <div role="tabpanel" class="tab-pane fade" id="bug">
                               <ul class="item-list striped">
                                   <li class="item item-list-header">
                                       <div class="item-row">
                                           <div class="item-col item-col-header fixed item-col-img xs"></div>

                                         <div class="item-col item-col-header item-col-sales">
                                             <div>
                                                 <span>Bug Status</span>
                                             </div>
                                         </div>
                                         <div class="item-col item-col-header item-col-stats">
                                             <div class="no-overflow">
                                                 <span>Issue Title</span>
                                             </div>
                                         </div>
                                         <div class="item-col item-col-header item-col-date">
                                             <div>
                                                 <span>Priority</span>
                                             </div>
                                         </div>
                                         <div class="item-col item-col-header item-col-date">
                                             <div>
                                                 <span>Options</span>
                                             </div>
                                       </div>
                                   </li>
                                   <li class="item">
                                     <div class="item-row">

                                         <div class="item-col item-col-sales">

                                           <p>
                                             time
                                           </p>
                                         </div>
                                         <div class="item-col item-col-sales">
                                           <p>
                                             time
                                           </p>
                                         </div>
                                         <div class="item-col item-col-date">

                                           <p>
                                             time
                                           </p>
                                         </div>
                                         <div class="item-col item-col-date">

                                           <p>
                                             time
                                           </p>
                                         </div>
                                     </div>
                                   </li>
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
   @endsection
