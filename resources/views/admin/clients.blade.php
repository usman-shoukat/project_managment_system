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
           <h1 class="title"> Clients Record</h1>
       </div>
   <section class="section">
       <div class="row">
           <div class="col-md-12">
               <div class="card">
                   <div class="card-block">
                       <div class="card-title-block">
                         <h3 class="title"><a style="color: white;" data-toggle="modal" data-target="#exampleModal" class="btn btn-primary btn-sm"> Add new </a>
</h3>
    <form style="float: right;" role="search">
        <div class="input-container">
<input type="text" name="search" id="search" class="form-control" placeholder="Search clients Data" />
            <div class="underline"></div>
        </div>
    </form>
                       </div>

                       <section class="example">
                           <div class="table-responsive">
                               <table class="table table-striped table-bordered table-hover">
                                   <thead>
                                       <tr>

                                           <th>client Name</th>
                                           <th>Email</th>
                                           <th>City</th>
                                           <th>Country</th>
                                           <th>Mobile Phone</th>
                                           <th>Action</th>
                                       </tr>
                                   </thead>
                                   <tbody>
                                  @foreach ($get_client as $clients)
                                       <tr>
                                           <td>{{$clients->name}}</td>
                                           <td>{{$clients->email}}</td>
                                           <td>{{$clients->city}}</td>
                                           <td>{{$clients->country}}</td>
                                           <td>{{$clients->mphone}}</td>
<td><a href="{{route('del.client',[$clients->id])}}" style="color: white;"
  class="btn btn-primary btn-sm">Delete</a></td>

                             @endforeach

                                       </tr>
                                   </tbody>
                               </table>
                               {{$get_client->links()}}

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
        <h5 class="modal-title" id="exampleModalLabel">Add Client</h5>
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
                        <a class="nav-link active" href="#General" role="tab" data-toggle="tab">General</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Contact" role="tab" data-toggle="tab">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Bank" role="tab" data-toggle="tab">Web</a>
                    </li>
                </ul>
            </div>
            <div class="card-block">
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active fade show" id="General">
                            <form method="post" enctype="multipart/form-data" action="{{route('client.store')}}">
                              @csrf
                                          <div class="form-group has-success">
                                              <label class="control-label">Company Name / Full Name</label>
                                              <input type="text" name="name" class="form-control underlined">
                                          </div>
                                          <div class="form-group has-success">
                                              <label class="control-label">Email</label>
                                              <input type="text" name="email" class="form-control underlined">
                                          </div>

                                          <div class="form-group has-success">
                                              <label class="control-label">Language</label>
                                              <select name="language" class="form-control underlined">
                                                <option value="English">English</option>
                                                <option value="Czech">Czech</option>
                                                <option value="Dutch">Dutch</option>
                                                <option value="French">French</option>
                                                <option value="German">German</option>
                                                <option value="Greek">Greek</option>
                                                <option value="Italian">Italian</option>
                                                <option value="Norwegian">Norwegian</option>
                                                <option value="Polish">Polish</option>
                                                <option value="Portuguese">Portuguese</option>
                                                <option value="Romanian">Romanian</option>
                                                <option value="Russian">Russian</option>
                                                <option value="Serbian">Serbian</option>
                                                <option value="Spanish">Spanish</option>
                                                <option value="Turkish">Turkish</option>
                                              </select>
                                          </div>
                                          <div class="form-group has-success  has-feedback">
                                              <label class="control-label">Currency</label>
                                              <select name="currency" class="form-control underlined">
                                              <option value="AFA">Afghan Afghani</option>
                                              <option value="ALL">Albanian Lek</option>
                                              <option value="DZD">Algerian Dinar</option>
                                              <option value="AOA">Angolan Kwanza</option>
                                              <option value="ARS">Argentine Peso</option>
                                              <option value="AMD">Armenian Dram</option>
                                              <option value="AWG">Aruban Florin</option>
                                              <option value="AUD">Australian Dollar</option>
                                              <option value="AZN">Azerbaijani Manat</option>
                                              <option value="BSD">Bahamian Dollar</option>
                                              <option value="BHD">Bahraini Dinar</option>
                                              <option value="BDT">Bangladeshi Taka</option>
                                              <option value="BBD">Barbadian Dollar</option>
                                              <option value="BYR">Belarusian Ruble</option>
                                              <option value="BEF">Belgian Franc</option>
                                              <option value="BZD">Belize Dollar</option>
                                              <option value="BMD">Bermudan Dollar</option>
                                              <option value="BTN">Bhutanese Ngultrum</option>
                                              <option value="BTC">Bitcoin</option>
                                              <option value="BOB">Bolivian Boliviano</option>
                                              <option value="BAM">Bosnia-Herzegovina Convertible Mark</option>
                                              <option value="BWP">Botswanan Pula</option>
                                              <option value="BRL">Brazilian Real</option>
                                              <option value="GBP">British Pound Sterling</option>
                                              <option value="BND">Brunei Dollar</option>
                                              <option value="BGN">Bulgarian Lev</option>
                                              <option value="BIF">Burundian Franc</option>
                                              <option value="KHR">Cambodian Riel</option>
                                              <option value="CAD">Canadian Dollar</option>
                                              <option value="CVE">Cape Verdean Escudo</option>
                                              <option value="KYD">Cayman Islands Dollar</option>
                                              <option value="XOF">CFA Franc BCEAO</option>
                                              <option value="XAF">CFA Franc BEAC</option>
                                              <option value="XPF">CFP Franc</option>
                                              <option value="CLP">Chilean Peso</option>
                                              <option value="CNY">Chinese Yuan</option>
                                              <option value="COP">Colombian Peso</option>
                                              <option value="KMF">Comorian Franc</option>
                                              <option value="CDF">Congolese Franc</option>
                                              <option value="CRC">Costa Rican Col????n</option>
                                              <option value="HRK">Croatian Kuna</option>
                                              <option value="CUC">Cuban Convertible Peso</option>
                                              <option value="CZK">Czech Republic Koruna</option>
                                              <option value="DKK">Danish Krone</option>
                                              <option value="DJF">Djiboutian Franc</option>
                                              <option value="DOP">Dominican Peso</option>
                                              <option value="XCD">East Caribbean Dollar</option>
                                              <option value="EGP">Egyptian Pound</option>
                                              <option value="ERN">Eritrean Nakfa</option>
                                              <option value="EEK">Estonian Kroon</option>
                                              <option value="ETB">Ethiopian Birr</option>
                                              <option value="EUR">Euro</option>
                                              <option value="FKP">Falkland Islands Pound</option>
                                              <option value="FJD">Fijian Dollar</option>
                                              <option value="GMD">Gambian Dalasi</option>
                                              <option value="GEL">Georgian Lari</option>
                                              <option value="DEM">German Mark</option>
                                              <option value="GHS">Ghanaian Cedi</option>
                                              <option value="GIP">Gibraltar Pound</option>
                                              <option value="GRD">Greek Drachma</option>
                                              <option value="GTQ">Guatemalan Quetzal</option>
                                              <option value="GNF">Guinean Franc</option>
                                              <option value="GYD">Guyanaese Dollar</option>
                                              <option value="HTG">Haitian Gourde</option>
                                              <option value="HNL">Honduran Lempira</option>
                                              <option value="HKD">Hong Kong Dollar</option>
                                              <option value="HUF">Hungarian Forint</option>
                                              <option value="ISK">Icelandic Kr????na</option>
                                              <option value="INR">Indian Rupee</option>
                                              <option value="IDR">Indonesian Rupiah</option>
                                              <option value="IRR">Iranian Rial</option>
                                              <option value="IQD">Iraqi Dinar</option>
                                              <option value="ILS">Israeli New Sheqel</option>
                                              <option value="ITL">Italian Lira</option>
                                              <option value="JMD">Jamaican Dollar</option>
                                              <option value="JPY">Japanese Yen</option>
                                              <option value="JOD">Jordanian Dinar</option>
                                              <option value="KZT">Kazakhstani Tenge</option>
                                              <option value="KES">Kenyan Shilling</option>
                                              <option value="KWD">Kuwaiti Dinar</option>
                                              <option value="KGS">Kyrgystani Som</option>
                                              <option value="LAK">Laotian Kip</option>
                                              <option value="LVL">Latvian Lats</option>
                                              <option value="LBP">Lebanese Pound</option>
                                              <option value="LSL">Lesotho Loti</option>
                                              <option value="LRD">Liberian Dollar</option>
                                              <option value="LYD">Libyan Dinar</option>
                                              <option value="LTL">Lithuanian Litas</option>
                                              <option value="MOP">Macanese Pataca</option>
                                              <option value="MKD">Macedonian Denar</option>
                                              <option value="MGA">Malagasy Ariary</option>
                                              <option value="MWK">Malawian Kwacha</option>
                                              <option value="MYR">Malaysian Ringgit</option>
                                              <option value="MVR">Maldivian Rufiyaa</option>
                                              <option value="MRO">Mauritanian Ouguiya</option>
                                              <option value="MUR">Mauritian Rupee</option>
                                              <option value="MXN">Mexican Peso</option>
                                              <option value="MDL">Moldovan Leu</option>
                                              <option value="MNT">Mongolian Tugrik</option>
                                              <option value="MAD">Moroccan Dirham</option>
                                              <option value="MZM">Mozambican Metical</option>
                                              <option value="MMK">Myanmar Kyat</option>
                                              <option value="NAD">Namibian Dollar</option>
                                              <option value="NPR">Nepalese Rupee</option>
                                              <option value="ANG">Netherlands Antillean Guilder</option>
                                              <option value="TWD">New Taiwan Dollar</option>
                                              <option value="NZD">New Zealand Dollar</option>
                                              <option value="NIO">Nicaraguan C????rdoba</option>
                                              <option value="NGN">Nigerian Naira</option>
                                              <option value="KPW">North Korean Won</option>
                                              <option value="NOK">Norwegian Krone</option>
                                              <option value="OMR">Omani Rial</option>
                                              <option value="PKR">Pakistani Rupee</option>
                                              <option value="PAB">Panamanian Balboa</option>
                                              <option value="PGK">Papua New Guinean Kina</option>
                                              <option value="PYG">Paraguayan Guarani</option>
                                              <option value="PEN">Peruvian Nuevo Sol</option>
                                              <option value="PHP">Philippine Peso</option>
                                              <option value="PLN">Polish Zloty</option>
                                              <option value="QAR">Qatari Rial</option>
                                              <option value="RON">Romanian Leu</option>
                                              <option value="RUB">Russian Ruble</option>
                                              <option value="RWF">Rwandan Franc</option>
                                              <option value="SVC">Salvadoran Col????n</option>
                                              <option value="WST">Samoan Tala</option>
                                              <option value="SAR">Saudi Riyal</option>
                                              <option value="RSD">Serbian Dinar</option>
                                              <option value="SCR">Seychellois Rupee</option>
                                              <option value="SLL">Sierra Leonean Leone</option>
                                              <option value="SGD">Singapore Dollar</option>
                                              <option value="SKK">Slovak Koruna</option>
                                              <option value="SBD">Solomon Islands Dollar</option>
                                              <option value="SOS">Somali Shilling</option>
                                              <option value="ZAR">South African Rand</option>
                                              <option value="KRW">South Korean Won</option>
                                              <option value="XDR">Special Drawing Rights</option>
                                              <option value="LKR">Sri Lankan Rupee</option>
                                              <option value="SHP">St. Helena Pound</option>
                                              <option value="SDG">Sudanese Pound</option>
                                              <option value="SRD">Surinamese Dollar</option>
                                              <option value="SZL">Swazi Lilangeni</option>
                                              <option value="SEK">Swedish Krona</option>
                                              <option value="CHF">Swiss Franc</option>
                                              <option value="SYP">Syrian Pound</option>
                                              <option value="STD">S??o Tom?? and Pr??ncipe Dobra</option>
                                              <option value="TJS">Tajikistani Somoni</option>
                                              <option value="TZS">Tanzanian Shilling</option>
                                              <option value="THB">Thai Baht</option>
                                              <option value="TOP">Tongan pa'anga</option>
                                              <option value="TTD">Trinidad & Tobago Dollar</option>
                                              <option value="TND">Tunisian Dinar</option>
                                              <option value="TRY">Turkish Lira</option>
                                              <option value="TMT">Turkmenistani Manat</option>
                                              <option value="UGX">Ugandan Shilling</option>
                                              <option value="UAH">Ukrainian Hryvnia</option>
                                              <option value="AED">United Arab Emirates Dirham</option>
                                              <option value="UYU">Uruguayan Peso</option>
                                              <option value="USD">US Dollar</option>
                                              <option value="UZS">Uzbekistan Som</option>
                                              <option value="VUV">Vanuatu Vatu</option>
                                              <option value="VEF">Venezuelan Bol????var</option>
                                              <option value="VND">Vietnamese Dong</option>
                                              <option value="YER">Yemeni Rial</option>
                                              <option value="ZMK">Zambian Kwacha</option>
  </select>
                                          </div>
                                          </div>
                    <div role="tabpanel" class="tab-pane fade" id="Contact">
                                      <div class="form-group has-success">
                                          <label class="control-label">Phone</label>
                                          <input type="text" name="phone" class="form-control underlined">
                                      </div>
                                      <div class="form-group has-success">
                                          <label class="control-label">Mobile Phone</label>
                                          <input type="text" name="mphone" class="form-control underlined">
                                      </div>
                                      <div class="form-group has-success">
                                          <label class="control-label">Fax</label>
                                          <input type="text" name="fax" class="form-control underlined">
                                      </div>
                                      <div class="form-group has-success">
                                          <label class="control-label">Address</label>
                                          <textarea type="text" name="address" class="form-control underlined"></textarea>
                                      </div>
                                      <div class="form-group has-success">
                                          <label class="control-label">City</label>
                                          <input type="text" name="city" class="form-control underlined">
                                      </div>
                                      <div class="form-group has-success">
                                          <label class="control-label">Zip Code</label>
                                          <input type="text" name="zipcode" class="form-control underlined">
                                      </div>
                                      <div class="form-group has-success">
                                          <label class="control-label">State/Province</label>
                                          <input type="text" name="state" class="form-control underlined">
                                      </div>
                                      <div class="form-group has-success  has-feedback">
                                          <label class="control-label">Country</label>

                                          <select id="country" name="country" class="form-control underlined">
                                             <option value="Afganistan">Afghanistan</option>
                                             <option value="Albania">Albania</option>
                                             <option value="Algeria">Algeria</option>
                                             <option value="American Samoa">American Samoa</option>
                                             <option value="Andorra">Andorra</option>
                                             <option value="Angola">Angola</option>
                                             <option value="Anguilla">Anguilla</option>
                                             <option value="Antigua & Barbuda">Antigua & Barbuda</option>
                                             <option value="Argentina">Argentina</option>
                                             <option value="Armenia">Armenia</option>
                                             <option value="Aruba">Aruba</option>
                                             <option value="Australia">Australia</option>
                                             <option value="Austria">Austria</option>
                                             <option value="Azerbaijan">Azerbaijan</option>
                                             <option value="Bahamas">Bahamas</option>
                                             <option value="Bahrain">Bahrain</option>
                                             <option value="Bangladesh">Bangladesh</option>
                                             <option value="Barbados">Barbados</option>
                                             <option value="Belarus">Belarus</option>
                                             <option value="Belgium">Belgium</option>
                                             <option value="Belize">Belize</option>
                                             <option value="Benin">Benin</option>
                                             <option value="Bermuda">Bermuda</option>
                                             <option value="Bhutan">Bhutan</option>
                                             <option value="Bolivia">Bolivia</option>
                                             <option value="Bonaire">Bonaire</option>
                                             <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
                                             <option value="Botswana">Botswana</option>
                                             <option value="Brazil">Brazil</option>
                                             <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                                             <option value="Brunei">Brunei</option>
                                             <option value="Bulgaria">Bulgaria</option>
                                             <option value="Burkina Faso">Burkina Faso</option>
                                             <option value="Burundi">Burundi</option>
                                             <option value="Cambodia">Cambodia</option>
                                             <option value="Cameroon">Cameroon</option>
                                             <option value="Canada">Canada</option>
                                             <option value="Canary Islands">Canary Islands</option>
                                             <option value="Cape Verde">Cape Verde</option>
                                             <option value="Cayman Islands">Cayman Islands</option>
                                             <option value="Central African Republic">Central African Republic</option>
                                             <option value="Chad">Chad</option>
                                             <option value="Channel Islands">Channel Islands</option>
                                             <option value="Chile">Chile</option>
                                             <option value="China">China</option>
                                             <option value="Christmas Island">Christmas Island</option>
                                             <option value="Cocos Island">Cocos Island</option>
                                             <option value="Colombia">Colombia</option>
                                             <option value="Comoros">Comoros</option>
                                             <option value="Congo">Congo</option>
                                             <option value="Cook Islands">Cook Islands</option>
                                             <option value="Costa Rica">Costa Rica</option>
                                             <option value="Cote DIvoire">Cote DIvoire</option>
                                             <option value="Croatia">Croatia</option>
                                             <option value="Cuba">Cuba</option>
                                             <option value="Curaco">Curacao</option>
                                             <option value="Cyprus">Cyprus</option>
                                             <option value="Czech Republic">Czech Republic</option>
                                             <option value="Denmark">Denmark</option>
                                             <option value="Djibouti">Djibouti</option>
                                             <option value="Dominica">Dominica</option>
                                             <option value="Dominican Republic">Dominican Republic</option>
                                             <option value="East Timor">East Timor</option>
                                             <option value="Ecuador">Ecuador</option>
                                             <option value="Egypt">Egypt</option>
                                             <option value="El Salvador">El Salvador</option>
                                             <option value="Equatorial Guinea">Equatorial Guinea</option>
                                             <option value="Eritrea">Eritrea</option>
                                             <option value="Estonia">Estonia</option>
                                             <option value="Ethiopia">Ethiopia</option>
                                             <option value="Falkland Islands">Falkland Islands</option>
                                             <option value="Faroe Islands">Faroe Islands</option>
                                             <option value="Fiji">Fiji</option>
                                             <option value="Finland">Finland</option>
                                             <option value="France">France</option>
                                             <option value="French Guiana">French Guiana</option>
                                             <option value="French Polynesia">French Polynesia</option>
                                             <option value="French Southern Ter">French Southern Ter</option>
                                             <option value="Gabon">Gabon</option>
                                             <option value="Gambia">Gambia</option>
                                             <option value="Georgia">Georgia</option>
                                             <option value="Germany">Germany</option>
                                             <option value="Ghana">Ghana</option>
                                             <option value="Gibraltar">Gibraltar</option>
                                             <option value="Great Britain">Great Britain</option>
                                             <option value="Greece">Greece</option>
                                             <option value="Greenland">Greenland</option>
                                             <option value="Grenada">Grenada</option>
                                             <option value="Guadeloupe">Guadeloupe</option>
                                             <option value="Guam">Guam</option>
                                             <option value="Guatemala">Guatemala</option>
                                             <option value="Guinea">Guinea</option>
                                             <option value="Guyana">Guyana</option>
                                             <option value="Haiti">Haiti</option>
                                             <option value="Hawaii">Hawaii</option>
                                             <option value="Honduras">Honduras</option>
                                             <option value="Hong Kong">Hong Kong</option>
                                             <option value="Hungary">Hungary</option>
                                             <option value="Iceland">Iceland</option>
                                             <option value="Indonesia">Indonesia</option>
                                             <option value="India">India</option>
                                             <option value="Iran">Iran</option>
                                             <option value="Iraq">Iraq</option>
                                             <option value="Ireland">Ireland</option>
                                             <option value="Isle of Man">Isle of Man</option>
                                             <option value="Israel">Israel</option>
                                             <option value="Italy">Italy</option>
                                             <option value="Jamaica">Jamaica</option>
                                             <option value="Japan">Japan</option>
                                             <option value="Jordan">Jordan</option>
                                             <option value="Kazakhstan">Kazakhstan</option>
                                             <option value="Kenya">Kenya</option>
                                             <option value="Kiribati">Kiribati</option>
                                             <option value="Korea North">Korea North</option>
                                             <option value="Korea Sout">Korea South</option>
                                             <option value="Kuwait">Kuwait</option>
                                             <option value="Kyrgyzstan">Kyrgyzstan</option>
                                             <option value="Laos">Laos</option>
                                             <option value="Latvia">Latvia</option>
                                             <option value="Lebanon">Lebanon</option>
                                             <option value="Lesotho">Lesotho</option>
                                             <option value="Liberia">Liberia</option>
                                             <option value="Libya">Libya</option>
                                             <option value="Liechtenstein">Liechtenstein</option>
                                             <option value="Lithuania">Lithuania</option>
                                             <option value="Luxembourg">Luxembourg</option>
                                             <option value="Macau">Macau</option>
                                             <option value="Macedonia">Macedonia</option>
                                             <option value="Madagascar">Madagascar</option>
                                             <option value="Malaysia">Malaysia</option>
                                             <option value="Malawi">Malawi</option>
                                             <option value="Maldives">Maldives</option>
                                             <option value="Mali">Mali</option>
                                             <option value="Malta">Malta</option>
                                             <option value="Marshall Islands">Marshall Islands</option>
                                             <option value="Martinique">Martinique</option>
                                             <option value="Mauritania">Mauritania</option>
                                             <option value="Mauritius">Mauritius</option>
                                             <option value="Mayotte">Mayotte</option>
                                             <option value="Mexico">Mexico</option>
                                             <option value="Midway Islands">Midway Islands</option>
                                             <option value="Moldova">Moldova</option>
                                             <option value="Monaco">Monaco</option>
                                             <option value="Mongolia">Mongolia</option>
                                             <option value="Montserrat">Montserrat</option>
                                             <option value="Morocco">Morocco</option>
                                             <option value="Mozambique">Mozambique</option>
                                             <option value="Myanmar">Myanmar</option>
                                             <option value="Nambia">Nambia</option>
                                             <option value="Nauru">Nauru</option>
                                             <option value="Nepal">Nepal</option>
                                             <option value="Netherland Antilles">Netherland Antilles</option>
                                             <option value="Netherlands">Netherlands (Holland, Europe)</option>
                                             <option value="Nevis">Nevis</option>
                                             <option value="New Caledonia">New Caledonia</option>
                                             <option value="New Zealand">New Zealand</option>
                                             <option value="Nicaragua">Nicaragua</option>
                                             <option value="Niger">Niger</option>
                                             <option value="Nigeria">Nigeria</option>
                                             <option value="Niue">Niue</option>
                                             <option value="Norfolk Island">Norfolk Island</option>
                                             <option value="Norway">Norway</option>
                                             <option value="Oman">Oman</option>
                                             <option value="Pakistan">Pakistan</option>
                                             <option value="Palau Island">Palau Island</option>
                                             <option value="Palestine">Palestine</option>
                                             <option value="Panama">Panama</option>
                                             <option value="Papua New Guinea">Papua New Guinea</option>
                                             <option value="Paraguay">Paraguay</option>
                                             <option value="Peru">Peru</option>
                                             <option value="Phillipines">Philippines</option>
                                             <option value="Pitcairn Island">Pitcairn Island</option>
                                             <option value="Poland">Poland</option>
                                             <option value="Portugal">Portugal</option>
                                             <option value="Puerto Rico">Puerto Rico</option>
                                             <option value="Qatar">Qatar</option>
                                             <option value="Republic of Montenegro">Republic of Montenegro</option>
                                             <option value="Republic of Serbia">Republic of Serbia</option>
                                             <option value="Reunion">Reunion</option>
                                             <option value="Romania">Romania</option>
                                             <option value="Russia">Russia</option>
                                             <option value="Rwanda">Rwanda</option>
                                             <option value="St Barthelemy">St Barthelemy</option>
                                             <option value="St Eustatius">St Eustatius</option>
                                             <option value="St Helena">St Helena</option>
                                             <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                                             <option value="St Lucia">St Lucia</option>
                                             <option value="St Maarten">St Maarten</option>
                                             <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
                                             <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
                                             <option value="Saipan">Saipan</option>
                                             <option value="Samoa">Samoa</option>
                                             <option value="Samoa American">Samoa American</option>
                                             <option value="San Marino">San Marino</option>
                                             <option value="Sao Tome & Principe">Sao Tome & Principe</option>
                                             <option value="Saudi Arabia">Saudi Arabia</option>
                                             <option value="Senegal">Senegal</option>
                                             <option value="Seychelles">Seychelles</option>
                                             <option value="Sierra Leone">Sierra Leone</option>
                                             <option value="Singapore">Singapore</option>
                                             <option value="Slovakia">Slovakia</option>
                                             <option value="Slovenia">Slovenia</option>
                                             <option value="Solomon Islands">Solomon Islands</option>
                                             <option value="Somalia">Somalia</option>
                                             <option value="South Africa">South Africa</option>
                                             <option value="Spain">Spain</option>
                                             <option value="Sri Lanka">Sri Lanka</option>
                                             <option value="Sudan">Sudan</option>
                                             <option value="Suriname">Suriname</option>
                                             <option value="Swaziland">Swaziland</option>
                                             <option value="Sweden">Sweden</option>
                                             <option value="Switzerland">Switzerland</option>
                                             <option value="Syria">Syria</option>
                                             <option value="Tahiti">Tahiti</option>
                                             <option value="Taiwan">Taiwan</option>
                                             <option value="Tajikistan">Tajikistan</option>
                                             <option value="Tanzania">Tanzania</option>
                                             <option value="Thailand">Thailand</option>
                                             <option value="Togo">Togo</option>
                                             <option value="Tokelau">Tokelau</option>
                                             <option value="Tonga">Tonga</option>
                                             <option value="Trinidad & Tobago">Trinidad & Tobago</option>
                                             <option value="Tunisia">Tunisia</option>
                                             <option value="Turkey">Turkey</option>
                                             <option value="Turkmenistan">Turkmenistan</option>
                                             <option value="Turks & Caicos Is">Turks & Caicos Is</option>
                                             <option value="Tuvalu">Tuvalu</option>
                                             <option value="Uganda">Uganda</option>
                                             <option value="United Kingdom">United Kingdom</option>
                                             <option value="Ukraine">Ukraine</option>
                                             <option value="United Arab Erimates">United Arab Emirates</option>
                                             <option value="United States of America">United States of America</option>
                                             <option value="Uraguay">Uruguay</option>
                                             <option value="Uzbekistan">Uzbekistan</option>
                                             <option value="Vanuatu">Vanuatu</option>
                                             <option value="Vatican City State">Vatican City State</option>
                                             <option value="Venezuela">Venezuela</option>
                                             <option value="Vietnam">Vietnam</option>
                                             <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                                             <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                                             <option value="Wake Island">Wake Island</option>
                                             <option value="Wallis & Futana Is">Wallis & Futana Is</option>
                                             <option value="Yemen">Yemen</option>
                                             <option value="Zaire">Zaire</option>
                                             <option value="Zambia">Zambia</option>
                                             <option value="Zimbabwe">Zimbabwe</option>
                                          </select>                                      </div>
                      </div>
                    <div role="tabpanel" class="tab-pane fade" id="Bank">
                                      <div class="form-group has-success">
                                          <label class="control-label">Website</label>
                                          <input type="text" name="website" class="form-control underlined">
                                      </div>
                                      <div class="form-group has-success">
                                          <label class="control-label">Skype</label>
                                          <input type="text" name="skype" class="form-control underlined">
                                      </div>
                                      <div class="form-group has-success">
                                          <label class="control-label">LinkedIn</label>
                                          <input type="text" name="linkedin" class="form-control underlined">
                                      </div>
                                      <div class="form-group has-success">
                                          <label class="control-label">Facebook</label>
                                          <textarea type="text" name="facebook" class="form-control underlined"></textarea>
                                      </div>
                                      <div class="form-group has-success">
                                          <label class="control-label">Twitter</label>
                                          <input type="text" name="twitter" class="form-control underlined">
                                      </div>

                                      <button style="float: right;" type="Submit" class="btn btn-primary" >Submit</button>

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


<script>
$(document).ready(function(){

 fetch_customer_data();

 function fetch_customer_data(query = '')
 {
  $.ajax({
   url:"{{ route('search') }}",
   method:'GET',
   data:{query:query},
   dataType:'json',
   success:function(data)
   {
    $('tbody').html(data.table_data);
    $('#total_records').text(data.total_data);
   }
  })
 }

 $(document).on('keyup', '#search', function(){
  var query = $(this).val();
  fetch_customer_data(query);
 });
});
</script>
   @endsection
