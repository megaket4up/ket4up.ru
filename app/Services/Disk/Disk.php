<?php

namespace App\Services\Disk;

use ByteUnits\Binary;

class Disk
{
    public $path = '.';

    public function getPath()
    {
        return $this->path;
    }

    public function getTotalSpace()
    {
        return disk_total_space($this->getPath());
    }

    public function getFreeSpace()
    {
        return disk_free_space($this->getPath());
    }

    public function getUsedBytes()
    {
        $totalBytes = $this->getTotalSpace();
        $freeBytes = $this->getFreeSpace();

        return $totalBytes - $freeBytes;
    }

    public function getInfo()
    {
        $totalBytes = $this->getTotalSpace();
        $freeBytes = $this->getFreeSpace();
        $usedBytes = $this->getUsedBytes();

        $percent = sprintf('%.2f', $usedBytes * 100 / $totalBytes);

        return [
            'total_bytes' => $totalBytes,
            'free_bytes' => $freeBytes,
            'used_bytes' => $usedBytes,
            'total_metric' => Binary::bytes($totalBytes)->asMetric()->format(),
            'used_metric' => Binary::bytes($usedBytes)->asMetric()->format(),
            'free_metric' => Binary::bytes($freeBytes)->asMetric()->format(),
            'total' => Binary::bytes($totalBytes)->format(),
            'used' => Binary::bytes($usedBytes)->format(),
            'free' => Binary::bytes($freeBytes)->format(),
            'percent_usage' => $percent
        ];
    }
}
