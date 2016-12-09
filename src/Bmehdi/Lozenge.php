<?php

namespace Hackathon3\Bmehdi;

class Lozenge
{
    private $size;

    public function __construct($size)
    {
        $this->size = $size;
    }

    /**
     * Returns lozenge as a string.
     *
     * Examples :
     *
     * For a lozenge with size 1, returns :
     *
     *  o 
     * o o
     *  o 
     *
     * For a lozenge with size 2, returns :
     * 
     *   o  
     *  o o 
     * o   o
     *  o o 
     *   o  
     *
     * For a lozenge with size 3, returns :
     *
     *    o   
     *   o o  
     *  o   o 
     * o     o
     *  o   o 
     *   o o  
     *    o
     *     *
     *     o
     *    o o
     *   o   o
     *  o     o
     * o       o
     *  o     o
     *   o   o
     *    o o
     *     o
     *
     * Etc.
     */
    public function __toString()
    {
        if (0 == $this->size) {
            return '';
        }

        $outside = str_repeat(" ", $this->size);
        $lozenge = <<<L
{$outside}o{$outside}
L;

        $separatorOutside = $this->size - 1;
        $separatorInside = 1;
        for ($i = 1; $i < $this->size; $i++) {
            $outside = str_repeat(" ", $separatorOutside);
            $inside = str_repeat(" ", $separatorInside);
            $lozenge .= <<<L

{$outside}o{$inside}o{$outside}
L;
            $separatorOutside--;
            $separatorInside = $separatorInside + 2;
        }

            $inside = str_repeat(" ", $separatorInside);
            $lozenge .= <<<L

o{$inside}o
L;

        $separatorOutside = 1;
        $separatorInside = $separatorInside - 2;
        for ($i = $this->size; $i > 1; $i--) {
            $outside = str_repeat(" ", $separatorOutside);
            $inside = str_repeat(" ", $separatorInside);
            $lozenge .= <<<L

{$outside}o{$inside}o{$outside}
L;
            $separatorOutside++;
            $separatorInside = $separatorInside - 2;
        }

        $outside = str_repeat(" ", $this->size);
        $lozenge .= <<<L

{$outside}o{$outside}
L;

        // todo : update $lozenge

        return $lozenge;
    }
}
