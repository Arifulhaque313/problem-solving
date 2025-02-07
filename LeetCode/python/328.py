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

    def oddEvenList(self):
        if not self.head or not self.head.next: 
            return self

        odd = self.head
        even = self.head.next
        evenHead = even

        while even and even.next:
            odd.next = odd.next.next
            odd = odd.next

            even.next = even.next.next
            even = even.next

        odd.next = evenHead
        return self 



linked_list = LinkedList()
linked_list.insert(1)
linked_list.insert(2)
linked_list.insert(4)


linked_list.oddEvenList()
linked_list.display()



# Leetcode submission 
"""
class Solution:
    def oddEvenList(self, head: Optional[ListNode]) -> Optional[ListNode]:
        if not head or not head.next: 
            return head

        odd = head
        even = head.next
        evenHead = even

        while even and even.next:
            odd.next = odd.next.next
            odd = odd.next

            even.next = even.next.next
            even = even.next

        odd.next = evenHead
        
        return head
"""