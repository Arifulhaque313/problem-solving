def dailyTemperatures(t):
    n = len(t)
    stack = []
    answer = [0]*n

    for i, temp in enumerate(t):
        while stack and temp > t[stack[-1]]:
            pre_day = stack.pop()
            answer[pre_day] = i - pre_day
        stack.append(i)

    return answer

print(dailyTemperatures([73,74,75,71,69,72,76,73]))  # [1,1,4,2,1,1,0,0]