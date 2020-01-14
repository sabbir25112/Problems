<?php

class DepthChecker
{
    public function calculate_depth(&$keys, $input, $depth = 1)
    {
        if (is_object($input)) {
            $input = (array) $input;
        }
        if (!is_array($input)) return ;

        foreach ($input as $key => $value) {
            $keys[] = [
                'key' => $key,
                'depth' => $depth
            ];
            $this->calculate_depth($keys, $value, $depth + 1);
        }
    }
}