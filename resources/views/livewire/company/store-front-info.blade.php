<div class="flex flex-col">
    {{-- storefront url --}}
    <div class="w-full py-2">
        <label for="storefront_url" class="block text-sm font-medium text-gray-700">URL
            <span class="font-thin px-1">(optional)</span>
        </label>
        <input wire:model.lazy="storefronts.url" type="text" name="storefront_url" id="storefront_url"
            class="px-2 py-1.5 mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-sm">
        {{-- @error('email') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror --}}
    </div>

    {{-- storefront_key --}}
    <div class="w-full py-2">
        <label for="storefront_key" class="block text-sm font-medium text-gray-700">Key
            <span class="font-thin px-1">(optional)</span>
        </label>
        <input wire:model.lazy="storefronts.key" type="text" name="storefront_key" id="storefront_key"
            class="px-2 py-1.5 mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-sm">
        {{-- @error('confirmPassword')
            <span class="text-xs text-red-500 mt-1">{{ $message }}</span>
        @enderror --}}
    </div>

    {{-- storefront password --}}
    <div class="w-full py-2">
        <label for="storefront_password" class="block text-sm font-medium text-gray-700">Password
            <span class="font-thin px-1">(optional)</span>
        </label>
        <input wire:model.lazy="storefronts.password" type="text" name="storefront_password" id="storefront_password"
            class="px-2 py-1.5 mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-sm">
        @error('storefront.password')
            <span class="text-xs text-red-500 mt-1">{{ $message }}</span>
        @enderror
    </div>

    {{-- storefront hook secret --}}
    <div class="w-full py-2">
        <label for="storefront_hook_secret" class="block text-sm font-medium text-gray-700">Hook secret
            <span class="font-thin px-1">(optional)</span>
        </label>
        <input wire:model.lazy="storefronts.hook_secret" type="text" name="storefront_hook_secret" id="storefront_hook_secret"
            class="px-2 py-1.5 mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-sm">
        @error('storefront_hook_secret')
            <span class="text-xs text-red-500 mt-1">{{ $message }}</span>
        @enderror
    </div>

    <div class="flex">
        {{-- storefront store city --}}
        <div class="w-full py-2 mr-2">
            <label for="storefront_city" class="block text-sm font-medium text-gray-700">City
                <span class="font-thin px-1">(optional)</span>
            </label>
            <input wire:model.lazy="storefronts.city" type="text" name="storefront_city" id="storefront_city"
                class="px-2 py-1.5 mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-sm">
            @error('storefront_city')
                <span class="text-xs text-red-500 mt-1">{{ $message }}</span>
            @enderror
        </div>

        {{-- store front country --}}
        <div class="w-full py-2 ml-2">
            <label for="storefront_country" class="block text-sm font-medium text-gray-700">Country
                <span class="font-thin px-1">(optional)</span>
            </label>
            <input wire:model.lazy="storefronts.country" type="text" name="storefront_country" id="storefront_country"
                class="px-2 py-1.5 mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-sm">
            {{-- @error('confirmPassword')
                <span class="text-xs text-red-500 mt-1">{{ $message }}</span>
            @enderror --}}
        </div>
    </div>

    <div class="flex">
        {{-- Store front province --}}
        <div class="w-full py-2 mr-2">
            <label for="storefront_province" class="block text-sm font-medium text-gray-700">Province
                <span class="font-thin px-1">(optional)</span>
            </label>
            <input wire:model.lazy="storefronts.province" type="text" name="storefront_province" id="storefront_province"
                class="px-2 py-1.5 mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-sm">
            {{-- @error('confirmPassword')
                <span class="text-xs text-red-500 mt-1">{{ $message }}</span>
            @enderror --}}
        </div>

        {{-- Storefront zip code --}}
        <div class="w-full py-2 ml-2">
            <label for="storefront_zipcode" class="block text-sm font-medium text-gray-700">ZIP code
                <span class="font-thin px-1">(optional)</span>
            </label>
            <input wire:model.lazy="storefronts.zipcode" type="text" name="storefront_zipcode" id="storefront_zipcode"
                class="px-2 py-1.5 mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-sm">
            {{-- @error('confirmPassword')
                <span class="text-xs text-red-500 mt-1">{{ $message }}</span>
            @enderror --}}
        </div>
    </div>


    {{-- storefront mobile --}}
    <div class="w-full py-2">
        <label for="storefront_mobile" class="block text-sm font-medium text-gray-700">Mobile number
            <span class="font-thin px-1">(optional)</span>
        </label>
        <input wire:model.lazy="storefronts.mobile" type="text" name="storefront_mobile" id="storefront_mobile"
            class="px-2 py-1.5 mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-sm">
        {{-- @error('confirmPassword')
            <span class="text-xs text-red-500 mt-1">{{ $message }}</span>
        @enderror --}}
    </div>


    {{-- Storefront currency --}}
    <div class="w-full py-2">
        <label for="storefront_currency" class="block text-sm font-medium text-gray-700">Currency
            <span class="font-thin px-1">(optional)</span>
        </label>
        <input wire:model.lazy="storefronts.currency" type="text" name="storefront_currency" id="storefront_currency"
            class="px-2 py-1.5 mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-sm">
        {{-- @error('confirmPassword')
            <span class="text-xs text-red-500 mt-1">{{ $message }}</span>
        @enderror --}}
    </div>

    {{-- Storefront exchange rate --}}
    <div class="w-full py-2">
        <label for="storefront_exchange_rate" class="block text-sm font-medium text-gray-700">Exchange rate
            <span class="font-thin px-1">(optional)</span>
        </label>
        <input wire:model.lazy="storefronts.exchange_rate" type="text" name="storefront_exchange_rate" id="storefront_exchange_rate"
            class="px-2 py-1.5 mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-sm">
        {{-- @error('confirmPassword')
            <span class="text-xs text-red-500 mt-1">{{ $message }}</span>
        @enderror --}}
    </div>
</div>
