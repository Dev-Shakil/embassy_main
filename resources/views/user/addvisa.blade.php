<!DOCTYPE html>
<html lang="en">
<head>
    @include('layout.head')
</head>
<body>
    <div class="">
      @include('layout.navbar')
        <form id="visainput" class="mt-5">
            @csrf
            <div class="row">
                <input type="hidden" name="" id="candidate_id" value="{{$id}}" />
                <div class="px-10 gap-x-10 grid md:grid-cols-2">
                  <div class="py-1">
                  <div class="font-bold text-lg">Visa No</div>
                  <input type="text" id="visa_no" name="visa_no" class="form-control" />
                </div>
                <div class="py-1">
                  <div class="font-bold text-lg">Sponsor ID</div>
                  <input type="text" id="spon_id" name="spon_id" class="form-control" />
                </div>
                <div class="py-1">
                  <div class="font-bold text-lg">Visa Date (Hijri)</div>
                  <input type="date" id="visa_date" name="visa_date" class="form-control" />
                </div>
                <div class="py-1">
                  <div class="font-bold text-lg">Salary</div>
                  <input type="text" id="salary" name="salary" class="form-control" />
                </div>
                <div class="py-1">
                  <div class="font-bold text-lg">Sponsor Name (Arabic)</div>
                  <input type="text" id="spon_name_arabic" name="spon_name_arabic" class="form-control" />
                </div>
                <div class="py-1">
                  <div class="font-bold text-lg">Sponsor Name (English)</div>
                  <input type="text" id="spon_name_english" name="spon_name_english" class="form-control" />
                </div>
                <div class="py-1">
                  <div class="font-bold text-lg">Profession (Arabic)</div>
                  <input type="text" id="prof_name_arabic" name="prof_name_arabic" class="form-control" />
                </div>
                <div class="py-1">
                  <div class="font-bold text-lg">Profession (English)</div>
                  <input type="text" id="prof_name_english" name="prof_name_english" class="form-control" />
                </div>
                <div class="py-1">
                  <div class="font-bold text-lg">Mofa No</div>
                  <input type="text" id="mofa_no" name="mofa_no" class="form-control" />
                </div>
                <div class="py-1">
                  <div class="font-bold text-lg">Mofa Date</div>
                  <input type="date" id="mofa_date" name="mofa_date" class="form-control" />
                </div>
                <div class="py-1">
                  <div class="font-bold text-lg">Okala No</div>
                  <input type="text" id="okala_no" name="okala_no" class="form-control" />
                </div>
                <div class="py-1">
                  <div class="font-bold text-lg">Musaned No</div>
                  <input type="text" id="musaned_no" name="musaned_no" class="form-control" />
                </div>
            </div>
            <div class="text-center pt-3">
              <button
                type="submit"
                class="bg-[#289788] hover:bg-[#074f56] p-3 rounded text-white font-semibold"
              >
                Add Candidate Visa
              </button>
            </div>
        </form>
    </div>

    @include('layout.script')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#visainput').submit(function(e) {
                e.preventDefault(); // Prevent the default form submission

                var formData = $(this).serialize(); // Serialize the form data
                // console.log(formData);
                var id = (document.getElementById('candidate_id').value);
                // console.log(id);
                $.ajax({
                    url: "{{ url('user/visaadd') }}/" + id,
                    type: "POST",
                    data: formData,
                    success: function(response) {
                        
                        console.log(response);
                        
                        Swal.fire({
                            title: response.title,
                            text: response.message,
                            icon: response.icon,
                            
                        });
                        setTimeout(function() {
                            window.location.reload();
                        }, 2000);
                                                
                    },
                    error: function(response) {
                      
                        console.log(response.title);
                        Swal.fire({
                            title: "Error",
                            text: "Cannot add candidate\n 1: Complete all fields are required\n 2: Same ID check",
                            icon: 'error',
                          
                        });
                        // setTimeout(function() {
                        //   window.location.reload();
                        // }, 2000);

                        
                    } 
               
                });
            });
        });
    </script>
</body>
</html>