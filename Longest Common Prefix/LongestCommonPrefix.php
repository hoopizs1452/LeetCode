<?php
    class Solution {

        /**
         * @param String[] $strs
         * @return String
         */
        function longestCommonPrefix($strs) {
            $a = $strs[0];
            $match = 0;
            
            for($i=1; $i<=strlen($strs[0]); $i++){
                foreach($strs as $str){
                    if(strpos($str, $a) === 0){
                        if(++$match == count($strs))
                            break 2;
                    }
                    else
                        break;
                }
                $a = substr($strs[0], 0, -$i);
                $match = 0;
            }
                
            return $a;
        }
    }

    $result = new Solution();
    $strs = ["flower","flow","flight"];
    echo $result->longestCommonPrefix($strs);
?>