@if(session()->has('success'))
    <div class="alert">
        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
        {{ session()->get('success') }}
    </div>
@endif
