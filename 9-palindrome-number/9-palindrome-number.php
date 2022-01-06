class Solution {

    /**
     * @param Integer $x
     * @return Boolean
     */
function isPalindrome($x) {
    $x = (string)$x;
    $len = strlen($x);
    if(((int)$x>=0) && ($len % 2 == 0) && (substr($x,0,($len/2)) == strrev(substr($x,($len/2),$len)))){
        return true;
    }elseif(((int)$x>=0) && (substr($x,0,((($len+1)/2)-1)) == strrev(substr($x,((($len+1)/2)),$len)))){
        return true;
    }
}
}