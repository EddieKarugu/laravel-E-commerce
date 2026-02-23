<x-layout title="Home" tab="Home">
    <div class="username">
        <p>Welcome <b>{{Auth()->user()?->username }}</b></p>
    </div>
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
