 <div class="border-2 border-white text-white rounded-lg overflow-hidden">
     <div class=" pt-3">
         <ul class="nav nav-link-secondary flex-column fw-bold gap-2">
             <li class="nav-item">
                 <a class="{{ Route::is('dashboard') ? 'text-red-400' : 'text-white' }} nav-link "
                     href="{{ route('dashboard') }}">
                     <span>Home</span></a>
             </li>
             <li class="nav-item">
                 <a class="nav-link text-white" href="#">
                     <span>Explore</span></a>
             </li>
             <li class="nav-item">
                 <a class="{{ Route::is('feed') ? 'text-red-400' : 'text-white' }} nav-link" text-white"
                     href="{{ route('feed') }}">
                     <span>Feed</span></a>
             </li>
             <li class="nav-item">
                 <a class="{{ Route::is('terms') ? 'text-red-400' : 'text-white' }} nav-link"
                     href="{{ route('terms') }}">
                     <span>Terms</span></a>
             </li>
             <li class="nav-item">
                 <a class="nav-link text-white" href="#">
                     <span>Support</span></a>
             </li>
             <li class="nav-item">
                 <a class="nav-link text-white" href="#">
                     <span>Settings</span></a>
             </li>
         </ul>
     </div>
     <div class="bg-gray-300 text-center py-1">
         <a class="btn btn-link btn-sm" href="{{ route('profile') }}">View Profile </a>
     </div>
 </div>
