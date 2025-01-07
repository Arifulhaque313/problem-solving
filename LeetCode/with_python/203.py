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
            print(current.data, end=" -> ")
            current = current.next
        print("None")

def RemoveElements(list1, val):
    dummy = Node(0)
    dummy.next = list1.head
    pre = dummy
    cur = list1.head

    while cur:
        if cur.data == val:
            pre.next = cur.next
        else:
            pre = cur

        cur = cur.next
    list1.head = dummy.next
    return list1
    


linked_list1 = LinkedList()
linked_list1.insert(1)
linked_list1.insert(2)
linked_list1.insert(4)

result = RemoveElements(linked_list1, 4)
result.display()








# Leetcode submission 
"""
class Solution:
    def mergeTwoLists(self, list1: Optional[ListNode], list2: Optional[ListNode]) -> Optional[ListNode]:
        dummy = ListNode(0)
        cur = dummy 

        while list1 and list2 : 
            if list1.val <= list2.val:
                cur.next = list1
                list1, cur = list1.next, list1
            else:
                cur.next = list2
                list2, cur = list2.next, list2
        
        if list1 or list2:
            cur.next = list1 if list1 else list2
        
        return dummy.next
"""