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
                 <h1 class="title">Settings</h1>
             </div>

             <section class="section">
                 <div class="row">
                     <div class="col-md-12">
                         <div class="card">
                             <div class="card-block">
                                 <div class="card-title-block">
                                   <h3 class="title"><a style="color: white;" data-toggle="modal" data-target="#exampleModal" class="btn btn-primary btn-sm"> Theme Settings </a>
          </h3>

                                 </div>

                                 <section class="example">
                                     <div class="table-responsive">

                                       <form method="post" enctype="multipart/form-data" required action="{{route('setting.store')}}">
                                         @csrf

                                                     <div class="form-group has-success">
                                                         <label class="control-label">Company Name </label>
                                                         <input type="text"  name="Companyn" value="{{$setting->Companyn}}" class="form-control underlined">
                                                     </div>
                                                     <div class="form-group has-success">
                                                         <label class="control-label">Contact Person</label>
                                                         <input type="text"  name="Contact" value="{{$setting->Contact}}" class="form-control underlined">
                                                     </div>
                                                     <div class="form-group has-success">
                                                         <label class="control-label">Company Address</label>
                                                         <input type="text"  name="Companyadd" value="{{$setting->Companyadd}}" class="form-control underlined">
                                                     </div>
                                                     <div class="form-group has-success">
                                                         <label class="control-label">City</label>
                                                         <input type="text"  name="City" value="{{$setting->City}}" class="form-control underlined">
                                                     </div>
                                                     <div class="form-group has-success">
                                                         <label class="control-label">Company Email</label>
                                                         <input type="text"  name="Companye" value="{{$setting->Companye}}" class="form-control underlined">
                                                     </div>
                                                     <div class="form-group has-success">
                                                         <label class="control-label">Company Phone</label>
                                                         <input type="text"  name="Companyp" value="{{$setting->Companyp}}" class="form-control underlined">
                                                     </div>
                                                     <div class="form-group has-success">
                                                         <label class="control-label">Website</label>
                                                         <input type="text"   name="Website" value="{{$setting->Website}}" class="form-control underlined">
                                                     </div>

                                                     <button type="submit" class="btn btn-primary" >Update</button>

                                                    </form>

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
              <h5 class="modal-title" id="exampleModalLabel">Theme Settings</h5>
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
                              <a class="nav-link active" href="#General" role="tab" data-toggle="tab">Theme Settings</a>
                          </li>

                      </ul>
                  </div>
                  <div class="card-block">
                      <div class="tab-content">
                          <div role="tabpanel" class="tab-pane active fade show" id="General">
                            <form method="post" enctype="multipart/form-data"  action="{{route('theme.store')}}">
                              @csrf

                                          <div class="form-group has-success">
                                              <label class="control-label">Site Name</label>
                                              <input type="text"  name="Sitename" value="{{$theme->Sitename}}" class="form-control underlined">
                                          </div>
                                          <div class="form-group has-success">
                                              <label class="control-label">Company Logo</label>
                                              <input type="file"  name="CompanyLogo" value="{{$theme->CompanyLogo}}" class="form-control underlined">
                                          </div>
                                          <!-- <div class="form-group has-success">
                                              <label class="control-label">Favicon</label>
                                              <input type="file"  name="Favicon" value="{{$theme->Favicon}}" class="form-control underlined">
                                          </div> -->
                                          <div class="form-group has-success">
                                              <label class="control-label">Login Title</label>
                                              <input type="text"  name="LoginTitle" value="{{$theme->LoginTitle}}" class="form-control underlined">
                                          </div>

                                          <button type="submit" class="btn btn-primary" >Update</button>

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



      @endsection
