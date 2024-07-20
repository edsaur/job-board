<x-card class="flex flex-col w-full h-full">
    <div class="flex flex-col h-full p-4">
        <h1 class="text-sm font-bold text-slate-500">{{$job->employer->company_name}}</h1>
        <h2 class="text-lg font-bold">{{$job->title}} - {{$job->location}}</h2>
        <h3 class="text-md text-slate-500">Salary: ${{ number_format($job->salary) }}</h3>

        <x-tags class="flex-grow mt-2">
            <h3 class="text-sm text-slate-400">Category: {{$job->category}}</h3>
            <h3 class="text-sm text-slate-400">Experience Needed: {{$job->experience}}</h3>
        </x-tags>

        <div class="mt-4">
            {{ $slot }}
        </div>
    </div>
</x-card>
