<x-layout>
    <div class="w-full">

        <!-- add user heading start-->
        <div class="flex justify-between px-8 py-3  shadow-md   ">
            <div class="flex space-x-4">
                <div class="">
                    <a href="#d" class="flex items-center  text-gray-700 hover:text-gray-900">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                        </svg>
                        <span class="font-bold font-sans uppercase text-2xl px-2">user managment</span>
                    </a>
                </div>
            </div>
        </div>
        <!-- add user heading end -->


        <div class="grid grid-cols-12 gap-10 m-10">


            <!-- flex-1 -->
            <div class="col-span-3">

                {{-- image upload --}}
                <div class="py-3 ">
                    <div class="bg-white px-4 py-5 rounded-lg shadow-lg text-center w-48 mx-auto">
                        <div class="mb-4">
                            <img class="w-auto mx-auto rounded-full object-cover object-center"
                                src="https://i1.pngguru.com/preview/137/834/449/cartoon-cartoon-character-avatar-drawing-film-ecommerce-facial-expression-png-clipart.jpg"
                                alt="Avatar Upload" />
                        </div>
                        <label class="cursor-pointer mt-6">
                            <span
                                class="mt-2 text-base leading-normal px-4 py-2 bg-blue-500 text-white  rounded-full">Select
                                Avatar</span>
                            <form action="{{ url('users/' .$user->id) }}" method="POST" enctype="multipart/form-data"
                                name="userData">
                                {!! csrf_field() !!}
                                @method("PATCH")
                                <input type='file' class="hidden" :multiple="multiple" :accept="accept"
                                    name="img_url" />
                        </label>
                    </div>
                </div>

                <div class=" ">
                    <div class="">
                        <p class="mt-4 mb-4 underline font-semibold">Accounts</p>
                        <div class="flex justify-center">
                            <!-- 360 -->
                            <a href="#"
                                class="m-2 bg-yellow-400 px-8 py-2 rounded-lg font-semibold text-cyan-50 shadow-md hover:bg-yellow-500">360</a>

                            <!-- CRM -->
                            <a href="#"
                                class="m-2 bg-red-400 px-8 py-2 rounded-lg font-semibold text-cyan-50 shadow-md hover:bg-red-500">CRM</a>

                            <!-- OPS -->
                            <a href="#"
                                class="m-2 bg-blue-400 px-8 py-2 rounded-lg font-semibold text-cyan-50 shadow-md hover:bg-blue-500">OPS</a>
                        </div>
                    </div>

                    <div class="mt-8 ">

                        <p class="mt-4 mb-4 underline font-semibold">Accounts Setting</p>

                        <div class="flex-col">

                            <!-- Edit -->
                            <div class="mb-6">
                                <a href="#"
                                    class="m-2 mb-24 bg-green-400 px-4 py-2 rounded-lg font-semibold text-cyan-50 shadow-md hover:bg-green-500">Edit
                                    Account</a>
                            </div>

                            <!-- Disable -->
                            <div class="mb-6">
                                <a href="#"
                                    class="m-2 bg-red-400 px-4 py-2 rounded-lg font-semibold text-cyan-50 shadow-md hover:bg-red-500">Deactivate
                                    Account</a>
                            </div>

                            <!-- Delete -->
                            <div>
                                <a href="#"
                                    class="m-2 bg-red-500 px-4 py-2 rounded-lg font-semibold text-cyan-50 shadow-md hover:bg-red-600">Delete
                                    Account</a>
                            </div>

                        </div>

                    </div>
                </div>


            </div>


            <!-- flex-2 -->
            <div class="col-span-5">

                @csrf
                <!-- Username -->
                <label for="username-adress-icon" class="block mb-2 text-sm font-medium ">Username</label>
                <div class="relative mt-1 mb-8">
                    <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="gray">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                    </div>
                    <input type="text" id="username-adress-icon" name="username"
                        class=" border   text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  "
                        placeholder="name@gmail.com" value="{{$user->username}}">
                </div>

                <div class="flex  ">
                    <!-- First Name -->
                    <div class="mr-10 w-full">
                        <label for="first-name-adress-icon" class="block mb-2 text-sm font-medium ">First
                            Name</label>
                        <div class="relative mt-1 mb-8">
                            <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                    viewBox="0 0 24 24" stroke="gray">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>
                            </div>
                            <input type="text" id="first-name-adress-icon" name="fname"
                                class=" border   text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  "
                                placeholder="First Name" value="{{$user->name}}">
                            @error('fname')
                                <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>


                    <div class="w-full">
                        <!-- Last Name -->
                        <label for="last-name-adress-icon" class="block mb-2 text-sm font-medium ">Last Name</label>
                        <div class="relative mt-1 mb-8">
                            <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                    viewBox="0 0 24 24" stroke="gray">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>
                            </div>
                            <input type="text" id="last-name-adress-icon" name="lname"
                                class=" border   text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  "
                                placeholder="name@gmail.com">
                        </div>
                    </div>
                </div>

                <!-- email -->
                <label for="email-adress-icon" class="block mb-2 text-sm font-medium ">Email</label>
                <div class="relative mt-1 mb-8">
                    <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="gray">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <input type="text" id="email-adress-icon" name="email"
                        class=" border   text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  "
                        placeholder="name@gmail.com" value="{{ $user->email }}">
                </div>


                <!-- password -->
                <label for="password-adress-icon" class="block mb-2 text-sm font-medium ">Password</label>
                <div class="relative mt-1 mb-8">
                    <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="gray">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z" />
                        </svg>
                    </div>
                    <input type="password" id="password-adress-icon" name="password"
                        class=" border   text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  "
                        placeholder="name@gmail.com">
                </div>


                <!-- confirm passsword -->
                <label for="password-adress-icon" class="block mb-2 text-sm font-medium ">Confirm Password</label>
                <div class="relative mt-1 mb-8">
                    <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="gray">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                        </svg>
                    </div>
                    <input type="password" id="password-adress-icon" name="confirm-password"
                        class=" border   text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  "
                        placeholder="name@gmail.com">
                </div>

                {{-- checkbox --}}
                {{-- <div>
                        <label for="password-adress-icon" class="block mb-2 text-sm font-medium ">Select One Or
                            More</label>
                        <div class="flex">
                            <div id="ck-button"
                                class="m-1 bg-orange-300 rounded-sm border-solid float-left overflow-auto hover:bg-red-600">
                                <label class="float-left w-16">
                                    <input type="checkbox" value="1"
                                        class="absolute mr-28 -top-4 checked:bg-cyan-800 checked:text-white">
                                    <span
                                        class="text-center pl-1 pt-0 block checked:bg-cyan-800 checked:text-white m-0 p-0">CRM</span>
                                </label>
                            </div>
                        </div>
                    </div> --}}


                <label for="password-adress-icon" class="block mb-4 text-sm font-medium ">Select One or More</label>

                <div class=" flex">

                    <div class="w-full bg-yellow-400 rounded-sm m-1">

                        <label for="toggleA" class="flex justify-between cursor-pointer  m-4 "> 
                            <div class="font-medium text-white">
                                360
                            </div>
                            <!-- toggle -->
                            <div class="relative">
                                <!-- input -->
                                <input type="checkbox" id="toggleA" class="sr-only" name="has_360" @if ($user->has_360) checked @endif>
                                <!-- line -->
                                <div class="block bg-gray-600 w-10 h-6 rounded-full"></div>
                                <!-- dot -->
                                <div class="dot absolute left-1 top-1 bg-white w-4 h-4 rounded-full transition">
                                </div>
                            </div>
                            <!-- label -->

                        </label>

                    </div>

                    <div class="w-full bg-red-400 rounded-sm m-1">

                        <label for="toggleB" class="flex justify-between cursor-pointer  m-4 ">
                            <div class="font-medium text-white">
                                CRM
                            </div>
                            <!-- toggle -->
                            <div class="relative">
                                <!-- input -->
                                <input type="checkbox" id="toggleB" class="sr-only" name="has_crm" @if ($user->has_crm) checked @endif>
                                <!-- line -->
                                <div class="block bg-gray-600 w-10 h-6 rounded-full"></div>
                                <!-- dot -->
                                <div class="dot absolute left-1 top-1 bg-white w-4 h-4 rounded-full transition">
                                </div>
                            </div>
                            <!-- label -->

                        </label>

                    </div>

                    <div class="w-full bg-blue-400 rounded-sm m-1">

                        <label for="toggleC" class="flex justify-between cursor-pointer  m-4 ">
                            <div class="font-medium text-white">
                                OPS
                            </div>
                            <!-- toggle -->
                            <div class="relative">
                                <!-- input -->
                                <input type="checkbox" id="toggleC" class="sr-only" name="has_ops">
                                <!-- line -->
                                <div class="block bg-gray-600 w-10 h-6 rounded-full"></div>
                                <!-- dot -->
                                <div class="dot absolute left-1 top-1 bg-white w-4 h-4 rounded-full transition">
                                </div>
                            </div>
                            <!-- label -->

                        </label>

                    </div>

                </div>

                {{-- toggle checkbox --}}



                {{-- <div class="mt-4">
                    <label for="username-error"
                        class="block mb-2 text-sm font-medium text-red-700 dark:text-red-500">Your name</label>
                    <input type="text" id="username-error"
                        class="bg-red-50 border border-red-500 text-red-900 placeholder-red-700 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5 dark:bg-red-100 dark:border-red-400"
                        placeholder="Bonnie Green">
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oops!</span>
                        Username already taken!</p>
                </div> --}}



               
                <br><br>
                <div> 
                    <button type="submit" class="submit px-8 py-2 bg-green-500 rounded-sm mt-12">Save Changes</button>
                </div>
                </form>
            </div>


            <!-- flex-3 -->
            <div class="col-span-4">
                <p class="font-semibold">history</p>
                <div class="overflow-y-auto h-screen grid grid-cols-1 divide-y">
                    <p class="w-full mb-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eveniet
                        provident et non, at enim beatae! Vitae ipsum voluptate reprehenderit facilis. Nulla quas autem
                        odio, distinctio numquam nemo molestias a quod.</p>
                    <p class="w-full mb-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eveniet
                        provident et non, at enim beatae! Vitae ipsum voluptate reprehenderit facilis. Nulla quas autem
                        odio, distinctio numquam nemo molestias a quod.</p>
                    <p class="w-full mb-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eveniet
                        provident et non, at enim beatae! Vitae ipsum voluptate reprehenderit facilis. Nulla quas autem
                        odio, distinctio numquam nemo molestias a quod.</p>
                    <p class="w-full mb-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eveniet
                        provident et non, at enim beatae! Vitae ipsum voluptate reprehenderit facilis. Nulla quas autem
                        odio, distinctio numquam nemo molestias a quod.</p>
                    <p class="w-full mb-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eveniet
                        provident et non, at enim beatae! Vitae ipsum voluptate reprehenderit facilis. Nulla quas autem
                        odio, distinctio numquam nemo molestias a quod.</p>
                    <p class="w-full mb-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eveniet
                        provident et non, at enim beatae! Vitae ipsum voluptate reprehenderit facilis. Nulla quas autem
                        odio, distinctio numquam nemo molestias a quod.</p>
                    <p class="w-full mb-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eveniet
                        provident et non, at enim beatae! Vitae ipsum voluptate reprehenderit facilis. Nulla quas autem
                        odio, distinctio numquam nemo molestias a quod.</p>
                    <p class="w-full mb-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eveniet
                        provident et non, at enim beatae! Vitae ipsum voluptate reprehenderit facilis. Nulla quas autem
                        odio, distinctio numquam nemo molestias a quod.</p>
                    <p class="w-full mb-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eveniet
                        provident et non, at enim beatae! Vitae ipsum voluptate reprehenderit facilis. Nulla quas autem
                        odio, distinctio numquam nemo molestias a quod.</p>
                    <p class="w-full mb-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eveniet
                        provident et non, at enim beatae! Vitae ipsum voluptate reprehenderit facilis. Nulla quas autem
                        odio, distinctio numquam nemo molestias a quod.</p>
                    <p class="w-full mb-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eveniet
                        provident et non, at enim beatae! Vitae ipsum voluptate reprehenderit facilis. Nulla quas autem
                        odio, distinctio numquam nemo molestias a quod.</p>
                    <p class="w-full mb-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eveniet
                        provident et non, at enim beatae! Vitae ipsum voluptate reprehenderit facilis. Nulla quas autem
                        odio, distinctio numquam nemo molestias a quod.</p>
                    <p class="w-full mb-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eveniet
                        provident et non, at enim beatae! Vitae ipsum voluptate reprehenderit facilis. Nulla quas autem
                        odio, distinctio numquam nemo molestias a quod.</p>
                    <p class="w-full mb-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eveniet
                        provident et non, at enim beatae! Vitae ipsum voluptate reprehenderit facilis. Nulla quas autem
                        odio, distinctio numquam nemo molestias a quod.</p>
                </div>
            </div>

        </div>
    </div>


</x-layout>
