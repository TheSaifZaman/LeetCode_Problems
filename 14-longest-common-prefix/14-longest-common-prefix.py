class Solution:
    def longestCommonPrefix(self, strs: List[str]) -> str:
        if len(strs) == 0:
            return '' 
        result = ''
        strs = sorted(strs)
        for lcp in strs[0]:
            if strs[-1].startswith(result+lcp):
                result += lcp
            else:
                break
        return result