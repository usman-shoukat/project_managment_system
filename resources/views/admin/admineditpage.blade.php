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
           <h1 class="title"> Admin Record Update</h1>
       </div>
       <section class="section">
           <div class="row">
               <div class="col-md-12">
                   <div class="card">
                       <div class="card-block">
                           <div class="card-title-block">
    </h3>

                           </div>

                           <section class="example">
                               <div class="table-responsive">
                                 <form method="post" enctype="multipart/form-data" required action="{{route('edit.admin',[$selectuser->id])}}">
                                   @csrf

                                               <div class="form-group has-success">
                                                   <label class="control-label">Full Name</label>
                                                   <input type="text"  name="fullname" value="{{$selectuser->fullname}}"  id="fullname" class="form-control underlined">
                                               </div>
                                               <div class="form-group has-success">
                                                   <label class="control-label">Username</label>
                                                   <input type="text"  name="username" value="{{$selectuser->username}}" class="form-control underlined">
                                               </div>
                                               <div class="form-group has-success">
                                                   <label class="control-label">Email</label>
                                                   <input type="email"  name="email" value="{{$selectuser->email}}" class="form-control underlined">
                                               </div>
                                               <div class="form-group has-success">
                                                   <label class="control-label">phone</label>
                                                   <input type="text"  name="phone" value="{{$selectuser->phone}}" class="form-control underlined">
                                               </div>
                                               <div class="form-group has-success">
                                                   <label class="control-label">Password</label>
                                                   <input type="password"   name="password" required class="form-control underlined">
                                               </div>
                                               <button type="submit" class="btn btn-primary" >Make</button>

                                              </form>

                               </div>
                           </section>
                       </div>
                   </div>
               </div>
           </div>
       </section>

   </article>


   @endsection
