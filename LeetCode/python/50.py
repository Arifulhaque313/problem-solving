def pow(x,n):
    if n==0:
        return 1

    if n<0:
        return 1/(x * pow(x,-n-1))
        
    if n%2==0:
        return pow(x*x,n/2)

    return x * pow(x*x,(n-1)/2)

print(pow(2, 3))