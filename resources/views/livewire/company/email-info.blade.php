<div class="flex flex-col">

    
    
    @foreach ($configs as $key => $config_item)
      {{-- @dump($config_item) --}}
        @if($config_item['batch_no'] == 4)
            <div class="w-full py-2">
                <label for="{{ $config_item['key'] }}" class="block text-sm font-medium text-gray-700">{{ $config_item['lable'] }}
                    @if(!$config_item['is_required'])<span class="font-thin px-1">(optional)</span>@endif
                </label>
                <input wire:model.lazy="configs.{{ $key }}.value" type="{{ $config_item['type'] }}" name="{{ $config_item['key'] }}" id="{{ $config_item['key'] }}"
                    class="px-2 py-1.5 mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-sm">
                {{-- @error('smtp_pop_imap') <span
                        class="text-xs text-red-500 mt-1">{{ $message }}</span>
                @enderror --}}
            </div>
        @endif
    @endforeach

    
</div>
