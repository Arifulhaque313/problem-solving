class RecentCounter:
    def __init__(self):
        self.Queue = []

    def ping(self, t):
        self.Queue.append(t)
        while self.Queue[0] < t-3000:
            self.Queue.pop(0)
        
        print(len(self.Queue))
    

recentCall = RecentCounter()
recentCall.ping(1)
recentCall.ping(100)
recentCall.ping(3001)
recentCall.ping(3002)
