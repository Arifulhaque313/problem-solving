def maxScore(s):
        left = 0
        right = s.count('1')
        maxSum = 0
        for i in range(len(s)-1):
            if s[i] == "0":
                left += 1
            else:
                right -= 1
        
            maxSum = max(maxSum, left+right)

        print(maxSum) 

maxScore("00")