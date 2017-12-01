ZALUOA

<form  action ='{{Route("update")}}' method = 'post'>
    <input name = 'hui' type="'text" placeholder ='hui'>
    <input type ='submit' value="gre"/>
    <input type="hidden" name="_token" value="{{ csrf_token() }}">

</form>
