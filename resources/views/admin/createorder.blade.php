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
                 <div class="card card-block sameheight-item">
                     <div class="title-block">
                         <h3 class="title"> Order Details </h3>
                     </div>
                     <form role="form" method="post" action="{{route('save.order')}}" enctype="multipart/form-data">
                      @csrf
                         <div class="form-group has-success">
                             <label class="control-label">Order Code *</label>
                             <input value="" name="ocode"  id="msgDiv" type="text" class="form-control underlined">
                         </div>
                         <script>
                        function DecimalGenerate() {
    var min = 1245,
        max = 6789,
        NumberResult = Math.random() * (max - min) + min;

    $('#msgDiv').val(Math.floor(Math.random() * 10578));
};

$( document ).ready(function() {
DecimalGenerate();
});</script>
                         <div class="form-group has-success">
                             <label class="control-label">Order Title *</label>
                             <input type="text" name="otitle" class="form-control underlined">
                         </div>
                         <div class="form-group has-success">
                             <label class="control-label">Client *</label>
                  <select id="multiple-checkboxes" name="client" class="form-control underlined" >
                    @foreach($client as $clients)
        <option value="{{$clients->name}}">{{$clients->name}}</option>
                    @endforeach
                 </select>
                    
                         </div>
                         <div class="form-group has-success  ">
                             <label class="control-label">Progress</label>
                             <div class="radio-toolbar">
    <input type="radio" id="radioApple" name="progress" value="0%">
    <label for="radioApple">0%</label>
    <input type="radio" id="radioBanana" name="progress" value="25%">
    <label for="radioBanana">25%</label>
    <input type="radio" id="radioOrange" name="progress" value="50%">
    <label for="radioOrange">50%</label>
    <input type="radio" id="radioOrange2" name="progress" value="25%">
    <label for="radioOrange2">75%</label>
    <input type="radio" id="radioOrange3" name="progress" value="100%">
    <label for="radioOrange3">100%</label>
</div>
<p>&nbsp;</p>
                          </div>


                         <div class="form-group has-error  has-success">
                             <label class="control-label">Service *</label>
                             <select type="text" name="servies"  class="form-control underlined">
                               <option>Select Services</option>
                               <option value="ESSAY WRITING">ESSAY WRITING</option>
                               <option value="DISSERTATION WRITING">DISSERTATION WRITING</option>
                               <option value="COURSEWORK WRITING">COURSEWORK WRITING</option>
                               <option value="ASSIGNMENT WRITING">ASSIGNMENT WRITING</option>
                               <option value="TERM PAPERS">TERM PAPERS</option>
                               <option value="RESEARCH PAPERS">RESEARCH PAPERS</option>
                               <option value="EDITING">EDITING</option>
                               <option value="FORMATTING">FORMATTING</option>
                               <option value="PROOFREADING">PROOFREADING</option>
                               <option value="THESIS WRITING">THESIS WRITING</option>
                               <option value="COLLEGE ESSAYS">COLLEGE ESSAYS</option>
                               <option value="WRITE MY PAPER">WRITE MY PAPER</option>
                               <option value="COLLEGE PAPERS">COLLEGE PAPERS</option>
                               <option value="SCHOOL PAPERS">SCHOOL PAPERS</option>
                               <option value="BUY ESSAY PAPERS">BUY ESSAY PAPERS</option>
                               <option value="WRITE MY ESSAY">WRITE MY ESSAY</option>
                               <option value="CHEAP ESSAYS">CHEAP ESSAYS</option>
                             </select>
                         </div>
                         <div class="form-group has-error  has-success">
                             <label class="control-label">Product *</label>
                             <select type="text" name="product" class="form-control underlined">
                            <option value="Argumentative Essay">Argumentative Essay</option>
                            <option value="Comparison Essay">Comparison Essay</option>
                            <option value="Descriptive Essay">Descriptive Essay</option>
                            <option value="Evaluation Essay">Evaluation Essay</option>
                            <option value="Expository Essay">Expository Essay</option>
                            <option value="Informal Essay">Informal Essay</option>
                            <option value="Cause and Effect Essay">Cause and Effect Essay</option>
                            <option value="Comparison and Contrast Essay">Comparison and Contrast Essay</option>
                            <option value="Classification Essay">Classification Essay</option>
                            <option value="Literary Essay">Literary Essay</option>
                            <option value="Research Essay">Research Essay</option>
                            <option value="Review Essay">Review Essay</option>
                            <option value="Persuasive Essay">Persuasive Essay</option>
                            <option value="Sequence Essay">Sequence Essay</option>
                            <option value="Narrative Essay">Narrative Essay</option>
                            <option value="Presentation">Presentation</option>
                            <option value="Dissertation Formatting">Dissertation Formatting</option>                             </select>

                         </div>
                         <div class="form-group has-error  has-success">
                             <label class="control-label">Urgency *</label>
                              <select type="text" name="Urgency" class="form-control underlined">
<option value="10 days" title="9.95" rel="240">10 days</option>
<option value="7 days" title="12.95" rel="168">7 days</option>
<option value="5 days" title="14.95" rel="120">5 days</option>
<option value="4 days" title="16.95" rel="96">4 days</option>
<option value="3 days" title="18.95" rel="72">3 days</option>
<option value="48 hours" title="20.95" rel="48">48 hours</option>
<option value="24 hours" title="22.95" rel="24">24 hours</option>
<option value="12 hours" title="24.95" rel="12">12 hours</option>
<option value="8 hours" title="29.95" rel="8">8 hours</option>
<option value="4 hours" title="34.95" rel="4">4 hours</option>                             </select>
                             
                         </div>
                          <div class="form-group has-error  has-success">
          <label class="control-label">Delivery Date *</label>   <small>Format Like ( Month Numberofdays/Date/Year day:min:sec )</small>
                             <input type="text" placeholder="Format Like ( 6/3/2021 12:00:00 )" name="DeliveryDate" class="form-control underlined">

                           </div>
                         
                         <div class="form-group has-success">
                             <label class="control-label">Writer Level *</label>
                             <select type="text" name="WriterLevel" class="form-control underlined">
                                    <option value="STANDARD WRITER">STANDARD WRITER</option>
                                    <option value="PREMIUM QUALITY">PREMIUM QUALITY</option>                             </select>
                         </div>
                         <div class="form-group has-success">
                             <label class="control-label">Number of Pages/Words *</label>
                             <input type="text" name="Numberofpages" class="form-control underlined">
                         </div>
                         <div class="form-group has-success">
                             <label class="control-label">Cost / Page</label>
                             <input type="text" name="CostPage" class="form-control underlined">
                         </div>
                         <div class="form-group has-success">
                             <label class="control-label">Total Amount</label>
                             <input type="text" name="tamount" class="form-control underlined">
                         </div>
                         <div class="form-group has-success">
                             <label class="control-label">Academic Level *</label>
                             <select type="text" name="AcademicLevel" class="form-control underlined">
                                    <option value="HIGH SCHOOL">HIGH SCHOOL</option>
                                    <option value="UNDER GRADUATE">UNDER GRADUATE</option>
                                    <option value="MASTER">MASTER</option>
                                    <option value="PH. D">PH. D</option>                             </select>
                         </div>
                         <div class="form-group has-success">
                             <label class="control-label">Subject Area *</label>
                             <select type="text" name="SubjectArea" class="form-control underlined">
                                  <option value="English Literature">English Literature</option>
                                  <option value="American Literature">American Literature</option>
                                  <option value="Antique Literature">Antique Literature</option>
                                  <option value="Asian Literature">Asian Literature</option>
                                  <option value="Linguistics">Linguistics</option>
                                  <option value="Shakespeare">Shakespeare</option>
                                  <option value="English">English</option>
                                  <option value="Paintings">Paintings</option>
                                  <option value="Architecture">Architecture</option>
                                  <option value="Drama">Drama</option>
                                  <option value="Theatre">Theatre</option>
                                  <option value="Dance">Dance</option>
                                  <option value="Movies">Movies</option>
                                  <option value="Design Analysis">Design Analysis</option>
                                  <option value="Music Studies">Music Studies</option>
                                  <option value="Advanced Art">Advanced Art</option>
                                  <option value="Psychology">Psychology</option>
                                  <option value="Sociology">Sociology</option>
                                  <option value="Social Issues">Social Issues</option>
                                  <option value="Ethics">Ethics</option>
                                  <option value="Ethnic and Area Studies">Ethnic and Area Studies</option>
                                  <option value="Gender">Gender</option>
                                  <option value="Human Sexuality">Human Sexuality</option>
                                  <option value="Philosophy">Philosophy</option>
                                  <option value="Political Science">Political Science</option>
                                  <option value="Government">Government</option>
                                  <option value="Public Administration">Public Administration</option>
                                  <option value="Methodology">Methodology</option>
                                  <option value="International Relations">International Relations</option>
                                  <option value="Globalization">Globalization</option>
                                  <option value="Labor Studies">Labor Studies</option>
                                  <option value="American History">American History</option>
                                  <option value="African-American Studies">African-American Studies</option>
                                  <option value="Native-American Studies">Native-American Studies</option>
                                  <option value="Latin-American Studies">Latin-American Studies</option>
                                  <option value="Canadian Studies">Canadian Studies</option>
                                  <option value="Asian Studies">Asian Studies</option>
                                  <option value="West European Studies">West European Studies</option>
                                  <option value="East European Studies">East European Studies</option>
                                  <option value="Holocaust Studies">Holocaust Studies</option>
                                  <option value="Women Studies">Women Studies</option>
                                  <option value="Legal Issues">Legal Issues</option>
                                  <option value="Criminology">Criminology</option>
                                  <option value="Mathematics">Mathematics</option>
                                  <option value="Business">Business</option>
                                  <option value="Economics">Economics</option>
                                  <option value="Management">Management</option>
                                  <option value="HR Management">HR Management</option>
                                  <option value="Marketing">Marketing</option>
                                  <option value="Investment">Investment</option>
                                  <option value="Company Analysis">Company Analysis</option>
                                  <option value="Finance">Finance</option>
                                  <option value="Accounting">Accounting</option>
                                  <option value="Case Study">Case Study</option>
                                  <option value="E-Commerce">E-Commerce</option>
                                  <option value="Logistics">Logistics</option>
                                  <option value="Trade">Trade</option>
                                  <option value="Science">Science</option>
                                  <option value="Engineering">Engineering</option>
                                  <option value="Mechanical Engineering">Mechanical Engineering</option>
                                  <option value="Civil Engineering">Civil Engineering</option>
                                  <option value="Aviation">Aviation</option>
                                  <option value="Aeronautics">Aeronautics</option>
                                  <option value="Computer Science">Computer Science</option>
                                  <option value="Internet">Internet</option>
                                  <option value="IT Management">IT Management</option>
                                  <option value="IT">IT</option>
                                  <option value="Modern Technologies">Modern Technologies</option>
                                  <option value="Web Design">Web Design</option>
                                  <option value="Geography">Geography</option>
                                  <option value="Geology and Geophysics">Geology and Geophysics</option>
                                  <option value="Archeology">Archeology</option>
                                  <option value="Ecology">Ecology</option>
                                  <option value="Environmental Issues">Environmental Issues</option>
                                  <option value="Description/Analysis of Place/Territory">Description/Analysis of Place/Territory</option>
                                  <option value="Agricultural Studies">Agricultural Studies</option>
                                  <option value="Astronomy">Astronomy</option>
                                  <option value="Pedagogy">Pedagogy</option>
                                  <option value="Education Theories">Education Theories</option>
                                  <option value="Child">Child</option>
                                  <option value="Child">Child</option>
                                  <option value="Youth Issues">Youth Issues</option>
                                  <option value="Application Essay">Application Essay</option>
                                  <option value="Nutrition">Nutrition</option>
                                  <option value="Sport">Sport</option>
                                  <option value="Healthcare">Healthcare</option>
                                  <option value="Aging">Aging</option>
                                  <option value="Alternative Medicine">Alternative Medicine</option>
                                  <option value="Pharmacology">Pharmacology</option>
                                  <option value="Nursing">Nursing</option>
                                  <option value="Journalism">Journalism</option>
                                  <option value="Public Relations">Public Relations</option>
                                  <option value="Advertising">Advertising</option>
                                  <option value="Information Campaign">Information Campaign</option>
                                  <option value="Communication Strategies">Communication Strategies</option>
                                  <option value="Physics">Physics</option>
                                  <option value="Chemistry">Chemistry</option>
                                  <option value="Biology">Biology</option>
                                  <option value="Anthropology">Anthropology</option>
                                  <option value="Personal Experience Essay">Personal Experience Essay</option>
                                  <option value="Personal Interpretation of fiction story/essay">Personal Interpretation of fiction story/essay</option>
                                  <option value="Teacher's Career">Teacher's Career</option>
                                  <option value="Law">Law</option>
                                  <option value="Philpines">Philpines</option>
                                  <option value="TRANSITIONAL COMPLEX CARE">TRANSITIONAL COMPLEX CARE</option>
                                  <option value="Cv and cover letter">Cv and cover letter</option>
                                  <option value="History">History</option>
                                  <option value="Public Health Report">Public Health Report</option>
                                  <option value="Supply Chain Strategy">Supply Chain Strategy</option>
                                  <option value="Diploma in migration law">Diploma in migration law</option>
                                  <option value="MBA301 BUSINESS POLICY & STRATEGY">MBA301 BUSINESS POLICY & STRATEGY</option>
                                  <option value="leadership ">leadership </option>
                                  <option value="Finance & Accounting">Finance & Accounting</option>
                                  <option value="Project Management ">Project Management </option>
                                  <option value="Social Media Marketing Campaign">Social Media Marketing Campaign</option>
                                  <option value="Hospitality Management">Hospitality Management</option>
                                  <option value="Leadership and Finance">Leadership and Finance</option>
                                  <option value="Leadership and Finance">Leadership and Finance</option>
                                  <option value="Financial and economic interpretation">Financial and economic interpretation</option>
                                  <option value="Statistics">Statistics</option>
                             </select>
                         </div> <div class="form-group has-success">
                              <label class="control-label">Style *</label>
                               <select type="text" name="Style" class="form-control underlined">
              <option value="APA">APA</option>
              <option value="CBE">CBE</option>
              <option value="Chicago">Chicago</option>
              <option value="Harvard">Harvard</option>
              <option value="MLA">MLA</option>
              <option value="Oxford">Oxford</option>
              <option value="Turabian">Turabian</option>
              <option value="Vancouver">Vancouver</option>
              <option value="OSCOLA">OSCOLA</option>                             </select>
                          </div>
                          <div class="form-group has-success">
                              <label class="control-label">Number of Sources/Reference *</label>
                              <input type="text" name="NumberofSources" class="form-control underlined">

                          </div>
                          <div class="form-group has-success">
                              <label class="control-label">Preferred Language Style *</label>
                               <select type="text" name="PreferredLanguageStyle" class="form-control underlined">
                                    <option value="ENGLISH (U.S.)">ENGLISH (U.S.)</option>
                                    <option value="ENGLISH (U.K.)">ENGLISH (U.K.)</option>                             </select>
                          </div>
                          <div class="form-group has-error  has-feedback">
                              <label class="control-label">Description *</label>
                              <textarea cols="80" id="editor1" name="Description" rows="10" data-sample-short></textarea>
  <script>
    CKEDITOR.replace('editor1', {
      height: 260,
      width: 700,
    });
  </script>
                          </div>
                          <div class="form-group has-success">
                              <label class="control-label">Signed *</label>
                              <input type="text" name="Signed" class="form-control underlined">

                          </div>
                          <br><br>
<button class="btn btn-primary btn-sm" type="submit">Create Order</button>
                     </form>
                 </div>
               </div>
           </div>
       </section>
   </article>
   @endsection
