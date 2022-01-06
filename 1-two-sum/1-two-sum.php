class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        for($i=0; $i<sizeof($nums); $i++){
            for($j=0; $j<sizeof($nums); $j++){
            if(($i!=$j) && (($nums[$i]+$nums[$j]) == $target)){
                return array($i,$j);
            }
        }
    }
}
}