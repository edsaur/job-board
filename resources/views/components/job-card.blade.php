<x-card>
      <h1 class="text-lg font-bold">{{$job->title}} - {{$job->location}}</h1>
      <h2 class="text-md text-slate-500">Salary: ${{ number_format($job->salary) }}</h2>

      <div class="my-5">
          <p class="text-slate-800 sm:w-1/2 md:w-2/3 lg:w-1/2">
              {!! nl2br(e($job->description)) !!}
          </p>
      </div>

      <x-tags>
          <h3 class="text-sm text-slate-400">Category: {{$job->category}}</h3>
          <h3 class="text-sm text-slate-400">Experience Needed: {{$job->experience}}</h3>

          <div class="mt-5">
            {{ $slot }}
          </div>
      </x-tags>
  </x-card>