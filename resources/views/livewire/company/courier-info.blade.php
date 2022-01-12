<div class="flex flex-col">
    {{-- Courier credentials --}}
    <div class="w-full py-2">
        <label for="courier_credentials" class="block text-sm font-medium text-gray-700">Credentials
            <span class="font-thin px-1">(optional)</span>
        </label>
        <input wire:model.lazy="courier_credentials" type="text" name="courier_credentials" id="courier_credentials"
            class="px-2 py-1.5 mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-sm">
        {{-- @error('courier_credentials') <span
                class="text-xs text-red-500 mt-1">{{ $message }}</span>
        @enderror --}}
    </div>

    {{-- courier return address --}}
    <div class="w-full py-2">
        <label for="courier_return_address" class="block text-sm font-medium text-gray-700">Return
            address
            <span class="font-thin px-1">(optional)</span></label>
        <input wire:model.lazy="courier_return_address" type="text" name="courier_return_address" id="courier_return_address"
            class="px-2 py-1.5 mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-sm">
        {{-- @error('courier_return_address') <span
                class="text-xs text-red-500 mt-1">{{ $message }}</span>
        @enderror --}}
    </div>

    {{-- courier account id --}}
    <div class="w-full py-2">
        <label for="courier_account_id" class="block text-sm font-medium text-gray-700">Acount ID
            <span class="font-thin px-1">(optional)</span>
        </label>
        <input wire:model.lazy="courier_account_id" type="text" name="courier_account_id" id="courier_account_id"
            class="px-2 py-1.5 mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-sm">
        {{-- @error('courier_account_id') <span
                class="text-xs text-red-500 mt-1">{{ $message }}</span>
        @enderror --}}
    </div>

    {{-- courier return email --}}
    <div class="w-full py-2">
        <label for="courier_return_email" class="block text-sm font-medium text-gray-700">Return email
            <span class="font-thin px-1">(optional)</span>
        </label>
        <input wire:model.lazy="courier_return_email" type="text" name="courier_return_email" id="courier_return_email"
            class="px-2 py-1.5 mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-sm">
        {{-- @error('courier_return_email') <span
                class="text-xs text-red-500 mt-1">{{ $message }}</span>
        @enderror --}}
    </div>

    {{-- courier return api doc --}}
    <div class="w-full py-2">
        <label for="courier_api_doc_url" class="block text-sm font-medium text-gray-700">API document
            URL
            <span class="font-thin px-1">(optional)</span>
        </label>
        <input wire:model.lazy="courier_api_doc_url" type="text" name="courier_api_doc_url" id="courier_api_doc_url"
            class="px-2 py-1.5 mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-sm">
        {{-- @error('courier_api_doc_url') <span
                class="text-xs text-red-500 mt-1">{{ $message }}</span>
        @enderror --}}
    </div>

    {{-- courier_logo --}}
    <div class="w-full py-2">
        <label for="courier_logo" class="block text-sm font-medium text-gray-700">Logo
            <span class="font-thin px-1">(optional)</span>
        </label>
        <input wire:model.lazy="courier_logo" type="file" name="courier_logo" id="courier_logo"
            class="py-1.5 mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-sm">
        {{-- @error('email') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror --}}
    </div>
</div>
