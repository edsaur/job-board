<x-layout>
        <h1 class="text-3xl font-bold text-center">Jobs</h1>

        <div class="container mx-auto"> 
            <x-breadcrumbs class="my-1 mx-3 w-3/4 md:w-11/12 lg:w-full" :links="['Jobs' => route('jobs.index')]" />
            <x-card class="text-sm" x-data="{ open: false }">
                <form x-ref="filters" id="filtering-form" action="{{route('jobs.index')}}" method="GET">
                <div class="mb-4 grid grid-cols-2 gap-4">
                        <div>
                            <h2 class="mb-1 font-semibold">Search</h2>
                            <x-text-input name="search" value="{{request('search')}}" placeholder="Search for Anything!" form-ref="filters"/>
                        </div>
                        <div>
                            <h2 class="mb-1 font-semibold">Mininum to Maximum Salary</h2>
                            <div class="flex space-x-2">
                                <x-text-input name="min_val" value="{{request('min_val')}}" placeholder="From" form-ref="filters"/>
                                <x-text-input name="max_val" value="{{request('max_val')}}" placeholder="To" form-ref="filters"/>
                            </div>
                        </div>
                        <x-radio-group name='Experience' :options="$experiences" />
                        
                        <x-radio-group name='Categories' :options="$categories" />
                </div>
                <div class="flex justify-center">
                    <button type="submit" class="w-full rounded p-2 bg-slate-400 font-bold text-lg hover:bg-red-400 hover:text-white">Filter</button>
                </div>
                </form>
            </x-card>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-4">
                @foreach ($jobs as $job)
                    <div class="flex h-full">
                        <x-home-job-card :job="$job" class="overflow-hidden w-full">
                            <x-link-button :href="route('jobs.show', $job)">
                                Show
                            </x-link-button>
                        </x-home-job-card>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="m-2 p-2">
            {{ $jobs->appends(request()->query())->links() }}
        </div>
   </x-layout>