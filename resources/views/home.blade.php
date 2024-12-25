<x-layout>
    <!-- Your content here -->
    <p>sjfhjdhghjfdgkhjdfghkj</p>

    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit">Logout</button>
    </form>
</x-layout>
