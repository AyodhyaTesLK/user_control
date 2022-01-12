<div class="flex flex-col">

    {{-- API base URL --}}
    <div class="w-full py-2">
        <label for="sms_api_base_url" class="block text-sm font-medium text-gray-700">API base URL
            <span class="font-thin px-1">(optional)</span>
        </label>
        <input wire:model.lazy="sms_api_base_url" type="text" name="sms_api_base_url" id="sms_api_base_url"
            class="px-2 py-1.5 mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-sm">
        {{-- @error('sms_api_base_url') <span
                class="text-xs text-red-500 mt-1">{{ $message }}</span>
        @enderror --}}
    </div>

    {{-- sms_configuration_username --}}
    <div class="w-full py-2">
        <label for="sms_configuration_username" class="block text-sm font-medium text-gray-700">Username
            <span class="font-thin px-1">(optional)</span>
        </label>
        <input wire:model.lazy="sms_configuration_username" type="text" name="sms_configuration_username" id="sms_configuration_username"
            class="px-2 py-1.5 mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-sm">
        {{-- @error('sms_configuration_username') <span
                class="text-xs text-red-500 mt-1">{{ $message }}</span>
        @enderror --}}
    </div>

    {{-- sms_configuration_password --}}
    <div class="w-full py-2">
        <label for="text" class="block text-sm font-medium text-gray-700">Password
            <span class="font-thin px-1">(optional)</span>
        </label>

        <input wire:model.lazy="sms_configuration_password" type="text" name="sms_configuration_password" id="sms_configuration_password"
            class="px-2 py-1.5 mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-sm">
        {{-- @error('sms_configuration_password') <span
                class="text-xs text-red-500 mt-1">{{ $message }}</span>
        @enderror --}}
    </div>

    {{-- sms_configuration_key --}}
    <div class="w-full py-2">
        <label for="sms_configuration_key" class="block text-sm font-medium text-gray-700">Key
            <span class="font-thin px-1">(optional)</span>
        </label>

        <input wire:model.lazy="sms_configuration_key" type="text" name="sms_configuration_key" id="sms_configuration_key"
            class="px-2 py-1.5 mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-sm">
        {{-- @error('sms_configuration_key') <span
                class="text-xs text-red-500 mt-1">{{ $message }}</span>
        @enderror --}}
    </div>

    {{-- sms_configuration_mask --}}
    <div class="w-full py-2">
        <label for="sms_configuration_mask" class="block text-sm font-medium text-gray-700">Mask
            <span class="font-thin px-1">(optional)</span>
        </label>

        <input wire:model.lazy="sms_configuration_mask" type="text" name="sms_configuration_mask" id="sms_configuration_mask"
            class="px-2 py-1.5 mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-sm">
        {{-- @error('sms_configuration_mask') <span
                class="text-xs text-red-500 mt-1">{{ $message }}</span>
        @enderror --}}
    </div>

    {{-- sms_api_document_url --}}
    <div class="w-full py-2">
        <label for="sms_api_document_url" class="block text-sm font-medium text-gray-700">API Document URL
            <span class="font-thin px-1">(optional, if available)</span>
        </label>

        <input wire:model.lazy="sms_api_document_url" type="text" name="sms_api_document_url" id="sms_api_document_url"
            class="px-2 py-1.5 mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-sm">
        {{-- @error('sms_api_document_url') <span
                class="text-xs text-red-500 mt-1">{{ $message }}</span>
        @enderror --}}
    </div>
</div>
