def asteroidCollision(asteroids):
    stack = []
    for i in asteroids:
        while stack and stack[-1] > 0 > i:
            if stack[-1] < abs(i):
                stack.pop()
                continue
            elif stack[-1] == abs(i):
                stack.pop()
            break
        else:
            stack.append(i)

    return stack


result = asteroidCollision([10,2,-5,-12])
print(result)