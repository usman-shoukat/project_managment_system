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
                               <div class="col-4 ">
                                   <div class="stat-icon">
                                       <i class="fa fa-rocket"></i>
                                   </div>
                                   <div class="stat">
                                       <div class="value"> 5407 </div>
                                       <div class="name"> Done Orders </div>
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
                                       <div class="value"> 78464 </div>
                                       <div class="name"> ACTIVE ORDERS </div>
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
                                       <div class="value"> 80 </div>
                                       <div class="name"> CANCELLED ORDERS</div>
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
                                       <div class="value"> 359 </div>
                                       <div class="name">REVISION ORDERS</div>
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
                                       <div class="value"> 359 </div>
                                       <div class="name">ON HOLD ORDERS</div>
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
                                       <div class="value"> 359 </div>
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

   </article>
   @endsection
