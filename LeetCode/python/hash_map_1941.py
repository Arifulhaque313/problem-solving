def areOccurrencesEqual(s):
    hashmap = {}
    for i in s:
        if i in hashmap:
            hashmap[i] += 1
        else:
            hashmap[i] = 1


    return len(set(hashmap.values())) == 1        

print(areOccurrencesEqual("vvvvvvvvvvvvvvvvvvv"))