<?php

trait logger
{
    public function log($data)
    {
        echo "$data log.";
    }
}

class sample{
    use logger;
}

(new sample())->log();