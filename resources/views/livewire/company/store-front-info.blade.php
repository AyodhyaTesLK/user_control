<div class="flex flex-col">
    {{-- store front url --}}
    <div class="w-full py-2">
        <label for="country" class="block text-sm font-medium text-gray-700">URL
            <span class="font-thin px-1">(optional)</span>
        </label>
        <input type="text" name="country" id="country" autocomplete="country"
            class="px-2 py-1.5 mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-sm">
        {{-- @error('email') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror --}}
    </div>

    {{-- shopify key --}}
    <div class="w-full py-2">
        <label for="key" class="block text-sm font-medium text-gray-700">Key
            <span class="font-thin px-1">(optional)</span>
        </label>
        <input type="text" name="store_front_key" id="store_front_key"
            class="px-2 py-1.5 mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-sm">
        {{-- @error('confirmPassword')
            <span class="text-xs text-red-500 mt-1">{{ $message }}</span>
        @enderror --}}
    </div>

    {{-- shopify password --}}
    <div class="w-full py-2">
        <label for="key" class="block text-sm font-medium text-gray-700">Password
            <span class="font-thin px-1">(optional)</span>
        </label>
        <input type="text" name="store_front_password" id="store_front_password"
            class="px-2 py-1.5 mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-sm">
        {{-- @error('confirmPassword')
            <span class="text-xs text-red-500 mt-1">{{ $message }}</span>
        @enderror --}}
    </div>

    {{-- hook secret --}}
    <div class="w-full py-2">
        <label for="key" class="block text-sm font-medium text-gray-700">Secret
            <span class="font-thin px-1">(optional)</span>
        </label>
        <input type="text" name="store_front_hook_secret" id="store_front_hook_secret"
            class="px-2 py-1.5 mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-sm">
        {{-- @error('confirmPassword')
            <span class="text-xs text-red-500 mt-1">{{ $message }}</span>
        @enderror --}}
    </div>

    <div class="flex">
        {{-- shopify store city --}}
        <div class="w-full py-2 mr-2">
            <label for="key" class="block text-sm font-medium text-gray-700">City
                <span class="font-thin px-1">(optional)</span>
            </label>
            <input type="text" name="store_front_city" id="store_front_city"
                class="px-2 py-1.5 mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-sm">
            {{-- @error('confirmPassword')
                <span class="text-xs text-red-500 mt-1">{{ $message }}</span>
            @enderror --}}
        </div>

        {{-- store front country --}}
        <div class="w-full py-2 ml-2">
            <label for="key" class="block text-sm font-medium text-gray-700">Country
                <span class="font-thin px-1">(optional)</span>
            </label>
            <input type="text" name="store_front_country" id="store_front_country"
                class="px-2 py-1.5 mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-sm">
            {{-- @error('confirmPassword')
                <span class="text-xs text-red-500 mt-1">{{ $message }}</span>
            @enderror --}}
        </div>
    </div>

    <div class="flex">
        {{-- Store front province --}}
        <div class="w-full py-2 mr-2">
            <label for="key" class="block text-sm font-medium text-gray-700">Province
                <span class="font-thin px-1">(optional)</span>
            </label>
            <input type="text" name="store_front_province" id="store_front_province"
                class="px-2 py-1.5 mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-sm">
            {{-- @error('confirmPassword')
                <span class="text-xs text-red-500 mt-1">{{ $message }}</span>
            @enderror --}}
        </div>

        {{-- Store front zip code --}}
        <div class="w-full py-2 ml-2">
            <label for="key" class="block text-sm font-medium text-gray-700">ZIP code
                <span class="font-thin px-1">(optional)</span>
            </label>
            <input type="text" name="store_front_zip" id="store_front_zip"
                class="px-2 py-1.5 mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-sm">
            {{-- @error('confirmPassword')
                <span class="text-xs text-red-500 mt-1">{{ $message }}</span>
            @enderror --}}
        </div>
    </div>


    {{-- shopify phone --}}
    <div class="w-full py-2">
        <label for="key" class="block text-sm font-medium text-gray-700">Mobile number
            <span class="font-thin px-1">(optional)</span>
        </label>
        <input type="text" name="store_front_phone" id="store_front_phone"
            class="px-2 py-1.5 mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-sm">
        {{-- @error('confirmPassword')
            <span class="text-xs text-red-500 mt-1">{{ $message }}</span>
        @enderror --}}
    </div>


    {{-- Store front currency --}}
    <div class="w-full py-2">
        <label for="key" class="block text-sm font-medium text-gray-700">Currency
            <span class="font-thin px-1">(optional)</span>
        </label>
        <input type="text" name="store_front_currency" id="store_front_currency"
            class="px-2 py-1.5 mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-sm">
        {{-- @error('confirmPassword')
            <span class="text-xs text-red-500 mt-1">{{ $message }}</span>
        @enderror --}}
    </div>

    {{-- Store front exchange rate --}}
    <div class="w-full py-2">
        <label for="key" class="block text-sm font-medium text-gray-700">Exchange rate
            <span class="font-thin px-1">(optional)</span>
        </label>
        <input type="text" name="store_front_exchange_rate" id="store_front_exchange_rate"
            class="px-2 py-1.5 mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-sm">
        {{-- @error('confirmPassword')
            <span class="text-xs text-red-500 mt-1">{{ $message }}</span>
        @enderror --}}
    </div>
</div>
