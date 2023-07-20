<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @include('layout.head')
</head>
<body>
    <main>
        <div class="container-fluid">
                {{-- <h1 class="text-danger fw-bold text-center my-5">Edi</h1> --}}
                <form class="row g-3" id="addcandidate"  method="post">
                    @csrf
                    @foreach ($candidates as $candidate)
                    
                    {{-- <div class="col-md-6">
                      <label for="inputEmail4" class="form-label">Name</label>
                      <input type="text" class="form-control" id="pname" name="pname" value="{{$candidate->name}}">
                    </div>
                    <div class="col-md-6">
                      <label for="inputPassword4" class="form-label">Number</label>
                      <input type="number" class="form-control" id="pnumber" name="pnumber" value={{$candidate->passport_number}}>
                    </div>
                    <div class="col-md-4">
                      <label for="inputAddress" class="form-label">Passport Issue Date</label>
                      <input type="date" class="form-control" id="pass_issue_date" name="pass_issue_date" value={{$candidate->passport_issue_date}}>
                    </div>
                    <div class="col-md-4">
                      <label for="inputAddress" class="form-label">Passport Expire Date</label>
                      <input type="date" class="form-control" id="pass_expire_date" name="pass_expire_date" value={{$candidate->passport_expire_date}}>
                    </div>
                    <div class="col-md-4">
                      <label for="inputAddress" class="form-label">Date of birth</label>
                      <input type="date" class="form-control" id="date_of_birth" name="date_of_birth" value={{$candidate->date_of_birth}}>
                    </div>
                    <div class="col-12">
                      <label for="inputAddress2" class="form-label">Place of birth </label>
                      <input type="text" class="form-control" id="place_of_birth" name="place_of_birth" placeholder="Apartment, studio, or floor" value={{$candidate->place_of_birth}}>
                    </div>
                    <div class="col-12">
                      <label for="inputAddress2" class="form-label">Address </label>
                      <input type="text" class="form-control" id="address" name="address" placeholder="Apartment, studio, or floor" value={{$candidate->address}}>
                    </div>
                    <div class="col-md-4">
                      <label for="inputCity" class="form-label">Father's Name</label>
                      <input type="text" class="form-control" id="father" name="father" value={{$candidate->father}}>
                    </div>
                    <div class="col-md-4">
                      <label for="inputCity" class="form-label">Mother's Name</label>
                      <input type="text" class="form-control" id="mother" name="mother" value={{$candidate->mother}}>
                    </div>
                    <div class="col-md-4">
                      <label for="inputCity" class="form-label">Religion</label>
                      <input type="text" class="form-control" id="religion" name="religion" value={{$candidate->religion}}>
                    </div>
                     
                    <div class="col-md-3">
                      <label for="inputState" class="form-label">Gender</label>
                      <select id="inputState" class="form-select">
                        <option selected>Choose...</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Other</option>
                      </select>
                    </div>
                    <div class="col-md-3">
                      <label for="inputZip" class="form-label">Maritial Status</label>
                      <input type="text" class="form-control" id="married" name="married" value={{$candidate->married}}>
                    </div>
                    <div class="col-md-6">
                      <label for="inputZip" class="form-label">Medical Center Name</label>
                      <input type="text" class="form-control" id="medical_center_name" name="medical_center_name" value={{$candidate->medical_center}}>
                    </div>
                    <div class="col-md-3">
                      <label for="inputZip" class="form-label">Medical Issue Date</label>
                      <input type="date" class="form-control" id="medical_issue_date" name="medical_issue_date" value={{$candidate->medical_issue_date}}>
                    </div>
                    <div class="col-md-3">
                      <label for="inputZip" class="form-label">Medical Expire Date</label>
                      <input type="date" class="form-control" id="medical_expire_date" name="medical_expire_date" value={{$candidate->medical_expire_date}}>
                    </div>
                    <div class="col-md-3">
                      <label for="inputZip" class="form-label">Police Licence</label>
                      <input type="number" class="form-control" id="police_licence" name="police_licence" value={{$candidate->police}}>
                    </div>
                    <div class="col-md-3">
                      <label for="inputZip" class="form-label">Driving Licence</label>
                      <input type="number" class="form-control" id="driving_licence" name="driving_licence" value={{$candidate->driving_licence}}>
                    </div>
                  
                    <div class="col-12">
                        <button type="submit" style="padding:10px; background-color: cornflowerblue; border:none; border-radius:5px" class="" id="btn1">Save</button>
                    </div>
                </form>

                <h1 class="text-danger text-center my-5">Visa Information</h1>
                <form action="" id="visaedit" method="post">
                  @csrf
                  <div class="row">
                    <input type="hidden" name="uid" id="candidate_id" value="{{$id}}" />
                    <div class="col">
                      <!-- Name input -->
                      <div class="form-outline">
                        <input type="number" id="visa_no" name="visa_no" class="form-control" value="{{$candidate->visa_no}}"/>
                        <label class="form-label" for="form8Example1">Visa NO</label>
                      </div>
                    </div>
                    <div class="col">
                      <!-- Email input -->
                      <div class="form-outline">
                        <input type="date" id="visa_date" name="visa_date" class="form-control" value="{{$candidate->visa_date}}"/>
                        <label class="form-label" for="form8Example2">Visa Date</label>
                      </div>
                    </div>
                    <div class="col">
                      <!-- Email input -->
                      <div class="form-outline">
                        <input type="number" id="spon_id" name="spon_id" class="form-control" value="{{$candidate->spon_id}}"/>
                        <label class="form-label" for="form8Example2">Sponsor ID</label>
                      </div>
                    </div>
                    <div class="col">
                      <!-- Email input -->
                      <div class="form-outline">
                        <input type="text" id="spon_name_arabic" name="spon_name_arabic" class="form-control" value="{{$candidate->spon_name_arabic}}"/>
                        <label class="form-label" for="form8Example2">Sponsor Name(Arabic)</label>
                      </div>
                    </div>
                  </div>
                  
                  <hr />
                  
                  <div class="row row-cols-2">
                    <div class="col">
                        <!-- Name input -->
                        <div class="form-outline">
                          <input type="text" id="salary" name="salary" class="form-control" value="{{$candidate->salary}}"/>
                          <label class="form-label" for="form8Example2">Salary</label>
                        </div>
                      </div>
                    <div class="col">
                      <!-- Name input -->
                      <div class="form-outline">
                        <input type="text" id="spon_name_english" name="spon_name_english" class="form-control" value="{{$candidate->spon_name_english}}"/>
                        <label class="form-label" for="form8Example2">Sponsor Name(english)</label>
                      </div>
                    </div>
                    <div class="col">
                      <!-- Name input -->
                      <div class="form-outline">
                        <input type="text" id="prof_name_arabic" name="prof_name_arabic" class="form-control" value="{{$candidate->prof_name_arabic}}"/>
                        <label class="form-label" for="form8Example2">Profession Name(Arabic)</label>
                      </div>
                    </div>
                    <div class="col">
                      <!-- Name input -->
                      <div class="form-outline">
                        <input type="text" id="prof_name_english" name="prof_name_english" class="form-control" value="{{$candidate->prof_name_english}}"/>
                        <label class="form-label" for="form8Example2">Profession Name(english)</label>
                      </div>
                    </div>
                    <div class="col">
                      <!-- Name input -->
                      <div class="form-outline">
                        <input type="text" id="mofa_no" name="mofa_no" class="form-control" value="{{$candidate->mofa_no}}"/>
                        <label class="form-label" for="form8Example2">MOFA No</label>
                      </div>
                    </div>
                    <div class="col">
                      <!-- Name input -->
                      <div class="form-outline">
                        <input type="date" id="mofa_date" name="mofa_date" class="form-control" value="{{$candidate->mofa_date}}"/>
                        <label class="form-label" for="form8Example2">MOFA Date</label>
                      </div>
                    </div>
                    <div class="col">
                      <!-- Name input -->
                      <div class="form-outline">
                        <input type="text" id="okala_no" name="okala_no" class="form-control" value="{{$candidate->okala_no}}"/>
                        <label class="form-label" for="form8Example2">Okala No</label>
                      </div>
                    </div>
                    <div class="col">
                      <!-- Name input -->
                      <div class="form-outline">
                        <input type="text" id="musaned_no" name="musaned_no" class="form-control" value="{{$candidate->musaned_no}}"/>
                        <label class="form-label" for="form8Example2">Musaned No</label>
                      </div>
                    </div>
                    <br />
                    
                </div> --}}





                <div class="">
                  <div class="flex text-[#082F2C] bg-[#ADCCC8] p-3 text-xl rounded-t-xl font-semibold justify-between items-center"><h2 class="">Edit Passport Information for Canditate Name</h2>
                  </div>         
                  <div class="bg-[#DBF4F1]  p-2">
                    <form  class="bg-[#DBF4F1] pb-4" id="addcandidate"  method="post">
                      <div class="px-10 gap-x-10 grid md:grid-cols-2">
                        <div class="py-1">
                        <div class="font-bold text-lg">Passenger Name</div>
                        <input type="text" class="p-2 rounded-lg w-full uppercase form-control" name="pname" id="pname" value="{{$candidate->name}}" placeholder="Enter Passenger Name" />
                      </div>
                      <div class="py-1">
                        <div class="font-bold text-lg">Passport Number</div>
                        <input type="text" class="p-2 rounded-lg w-full uppercase form-control" minlength="0" maxlength="9" id="pnumber" name="pnumber" value={{$candidate->passport_number}} required placeholder="Enter Passport Number" />
                      </div>
                      <div class="py-1">
                        <div class="font-bold text-lg">Passport Issue Date</div>
                        <input type="text" class="p-2 rounded-lg w-full uppercase form-control" placeholder="Enter Passport Issue Date" name="pass_issue_date" id="pass_issue_date" value={{$candidate->passport_issue_date}} />
                      </div>
                      <div class="py-1">
                        <div class="font-bold text-lg">Passport Expire Date</div>
                        <input type="text" class="p-2 rounded-lg w-full uppercase form-control" placeholder="Enter Passport Expire Date" name="pass_expire_date" id="pass_expire_date" value={{$candidate->passport_expire_date}} />
                      </div>
                      <div class="py-1">
                        <div class="font-bold text-lg">Date Of Birth</div>
                        <input type="date" class="p-2 rounded-lg w-full uppercase form-control" placeholder="Enter Date Of Birth"  name="date_of_birth" id="date_of_birth" value={{$candidate->date_of_birth}} />
                      </div>
                      <div class="py-1">
                        <div class="font-bold text-lg">Place Of Birth</div>
                        <input type="text" class="p-2 rounded-lg w-full uppercase form-control" placeholder="Place Of Birth" name="place_of_birth" list="districts" id="place_of_birth" value={{$candidate->place_of_birth}} />
                        <datalist id="districts">
                          <option value="Bagerhat">
                          <option value="Barishal">
                          <option value="Jashore">
                          <option value="Chattogram">
                          <option value="Cumilla">
                          <option value="Bogura">
                          <option value="Bandarban">
                          <option value="Barguna">
                          <option value="Barisal">
                          <option value="Bhola">
                          <option value="Bogra">
                          <option value="Brahmanbaria">
                          <option value="Chandpur">
                          <option value="Chapainawabganj">
                          <option value="Chittagong">
                          <option value="Chuadanga">
                          <option value="Comilla">
                          <option value="Cox's Bazar">
                          <option value="Dhaka">
                          <option value="Dinajpur">
                          <option value="Faridpur">
                          <option value="Feni">
                          <option value="Gaibandha">
                          <option value="Gazipur">
                          <option value="Gopalganj">
                          <option value="Habiganj">
                          <option value="Jamalpur">
                          <option value="Jessore">
                          <option value="Jhalokati">
                          <option value="Jhenaidah">
                          <option value="Joypurhat">
                          <option value="Khagrachhari">
                          <option value="Khulna">
                          <option value="Kishoreganj">
                          <option value="Kurigram">
                          <option value="Kushtia">
                          <option value="Lakshmipur">
                          <option value="Lalmonirhat">
                          <option value="Madaripur">
                          <option value="Magura">
                          <option value="Manikganj">
                          <option value="Meherpur">
                          <option value="Moulvibazar">
                          <option value="Munshiganj">
                          <option value="Mymensingh">
                          <option value="Naogaon">
                          <option value="Narail">
                          <option value="Narayanganj">
                          <option value="Narsingdi">
                          <option value="Natore">
                          <option value="Netrokona">
                          <option value="Nilphamari">
                          <option value="Noakhali">
                          <option value="Pabna">
                          <option value="Panchagarh">
                          <option value="Patuakhali">
                          <option value="Pirojpur">
                          <option value="Rajbari">
                          <option value="Rajshahi">
                          <option value="Rangamati">
                          <option value="Rangpur">
                          <option value="Satkhira">
                          <option value="Shariatpur">
                          <option value="Sherpur">
                          <option value="Sirajganj">
                          <option value="Sunamganj">
                          <option value="Sylhet">
                          <option value="Tangail">
                          <option value="Thakurgaon">
                        </datalist>
                      </div>
                      <div class="py-1">
                        <div class="font-bold text-lg">Fathers Name</div>
                        <input type="text" class="p-2 rounded-lg w-full uppercase form-control" placeholder="Enter Father's Name" name="father" id="father" value={{$candidate->father}} />
                      </div>
                      <div class="py-1">
                        <div class="font-bold text-lg">Mothers Name</div>
                        <input type="text" class="p-2 rounded-lg w-full uppercase form-control" placeholder="Enter Mother's Name" name="mother" id="mother" value={{$candidate->mother}} />
                      </div>
                      <div class="py-1">
                        <div class="font-bold text-lg">Religion</div>
                        <select class="form-control p-2 rounded-lg w-full" name="religion" id="religion" value={{$candidate->religion}} size="large" placeholder="Select a person">
                          <option value="MUSLIM">MUSLIM</option>
                          <option value="NON MUSLIM">NON MUSLIM</option>
                        </select>
                      </div>
                      <div class="py-1">
                        <div class="font-bold text-lg">Gender</div>
                        <select class="form-control p-2 rounded-lg w-full" size="large" placeholder="Select a person" name="gender" value="{{$candidate->gender}}">
                          <option value="MALE">MALE</option>
                        <option value="FEMALE">FEMALE</option>
                        </select>
                      </div>
                      <div class="py-1">
                        <div class="font-bold text-lg">Marital Status</div>
                        <select class="form-control w-full p-2 rounded-lg" size="large" name="married" value={{$candidate->married}} id="married" placeholder="Select a person">
                          <option value="MARRIED">MARRIED</option>
                        <option value="UNMARRIED">UNMARRIED</option>
                        </select>
                      </div>
                      <div class="py-1">
                        <div class="font-bold text-lg">Medical Center Name</div>
                        <input type="text" class="p-2 rounded-lg w-full uppercase form-control" id="medical_center_name" name="medical_center_name" value={{$candidate->medical_center}} placeholder="Enter Medical Center Name" />
                      </div>
                      <div class="py-1">
                        <div class="font-bold text-lg">Medical Issue Date</div>
                        <input type="text" class="p-2 rounded-lg w-full uppercase form-control" id="medical_issue_date" name="medical_issue_date" value={{$candidate->medical_issue_date}} placeholder="Enter Date Of Medical Issue" />
                      </div>
                      <div class="py-1">
                        <div class="font-bold text-lg">Medical Expire Date</div>
                        <input type="text" name="medical_expire_date" id="medical_expire_date" value={{$candidate->medical_expire_date}} class="p-2 rounded-lg w-full form-control uppercase" placeholder="Enter Date Of Medical Expiry" />
                      </div>
                      <div class="py-1">
                        <div class="font-bold text-lg">Driver Licence Number</div>
                        <input type="text" class="p-2 rounded-lg w-full form-control uppercase" id="driving_licence" name="driving_licence" value={{$candidate->driving_licence}} placeholder="Enter Driver Licence Number" />
                      </div>
                      <div class="py-1">
                        <div class="font-bold text-lg">Police Clearence No</div>
                        <input type="text" class="p-2 rounded-lg w-full form-control uppercase" id="police_licence" name="police_licence" value={{$candidate->police}} placeholder="Enter Police Clearence Number" />
                      </div>
                    </div>
                      <div class=" px-10 my-2">
                        <div class="font-bold text-lg">Address</div>
                        <input type="text" class="form-control p-2 rounded-lg w-full uppercase" placeholder="Address" name="address" placeholder="Apartment, studio, or floor" id="address" value={{$candidate->address}}>
                      </div>
                      
                    
                      <div class="text-center">
                        <button
                          type="submit"
                          id="btn1"
                          class="bg-[#289788] hover:bg-[#074f56] p-3 rounded text-white font-semibold"
                        >
                          Edit Candidate Passport
                        </button>
                      </div>
                    
                  </div>
            
                </form>
                  
                    <div class="flex text-[#082F2C] bg-[#ADCCC8] p-3 text-xl  font-semibold justify-between items-center"><h2 class="">Edit Visa Information for Candidate Name</h2>
                    </div>         
                    <div class="bg-[#DBF4F1] rounded-b-xl p-2">
                      <form  class="bg-[#DBF4F1] pb-4" action="" id="visaedit" method="post">
                        @csrf
                          <input type="hidden" name="uid" id="candidate_id" value="{{$id}}" />
                          <div class="px-10 gap-x-10 grid md:grid-cols-2">
                            <div class="py-1">
                            <div class="font-bold text-lg">Visa No</div>
                            <input type="text" class="p-2 rounded-lg w-full uppercase form-control" id="visa_no" name="visa_no"  value="{{$candidate->visa_no}}" placeholder="Enter Passenger Visa No" />
                          </div>
                          <div class="py-1">
                            <div class="font-bold text-lg">Sponsor ID</div>
                            <input type="text" name="spon_id" id="spon_id" value="{{$candidate->spon_id}}" class="p-2 rounded-lg w-full uppercase form-control" required placeholder="Enter Sponsor ID" />
                          </div>
                          <div class="py-1">
                            <div class="font-bold text-lg">Visa Date (Hijri)</div>
                            <input type="text" name="visa_date" id="visa_date" value="{{$candidate->visa_date2}}" class="p-2 rounded-lg w-full uppercase form-control" placeholder="Enter Visa Date In Hijri" />
                          </div>
                          <div class="py-1">
                            <div class="font-bold text-lg">Salary</div>
                            <input type="text" class="p-2 rounded-lg w-full uppercase form-control" id="salary" name="salary" value="{{$candidate->salary}}" placeholder="Enter Salary 1000SR" />
                          </div>
                          <div class="py-1">
                            <div class="font-bold text-lg">Sponsor Name (Arabic)</div>
                            <input type="text" class="p-2 rounded-lg w-full uppercase form-control" id="spon_name_arabic" name="spon_name_arabic" value="{{$candidate->spon_name_arabic}}" placeholder="Enter Sponsor Name in (Arabic)" />
                          </div>
                          <div class="py-1">
                            <div class="font-bold text-lg">Sponsor Name (English)</div>
                            <input type="text" class="p-2 rounded-lg w-full uppercase form-control" id="spon_name_english" name="spon_name_english" value="{{$candidate->spon_name_english}}" placeholder="Sponsor Name in (English)" />
                          </div>
                          <div class="py-1">
                            <div class="font-bold text-lg">Profession (Arabic)</div>
                            <input type="text" name="prof_name_arabic" id="prof_name_arabic" value="{{$candidate->prof_name_arabic}}" class="p-2 rounded-lg w-full uppercase form-control" placeholder="Enter Profession (Arabic)" />
                          </div>
                          <div class="py-1">
                            <div class="font-bold text-lg">Profession (English)</div>
                            <input type="text" name="prof_name_english" id="prof_name_english" value="{{$candidate->prof_name_english}}" class="p-2 rounded-lg w-full uppercase form-control" placeholder="Enter Profession in (English)" />
                          </div>
                          <div class="py-1">
                            <div class="font-bold text-lg">Mofa No</div>
                            <input type="text" class="p-2 rounded-lg w-full uppercase form-control" id="mofa_no" name="mofa_no" value="{{$candidate->mofa_no}}" placeholder="Enter Mofa No" />
                          </div>
                          <div class="py-1">
                            <div class="font-bold text-lg">Mofa Date</div>
                            <input type="date" name="mofa_date" value="{{$candidate->mofa_date}}" id="mofa_date" class="p-2 rounded-lg w-full uppercase form-control" placeholder="Enter Mofa Date" />
                          </div>
                          <div class="py-1">
                            <div class="font-bold text-lg">Okala No</div>
                            <input type="text" class="p-2 rounded-lg w-full uppercase form-control" id="okala_no" name="okala_no" value="{{$candidate->okala_no}}" placeholder="Enter Okala No" />
                          </div>
                          <div class="py-1">
                            <div class="font-bold text-lg">Musaned No</div>
                            <input type="text" class="p-2 rounded-lg w-full uppercase form-control" id="musaned_no" name="musaned_no" value="{{$candidate->musaned_no}}" placeholder="Enter Musaned No" />
                          </div>
                      
                        </div>
                        
                        
                          <div class="text-center pt-3">
                            <button
                              type="submit"
                              class="bg-[#289788] hover:bg-[#074f56] p-3 rounded text-white font-semibold " id="btn2"
                            >
                              Edit Candidate Visa
                            </button>
                          </div>
                      </form>
                    </div>
              
                  
            
                </div>



                @endforeach
                {{-- <button type="submit" style="padding:10px; background-color: cornflowerblue; border:none; border-radius:5px" class="" id="btn2">Save</button> --}}

                </form>

          
        </div>
    </main>
    @include('layout.script')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
    $(document).ready(function() {
        // Intercept the form submission

      var issueDateStr = $('#medical_issue_date').val();
      var issueDate = $.datepicker.parseDate('yy-mm-dd', issueDateStr);
      var formattedDate = $.datepicker.formatDate('dd/mm/yy', issueDate);
      $('#medical_issue_date').val(formattedDate);

      var issueDateStr = $('#medical_expire_date').val();
      var issueDate = $.datepicker.parseDate('yy-mm-dd', issueDateStr);
      var formattedDate = $.datepicker.formatDate('dd/mm/yy', issueDate);
      $('#medical_expire_date').val(formattedDate);
      
      var issueDateStr = $('#pass_issue_date').val();
      var issueDate = $.datepicker.parseDate('yy-mm-dd', issueDateStr);
      var formattedDate = $.datepicker.formatDate('dd/mm/yy', issueDate);
      $('#pass_issue_date').val(formattedDate);

      var issueDateStr = $('#pass_expire_date').val();
      var issueDate = $.datepicker.parseDate('yy-mm-dd', issueDateStr);
      var formattedDate = $.datepicker.formatDate('dd/mm/yy', issueDate);
      $('#pass_expire_date').val(formattedDate);
  
      $('#medical_issue_date').datepicker({
          dateFormat: 'd/m/y',
          onSelect: function(selectedDate) {
                var issueDate = $(this).datepicker('getDate');
                issueDate.setMonth(issueDate.getMonth() + 2);
                issueDate.setDate(issueDate.getDate() - 1);
                var formattedDate = $.datepicker.formatDate('d/m/y', issueDate);
                $('#medical_expire_date').val(formattedDate);
          }
      });
    $('#pass_issue_date').datepicker({
      dateFormat: 'd/m/y',
      onSelect: function(selectedDate) {
            var issueDate = $(this).datepicker('getDate');
            issueDate.setFullYear(issueDate.getFullYear() + 10);
            issueDate.setDate(issueDate.getDate() - 1);
            var formattedDate = $.datepicker.formatDate('d/m/y', issueDate);
            $('#pass_expire_date').val(formattedDate);
      }
    });
        $('#addcandidate').submit(function(event) {
            event.preventDefault(); 
            var formData = $(this).serialize();
            var candidateId = document.getElementById('candidate_id').value;
            var route = "{{ route('user/personal_edit', ['id' => ':id']) }}";
            route = route.replace(':id', candidateId);

            // console.log(route, formData);
            // Send the AJAX request
            $.ajax({
                url: route,
                type: 'POST',
                data: formData,
                success: function(response) {
                    document.getElementById('btn1').disabled = true;
                    Swal.fire({
                        title: response.title,
                        text: response.message,
                        icon: response.icon,
                        
                    });
                    if (response.redirect_url) {
                        setTimeout(function() {
                          var redirectUrl = window.location.origin + '/'+ response.redirect_url;
                          window.location.href = redirectUrl;
                        }, 2000);
                    }
                                            
                },
                error: function(response) {
                    Swal.fire({
                        title: response.title,
                        text: response.message,
                        icon: response.icon,
                      
                    });
                    if (response.redirect_url) {
                        setTimeout(function() {
                          var redirectUrl = window.location.origin + '/'+ response.redirect_url;
                          window.location.href = redirectUrl;
                        }, 2000);
                    }l
                }
            });
        });
        $('#visaedit').submit(function(event) {
            event.preventDefault(); 
            var formData = $(this).serialize();
            var candidateId = document.getElementById('candidate_id').value;
            var route = "{{ route('user/visa_edit', ['id' => ':id']) }}";
            route = route.replace(':id', candidateId);

            console.log(route, formData);
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            // Send the AJAX request
            $.ajax({
                url: route,
                type: 'POST',
                data: formData,
                success: function(response) {
                    document.getElementById('btn1').disabled = true;
                    Swal.fire({
                        title: response.title,
                        text: response.message,
                        icon: response.icon,
                        
                    });
                    if (response.redirect_url) {
                        setTimeout(function() {
                          var redirectUrl = window.location.origin +'/'+ response.redirect_url;
                          // console.log(redirectUrl);
                          window.location.href = redirectUrl;
                        }, 2000);
                    }
                                            
                },
                error: function(response) {
                    Swal.fire({
                        title: response.title,
                        text: response.message,
                        icon: response.icon,
                      
                    });
                    if (response.redirect_url) {
                        setTimeout(function() {
                          var redirectUrl = window.location.origin + '/'+ response.redirect_url;
                          window.location.href = redirectUrl;
                        }, 2000);
                    }
                }
            });
        });
    });
</script>
</body>
</html>