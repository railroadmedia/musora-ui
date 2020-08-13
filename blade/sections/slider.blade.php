@push('styles')
<style type="text/css">
.slider {
    -webkit-appearance: none;  /* Override default CSS styles */
    appearance: none;
    width: 100%; /* Full-width */
    height: 25px; /* Specified height */
    border-radius: 5px;
    background: #d3d3d3; /* Grey background */
    outline: none; /* Remove outline */
    opacity: 0.7; /* Set transparency (for mouse-over effects on hover) */
    -webkit-transition: .2s; /* 0.2 seconds transition on hover */
    transition: opacity .2s;
}
.slider:hover {
    opacity: 1;
}
.slider::-webkit-slider-thumb {
    -webkit-appearance: none; /* Override default look */
    appearance: none;
    width: 35px; /* Set a specific slider handle width */
    height: 35px; /* Slider handle height */
    border-radius: 50%;
    background: #4CAF50; /* Green background */
    cursor: pointer; /* Cursor on hover */
}

.slider::-moz-range-thumb {
    width: 35px; /* Set a specific slider handle width */
    height: 35px; /* Slider handle height */
    border-radius: 50%;
    background: #4CAF50; /* Green background */
    cursor: pointer; /* Cursor on hover */
}
</style>
@endpush

<div class="large:flex-1 rounded-lg overflow-hidden bg-edge-blue">
    <h4 class="collapse-trigger py-2 px-2 cursor-pointer small:cursor-default small:px-0 flex justify-between small:block small:text-center text-white bg-edge-dark-blue font-bold text-sm small:text-lg"><span class="font-roboto">set your skill level</span></h4>
    <div class="py-4">
        <input type="range" min="1" max="9" value="2" class="slider" id=""> 
    </div>
</div>
