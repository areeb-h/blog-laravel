@props(['trigger'])

<div x-data="{ show: false }" :class="{'bg-gray-100 rounded-xl rounded-b-none': show}">
    {{-- Trigger --}}
    <div @click="show = ! show"  @click.away="show=false">

        {{ $trigger }}

    </div>

    {{-- Links --}}
    <div x-show="show" class="pb-2 z-50 bg-gray-100 w-full absolute rounded-b-xl max-h-[200px] overflow-auto" style="display: none">
         {{ $slot }}
    </div>
</div>
