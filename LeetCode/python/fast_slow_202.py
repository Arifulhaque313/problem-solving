def happyNum(n):
    def getNext(n):
        total = 0 
        while (n > 0):
            digit = n % 10
            total += digit * digit
            n //= 10

        return total
    
    slow = n 
    fast = getNext(n)

    while fast != 1 and slow != fast: 
        slow = getNext(slow)
        fast = getNext(getNext(fast))

    return fast == 1


print(happyNum(2))