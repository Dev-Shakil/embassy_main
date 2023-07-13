<nav class="w-full h-30 px-7 py-3 bg-[#225672] text-white flex items-center justify-between">
    <div>
        <a href="{{route('user/index')}}" class="border-r-2 border-black text-lg font-semibold p-3">File Solution</a>
        {{-- <a class="text-lg" href=""><i class="fa fa-list-alt text-xl pl-6 mr-2" aria-hidden="true"></i>Create Embassy List</a> --}}
        <a class="text-lg" href="{{route('user/embassy_list')}}"> <i class="fa fa-list-alt text-xl pl-6 mr-2" aria-hidden="true"></i>Create Embassy List</a>
    </div>
   
    <div class="right flex items-center gap-2 space-x-2">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Add candidate
        </button>

        <button  data-bs-toggle="modal" data-bs-target="#user">
            <span><i class="fa-regular fa-user font-semibold" ></i></span>
         </button>
         <button >
     
           <i class="bi bi-bell text-xl"></i>
         </button>
         <div>
           <a href="" class=" text-xl font-semibold p-3 tooltip">
             
           </a>
         </div>
    </div>
    
</nav>