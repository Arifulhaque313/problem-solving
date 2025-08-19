def decodeString(s):
    stack = []
    for i in range(len(s)):
        if s[i] != "]":
            stack.append(s[i])
        else:
            substring = ""
            while stack[-1] != "[":
                substring = stack.pop() + substring
            stack.pop()

            c = ""
            while stack and stack[-1].isdigit():
                c = stack.pop() + c
            stack.append(int(c) * substring)
    
    return "".join(stack)



result = decodeString("3[a2[c]]")
print(result)