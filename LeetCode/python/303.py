class NumArray: 
        def __init__(self, nums: list[int]):
            self.prefix_sums = []
            current_sum = 0
            for num in nums:
                current_sum += num
                self.prefix_sums.append(current_sum)

        def sumRange(self, left:int, right:int) -> int:
             if left == 0:
                return self.prefix_sums[right]
             else : 
                return self.prefix_sums[right] - self.prefix_sums[left - 1]

            

newArray = NumArray([1, 2, 3, 4, 5, 6, 1])
print(newArray.prefix_sums) 
print(newArray.sumRange(0, 2)) 
print(newArray.sumRange(2,5))