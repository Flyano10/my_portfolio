@extends('layouts.app')

@section('content')
    <div class="max-w-6xl mx-auto px-4 py-10">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold text-gray-800 dark:text-white">Contact Messages</h1>
            <a href="{{ url('/') }}" class="bg-gray-200 text-gray-800 px-4 py-2 rounded hover:bg-gray-300 transition">
                ← Back to Home
            </a>
        </div>

        @if ($contacts->isEmpty())
            <div class="bg-blue-100 text-blue-800 px-4 py-3 rounded mb-6">
                No messages received yet.
            </div>
        @else
            <div class="overflow-x-auto bg-white dark:bg-gray-800 shadow-md rounded-lg">
                <table class="min-w-full text-sm divide-y divide-gray-200 dark:divide-gray-700">
                    <thead class="bg-gray-100 dark:bg-gray-700 text-gray-800 dark:text-white">
                        <tr>
                            <th class="px-6 py-3 text-left font-medium">Name</th>
                            <th class="px-6 py-3 text-left font-medium">Email</th>
                            <th class="px-6 py-3 text-left font-medium">Message</th>
                            <th class="px-6 py-3 text-left font-medium">Time</th>
                            <th class="px-6 py-3 text-left font-medium">Action</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                        @foreach ($contacts as $contact)
                            <tr class="hover:bg-gray-50 dark:hover:bg-gray-900">
                                <td class="px-6 py-4">{{ $contact->nama }}</td>
                                <td class="px-6 py-4">{{ $contact->email }}</td>
                                <td class="px-6 py-4">{{ $contact->pesan }}</td>
                                <td class="px-6 py-4">{{ $contact->created_at->format('d M Y, H:i') }}</td>
                                <td class="px-6 py-4">
                                    <form action="{{ route('kontak.destroy', $contact->id) }}" method="POST"
                                        onsubmit="return confirm('Are you sure you want to delete this message?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="bg-red-600 text-white px-3 py-1 rounded hover:bg-red-700 transition text-sm">
                                            Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </div>
@endsection
