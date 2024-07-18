<x-layout>
        <h1 class="text-3xl font-bold text-center">Jobs</h1>

        <div class="container mx-auto"> 
            <x-breadcrumbs class="my-1 mx-3 w-3/4 md:w-11/12 lg:w-full" :links="['Jobs' => route('jobs.index')]" />
            <x-card class="text-sm">
                <div class="mb-4 grid grid-cols-2 gap-4">
                    <div>
                        <h2 class="mb-1 font-semibold">Search</h2>
                        <x-text-input name="search" value="" placeholder="Search for Anything!"/>
                    </div>
                    <div>
                        <h2 class="mb-1 font-semibold">Mininum to Maximum Salary</h2>
                        <div class="flex space-x-2">
                            <x-text-input name="min_val" value="" placeholder="From"/>
                            <x-text-input name="max_val" value="" placeholder="To"/>
                        </div>
                    </div>
                    <div>3</div>
                    <div>4</div>
                </div>
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
   </x-layout>