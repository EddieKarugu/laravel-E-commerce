<x-layout title="Home" tab="Home">
   <x-notifications/>
<div class="bottom">

   <livewire:tileselector :tiles="$tiles" />

   <livewire:searchcontrol />
</div>
    <livewire:productlist />
</x-layout>
