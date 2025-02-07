class Node:
    def __init__(self, data):
        self.data = data
        self.next = None

class LinkedList:
    def __init__(self):
        self.head = None

    def insert(self, data):
        new_node = Node(data)
        if not self.head:
            self.head = new_node
        else:
            current = self.head
            while current.next:
                current = current.next
            current.next = new_node

    def display(self):
        current = self.head
        while current:
            print(current.data)
            current = current.next

    def deleteMiddle(self):
        if not self.head or not self.head.next: 
            return self

        slowSprint = self.head
        fastSprint = self.head

        while fastSprint.next and fastSprint.next.next:
            slowSprint = slowSprint.next
            fastSprint = fastSprint.next.next

        slowSprint.next = slowSprint.next.next

        return self



linked_list = LinkedList()
linked_list.insert(1)
linked_list.insert(2)
linked_list.insert(4)


linked_list.deleteMiddle()
linked_list.display()



# Leetcode submission 
"""
class Solution:
    def deleteMiddle(self, head: Optional[ListNode]) -> Optional[ListNode]:
        head = ListNode(0, head)

        slowSprint = head
        fastSprint = head

        while fastSprint.next and fastSprint.next.next:
            slowSprint = slowSprint.next
            fastSprint = fastSprint.next.next

        slowSprint.next = slowSprint.next.next

        return head.next
"""