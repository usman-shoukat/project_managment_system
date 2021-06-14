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
                           <h3 class="title"> All Order </h3>

                           <input type="text"  name="searchColumn" id="searchColumn" style="float:right;" placeholder="Search " >
                         </div>
                        

                     <div class="form-group has-success" id="checkbox">
                         <form method="post" action="{{route('assign.save' ,[$vieworder->ocode])}}">
                                @csrf
                         <input type="checkbox" onClick="toggle(this)" /> Select All

                         <select  name="assignconfirm">
                            <option class="btn-primary btn-sm" value="0">
                                Available Order
                            </option>
                             <option value="1">
                                Assigned Order
                            </option>
                             
                         </select>
                                  

                             
                         </div>
                          <div class="form-group has-success" id="checkbox" id="assign">
                       
                           
                              @foreach($User as $Users)
                        <label for="two"> <input style="margin-left: 5px;" multiple="multiple" type="checkbox" value="{{$Users->username}} " name="assign[]" id="two" />{{$Users->username}}  <small>({{$Users->role}})</small> </label> 
                        @endforeach   
                         </div>
                         <button class="btn btn-primary btn-sm" type="submit"  >Submit</button>
                        </form>
   


                   
                          <br><br>
                 </div>
               </div>
           </div>
       </section>
   </article>

     <script>

    $(document).ready(function(){
    
    $("#searchColumn").on("input",function(){
        
        var searchTxt = $(this).val();
        searchTxt = searchTxt.replace(/[.()+]/g,"\\$&");

        var patt = new RegExp("^" + searchTxt,"i");
        
        $(":checkbox").each(function(){
            
            if(patt.test($(this).val())) 
                $(this).closest("label").show(500);
                    
            else 
                $(this).closest("label").hide(500);
                    
        })
    })
});

function toggle(source) {
  checkboxes = document.getElementsByName('assign[]');
  for(var i=0, n=checkboxes.length;i<n;i++) {
    checkboxes[i].checked = source.checked;
  }
}

</script>
   
   @endsection
