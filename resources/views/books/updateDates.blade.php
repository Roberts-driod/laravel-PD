<h1>Edit date</h1>



<form action="/books/{{ $editDate->id }}/updateDate" method="post">
    @csrf
    @method('put')
    <input type="text" name="title"  value="{{ $editDate->title }}">
    <input type="date" name="released_at"  value="{{ $editDate->released_at }}">
    <input type="submit" value="updateDate">

</form>