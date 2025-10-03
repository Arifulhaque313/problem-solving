def backspaceCompare(s, t):
    def build(string):
        result = []
        for char in string:
            if char != '#':
                result.append(char)
            elif result:
                result.pop()
        return ''.join(result)

    return build(s) == build(t)

# Example usage:
s = "ab#c"
t = "ad#c"
print(backspaceCompare(s, t)) 