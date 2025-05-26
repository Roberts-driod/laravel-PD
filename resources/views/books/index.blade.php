<h1>Books</h1>
<a href="/books/create">Create a book</a>
<ul>
    @foreach($allbooks as $book)
        <li>
            <h2>{{ $book->title }}</h2>
            <div>
                <a href="/books/{{ $book->id }}">Show</a>
                <a href="/books/{{ $book->id }}/edit">Edit</a>
                <a href="/books/{{ $book->id }}/updateDates">Edit date</a>
            </div>
        </li>
    @endforeach
</ul>