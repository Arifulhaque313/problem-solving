def lastStoneWeight(stone):
    while len(stone) > 1:
        stone.sort()
        y = stone.pop()
        x = stone.pop()
        if x != y:
            stone.append(y - x)

    return stone[0] if stone else 0

# Example usage:
stones = [2,7,4,1,8,1]
print(lastStoneWeight(stones)) 