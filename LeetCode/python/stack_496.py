def nextGreaterElement(num1, num2):
    stack = []
    next_greater = {}

    for num in num2: 
        while stack and stack[-1] < num:
            smaller = stack.pop()
            next_greater[smaller] = num

        stack.append(num)

    for num in stack: 
        next_greater[num] = -1

    return [next_greater[num] for num in num1]
    
print(nextGreaterElement([4,1,2], [1,3,4,2]))  # [-1,3,-1]