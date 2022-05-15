<?php

namespace App\View\Components\Dashboard;

use App\Services\Disk\Disk;
use Illuminate\Support\Arr;
use Illuminate\View\Component;

class Diskusage extends Component
{
    public $disk;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(Disk $disk)
    {
        $this->disk = $disk;

    }

    public function getProgressBackground($percent_usage)
    {
        if ($percent_usage >= 75) {
            return 'bg-danger';
        }

        if ($percent_usage >= 50) {
            return 'bg-warning';
        }

        if ($percent_usage >= 25) {
            return 'bg-info';
        }

        return 'bg-success';
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $info = $this->disk->getInfo();

        $info = Arr::add($info, 'progress_background', $this->getProgressBackground($info['percent_usage']));

        return view('components.dashboard.diskusage', $info);
    }
}
