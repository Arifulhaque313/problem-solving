def merge(num1, m, num2, n):
    mindex = m - 1
    nindex = n - 1

    total = m + n - 1

    while nindex >= 0:
        if mindex >= 0 and num1[mindex] > num2[nindex]:
            num1[total] = num1[mindex]
            mindex -= 1
        else:
            num1[total] = num2[nindex]
            nindex -= 1
        total -= 1

    return num1



print(merge([1, 2, 3, 0, 0, 0], 3, [2, 5, 6], 3))