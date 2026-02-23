<div class="errors">
    @if($errors->any())
        @foreach($errors->all() as $error)
            <h5>{{ $error }}</h5>
        @endforeach
    @endif
</div>
