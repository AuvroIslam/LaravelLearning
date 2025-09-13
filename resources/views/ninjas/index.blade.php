<x-layout>
     <h2>Ninja List</h2>
    <ul>
        @foreach($ninjas as $ninja)
            <li>
                <a href="/ninjas/{{ $ninja['id'] }}">
                    {{ $ninja['name'] }} - {{ $ninja['skill'] }}
                </a>
            </li>
        @endforeach
    </ul>
</x-layout>