def power(n):
    if n == 1:
        return True
    if n % 3 == 0:
        return power(n / 3)
    else:
        return False
    
print(power(27))