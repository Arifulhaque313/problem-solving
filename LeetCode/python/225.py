class MyStack:

    def __init__(self):
        self.q = []
        

    def push(self, x: int) -> None:
        self.q.append(x)
        for _ in range(len(self.q) - 1):
            self.q.append(self.q.pop(0))
        

    def pop(self) -> int:
        if not self.q:
            return None
        return self.q.pop(0)
        

    def top(self) -> int:
        if not self.q:
            return None
        return self.q[0]
        

    def empty(self) -> bool:
        return len(self.q) == 0

    def display(self):
        print(self.q)

    
mystack = MyStack()
mystack.push(1)
mystack.push(2)
mystack.display()
print(mystack.pop())
mystack.display()
