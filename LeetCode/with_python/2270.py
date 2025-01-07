def waysToSplitArray(nums):
        n=len(nums)
        totalSum=sum(nums)
        prefixSum, c=0, 0

        for i in range(n-1):
            prefixSum+=nums[i]
            c +=(2*prefixSum >= totalSum)

        print(c)

waysToSplitArray([1,2,3,4])