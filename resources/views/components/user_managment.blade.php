<div>
    <div class="flex justify-between px-8 py-3  shadow-md">

        <div class="flex space-x-4">
            <!-- user managment heading -->
            <div class="">
                <a href="#d" class="flex items-center  text-gray-700 hover:text-gray-900">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                    </svg>
                    <span class="font-bold font-sans uppercase text-2xl px-2">user managment</span>
                </a>
            </div>


        </div>

        <!-- secondary nav -->
        <div class="flex items-center space-x-4 ">
            <div class=" relative mx-auto text-gray-600">
                <input class="border-2 border-gray-300 bg-white h-10 px-5 pr-16 rounded-lg text-sm focus:outline-none" type="search" name="search" placeholder="Search">
                <button type="submit" class="absolute right-0 top-0 mt-3 mr-4">
                    <svg class=" text-gray-600 h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve" width="512px" height="512px">
                        <path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
                    </svg>
                </button>
            </div>

            <a href="#" class="py-2 px-3 bg-green-500 hover:bg-green-600 text-white rounded transition duration-300 text-base flex">Add User
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 ml-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                </svg>
            </a>
        </div>

    </div>


    <div class="flex justify-between px-8  text-lg font-semibold items-center my-8">
        <div>
            <p>Showing 12 out of 100</p>
        </div>

        <div>
            <button class="py-2 px-6 text-md bg-gray-300  rounded-tl-lg rounded-bl-lg shadow-md -m-2 text-gray-700 font-semibold">Back</button>
            <button class="py-2 px-6 text-md bg-gray-300  rounded-tr-lg rounded-br-lg shadow-md text-gray-700 font-semibold">Next</button>
        </div>


    </div>


    <div class=" shadow-md sm:rounded-lg mx-8">
        <table class="w-full rounded-tl-md rounded-tr-md">
            <thead class="dark:bg-gray-200">
                <tr>
                    <th scope="col" class="px-6 py-4 text-sm font-semibold tracking-wider text-left uppercase ">
                        Client Name
                    </th>
                    <th scope="col" class="px-6 py-3 text-sm font-semibold tracking-wider text-left  uppercase ">
                        Username
                    </th>
                    <th scope="col" class="px-6 py-3 text-sm font-semibold tracking-wider text-left  uppercase ">
                        Email
                    </th>
                    <th scope="col" class="px-6 py-3 text-sm font-semibold tracking-wider text-left  uppercase ">
                        CRM/360
                    </th>
                    <th scope="col" class="px-6 py-3 text-sm font-semibold tracking-wider text-left  uppercase ">
                        Created Date
                    </th>
                    <th scope="col" class="px-6 py-3 text-sm font-semibold tracking-wider text-left  uppercase ">
                        Last Login
                    </th>
                    <th scope="col" class="px-6 py-3 text-sm font-semibold tracking-wider text-left  uppercase ">
                        Status
                    </th>
                    <th scope="col" class="px-6 py-3 text-sm font-semibold tracking-wider text-left  uppercase">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                <!-- Product 1 -->
                <tr class="border-b  ">
                    <!-- name -->
                    <td class="px-6 py-4 text-sm font-medium text-gray-800 ">
                        Ayodhya Ratnayake
                    </td>

                    <!-- Username -->
                    <td class="px-6 py-4 text-sm font-medium text-gray-800 ">
                        Ayodhya
                    </td>

                    <!-- email -->
                    <td class="px-6 py-4 text-sm font-medium text-gray-800 ">
                        ayodhyaratnayake7001@gmail.com
                    </td>

                    <!-- CRM/360 -->
                    <td class="px-6 py-4 text-sm  ">
                        <button class="px-2 py-1 bg-blue-500 rounded-lg mx-1 font-semibold text-white">CRM</button>
                        <button class="px-2 py-1 bg-yellow-500 rounded-lg font-semibold text-white">360</button>
                    </td>

                    <!-- created date -->
                    <td class="px-6 py-4 text-sm font-medium  whitespace-nowrap">
                        2021-02-04
                    </td>

                    <!-- last login -->
                    <td class="px-6 py-4 text-sm font-medium  whitespace-nowrap">
                        2021-02-04 ; 15:32
                    </td>

                    <!-- status -->
                    <td class="px-6 py-4 text-sm font-medium  whitespace-nowrap">
                        <button class="px-2 py-1 bg-green-500 rounded-lg mx-1 font-semibold text-white">Active</button>
                    </td>

                    <!-- action -->
                    <td class="px-6 py-4 text-sm font-medium  whitespace-nowrap">
                        <button class="bg-slate-200 rounded-md p-2 shadow-xl">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                            </svg>
                        </button>

                        <button class="bg-red-500 rounded-md p-2 shadow-2xl mx-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="white">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                            </svg>
                        </button>

                    </td>
                </tr>

                <tr class="border-b  ">
                    <!-- name -->
                    <td class="px-6 py-4 text-sm font-medium text-gray-800 ">
                        Ayodhya Ratnayake
                    </td>

                    <!-- Username -->
                    <td class="px-6 py-4 text-sm font-medium text-gray-800 ">
                        Ayodhya
                    </td>

                    <!-- email -->
                    <td class="px-6 py-4 text-sm font-medium text-gray-800 ">
                        ayodhyaratnayake7001@gmail.com
                    </td>

                    <!-- CRM/360 -->
                    <td class="px-6 py-4 text-sm  ">
                        <button class="px-2 py-1 bg-blue-500 rounded-lg mx-1 font-semibold text-white">CRM</button>
                        <button class="px-2 py-1 bg-yellow-500 rounded-lg font-semibold text-white">360</button>
                    </td>

                    <!-- created date -->
                    <td class="px-6 py-4 text-sm font-medium  whitespace-nowrap">
                        2021-02-04
                    </td>

                    <!-- last login -->
                    <td class="px-6 py-4 text-sm font-medium  whitespace-nowrap">
                        2021-02-04 ; 15:32
                    </td>

                    <!-- status -->
                    <td class="px-6 py-4 text-sm font-medium  whitespace-nowrap">
                        <button class="px-2 py-1 bg-green-500 rounded-lg mx-1 font-semibold text-white">Active</button>
                    </td>

                    <!-- action -->
                    <td class="px-6 py-4 text-sm font-medium  whitespace-nowrap">
                        <button class="bg-slate-200 rounded-md p-2 shadow-xl">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                            </svg>
                        </button>

                        <button class="bg-red-500 rounded-md p-2 shadow-2xl mx-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="white">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                            </svg>
                        </button>

                    </td>
                </tr>

                <tr class="border-b  ">
                    <!-- name -->
                    <td class="px-6 py-4 text-sm font-medium text-gray-800 ">
                        Ayodhya Ratnayake
                    </td>

                    <!-- Username -->
                    <td class="px-6 py-4 text-sm font-medium text-gray-800 ">
                        Ayodhya
                    </td>

                    <!-- email -->
                    <td class="px-6 py-4 text-sm font-medium text-gray-800 ">
                        ayodhyaratnayake7001@gmail.com
                    </td>

                    <!-- CRM/360 -->
                    <td class="px-6 py-4 text-sm  ">
                        <button class="px-2 py-1 bg-blue-500 rounded-lg mx-1 font-semibold text-white">CRM</button>
                        <button class="px-2 py-1 bg-yellow-500 rounded-lg font-semibold text-white">360</button>
                    </td>

                    <!-- created date -->
                    <td class="px-6 py-4 text-sm font-medium  whitespace-nowrap">
                        2021-02-04
                    </td>

                    <!-- last login -->
                    <td class="px-6 py-4 text-sm font-medium  whitespace-nowrap">
                        2021-02-04 ; 15:32
                    </td>

                    <!-- status -->
                    <td class="px-6 py-4 text-sm font-medium  whitespace-nowrap">
                        <button class="px-2 py-1 bg-green-500 rounded-lg mx-1 font-semibold text-white">Active</button>
                    </td>

                    <!-- action -->
                    <td class="px-6 py-4 text-sm font-medium  whitespace-nowrap">
                        <button class="bg-slate-200 rounded-md p-2 shadow-xl">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                            </svg>
                        </button>

                        <button class="bg-red-500 rounded-md p-2 shadow-2xl mx-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="white">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                            </svg>
                        </button>

                    </td>
                </tr>





            </tbody>
        </table>

    </div>
</div>