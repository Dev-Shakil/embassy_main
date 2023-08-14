<div class=" ">
  <nav class="w-full h-30 px-2 py-1 bg-gray-600 text-white flex items-center justify-between">
    <div class="flex items-center md:w-max w-full">
      <div class="flex md:block justify-between items-center mb-2 md:mb-0">
        <a href="{{route('user/index')}}" class=" text-none border-r-2 border-black text-lg font-semibold p-3 flex flex-col"><span class="text-center">حل الملف </span><span>File Solution</span></a>
        {{-- <a class="text-lg" href=""><i class="fa fa-list-alt text-xl pl-6 mr-2" aria-hidden="true"></i>Create Embassy List</a> --}}
      </div>
      <a class="text-lg hover:text-blue-200 font-semibold flex" href="{{route('user/embassy_list')}}" > <i class="fa fa-list-alt text-xl pl-6 mr-2" aria-hidden="true"></i><p class="md:block hidden"> Create Embassy List</p></a>
    </div>

    <div class=" items-center gap-2 flex justify-center space-x-2">
        

         <button  data-bs-toggle="modal" class="text-2xl w-full p-2 rounded-full border-1 border-white w-[40px] h-[40px] flex justify-center items-center" data-bs-target="#user" data-toggle="tooltip" data-placement="bottom" title="Edit Profile">
            <span><i class="fa-regular fa-user " ></i></span>
         </button>

      

         <button data-toggle="tooltip" class="text-2xl w-full p-2 rounded-full border-1 border-white w-[40px] h-[40px] flex justify-center items-center" data-placement="bottom" title="Notification">
           <span class=""><i class="bi bi-bell "></i></span>
         </button>
         <button class="text-xl flex  justify-center items-center p-3 shadow-xl border-1 border-white w-[40px] h-[40px] rounded-full font-bold" data-toggle="tooltip" data-placement="bottom" title="Logout" >
             <a href="{{route('user/logout')}}" class="flex gap-2 font-bold text-xl"><i class="bi text-white font-bold bi-box-arrow-left"></i></a>
             
         </button>
       
    
    </div>
</nav>
  {{-- <section id="topbar" class="d-flex align-items-center ">
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
  </section> --}}
</div>

  
