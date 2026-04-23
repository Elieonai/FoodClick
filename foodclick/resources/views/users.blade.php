{{-- Users View --}}
<x-basic-layout>
    <h1 class="text-2xl font-bold mb-4">Usuários</h1>
    <ul class="list-disc pl-5">
        @foreach ($usuarios as $usuario)
            <li>{{ $usuario->nome }} - {{ $usuario->email }}</li>
        @endforeach
    </ul>
</x-basic-layout>