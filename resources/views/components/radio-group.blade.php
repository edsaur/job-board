<div>
    <h2 class="mb-1 font-semibold">{{$name}}</h2>
    {{-- if no option is selected --}}
    <label for="{{strtolower($name)}}" class="mb-1 flex items-center">
        <input type="radio" name="{{strtolower($name)}}" value="" {{ request(strtolower($name)) == '' ? 'checked' : '' }}>
        <span class="ml-2">All</span>
    </label>

    {{-- if option is selected --}}
    @foreach ($options as $option)
    <label for="{{strtolower($name)}}" class="mb-1 flex items-center">
        <input type="radio" name="{{strtolower($name)}}" value="{{strtolower($option)}}" {{ request(strtolower($name)) == strtolower($option) ? 'checked' : '' }}>
        <span class="ml-2">{{$option}}</span>
    </label>                              
    @endforeach
</div>