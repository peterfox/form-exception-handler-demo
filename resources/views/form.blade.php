@if(session()->has('alert'))
    <p>{{ session('alert') }}</p>
@endif
<form action="{{ route('form') }}" method="post">
    {{ csrf_field() }}
    <input type="text" name="field" value="{{ old('field') }}">
    <button>Submit</button>
</form>