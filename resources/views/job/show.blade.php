<x-layout title="{{$job->title}}">
       <h1 class="text-3xl font-bold text-center">Jobs Board</h1>

       <x-breadcrumbs class="my-2 m-auto sm:w-1/2 md:w-2/3 lg:w-full" :links="['Jobs' => route('jobs.index'), $job->title => '#']" />
       <x-job-card :$job>
            <x-link-button href="{{route('jobs.index')}}">
                Apply now
            </x-link-button>
       </x-job-card>
</x-layout>