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
                     <div class="card-title-block">
                           <h3 class="title">Order Files </h3>

                         
                         </div>
                        <form method="post" enctype="multipart/form-data" action="{{route('uploadfile.save',[$vieworder->ocode])}}">
                            @csrf

                         <div class="form-group has-success">
                             <label class="control-label"> Title *</label>
                             <input type="text" name="title" class="form-control underlined">
                         </div> 
                          <div class="form-group has-success">
                             <label class="control-label"> Order files *</label>
                             <input type="file" name="orderfile[]" class="form-control underlined" multiple>
                         </div> 

                         
                           <br><br>

<button class="btn btn-primary btn-sm" type="submit">Send</button>
                             </form>

                   
                          <br><br>
                 </div>
               </div>
           </div>
       </section>
   </article>

     <script>



</script>
   
   @endsection
<!--  -->