class Solution {

    /**
     * @param String $s
     * @return Integer
     */
function romanToInt(string $s)
{
    $sum = 0;
    $special_char_set = ["IV", "IX", "XL", "XC", "CD", "CM"];

    foreach ($special_char_set as $special) {
        if (($s != null) && ($s != "")) {
            if (strpos((string)$s, (string)$special) !== false) {
                switch ((string)$special) {
                    case "IV":
                        $sum = $sum + 4;
                        break;
                    case "IX":
                        $sum = $sum + 9;
                        break;
                    case "XL":
                        $sum = $sum + 40;
                        break;
                    case "XC":
                        $sum = $sum + 90;
                        break;
                    case "CD":
                        $sum = $sum + 400;
                        break;
                    case "CM":
                        $sum = $sum + 900;
                        break;
                    default:
                        $sum = $sum + 0;
                }

                $s = str_replace($special, "", $s);
            }
        }
    }

    if (($s != null) && ($s != "")) {
        $array = str_split($s);
        foreach ($array as $char) {
            switch ((string)$char) {
                case "M":
                    $sum = $sum + 1000;
                    break;
                case "D":
                    $sum = $sum + 500;
                    break;
                case "C":
                    $sum = $sum + 100;
                    break;
                case "L":
                    $sum = $sum + 50;
                    break;
                case "X":
                    $sum = $sum + 10;
                    break;
                case "V":
                    $sum = $sum + 5;
                    break;
                default:
                    $sum = $sum + 1;
            }
        }
    }


    return $sum;
}
}