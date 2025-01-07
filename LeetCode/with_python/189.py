def rotate(nums, k):
    n = len(nums)-1

    for i in range(k):
        last_data = nums.pop()
        nums.insert(0,last_data)
    
    return nums
    

rotate([1,2,3,4,5,6,7], 3)

