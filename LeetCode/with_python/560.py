from typing import List


def subarraySum(nums: List[int], k: int) -> int:
    sum = 0
    count = 0
    result = {0:1}

    for num in nums:
        sum+= num
        
        if sum - k in result:
            count+= result[sum-k]

        result[sum] = 1 + result.get(sum,0)
        
    return count

subarraySum([1,1,1], 2)