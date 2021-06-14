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
                         <h3 class="title"> Order Update </h3>
                     </div>
                     <form role="form" method="post" action="{{route('editsave.order',[$id])}}" enctype="multipart/form-data">
                      @csrf
                         <div class="form-group has-success">
                             <label class="control-label">Order Code *</label>
                             <input value="{{$vieworder->ocode}}" name="ocode"  id="msgDiv" type="text" class="form-control underlined">
                         </div>
                        
                         <div class="form-group has-success">
                             <label class="control-label">Order Title *</label>
                             <input type="text" name="otitle" value="{{$vieworder->otitle}}" class="form-control underlined">
                         </div>
                         <div class="form-group has-success">
                             <label class="control-label">Client *</label>
                  <select id="multiple-checkboxes" required name="client" class="form-control underlined" >
                    @foreach($client as $clients)
        <option {{ ($vieworder->servies) == 'ESSAY WRITING' ? 'selected' : '' }} value="{{$clients->name}}" {{ ($vieworder->client) == $clients->name ? 'selected' : '' }}>{{$clients->name}}</option>
                    @endforeach
                 </select>
                    
                         </div>
                         <div class="form-group has-success  ">
                             <label class="control-label">Progress</label>
                             <div class="radio-toolbar" >
                               
    <input type="radio" id="radioApple" name="progress" value="0%" 
    {{ $vieworder->progress == '0%' ? 'checked' : ''}}>
    <label for="radioApple">0%</label>
    <input type="radio" id="radioBanana" name="progress" value="25%"
   {{ $vieworder->progress == '25%' ? 'checked' : ''}}>
    <label for="radioBanana">25%</label>
    <input type="radio" id="radioOrange" name="progress" value="50%"
   {{ $vieworder->progress == '50%' ? 'checked' : ''}}>
    <label for="radioOrange">50%</label>
    <input type="radio" id="radioOrange2" name="progress" value="25%"
    {{ $vieworder->progress == '75%' ? 'checked' : ''}}>
    <label for="radioOrange2">75%</label>
    <input type="radio" id="radioOrange3" name="progress" value="100%"
   {{ $vieworder->progress == '100%' ? 'checked' : ''}}>
    <label for="radioOrange3">100%</label>
</div>
<p>&nbsp;</p>
                          </div>


                         <div class="form-group has-error  has-success">
                             <label class="control-label">Service *</label>
                             <select required="" type="text" name="servies"  class="form-control underlined">
                               <option>Select Services</option>
                               <option {{ ($vieworder->servies) == 'ESSAY WRITING' ? 'selected' : '' }} value="ESSAY WRITING">ESSAY WRITING</option>
                               <option {{ ($vieworder->servies) == 'DISSERTATION WRITING' ? 'selected' : '' }} value="DISSERTATION WRITING">DISSERTATION WRITING</option>
                               <option {{ ($vieworder->servies) == 'COURSEWORK WRITING' ? 'selected' : '' }} value="COURSEWORK WRITING">COURSEWORK WRITING</option>
                               <option {{ ($vieworder->servies) == 'ASSIGNMENT WRITING' ? 'selected' : '' }} value="ASSIGNMENT WRITING">ASSIGNMENT WRITING</option>
                               <option {{ ($vieworder->servies) == 'TERM PAPERS' ? 'selected' : '' }} value="TERM PAPERS">TERM PAPERS</option>
                               <option {{ ($vieworder->servies) == 'RESEARCH PAPERS' ? 'selected' : '' }} value="RESEARCH PAPERS">RESEARCH PAPERS</option>
                               <option {{ ($vieworder->servies) == 'EDITING' ? 'selected' : '' }} value="EDITING">EDITING</option>
                               <option {{ ($vieworder->servies) == 'FORMATTING' ? 'selected' : '' }} value="FORMATTING">FORMATTING</option>
                               <option {{ ($vieworder->servies) == 'PROOFREADING' ? 'selected' : '' }} value="PROOFREADING">PROOFREADING</option>
                               <option {{ ($vieworder->servies) == 'THESIS WRITING' ? 'selected' : '' }} value="THESIS WRITING">THESIS WRITING</option>
                               <option {{ ($vieworder->servies) == 'COLLEGE ESSAYS' ? 'selected' : '' }} value="COLLEGE ESSAYS">COLLEGE ESSAYS</option>
                               <option {{ ($vieworder->servies) == 'WRITE MY PAPER' ? 'selected' : '' }} value="WRITE MY PAPER">WRITE MY PAPER</option>
                               <option {{ ($vieworder->servies) == 'COLLEGE PAPERS' ? 'selected' : '' }} value="COLLEGE PAPERS">COLLEGE PAPERS</option>
                               <option {{ ($vieworder->servies) == 'SCHOOL PAPERS' ? 'selected' : '' }} value="SCHOOL PAPERS">SCHOOL PAPERS</option>
                               <option {{ ($vieworder->servies) == 'BUY ESSAY PAPERS' ? 'selected' : '' }} value="BUY ESSAY PAPERS">BUY ESSAY PAPERS</option>
                               <option {{ ($vieworder->servies) == 'WRITE MY ESSAY' ? 'selected' : '' }} value="WRITE MY ESSAY">WRITE MY ESSAY</option>
                               <option {{ ($vieworder->servies) == 'CHEAP ESSAYS' ? 'selected' : '' }} value="CHEAP ESSAYS">CHEAP ESSAYS</option>
                             </select>
                         </div>
                         <div class="form-group has-error  has-success">
                             <label class="control-label">Product *</label>
                             <select required="" type="text" name="product" class="form-control underlined">
                            <option {{ ($vieworder->product) == 'ESSAY WRITING' ? 'selected' : '' }} value="Argumentative Essay" >Argumentative Essay</option>
                            <option {{ ($vieworder->product) == 'Comparison Essay' ? 'selected' : '' }} value="Comparison Essay">Comparison Essay</option>
                            <option {{ ($vieworder->product) == 'Descriptive Essay' ? 'selected' : '' }} value="Descriptive Essay">Descriptive Essay</option>
                            <option {{ ($vieworder->product) == 'Evaluation Essay' ? 'selected' : '' }} value="Evaluation Essay">Evaluation Essay</option>
                            <option {{ ($vieworder->product) == 'Expository Essay' ? 'selected' : '' }} value="Expository Essay">Expository Essay</option>
                            <option {{ ($vieworder->product) == 'Informal Essay' ? 'selected' : '' }} value="Informal Essay">Informal Essay</option>
                            <option {{ ($vieworder->product) == 'Cause and Effect Essay' ? 'selected' : '' }} value="Cause and Effect Essay">Cause and Effect Essay</option>
                            <option {{ ($vieworder->product) == 'Comparison and Contrast Essay' ? 'selected' : '' }} value="Comparison and Contrast Essay">Comparison and Contrast Essay</option>
                            <option {{ ($vieworder->product) == 'Classification Essay' ? 'selected' : '' }} value="Classification Essay">Classification Essay</option>
                            <option {{ ($vieworder->product) == 'Literary Essay' ? 'selected' : '' }} value="Literary Essay">Literary Essay</option>
                            <option {{ ($vieworder->product) == 'Research Essay' ? 'selected' : '' }} value="Research Essay">Research Essay</option>
                            <option {{ ($vieworder->product) == 'Review Essay' ? 'selected' : '' }} value="Review Essay">Review Essay</option>
                            <option {{ ($vieworder->product) == 'Persuasive Essay' ? 'selected' : '' }} value="Persuasive Essay">Persuasive Essay</option>
                            <option {{ ($vieworder->product) == 'Sequence Essay' ? 'selected' : '' }} value="Sequence Essay">Sequence Essay</option>
                            <option {{ ($vieworder->product) == 'Narrative Essay' ? 'selected' : '' }} value="Narrative Essay">Narrative Essay</option>
                            <option {{ ($vieworder->product) == 'Presentation' ? 'selected' : '' }} value="Presentation">Presentation</option>
                            <option {{ ($vieworder->product) == 'Dissertation Formatting' ? 'selected' : '' }} value="Dissertation Formatting">Dissertation Formatting</option>                             </select>

                         </div>
                         <div class="form-group has-error  has-success">
                             <label class="control-label">Urgency *</label>
                              <select required="" type="text" name="Urgency" class="form-control underlined">
<option {{ ($vieworder->Urgency) == '10 days' ? 'selected' : '' }} value="10 days" title="9.95" rel="240">10 days</option>
<option {{ ($vieworder->Urgency) == '7 days' ? 'selected' : '' }} value="7 days" title="12.95" rel="168">7 days</option>
<option {{ ($vieworder->Urgency) == '5 days' ? 'selected' : '' }} value="5 days" title="14.95" rel="120">5 days</option>
<option {{ ($vieworder->Urgency) == '4 days' ? 'selected' : '' }} value="4 days" title="16.95" rel="96">4 days</option>
<option {{ ($vieworder->Urgency) == '3 days' ? 'selected' : '' }} value="3 days" title="18.95" rel="72">3 days</option>
<option {{ ($vieworder->Urgency) == '48 hours' ? 'selected' : '' }} value="48 hours" title="20.95" rel="48">48 hours</option>
<option {{ ($vieworder->Urgency) == '24 hours' ? 'selected' : '' }} value="24 hours" title="22.95" rel="24">24 hours</option>
<option {{ ($vieworder->Urgency) == '12 hours' ? 'selected' : '' }} value="12 hours" title="24.95" rel="12">12 hours</option>
<option {{ ($vieworder->Urgency) == '8 hours' ? 'selected' : '' }} value="8 hours" title="29.95" rel="8">8 hours</option>
<option {{ ($vieworder->Urgency) == '4 hours' ? 'selected' : '' }} value="4 hours" title="34.95" rel="4">4 hours</option>                             </select>
                             
                         </div>
                          <div class="form-group has-error  has-success">
          <label class="control-label">Delivery Date *</label>   <small>Format Like ( Month/Date/Year day:min:sec )</small>
                             <input type="text" placeholder="Format Like ( 6/3/2021 12:00:00 )" value="{{$vieworder->DeliveryDate}}" name="DeliveryDate" class="form-control underlined">

                           </div>
                         
                         <div class="form-group has-success">
                             <label class="control-label">Writer Level *</label>
                             <select type="text" required="" name="WriterLevel" class="form-control underlined">
                                    <option {{ ($vieworder->WriterLevel) == 'STANDARD WRITER' ? 'selected' : '' }} value="STANDARD WRITER">STANDARD WRITER</option>
                                    <option {{ ($vieworder->WriterLevel) == 'PREMIUM QUALITY' ? 'selected' : '' }} value="PREMIUM QUALITY">PREMIUM QUALITY</option>                             </select>
                         </div>
                         <div class="form-group has-success">
                             <label class="control-label">Number of Pages/Words *</label>
                             <input type="text" value="{{$vieworder->Numberofpages }}" name="Numberofpages" class="form-control underlined">
                         </div>
                         <div class="form-group has-success">
                             <label class="control-label">Cost / Page</label>
                             <input type="text" value="{{$vieworder->CostPage }}" name="CostPage" class="form-control underlined">
                         </div>
                         <div class="form-group has-success">
                             <label class="control-label">Total Amount</label>
                             <input type="text" name="tamount" value="{{$vieworder->tamount }}" class="form-control underlined">
                         </div>
                         <div class="form-group has-success">
                             <label class="control-label">Academic Level *</label>
                             <select type="text" name="AcademicLevel" class="form-control underlined">
                                    <option {{ ($vieworder->AcademicLevel) == 'HIGH SCHOOL' ? 'selected' : '' }} value="HIGH SCHOOL">HIGH SCHOOL</option>
                                    <option {{ ($vieworder->AcademicLevel) == 'UNDER GRADUATE' ? 'selected' : '' }} value="UNDER GRADUATE">UNDER GRADUATE</option>
                                    <option {{ ($vieworder->AcademicLevel) == 'MASTER' ? 'selected' : '' }} value="MASTER">MASTER</option>
                                    <option {{ ($vieworder->AcademicLevel) == 'PH. D' ? 'selected' : '' }} value="PH. D">PH. D</option>                             </select>
                         </div>
                         <div class="form-group has-success">
                             <label class="control-label">Subject Area *</label>
                             <select type="text" name="SubjectArea" class="form-control underlined">
                                  <option {{ ($vieworder->SubjectArea) == 'English Literature' ? 'selected' : '' }} value="English Literature">English Literature</option>
                                  <option {{ ($vieworder->SubjectArea) == 'American Literature' ? 'selected' : '' }} value="American Literature">American Literature</option>
                                  <option {{ ($vieworder->SubjectArea) == 'Antique Literature' ? 'selected' : '' }} value="Antique Literature">Antique Literature</option>
                                  <option {{ ($vieworder->SubjectArea) == 'Asian Literature' ? 'selected' : '' }} value="Asian Literature">Asian Literature</option>
                                  <option {{ ($vieworder->SubjectArea) == 'Linguistics' ? 'selected' : '' }} value="Linguistics">Linguistics</option>
                                  <option {{ ($vieworder->SubjectArea) == 'Shakespeare' ? 'selected' : '' }} value="Shakespeare">Shakespeare</option>
                                  <option {{ ($vieworder->SubjectArea) == 'English' ? 'selected' : '' }} value="English">English</option>
                                  <option {{ ($vieworder->SubjectArea) == 'Paintings' ? 'selected' : '' }} value="Paintings">Paintings</option>
                                  <option {{ ($vieworder->SubjectArea) == 'Architecture' ? 'selected' : '' }} value="Architecture">Architecture</option>
                                  <option {{ ($vieworder->SubjectArea) == 'Drama' ? 'selected' : '' }} value="Drama">Drama</option>
                                  <option {{ ($vieworder->SubjectArea) == 'Theatre' ? 'selected' : '' }} value="Theatre">Theatre</option>
                                  <option {{ ($vieworder->SubjectArea) == 'Dance' ? 'selected' : '' }} value="Dance">Dance</option>
                                  <option {{ ($vieworder->SubjectArea) == 'Movies' ? 'selected' : '' }} value="Movies">Movies</option>
                                  <option {{ ($vieworder->SubjectArea) == 'Design Analysis' ? 'selected' : '' }} value="Design Analysis">Design Analysis</option>
                                  <option {{ ($vieworder->SubjectArea) == 'Music Studies' ? 'selected' : '' }} value="Music Studies">Music Studies</option>
                                  <option {{ ($vieworder->SubjectArea) == 'Advanced Art' ? 'selected' : '' }} value="Advanced Art">Advanced Art</option>
                                  <option {{ ($vieworder->SubjectArea) == 'Psychology' ? 'selected' : '' }} value="Psychology">Psychology</option>
                                  <option {{ ($vieworder->SubjectArea) == 'Sociology' ? 'selected' : '' }} value="Sociology">Sociology</option>
                                  <option {{ ($vieworder->SubjectArea) == 'Social Issues' ? 'selected' : '' }} value="Social Issues">Social Issues</option>
                                  <option {{ ($vieworder->SubjectArea) == 'Ethics' ? 'selected' : '' }} value="Ethics">Ethics</option>
                                  <option {{ ($vieworder->SubjectArea) == 'Ethnic and Area Studies' ? 'selected' : '' }} value="Ethnic and Area Studies">Ethnic and Area Studies</option>
                                  <option {{ ($vieworder->SubjectArea) == 'Gender' ? 'selected' : '' }} value="Gender">Gender</option>
                                  <option {{ ($vieworder->SubjectArea) == '' ? 'selected' : '' }} value="Human Sexuality">Human Sexuality</option>
                                  <option {{ ($vieworder->SubjectArea) == 'Philosophy' ? 'selected' : '' }} value="Philosophy">Philosophy</option>
                                  <option {{ ($vieworder->SubjectArea) == 'Political Science' ? 'selected' : '' }} value="Political Science">Political Science</option>
                                  <option {{ ($vieworder->SubjectArea) == 'Government' ? 'selected' : '' }} value="Government">Government</option>
                                  <option {{ ($vieworder->SubjectArea) == 'Public Administration' ? 'selected' : '' }} value="Public Administration">Public Administration</option>
                                  <option {{ ($vieworder->SubjectArea) == 'Methodology' ? 'selected' : '' }} value="Methodology">Methodology</option>
                                  <option {{ ($vieworder->SubjectArea) == 'International Relations' ? 'selected' : '' }} value="International Relations">International Relations</option>
                                  <option {{ ($vieworder->SubjectArea) == 'Globalization' ? 'selected' : '' }} value="Globalization">Globalization</option>
                                  <option {{ ($vieworder->SubjectArea) == 'Labor Studies' ? 'selected' : '' }} value="Labor Studies">Labor Studies</option>
                                  <option {{ ($vieworder->SubjectArea) == 'American History' ? 'selected' : '' }} value="American History">American History</option>
                                  <option {{ ($vieworder->SubjectArea) == 'African-American Studies' ? 'selected' : '' }} value="African-American Studies">African-American Studies</option>
                                  <option {{ ($vieworder->SubjectArea) == 'Native-American Studies' ? 'selected' : '' }} value="Native-American Studies">Native-American Studies</option>
                                  <option {{ ($vieworder->SubjectArea) == 'Latin-American Studies' ? 'selected' : '' }} value="Latin-American Studies">Latin-American Studies</option>
                                  <option {{ ($vieworder->SubjectArea) == 'Canadian Studies' ? 'selected' : '' }} value="Canadian Studies">Canadian Studies</option>
                                  <option {{ ($vieworder->SubjectArea) == 'Asian Studies' ? 'selected' : '' }} value="Asian Studies">Asian Studies</option>
                                  <option {{ ($vieworder->SubjectArea) == 'West European Studies' ? 'selected' : '' }} value="West European Studies">West European Studies</option>
                                  <option {{ ($vieworder->SubjectArea) == 'East European Studies' ? 'selected' : '' }} value="East European Studies">East European Studies</option>
                                  <option {{ ($vieworder->SubjectArea) == 'Holocaust Studies' ? 'selected' : '' }} value="Holocaust Studies">Holocaust Studies</option>
                                  <option {{ ($vieworder->SubjectArea) == 'Women Studies' ? 'selected' : '' }} value="Women Studies">Women Studies</option>
                                  <option {{ ($vieworder->SubjectArea) == 'Legal Issues' ? 'selected' : '' }} value="Legal Issues">Legal Issues</option>
                                  <option {{ ($vieworder->SubjectArea) == 'Criminology' ? 'selected' : '' }} value="Criminology">Criminology</option>
                                  <option {{ ($vieworder->SubjectArea) == 'Mathematics' ? 'selected' : '' }} value="Mathematics">Mathematics</option>
                                  <option {{ ($vieworder->SubjectArea) == 'Business' ? 'selected' : '' }} value="Business">Business</option>
                                  <option {{ ($vieworder->SubjectArea) == 'Economics' ? 'selected' : '' }} value="Economics">Economics</option>
                                  <option {{ ($vieworder->SubjectArea) == 'Management' ? 'selected' : '' }} value="Management">Management</option>
                                  <option {{ ($vieworder->SubjectArea) == 'HR Management' ? 'selected' : '' }} value="HR Management">HR Management</option>
                                  <option {{ ($vieworder->SubjectArea) == 'Marketing' ? 'selected' : '' }} value="Marketing">Marketing</option>
                                  <option {{ ($vieworder->SubjectArea) == 'Investment' ? 'selected' : '' }} value="Investment">Investment</option>
                                  <option {{ ($vieworder->SubjectArea) == 'Company Analysis' ? 'selected' : '' }} value="Company Analysis">Company Analysis</option>
                                  <option {{ ($vieworder->SubjectArea) == 'Finance' ? 'selected' : '' }} value="Finance">Finance</option>
                                  <option {{ ($vieworder->SubjectArea) == 'Accounting' ? 'selected' : '' }} value="Accounting">Accounting</option>
                                  <option {{ ($vieworder->SubjectArea) == 'Case Study' ? 'selected' : '' }} value="Case Study">Case Study</option>
                                  <option {{ ($vieworder->SubjectArea) == 'E-Commerce' ? 'selected' : '' }} value="E-Commerce">E-Commerce</option>
                                  <option {{ ($vieworder->SubjectArea) == 'Logistics' ? 'selected' : '' }} value="Logistics">Logistics</option>
                                  <option {{ ($vieworder->SubjectArea) == 'Trade' ? 'selected' : '' }} value="Trade">Trade</option>
                                  <option {{ ($vieworder->SubjectArea) == 'Science' ? 'selected' : '' }} value="Science">Science</option>
                                  <option {{ ($vieworder->SubjectArea) == 'Engineering' ? 'selected' : '' }} value="Engineering">Engineering</option>
                                  <option {{ ($vieworder->SubjectArea) == 'Mechanical Engineering' ? 'selected' : '' }} value="Mechanical Engineering">Mechanical Engineering</option>
                                  <option {{ ($vieworder->SubjectArea) == 'Civil Engineering' ? 'selected' : '' }} value="Civil Engineering">Civil Engineering</option>
                                  <option {{ ($vieworder->SubjectArea) == 'Aviation' ? 'selected' : '' }} value="Aviation">Aviation</option>
                                  <option {{ ($vieworder->SubjectArea) == 'Aeronautics' ? 'selected' : '' }} value="Aeronautics">Aeronautics</option>
                                  <option {{ ($vieworder->SubjectArea) == 'Computer Science' ? 'selected' : '' }} value="Computer Science">Computer Science</option>
                                  <option {{ ($vieworder->SubjectArea) == 'Internet' ? 'selected' : '' }} value="Internet">Internet</option>
                                  <option {{ ($vieworder->SubjectArea) == 'IT Management' ? 'selected' : '' }} value="IT Management">IT Management</option>
                                  <option {{ ($vieworder->SubjectArea) == 'IT' ? 'selected' : '' }} value="IT">IT</option>
                                  <option {{ ($vieworder->SubjectArea) == 'Modern Technologies' ? 'selected' : '' }} value="Modern Technologies">Modern Technologies</option>
                                  <option {{ ($vieworder->SubjectArea) == 'Web Design' ? 'selected' : '' }} value="Web Design">Web Design</option>
                                  <option {{ ($vieworder->SubjectArea) == 'Geography' ? 'selected' : '' }} value="Geography">Geography</option>
                                  <option {{ ($vieworder->SubjectArea) == 'Geology and Geophysics' ? 'selected' : '' }} value="Geology and Geophysics">Geology and Geophysics</option>
                                  <option {{ ($vieworder->SubjectArea) == 'Archeology' ? 'selected' : '' }} value="Archeology">Archeology</option>
                                  <option {{ ($vieworder->SubjectArea) == 'Ecology' ? 'selected' : '' }} value="Ecology">Ecology</option>
                                  <option {{ ($vieworder->SubjectArea) == 'Environmental Issues' ? 'selected' : '' }} value="Environmental Issues">Environmental Issues</option>
                                  <option {{ ($vieworder->SubjectArea) == 'Description/Analysis of Place/Territory' ? 'selected' : '' }} value="Description/Analysis of Place/Territory">Description/Analysis of Place/Territory</option>
                                  <option {{ ($vieworder->SubjectArea) == 'Agricultural Studies' ? 'selected' : '' }} value="Agricultural Studies">Agricultural Studies</option>
                                  <option {{ ($vieworder->SubjectArea) == 'Astronomy' ? 'selected' : '' }} value="Astronomy">Astronomy</option>
                                  <option {{ ($vieworder->SubjectArea) == 'Pedagogy' ? 'selected' : '' }} value="Pedagogy">Pedagogy</option>
                                  <option {{ ($vieworder->SubjectArea) == 'Education Theories' ? 'selected' : '' }} value="Education Theories">Education Theories</option>
                                 
                                  <option {{ ($vieworder->SubjectArea) == 'Child' ? 'selected' : '' }} value="Child">Child</option>
                                  <option {{ ($vieworder->SubjectArea) == 'Youth Issues' ? 'selected' : '' }} value="Youth Issues">Youth Issues</option>
                                  <option {{ ($vieworder->SubjectArea) == 'Application Essay' ? 'selected' : '' }} value="Application Essay">Application Essay</option>
                                  <option {{ ($vieworder->SubjectArea) == 'Nutrition' ? 'selected' : '' }} value="Nutrition">Nutrition</option>
                                  <option {{ ($vieworder->SubjectArea) == 'Sport' ? 'selected' : '' }} value="Sport">Sport</option>
                                  <option {{ ($vieworder->SubjectArea) == 'Healthcare' ? 'selected' : '' }} value="Healthcare">Healthcare</option>
                                  <option {{ ($vieworder->SubjectArea) == 'Aging' ? 'selected' : '' }} value="Aging">Aging</option>
                                  <option {{ ($vieworder->SubjectArea) == 'Alternative Medicine' ? 'selected' : '' }} value="Alternative Medicine">Alternative Medicine</option>
                                  <option {{ ($vieworder->SubjectArea) == 'Pharmacology' ? 'selected' : '' }} value="Pharmacology">Pharmacology</option>
                                  <option {{ ($vieworder->SubjectArea) == 'Nursing' ? 'selected' : '' }} value="Nursing">Nursing</option>
                                  <option {{ ($vieworder->SubjectArea) == 'Journalism' ? 'selected' : '' }} value="Journalism">Journalism</option>
                                  <option {{ ($vieworder->SubjectArea) == 'Public Relations' ? 'selected' : '' }} value="Public Relations">Public Relations</option>
                                  <option {{ ($vieworder->SubjectArea) == 'Advertising' ? 'selected' : '' }} value="Advertising">Advertising</option>
                                  <option {{ ($vieworder->SubjectArea) == 'Information Campaign' ? 'selected' : '' }} value="Information Campaign">Information Campaign</option>
                                  <option {{ ($vieworder->SubjectArea) == 'Communication Strategies' ? 'selected' : '' }} value="Communication Strategies">Communication Strategies</option>
                                  <option {{ ($vieworder->SubjectArea) == 'Physics' ? 'selected' : '' }} value="Physics">Physics</option>
                                  <option {{ ($vieworder->SubjectArea) == 'Chemistry' ? 'selected' : '' }} value="Chemistry">Chemistry</option>
                                  <option {{ ($vieworder->SubjectArea) == 'Biology' ? 'selected' : '' }} value="Biology">Biology</option>
                                  <option {{ ($vieworder->SubjectArea) == 'Anthropology' ? 'selected' : '' }} value="Anthropology">Anthropology</option>
                                  <option {{ ($vieworder->SubjectArea) == 'Personal Experience Essay' ? 'selected' : '' }} value="Personal Experience Essay">Personal Experience Essay</option>
                                  <option {{ ($vieworder->SubjectArea) == 'Personal Interpretation of fiction story/essay' ? 'selected' : '' }} value="Personal Interpretation of fiction story/essay">Personal Interpretation of fiction story/essay</option>
                                  <option {{ ($vieworder->SubjectArea) == 'Teacher Career' ? 'selected' : '' }} value="Teacher Career">Teacher Career</option>
                                  <option {{ ($vieworder->SubjectArea) == 'Law' ? 'selected' : '' }} value="Law">Law</option>
                                  <option {{ ($vieworder->SubjectArea) == 'Philpines' ? 'selected' : '' }} value="Philpines">Philpines</option>
                                  <option {{ ($vieworder->SubjectArea) == 'TRANSITIONAL COMPLEX CARE' ? 'selected' : '' }} value="TRANSITIONAL COMPLEX CARE">TRANSITIONAL COMPLEX CARE</option>
                                  <option {{ ($vieworder->SubjectArea) == 'Cv and cover letter' ? 'selected' : '' }} value="Cv and cover letter">Cv and cover letter</option>
                                  <option {{ ($vieworder->SubjectArea) == 'History' ? 'selected' : '' }} value="History">History</option>
                                  <option {{ ($vieworder->SubjectArea) == 'Public Health Report' ? 'selected' : '' }} value="Public Health Report">Public Health Report</option>
                                  <option {{ ($vieworder->SubjectArea) == 'Supply Chain Strategy' ? 'selected' : '' }} value="Supply Chain Strategy">Supply Chain Strategy</option>
                                  <option {{ ($vieworder->SubjectArea) == 'Diploma in migration law' ? 'selected' : '' }} value="Diploma in migration law">Diploma in migration law</option>
                                  <option {{ ($vieworder->SubjectArea) == 'MBA301 BUSINESS POLICY & STRATEGY' ? 'selected' : '' }} value="MBA301 BUSINESS POLICY & STRATEGY">MBA301 BUSINESS POLICY & STRATEGY</option>
                                  <option {{ ($vieworder->SubjectArea) == 'leadership' ? 'selected' : '' }} value="leadership">leadership </option>
                                  <option {{ ($vieworder->SubjectArea) == 'Finance & Accounting' ? 'selected' : '' }} value="Finance & Accounting">Finance & Accounting</option>
                                  <option {{ ($vieworder->SubjectArea) == 'Project Management' ? 'selected' : '' }} value="Project Management">Project Management </option>
                                  <option {{ ($vieworder->SubjectArea) == 'Social Media Marketing Campaign' ? 'selected' : '' }} value="Social Media Marketing Campaign">Social Media Marketing Campaign</option>
                                  <option {{ ($vieworder->SubjectArea) == 'Hospitality Management' ? 'selected' : '' }} value="Hospitality Management">Hospitality Management</option>
                                 
                                  <option {{ ($vieworder->SubjectArea) == 'Leadership and Finance' ? 'selected' : '' }} value="Leadership and Finance">Leadership and Finance</option>
                                  <option {{ ($vieworder->SubjectArea) == 'Financial and economic interpretation' ? 'selected' : '' }} value="Financial and economic interpretation">Financial and economic interpretation</option>
                                  <option {{ ($vieworder->SubjectArea) == 'Statistics' ? 'selected' : '' }} value="Statistics">Statistics</option>
                             </select>
                         </div> <div class="form-group has-success">
                              <label class="control-label">Style *</label>
                               <select type="text" name="Style" class="form-control underlined">
              <option {{ ($vieworder->Style) == 'APA' ? 'selected' : '' }} value="APA">APA</option>
              <option {{ ($vieworder->Style) == 'CBE' ? 'selected' : '' }} value="CBE">CBE</option>
              <option {{ ($vieworder->Style) == 'Chicago' ? 'selected' : '' }} value="Chicago">Chicago</option>
              <option {{ ($vieworder->Style) == 'Harvard' ? 'selected' : '' }} value="Harvard">Harvard</option>
              <option {{ ($vieworder->Style) == 'MLA' ? 'selected' : '' }} value="MLA">MLA</option>
              <option {{ ($vieworder->Style) == 'Oxford' ? 'selected' : '' }} value="Oxford">Oxford</option>
              <option {{ ($vieworder->Style) == 'Turabian' ? 'selected' : '' }} value="Turabian">Turabian</option>
              <option {{ ($vieworder->Style) == 'Vancouver' ? 'selected' : '' }} value="Vancouver">Vancouver</option>
              <option {{ ($vieworder->Style) == 'OSCOLA' ? 'selected' : '' }} value="OSCOLA">OSCOLA</option>                             </select>
                          </div>
                          <div class="form-group has-success">
                              <label class="control-label">Number of Sources/Reference *</label>
                              <input type="text" value="{{$vieworder->NumberofSources }}" name="NumberofSources" class="form-control underlined">

                          </div>
                          <div class="form-group has-success">
                              <label class="control-label">Preferred Language Style *</label>
                               <select type="text" name="PreferredLanguageStyle" class="form-control underlined">
                                    <option {{ ($vieworder->PreferredLanguageStyle) == 'ENGLISH (U.S.)' ? 'selected' : '' }} value="ENGLISH (U.S.)">ENGLISH (U.S.)</option>
                                    <option {{ ($vieworder->PreferredLanguageStyle) == 'ENGLISH (U.K.)' ? 'selected' : '' }} value="ENGLISH (U.K.)">ENGLISH (U.K.)</option>                             </select>
                          </div>
                           <div class="form-group has-success">
                              <label class="control-label">Status *</label>
                               <select type="text" name="status" class="form-control underlined">
                                    <option {{ ($vieworder->status) == 'Active' ? 'selected' : '' }} value="Active">Active</option>
                                    <option {{ ($vieworder->status) == 'On Hold' ? 'selected' : '' }} value="On Hold">On Hold</option>  
                                    <option {{ ($vieworder->status) == 'Done' ? 'selected' : '' }} value="Done">Done</option>  
                                    <option {{ ($vieworder->status) == 'Revision' ? 'selected' : '' }} value="Revision">Revision</option>  
                                    <option {{ ($vieworder->status) == 'Cancelled' ? 'selected' : '' }} value="Cancelled">Cancelled</option>                             </select>
                          </div>
                          <div class="form-group has-error  has-feedback">
                              <label class="control-label">Description *</label>
                              <textarea cols="80" id="editor1" name="Description"  rows="10" data-sample-short>{{$vieworder->Description }}</textarea>
  <script>
    CKEDITOR.replace('editor1', {
      height: 260,
      width: 700,
    });
  </script>
                          </div>
                          <div class="form-group has-success">
                              <label class="control-label">Signed *</label>
                              <input type="text" name="Signed" value="{{$vieworder->Signed }}" class="form-control underlined">

                          </div>
                          <br><br>
<button class="btn btn-primary btn-sm" type="submit">Update Order</button>
                     </form>
                 </div>
               </div>
           </div>
       </section>
   </article>
   @endsection
