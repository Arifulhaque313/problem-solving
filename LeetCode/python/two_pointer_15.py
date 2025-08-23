class Solution: 
    def threeSum(self, nums):
        result = []
        n = len(nums)

        nums.sort()

        for i in range(n -2):
            if i > 0 and nums[i] == nums[i-1]:
                continue

            l, r = i+1, n-1
            while l < r : 
                sum = nums[i] + nums[l] + nums[r]
                if sum == 0 :
                    result.append([nums[i], nums[l], nums[r]])
                    l+=1
                    r-=1
                    while l < r and nums[l] == nums[l-1]:
                        l+=1
                    while l < r and nums[r] == nums[r+1]:
                        r-=1

                elif sum > 0 :
                    r-=1
                elif sum < 0 :
                    l+=1   

        return result


newSolution = Solution()
print(newSolution.threeSum([-1,0,1,2,-1,-4]))