class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
function removeDuplicates(&$nums)
{
    $k = 1;
    for ($i = 0; $i < sizeof($nums); $i++) {
        if ($nums[$i] > $nums[$k - 1]) {
            $nums[$k] = $nums[$i];
            $k += 1;
        }
    }
    return $k;
}
}