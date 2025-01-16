def timeRequiredToBuy(tickets, k):
    time = 0
    
    while tickets[k] > 0: 
        for i in range(len(tickets)):
            if tickets[i] == 0: break
            
            if tickets[i] > 0:
                tickets[i] -=1
                time += 1
    
    return time
        
print(timeRequiredToBuy([2,3,2], 2))
