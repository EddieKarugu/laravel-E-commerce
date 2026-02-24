@if(session('success'))
    <div class="popup" id="notify">
        {{ session('success') }}
    </div>
@endif
<script>
    document.addEventListener('DOMContentLoaded', function (){
        const popup = document.getElementById('notify')

        if(popup){
            setTimeout(()=>{
                popup.style.opacity = '0';
                setTimeout(()=> popup.remove(), 1500)
            }, 2000)

        }
    })
</script>
