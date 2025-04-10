def maxScore(cardPoints, k):
        n = len(cardPoints)
        
        total = sum(cardPoints[-k:])
        maximum = total
        
        for i in range(k):
            total += cardPoints[i] - cardPoints[n-k+i]
            maximum = max(maximum, total)
            
        return maximum


print(maxScore([1,2,3,4,5,6,1], 3)) 