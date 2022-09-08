<?php

namespace App\Traits;

use Doctrine\Inflector\Inflector;

trait DataLoader
{
    /**
     * @param array $data
     *
     * @return $this
     */
    public function loadData(array $data)
    {
        foreach ($data as $key => $value) {
            $method = Inflector::camelize('set_' . $key);
            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }

        return $this;
    }

}
