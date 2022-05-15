<?php

namespace App\Services\Project;

use App\Models\Project;
use Illuminate\Contracts\Config\Repository;

class ProjectService
{
    public function __construct(Repository $config)
    {
        $this->config = $config;
    }

    public function getCurrentProjects()
    {
        return Project::paginate($this->config->get('project.paginate', 15));
    }
}
