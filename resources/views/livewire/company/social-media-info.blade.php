<div class="flex flex-col">

    {{-- facebook_url --}}
    <div class="w-full py-2">
        <label for="facebook_url" class="block text-sm font-medium text-gray-700">Facebook URL
            <span class="font-thin px-1">(optional)</span>
        </label>
        <input wire:model.lazy="facebook_url" type="text" name="facebook_url" id="facebook_url"
            class="px-2 py-1.5 mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-sm">
        {{-- @error('facebook_url') <span
                class="text-xs text-red-500 mt-1">{{ $message }}</span>
        @enderror --}}
    </div>

    {{-- instagram_url --}}
    <div class="w-full py-2">
        <label for="instagram_url" class="block text-sm font-medium text-gray-700">Instagram URL
            address
            <span class="font-thin px-1">(optional)</span>
        </label>
        <input wire:model.lazy="instagram_url" type="text" name="instagram_url" id="instagram_url"
            class="px-2 py-1.5 mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-sm">
        {{-- @error('instagram_url') <span
                class="text-xs text-red-500 mt-1">{{ $message }}</span>
        @enderror --}}
    </div>

    {{-- twitter_url --}}
    <div class="w-full py-2">
        <label for="twitter_url" class="block text-sm font-medium text-gray-700">Twitter URL
            <span class="font-thin px-1">(optional)</span>
        </label>
        <input wire:model.lazy="twitter_url" type="text" name="twitter_url" id="twitter_url"
            class="px-2 py-1.5 mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-sm">
        {{-- @error('twitter_url') <span
                class="text-xs text-red-500 mt-1">{{ $message }}</span>
        @enderror --}}
    </div>
</div>
