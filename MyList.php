<?php


class MyList
{
    const DEFAULT_CAPACITY = 10;
    public $size = 0;
    public $arrayElement = array();

    public function __construct()
    {
        $this->arrayElement = [];
        $this->size = count(array());
    }

    public function add($indexAdd, $number)
    {
        if (empty($this->arrayElement)) {
            array_push($this->arrayElement, $number);
        } else {
            for ($index = count($this->arrayElement); $index > $indexAdd; $index--) {
                $this->arrayElement[$index] = $this->arrayElement[$index - 1];
            }
            array_push($this->arrayElement, $number);
        }
        return $this->arrayElement;

    }

    public function remove($indexRemove)
    {
        if (empty($this->arrayElement)) {
            print_r($this->arrayElement);
        } elseif ($indexRemove < count($this->arrayElement) && $indexRemove >= 0) {
            unset($this->arrayElement[$indexRemove]);
            $array = array_values($this->arrayElement);
            $this->arrayElement = $array;
            return $this->arrayElement;
        }
    }

    public function getSize()
    {
        return $this->size;
    }

//    public function getClone(){
//        return $this->arrayElement =
//    }

    public function contains($item)
    {
        function checkElement($array, $item)
        {
            foreach ($array as $key => $value) {
                if ($value == $item) {
                    return true;
                } else {
                    return false;
                }
            }
        }

        if (checkElement($this->arrayElement, $item)) {
            echo $item . "in arrayElement";
        } else {
            echo $item . "not in arrayElement";
        }
    }

    public function indexOf($indexOf)
    {
        if (empty($this->arrayElement)) {
            print_r($this->arrayElement);
        } elseif (count($this->arrayElement) > 0) {
            foreach ($this->arrayElement as $key => $value) {
                if ($indexOf == $value) {
                    return $value;
                    break;
                }
            }
        } else {
            return -1;
        }
    }

    public function booleanAdd($addElement)
    {
        array_push($this->arrayElement, $addElement);
    }

    public function get($index)
    {
        if (empty($this->arrayElement)) {
            print_r($this->arrayElement);
        } elseif (count($this->arrayElement) > 0) {
            foreach ($this->arrayElement as $key => $value) {
                if ($key == $index) {
                    return $key;
                    break;
                }
            }
        } else {
            echo $index . ": Not in arrayElement";
        }
    }

    public function clear()
    {
        return $this->arrayElement = [];
    }
}