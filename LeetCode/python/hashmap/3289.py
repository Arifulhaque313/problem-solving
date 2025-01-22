def getsneakyNumbers(nums):
    hashmap = {}
    digitville = []
    for i in nums:
        if i in hashmap:
            hashmap[i] += 1
        else:
            hashmap[i] = 1

    for key, value in hashmap.items():
        if value == 2:
            digitville.append(key)

    return digitville

getsneakyNumbers([0,1,1,0])