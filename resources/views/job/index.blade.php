<x-layout>


    <main>
        <h1 class="text-3xl font-bold text-center">Jobs</h1>
       <div class="flex gap-2 justify-center align-middle">
        <div class="m-4">
            <ul>
                @foreach ($categories as $category)
                <li>{{$category}}</li>
                @endforeach
            </ul>
        </div>
        <div class="m-4">
            <ul>
                @foreach ($experiences as $experience)
                    <li>{{$experience}}</li>
                @endforeach
            </ul>
        </div>
       </div>

        <div class="container m-auto">
            @foreach ($jobs as $job)
            <div class="my-5 p-5 border border-slate-950 sm:w-3/12 md:w-2/3 lg:w-full">
                <h1 class="text-lg font-bold">{{$job->title}} - {{$job->location}}</h1>
                <h2 class="text-md text-slate-500">Salary: ${{$job->salary}}</h2>

                <div class="my-5">
                    <p class="text-slate-800 sm:w-1/2 md:w-2/3 lg:w-1/2">{{$job->description}}</p>
                </div>

                <div class="my-5">
                    <h3 class="text-sm text-slate-400">Category: {{$job->category}}</h3>
                    <h3 class="text-sm text-slate-400">Experience Needed: {{$job->experience}}</h3>
                </div>

                <button class="bg-neutral-400 p-2 font-bold text-slate-700 border rounded hover:text-red-900">Apply Now</button>
            </div>
            @endforeach
        </div>
    </main>
   </x-layout>