def powerOfFour(n):
    if n == 1:
        return True
    elif n < 1 or n % 2 != 0:
        return False
    else:
        return powerOfFour(int(n/2))
    
print(powerOfFour(16))