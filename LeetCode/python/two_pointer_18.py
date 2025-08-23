class Solution: 
    def fourSum(self, nums, target):
        result = []
        n = len(nums)

        nums.sort()

        for i in range(n -3):
            if i > 0 and nums[i] == nums[i-1]:
                continue

            for j in range(i+1, n-2):
                if j > i+1 and nums[j] == nums[j-1]:
                    continue

                l, r = j+1, n-1
                while l < r : 
                    sum = nums[i] + nums[j] + nums[l] + nums[r]
                    if sum == target :
                        result.append([nums[i], nums[j], nums[l], nums[r]])
                        l+=1
                        r-=1
                        while l < r and nums[l] == nums[l-1]:
                            l+=1
                        while l < r and nums[r] == nums[r+1]:
                            r-=1

                    elif sum > target :
                        r-=1
                    elif sum < target :
                        l+=1   

        return result   
        
newSolution = Solution()
print(newSolution.fourSum([1,0,-1,0,-2,2], 0))