class Solution {

    /**
     * @param Integer[] $nums
     * @return Boolean
     */
    function containsDuplicate($nums) {
        if(count($nums) === count(array_unique($nums))){
            return false;
        }
        return true;
    }
}