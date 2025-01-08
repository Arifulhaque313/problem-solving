def removeStars(s: str) -> str:
        # stack = []
        # for char in s:
        #     stack = stack[:-1] if char == '*' else stack + [char]
        # return ''.join(stack)

        stack = []
        for char in s:
            if char == '*':
                stack.pop()
            else:
                stack.append(char)
        return ''.join(stack)


print(removeStars("leetcod**e"))
