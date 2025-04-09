def minimumSumSubarray( nums, l, r):
    min_sum = float('inf')

    for i in range(len(nums)):
        for j in range(i + 1, len(nums)+1):
            subarray = nums[i:j]
            if l <= len(subarray) <= r:
                subarray_sum = sum(subarray)
                if subarray_sum > 0 : 
                    min_sum = min(min_sum, subarray_sum)

    return min_sum if min_sum != float('inf') else -1


nums = [3, -2, 1, 4]

l=2
r = 3
min_sum = minimumSumSubarray(nums, l, r)
print(min_sum) 