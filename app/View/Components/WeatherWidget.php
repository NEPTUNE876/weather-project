<?php

namespace App\View\Components;

use Illuminate\View\Component;

class WeatherWidget extends Component
{
    public $currentWeather;
    public $futureWeather;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($currentWeather, $futureWeather)
    {
        $this->currentWeather = $currentWeather;
        $this->futureWeather = $futureWeather;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.weather-widget');
    }
}
