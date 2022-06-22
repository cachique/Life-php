<?php

    class Life {
        public $grid = [];

        function createGrid(){
            for ($i=1; $i <= 25 ; $i++) { 
                # code...
                $height = [];
                for ($j=1; $j <= 50 ; $j++) { 
                    # code...
                    $height[$j] = 0;
                }
                $this->grid[$i] = $height;
            }
        }

        function render(){
            $output = '';

            foreach ($this->grid as $widthId => $width) {
                foreach ($width as $heightId => $height) {
                    # code...
                    if ($height == 1){
                        $output .= "*";
                    }
                    else {
                        $output .= ".";
                    }
                }
                $output .= PHP_EOL;
                # code...
            }
            return $output;
        }
        
    }
?>