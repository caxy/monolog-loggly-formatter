<?php

namespace Caxy\Monolog\Formatter;

class LogglyFormatter extends \Monolog\Formatter\LogglyFormatter
{
    public function format(array $record)
    {
        if (isset($record['datetime']) && ($record['datetime'] instanceof \DateTime)) {
            $record['timestamp'] = $record['datetime']->format("Y-m-d\TH:i:s.uO");
            unset($record['datetime']);
        }

        return parent::format($record);
    }
}
