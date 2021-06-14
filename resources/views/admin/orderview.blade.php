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

           <div class="row">

               <div class="col-md-12">
<a class="btn btn-primary btn-sm"  href="{{route('clone.order' ,[$vieworder->ocode])}}" >Clone Order</a>
<a class="btn btn-primary btn-sm"  href="{{route('assign.order',[$vieworder->ocode])}}" >Assign Order</a>
<a class="btn btn-primary btn-sm"  href="{{route('uploadfile.order',[$vieworder->ocode])}}" >File Upload</a>

<a class="btn btn-primary btn-sm"  href="{{route('editview.order',[$vieworder->ocode])}}" ><i class="fa fa-edit"></i></a>
<a class="btn btn-primary btn-sm"  href="{{route('del.order',[$vieworder->id])}}" ><i class="fa fa-trash"></i></a>
<br><br>
                 <div class="card card-block sameheight-item">


                    <div class="progress">
    <div class="progress-bar " role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"  
    style="width:{{$vieworder->progress}}; background-color: green; "  title="{{$vieworder->progress}} Complete" data-toggle="popover" 
                    data-content="Computer Science Portal for Geeks" 
                    data-placement="bottom">{{$vieworder->progress}}
      <span class="sr-only">{{$vieworder->progress}} Complete</span>
    </div>
  </div>
  <br> 
                     <div class="title-block">
                         <h3 class="title" style="text-align: center;"> <b>{{$vieworder->otitle}}</b> </h3>
                     </div>
                    
                         <div class="form-group has-success">
                             <label class="control-label">Client </label>
                  <p>{{$vieworder->client }}</p>
                    
                         </div> 
                          <div class="form-group has-error  has-success">
                             <label class="control-label">Due Date </label>
                            <p id="demo" style="color: green;"></p>
                         </div>
                         <div class="form-group has-success">
                             <label class="control-label">Number of Pages </label>
                             <p>{{$vieworder->Numberofpages }} Papers</p>
                         </div>
                     
                         <div class="form-group has-error  has-success">
                             <label class="control-label">Service </label>
                            <p>{{$vieworder->servies }}</p>
                         </div>
                        <!--  <div class="form-group has-success">
                             <label class="control-label">Assigned To *</label>
                  <p>{{$vieworder->ocode}}</p>
                    
                         </div> -->
                          
                        


                         <div class="form-group has-error  has-success">
                             <label class="control-label">Product </label>
                           <p>{{$vieworder->product  }}</p>
                         </div>
                         <div class="form-group has-error  has-success">
                             <label class="control-label">Urgency</label>
                            <p>{{$vieworder->Urgency }}</p>
                         </div>
                         
                         <div class="form-group has-success">
                             <label class="control-label">Writer Level </label>
                            <p>{{$vieworder->WriterLevel }}</p>
                         </div>
                        
                         <div class="form-group has-success">
                             <label class="control-label">Cost / Page</label>
                             <p>{{$vieworder->CostPage }}</p>
                         </div>
                         <div class="form-group has-success">
                             <label class="control-label">Total Amount</label>
                              <p>{{$vieworder->tamount }}</p>
                         </div>
                         <div class="form-group has-success">
                             <label class="control-label">Academic Level</label>
                            <p>{{$vieworder->AcademicLevel }}</p>                         </div>
                         <div class="form-group has-success">
                             <label class="control-label">Subject Area</label>
                          <p>{{$vieworder->SubjectArea }}</p>                         </div> <div class="form-group has-success">
                              <label class="control-label">Style </label>
                            <p>{{$vieworder->Style   }}</p>                          </div>
                          <div class="form-group has-success">
                              <label class="control-label">Number of Sources/Reference </label>
                                 <p>{{$vieworder->NumberofSources }}</p>
                          </div>
                          <div class="form-group has-success">
                              <label class="control-label">Preferred Language Style </label>
                            <p>{{$vieworder->PreferredLanguageStyle  }}</p>                          </div>
                             <div class="form-group has-success">
                              <label class="control-label">Signed </label>
                           <p>{{$vieworder->Signed }}</p>
                          </div>
                           
                          <div class="form-group has-error  has-feedback">
                              <label class="control-label">Status </label>
                             @if($vieworder->status == "Active")
              <p><span class="badge badge-info">{{$vieworder->status }}</span></p>
              @endif
              @if($vieworder->status == "On Hold")
              <p><span class="badge badge-warning">{{$vieworder->status }}</span></p>
              @endif
              @if($vieworder->status == "Done")
             <p><span class="badge badge-success">{{$vieworder->status }}</span></p>
              @endif
              @if($vieworder->status == "Revision")
              <p><span class="badge badge-secondary">{{$vieworder->status }}</span></p>
              @endif
              @if($vieworder->status == "Cancelled")
              <p><span class="badge badge-danger">{{$vieworder->status }}</span></p>
              @endif
                          </div>
                          
                           <div class="form-group has-success">
                              <label class="control-label badge badge-primary ">Assigned User </label>
                              <p><b>{{$vieworder->assignuser->assign ?? 'Not Assign Any User'}}</b></p>

                          </div>

                           <div class="form-group has-success">
                              <label class="control-label badge badge-primary ">Description </label>
                               <p>{!! $vieworder->Description !!}</p>

                          </div>
                         <script>
    CKEDITOR.replace( 'editor1', {
      uiColor: '#CCEAEE'
    } );
  </script>
<br><br><br><br>
                             <section class="example">
                               <div class="table-responsive">
                                <p class="badge badge-primary ">Recent Files</p>
                                   <table class="table table-striped table-bordered table-hover">
                                       <thead>
                                           <tr>
                                               <th>Title</th>
                                               <th>Order File</th>
                                               <th>Download</th>
                                               <th>Date & Time</th>
                                               <th>Username <small>(role)</small></th>
                                               <th>Action</th>
                                              
                                           </tr>
                                       </thead>
                                       <tbody>
                                        @foreach($vieworderfile as $vieworderfiles)
                                     <tr>
                                       <td>{{$vieworderfiles->title}}</td>
                                       <td>{{$vieworderfiles->orderfile}}</td>
    <td> <a href="{{asset('public/orderfiles/'.$vieworderfiles->orderfile) }}" download><i class="fa fa-download"></i></a></td>
                                           <td>{{$vieworderfiles->created_at}}</td>

                                       <td>{{$vieworderfiles->user->username ?? 'admin'}} <small>({{$vieworderfiles->user->role ?? 'admin'}})</small></td>
                                        <td><a class="btn btn-primary btn-sm" href="{{route('del.orderfile',[$vieworderfiles->id])}}" ><i class="fa fa-trash"></i></a></td>
                                     </tr>
                                     @endforeach
                                       </tbody>
                                   </table>

                               </div>
                           </section>
                          <br><br>
                 </div>
               </div>
           </div>
       </section>
   </article>
   <script>
// Set the date we're counting down to
 var php_var = "<?php echo $vieworder->DeliveryDate; ?>";
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
