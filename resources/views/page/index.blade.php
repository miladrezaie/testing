
@if(session()->has('flash_message'))
    {{session()->get('flash_message')}}
@endif



<form action="{{route('page.store')}}" method="post" role="form">
    {{csrf_field()}}
    <label for="name">name</label>
    <input type="text" value="" name="name" id="name" required>

    <br>
    <label for="mony">mony</label>
    <input type="text" name="mony" value="" id="mony" required>
    <br><br>
    <button type="submit" >submit</button>
</form>