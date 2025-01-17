class MyQueue:

    def __init__(self):
        self.s = []
        

    def push(self, x: int) -> None:
        self.s.append(x)
        for _ in range(len(self.s) - 1):
            self.s.append(self.s.pop(0))
        

    def pop(self) -> int:
        if not self.s:
            return None
        return self.s.pop(-1)
        

    def peek(self) -> int:
        if not self.s:
            return None
        return self.s[-1]
        

    def empty(self) -> bool:
        return len(self.s) == 0

    def display(self):
        print(self.s)

    
myqueue = MyQueue()
myqueue.push(1)
myqueue.push(2)
myqueue.display()
print(myqueue.pop())
myqueue.display()
