<x-layout title="Home" tab="Home">
   <x-notifications/>
<div class="bottom">

   <livewire:tileselector :tiles="$tiles" />

    <div class="search">
        <form action="">
            @csrf
            <input type="text" value="{{ old('searched') }}" name="searched" placeholder="search here">
            <button type="submit">Search</button>
        </form>
    </div>
</div>
    <livewire:productlist />
</x-layout>
