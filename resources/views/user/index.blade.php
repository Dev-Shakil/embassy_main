<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <meta content="" name="description">
  <meta content="" name="keywords">


  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css">

  <!-- JavaScript -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
  <style>
      #candidatetable_filter{
        margin-bottom: 20px;
      }
      .tooltip {
      position: relative;
      display: inline-block;
    /* If you want dots under the hoverable text */
      }
    
    /* Tooltip text */
    .tooltip .tooltiptext {
      visibility: hidden;
      width: 200px;
      background-color: #92560c;
      color: #fff;
      border:1px solid white;
      text-align: center;
      padding: 3px 3px;
      font-size:14px;
      border-radius: 6px;
    
      /* Position the tooltip text - see examples below! */
      position: absolute;
      z-index: 1;
      right:10px;
      top:40px;
    }
    
    /* Show the tooltip text when you mouse over the tooltip container */
    .tooltip:hover .tooltiptext {
      visibility: visible;
    }
  </style> 
  <script>
    tailwind.config = {
      important:true,
      theme: {
        extend: {
          colors: {
            clifford: "#da373d",
          },
          backgroundImage:{
              'hero-pattern': "url('/asset/image/hero1.jpg')",
          }
        },
      },
    };
  </script>
  @include('layout.head')
</head>

<body>
  <div class="container-fluid">
   @include('layout.navbar')
  </div>
  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">contact@example.com</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>+1 5589 55488 55</span></i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
 
  <!-- ======= Hero Section ======= -->
  <section id="hero" class=" align-items-center">
   
    </div>
    @if(session('success'))
      <script>
          alert("{{ session('success') }}");
          {!! session()->forget('success') !!}
      </script>
    @endif


    <div class="modal fade" id="user" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Update User</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
             <form action="{{route('user/update')}}">
                @csrf
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Name</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="uname">
                  
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">What's App Number</label>
                  <input type="number" class="form-control" id="exampleInputPassword1" name="wsphn">
                </div>
                
                <button
                      type="submit"
                      class="bg-[#289788] hover:bg-[#074f56] p-3 rounded text-white font-semibold"
                    >
                     Save
                    </button>
             </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn" data-bs-dismiss="modal">Close</button>
           
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add New Candidate</h5>
            <button type="button" class="btn-close btn btn-outline-dark" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>

         
          <div class="modal-body">
              <form class="row g-3" id="addcandidate" action="{{route('user/index')}}" method="post">
                  @csrf
                      
                    <div class="px-10 gap-x-10 grid md:grid-cols-2">
                      <div class="py-1">
                      <div class="font-semibold text-lg" >Candidate Name </div>
                      <input type="text" class="form-control" id="pname" name="pname" placeholder="Candidate Name" required>
                    </div>
                    <div class="py-1">
                      <div class="font-semibold text-lg">Passport Number</div>
                      <input type="text" class="form-control" id="pnumber" name="pnumber" required placeholder="Passport Number">
                    </div>
                    <div class="py-1">
                      <div class="font-semibold text-lg">Passport Issue Date</div>
                      <input type="date" class="form-control" id="pass_issue_date" name="pass_issue_date">
                    </div>
                    <div class="py-1">
                      <div class="font-semibold text-lg">Passport Expire Date</div>
                      <input type="date" class="form-control" id="pass_expire_date" name="pass_expire_date">
                    </div>
                    <div class="py-1">
                      <div class="font-semibold text-lg">Date Of Birth</div>
                      <input type="date" class="form-control" id="date_of_birth" name="date_of_birth">
                    </div>
                    <div class="py-1">
                      <div class="font-semibold text-lg">Place Of Birth</div>
                      <input type="text" class="form-control" id="place_of_birth" name="place_of_birth" list="districts" placeholder="Apartment, studio, or floor">
                              <datalist id="districts">
                                <option value="Bagerhat">
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
                      <div class="font-semibold text-lg">Address</div>
                      <input type="text" class="form-control" id="address" name="address" placeholder="Apartment, studio, or floor">
                    </div>
                    <div class="py-1">
                      <div class="font-semibold text-lg">Fathers Name</div>
                      <input type="text" class="form-control" id="father" name="father" placeholder="Father's Name">
                    </div>
                    <div class="py-1">
                      <div class="font-semibold text-lg">Mothers Name</div>
                      <input type="text" class="form-control" id="mother" name="mother" placeholder="Mother's Name">
                    </div>
                    <div class="py-1">
                      <div class="font-semibold text-lg">Religion</div>
                      <select class="form-control p-2 rounded-lg w-full" size="large" placeholder="Select a religion" id="religion" name="religion">
                        <option selected>Choose...</option>
                        <option value="Muslim">Muslim</option>
                        <option value="Non Muslim">Non Muslim</option>
                      </select>
                    </div>
                    <div class="py-1">
                      <div class="font-semibold text-lg">Gender</div>
                      <select class="form-control p-2 rounded-lg w-full" size="large" placeholder="Select..."  name="gender" id="gender">
                        <option selected>Choose...</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                      </select>
                    </div>
                    <div class="py-1">
                      <div class="font-semibold text-lg">Marital Status</div>
                      <select id="inputState" class="form-select" name="married">
                        <option selected>Choose...</option>
                        <option value="Married">Married</option>
                        <option value="Unmarried">Unmarried</option>
                      </select>
                    </div>
                    <div class="py-1">
                      <div class="font-semibold text-lg">Medical Center Name</div>
                      <input type="text" class="form-control" id="medical_center_name" name="medical_center_name">
                    </div>
                    <div class="py-1">
                      <div class="font-semibold text-lg">Medical Issue Date</div>
                      <input type="date" class="form-control" id="medical_issue_date" name="medical_issue_date">
                    </div>
                    <div class="py-1">
                      <div class="font-semibold text-lg">Medical Expiry Date</div>
                      <input type="date" class="form-control" id="medical_expire_date" name="medical_expire_date">
                    </div>
                    <div class="py-1">
                      <div class="font-semibold text-lg">Driver Licence Number</div>
                      <input type="text" class="form-control" id="driving_licence" name="driving_licence">
                    </div>
                    <div class="py-1">
                      <div class="font-semibold text-lg">Police Clearence No</div>
                      <input type="text" class="form-control" id="police_licence" name="police_licence">
                    </div>
                  </div>
                  <div class="text-center">
                    <button
                      type="submit"
                      class="bg-[#289788] hover:bg-[#074f56] p-3 rounded text-white font-semibold"
                    >
                      Add Candidate
                    </button>
                  </div>
            </form>
          </div>  
          <div class="modal-footer">
            <button type="button" class=" bg-[#074f56] p-3 rounded text-white font-semibold" data-bs-dismiss="modal">Close</button>
        
          </div>
        </div>
      </div>
    </div>
     
    <div class="container mt-4">
      <caption class="fw-semibold text-center">Candidates</caption>
      <table class="table table-bordered border-primary" id="candidatetable">
        <thead>
          <tr>
            <th scope="col">Serial Number</th>
            <th scope="col">Creation Date</th>
            <th scope="col">Name</th>
            <th scope="col">Passport Number</th>
            <th scope="col" style="width: 20%">VISA/Sponsor Number</th>
            <th scope="col">MOFA Number</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach($candidates as $candidate)
          <tr>
            <th scope="row">{{$candidate->id}}</th>
            <td>{{$candidate->created_at}}</td>
            <td>{{$candidate->name}}</td>
            <td>{{$candidate->passport_number}}</td>
            <td><strong>Visa No:</strong> {{$candidate->visa_no}} </br>
                <strong>Sponsor No:</strong> {{$candidate->spon_id}}</td>
            </td>
            <td>{{$candidate->mofa_no}}</td>
            <td class="text-center p-2">
              <a href="{{ route('user/visaadd', ['id' => $candidate->id]) }}" target="_blank" class="fw-semibold text-primary"><i class="bi bi-file-earmark-plus"></i></a>
              <a href="{{ route('user/edit', ['id' => $candidate->id]) }}" target="_blank" class="fw-semibold text-success"><i class="bi bi-pencil-square"></i></a>
              <a href="{{ route('user/print', ['id' => $candidate->id]) }}" target="_blank" class="fw-semibold text-warning"><i class="bi bi-printer-fill"></i></a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>

  </section><!-- End Hero -->


  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  
  <script src="{{asset('assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
  <script src="{{asset('assets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/waypoints/noframework.waypoints.js')}}"></script>
  <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>

  <script src="{{asset('assets/js/main.js')}}"></script>
 @include('layout.script')
 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
 <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
<script>
$(document).ready(function() {
    $('#candidatetable').DataTable();
    $('#addcandidate').on('submit', function(e) {
        e.preventDefault();

        var form = $(this);
        var formData = form.serialize();
        console.log(formData);
        $.ajax({
              url: form.attr('action'),
              method: form.attr('method'),
              data: form.serialize(),
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
                  setTimeout(function() {
                    window.location.reload();
                  }, 2000);

                  
              }
          });
      });
});
document.getElementById('pass_issue_date').addEventListener('change', function() {
  var issueDate = new Date(this.value);
  var expireDate = new Date(issueDate.getFullYear() + 10, issueDate.getMonth(), issueDate.getDate());
  var formattedExpireDate = formatDate(expireDate);
  document.getElementById('pass_expire_date').value = formattedExpireDate;
});

function formatDate(date) {
  date.setDate(date.getDate() - 1); // Subtract 1 day from the date

  var year = date.getFullYear();
  var month = ('0' + (date.getMonth() + 1)).slice(-2);
  var day = ('0' + date.getDate()).slice(-2);

  return year + '-' + month + '-' + day;
}


</script>

</body>

</html>