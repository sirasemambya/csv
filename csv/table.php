<?php

        class html {
                protected $html;
                public function getHTML(){
                return $this->html;
                }
        }

        class htmlArray extends html{
                public function getArray(array $array) {
                        $this->html = '<table border="1" cellspacing="0" cellpadding="2">';

                        foreach($array as $row=>$value) {
                                        $this->html .= '<tr>';
                                                foreach($value as $key=>$value2){
                                                        $this->html .= '<td>' . $value2 . '</td>';
                                                        }
                                                        $this->html .= '</tr>';
                        }

                        $this->html .= '</table>';
                        return $this->html;
                        }
                        }

        $a = array(
                        array('Vince Carter', 'SG', 'NJ Nets'),
                        array('Jason Kidd', 'PG', 'NJ Nets'),
                        array('Richard Jefferson', 'SF', 'NJ Nets'),
                        array('Lebron James', 'SF', 'Cleveland Cavs'),
                        array('Allan Houston', 'SG', 'NY Knicks'),
                        array('Steve Nash', 'PG', 'Phoenix Suns')
                  );

        $newTable = new htmlArray;

        echo $newTable -> getArray($a);




?>
