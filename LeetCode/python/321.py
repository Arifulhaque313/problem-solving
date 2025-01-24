def powerOfTwo(n):
    if n == 1:
        return True
    elif n < 1 or n % 2 != 0:
        return False
    else:
        return powerOfTwo(int(n/2))
    
print(powerOfTwo(16))