<div>
    {{-- <div>
        <h1>{{ $storefronts[0]['province'] }}</h1>
     </div> --}}
 
   <div 
     x-data="{
       openTab: 1,
       activeClasses: 'border-l border-t border-r rounded-t text-blue-700',
       inactiveClasses: 'text-blue-500 hover:text-blue-800'
     }" 
     class="p-6"
   >
     <ul class="flex border-b">
       <li @click="openTab = 1" :class="{ '-mb-px': openTab === 1 }" class="-mb-px mr-1">
         <a :class="openTab === 1 ? activeClasses : inactiveClasses" class="bg-white inline-block py-2 px-4 font-semibold" href="#">
           Email
         </a>
       </li>
       <li @click="openTab = 2" :class="{ '-mb-px': openTab === 2 }" class="mr-1">
         <a :class="openTab === 2 ? activeClasses : inactiveClasses" class="bg-white inline-block py-2 px-4 font-semibold" href="#">SMS</a>
       </li>
       <li @click="openTab = 3" :class="{ '-mb-px': openTab === 3 }" class="mr-1">
         <a :class="openTab === 3 ? activeClasses : inactiveClasses" class="bg-white inline-block py-2 px-4 font-semibold" href="#">Social media</a>
       </li>
       <li @click="openTab = 4" :class="{ '-mb-px': openTab === 4 }" class="mr-1">
         <a :class="openTab === 4 ? activeClasses : inactiveClasses" class="bg-white inline-block py-2 px-4 font-semibold" href="#">Order fullfillment</a>
       </li>
     </ul>
     <div class="w-full pt-4">
       <div x-show="openTab === 1">@include('livewire.company.tab.email-tab')</div>
       <div x-show="openTab === 2">@include('livewire.company.tab.sms-tab')</div>
       <div x-show="openTab === 3">@include('livewire.company.tab.socialmedia-tab')</div>
       <div x-show="openTab === 4">@include('livewire.company.tab.order-fulfillment-tab')</div>
     </div>
   </div>
 
   <!-- Alpine.js -->
   <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
 
 </div>