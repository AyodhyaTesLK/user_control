<div class="flex flex-col">

    {{-- picklist_item_limit --}}
    <div class="w-full py-2">
        <label for="picklist_item_limit" class="block text-sm font-medium text-gray-700">Pick list item limit
            <span class="font-thin px-1">(optional)</span>
        </label>
        <input wire:model.lazy="picklist_item_limit" type="text" name="picklist_item_limit" id="picklist_item_limit"
            class="px-2 py-1.5 mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-sm">
        {{-- @error('picklist_item_limit') <span
                class="text-xs text-red-500 mt-1">{{ $message }}</span>
        @enderror --}}
    </div>

    {{-- picklist_order_limit --}}
    <div class="w-full py-2">
        <label for="picklist_order_limit" class="block text-sm font-medium text-gray-700">Pick list order limit
            address
            <span class="font-thin px-1">(optional)</span>
        </label>
        <input wire:model.lazy="picklist_order_limit" type="text" name="picklist_order_limit" id="picklist_order_limit"
            class="px-2 py-1.5 mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-sm">
        {{-- @error('picklist_order_limit') <span
                class="text-xs text-red-500 mt-1">{{ $message }}</span>
        @enderror --}}
    </div>

    {{-- cod_max_limit_to_approve --}}
    <div class="w-full py-2">
        <label for="cod_max_limit_to_approve" class="block text-sm font-medium text-gray-700">Cash on delivery maximum value to auto
            approve an order
            <span class="font-thin px-1">(optional)</span>
        </label>
        <input wire:model.lazy="cod_max_limit_to_approve" type="text" name="cod_max_limit_to_approve" id="cod_max_limit_to_approve"
            class="px-2 py-1.5 mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-sm">
        {{-- @error('cod_max_limit_to_approve') <span
                class="text-xs text-red-500 mt-1">{{ $message }}</span>
        @enderror --}}
    </div>
</div>
