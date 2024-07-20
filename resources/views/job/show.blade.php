<x-layout title="{{$job->title}}">
       <h1 class="text-3xl font-bold text-center">Jobs Board</h1>

       <x-breadcrumbs class="my-2 m-auto sm:w-1/2 md:w-2/3 lg:w-full" :links="['Jobs' => route('jobs.index'), $job->title => '#']" />
       <x-job-card :$job>
            <x-link-button href="{{route('jobs.index')}}">
                Apply now
            </x-link-button>
       </x-job-card>

       <x-card>
            <h2 class="text-2xl font-bold">More Jobs from {{ $job->employer->company_name }}</h2>
            <div class="mb-2">
                @foreach ($job->employer->job as $job)
                    <span class="block mt-3 text-slate-500 hover:text-blue-500 hover:font-bold"><a href="{{route('jobs.show', $job)}}">{{$job->title}}</a></span>
                @endforeach
            </div>
       </x-card>
</x-layout>