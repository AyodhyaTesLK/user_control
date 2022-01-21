<div class="flex flex-col">

    {{-- first name --}}
    <div class="flex">
        <div class="w-full py-2 mr-2">
            <label for="first_name" class="block text-sm font-medium text-gray-700">First name</label>
            <input wire:model.lazy="companies.first_name" type="text" name="first_name" id="first_name"
                autocomplete="given-name"
                class="px-2 py-1.5 mt-1 focus:ring-indigo-100 focus:border-indigo-100 block w-full shadow-sm sm:text-sm border-gray-300 rounded-sm">
            @error('companies.first_name')
                <span class="text-xs text-red-500 mt-1">{{ $message }}</span>
            @enderror
        </div>

        {{-- last name --}}
        <div class="w-full py-2 ml-2">
            <label for="last_name" class="block text-sm font-medium text-gray-700">Last name</label>
            <input wire:model.lazy="companies.last_name" type="text" name="last_name" id="last_name"
                autocomplete="family-name"
                class="px-2 py-1.5 mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-sm">
            @error('last_name')
                <span class="text-xs text-red-500 mt-1">{{ $message }}</span>
            @enderror
        </div>
    </div>


    {{-- email --}}
    <div class="w-full py-2">
        <label for="email_address" class="block text-sm font-medium text-gray-700">Email
            address</label>
        <input wire:model.lazy="companies.email_address" type="text" name="email_address" id="email_address"
            autocomplete="email"
            class="px-2 py-1.5 mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-sm">
        @error('email_address')
            <span class="text-xs text-red-500 mt-1">{{ $message }}</span>
        @enderror
    </div>

    {{-- address line 1 --}}
    <div class="w-full py-2">
        <label for="address_line_1" class="block text-sm font-medium text-gray-700">Address Line 1
            <span class="font-thin px-1">(optional)</span>
        </label>
        <input wire:model.lazy="companies.addressline1" type="text" name="address_line_1" id="address_line_1"
            autocomplete="address line 2"
            class="px-2 py-1.5 mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-sm">
        @error('address_line_1')
            <span class="text-xs text-red-500 mt-1">{{ $message }}</span>
        @enderror
    </div>

    {{-- address line 2 --}}
    <div class="w-full py-2">
        <label for="address_line_2" class="block text-sm font-medium text-gray-700">Address Line 2
            <span class="font-thin px-1">(optional)</span>
        </label>

        <input wire:model.lazy="companies.addressline2" type="text" name="address_line_2" id="address_line_2"
            autocomplete="address line 2"
            class="px-2 py-1.5 mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-sm">
        @error('address_line_2')
            <span class="text-xs text-red-500 mt-1">{{ $message }}</span>
        @enderror
    </div>

    <div class="flex">
        {{-- city --}}
        <div class="w-full py-2 mr-2">
            <label for="city" class="block text-sm font-medium text-gray-700">City
                <span class="font-thin px-1">(optional)</span>
            </label>
            <input wire:model.lazy="companies.city" type="text" name="city" id="city" autocomplete="city"
                class="px-2 py-1.5 mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-sm">
            {{-- @error('email') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror --}}
        </div>
        {{-- country --}}
        <div class="w-full py-2 ml-2">
            <label for="country" class="block text-sm font-medium text-gray-700">Country
                <span class="font-thin px-1">(optional)</span>
            </label>
            <input wire:model.lazy="companies.country" type="text" name="country" id="country" autocomplete="country"
                class="px-2 py-1.5 mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-sm">
            {{-- @error('email') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror --}}
        </div>
    </div>

    {{-- hot_line_contact --}}
    <div class="w-full py-2">
        <label for="hot_line_contact" class="block text-sm font-medium text-gray-700">Hot line contact
            <span class="font-thin px-1">(optional)</span>
        </label>
        <input wire:model.lazy="companies.hot_line_contact" type="text" name="hot_line_contact" id="hot_line_contact"
            autocomplete="phone"
            class="px-2 py-1.5 mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-sm">
        {{-- @error('email') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror --}}
    </div>

    {{-- operation_email --}}
    <div class="w-full py-2">
        <label for="operation_email" class="block text-sm font-medium text-gray-700">Operation email
            <span class="font-thin px-1">(optional)</span>
        </label>
        <input wire:model.lazy="companies.operation_email" type="text" name="operation_email" id="operation_email"
            autocomplete="email"
            class="px-2 py-1.5 mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-sm">
        {{-- @error('email') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror --}}
    </div>

    {{-- helpdesk_email --}}
    <div class="w-full py-2">
        <label for="helpdesk_email" class="block text-sm font-medium text-gray-700">Help desk email
            <span class="font-thin px-1">(optional)</span>
        </label>
        <input wire:model.lazy="companies.helpdesk_email" type="text" name="helpdesk_email" id="helpdesk_email"
            autocomplete="email"
            class="px-2 py-1.5 mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-sm">
        {{-- @error('email') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror --}}
    </div>

    {{-- customer_support_email --}}
    <div class="w-full py-2">
        <label for="customer_support_email" class="block text-sm font-medium text-gray-700">Customer support email
            <span class="font-thin px-1">(optional)</span>
        </label>
        <input wire:model.lazy="companies.customer_support_email" type="text" name="customer_support_email"
            id="customer_support_email" autocomplete="email"
            class="px-2 py-1.5 mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-sm">
        {{-- @error('email') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror --}}
    </div>

    {{-- supply_email --}}
    <div class="w-full py-2">
        <label for="supply_email" class="block text-sm font-medium text-gray-700">Supply email
            <span class="font-thin px-1">(optional)</span>
        </label>
        <input wire:model.lazy="companies.supply_email" type="text" name="supply_email" id="supply_email"
            autocomplete="email"
            class="px-2 py-1.5 mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-sm">
        {{-- @error('email') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror --}}
    </div>
    {{-- // $table->string('hot_line_contact');
            // $table->string('operation_email');
            // $table->string('helpdesk_email');
            // $table->string('customer_support_email');
            // $table->string('supply_email'); --}}

    {{-- logo --}}
    <div class="w-full py-2">
        <label for="logo" class="block text-sm font-medium text-gray-700">Logo
            <span class="font-thin px-1">(optional)</span>
        </label>
        <input wire:model.lazy="companies.logo" type="file" name="logo" id="logo" autocomplete="logo"
            class=" py-1.5 mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-sm">
        {{-- @error('email') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror --}}
    </div>
</div>
